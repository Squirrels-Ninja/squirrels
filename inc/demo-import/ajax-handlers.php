<?php
/**
 * Squirrels Demo Import — AJAX Handlers.
 *
 * @package Squirrels
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

add_action( 'wp_ajax_squirrels_run_demo_import', 'squirrels_ajax_run_demo_import' );

/**
 * Handle the demo import AJAX request.
 */
function squirrels_ajax_run_demo_import() {
    check_ajax_referer( 'squirrels_demo_import', 'nonce' );

    if ( ! current_user_can( 'manage_options' ) ) {
        wp_send_json_error( array( 'message' => esc_html__( 'Permission denied.', 'squirrels' ) ), 403 );
    }

    $demo_id = isset( $_POST['demo_id'] ) ? sanitize_key( $_POST['demo_id'] ) : '';
    if ( empty( $demo_id ) ) {
        wp_send_json_error( array( 'message' => esc_html__( 'No demo specified.', 'squirrels' ) ), 400 );
    }

    $demos = squirrels_get_demo_packs();
    $demo  = null;
    foreach ( $demos as $d ) {
        if ( $d['id'] === $demo_id ) {
            $demo = $d;
            break;
        }
    }

    if ( null === $demo ) {
        wp_send_json_error( array( 'message' => esc_html__( 'Unknown demo pack.', 'squirrels' ) ), 400 );
    }

    // Path-traversal guard.
    $real_file  = realpath( $demo['file'] );
    $real_demos = realpath( SQUIRRELS_DIR . '/inc/demo-import/demos/' );
    if ( false === $real_file || strpos( $real_file, $real_demos ) !== 0 ) {
        wp_send_json_error( array( 'message' => esc_html__( 'Invalid demo file path.', 'squirrels' ) ), 400 );
    }

    $json = file_get_contents( $real_file ); // phpcs:ignore WordPress.WP.AlternativeFunctions.file_get_contents_file_get_contents
    if ( false === $json ) {
        wp_send_json_error( array( 'message' => esc_html__( 'Could not read demo file.', 'squirrels' ) ), 500 );
    }

    $data = json_decode( $json, true );
    if ( null === $data ) {
        wp_send_json_error( array( 'message' => esc_html__( 'Demo file is not valid JSON.', 'squirrels' ) ), 500 );
    }

    $result = squirrels_import_demo_data( $demo_id, $data );

    if ( is_wp_error( $result ) ) {
        wp_send_json_error( array( 'message' => $result->get_error_message() ) );
    }

    wp_send_json_success( array( 'message' => esc_html__( 'Demo imported successfully.', 'squirrels' ) ) );
}

/**
 * Import the demo data array into WordPress.
 *
 * Idempotent: skips pages and settings already imported for this demo slug.
 *
 * @param string $demo_id  The demo identifier slug.
 * @param array  $data     Decoded demo JSON.
 * @return true|WP_Error
 */
function squirrels_import_demo_data( $demo_id, array $data ) {
    $meta_key = '_squirrels_acorn_demo';

    // Import pages.
    if ( ! empty( $data['pages'] ) && is_array( $data['pages'] ) ) {
        foreach ( $data['pages'] as $page_data ) {
            $slug = sanitize_title( $page_data['slug'] ?? $page_data['title'] ?? '' );
            if ( empty( $slug ) ) {
                continue;
            }

            // Skip if already imported (idempotent).
            $existing = get_posts( array(
                'post_type'   => 'page',
                'name'        => $slug,
                'post_status' => 'any',
                'numberposts' => 1,
                'meta_key'    => $meta_key,
                'meta_value'  => $demo_id,
            ) );
            if ( ! empty( $existing ) ) {
                continue;
            }

            $post_id = wp_insert_post( array(
                'post_title'   => sanitize_text_field( $page_data['title'] ?? '' ),
                'post_name'    => $slug,
                'post_content' => wp_kses_post( $page_data['content'] ?? '' ),
                'post_status'  => 'publish',
                'post_type'    => 'page',
            ), true );

            if ( is_wp_error( $post_id ) ) {
                return $post_id;
            }

            update_post_meta( $post_id, $meta_key, $demo_id );

            // Set front page if flagged.
            if ( ! empty( $page_data['front_page'] ) ) {
                update_option( 'show_on_front', 'page' );
                update_option( 'page_on_front', $post_id );
            }
        }
    }

    // Import theme mods.
    if ( ! empty( $data['theme_mods'] ) && is_array( $data['theme_mods'] ) ) {
        foreach ( $data['theme_mods'] as $mod_key => $mod_value ) {
            $safe_key = sanitize_key( $mod_key );
            // Only allow known squirrels_ mods.
            if ( strpos( $safe_key, 'squirrels_' ) !== 0 ) {
                continue;
            }
            set_theme_mod( $safe_key, $mod_value );
        }
    }

    return true;
}
