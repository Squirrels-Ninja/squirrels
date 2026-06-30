<?php
defined( 'ABSPATH' ) || exit;
/**
 * Custom template tags for Squirrels.
 *
 * @package Squirrels
 */

if ( ! function_exists( 'squirrels_posted_on' ) ) {
    function squirrels_posted_on() {
        $time_string = '<time class="squirrels-entry-date published updated" datetime="%1$s">%2$s</time>';
        if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
            $time_string = '<time class="squirrels-entry-date published" datetime="%1$s">%2$s</time>'
                . '<time class="squirrels-updated" datetime="%3$s">%4$s</time>';
        }
        $time_string = sprintf( $time_string,
            esc_attr( get_the_date( DATE_W3C ) ),
            esc_html( get_the_date() ),
            esc_attr( get_the_modified_date( DATE_W3C ) ),
            esc_html( get_the_modified_date() )
        );
        echo '<span class="squirrels-posted-on"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a></span>';
        echo '<span class="squirrels-byline"> ' . esc_html__( 'by', 'squirrels' ) . ' <span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span></span>';
    }
}

if ( ! function_exists( 'squirrels_entry_footer' ) ) {
    function squirrels_entry_footer() {
        if ( 'post' === get_post_type() ) {
            $cats = get_the_category_list( esc_html__( ', ', 'squirrels' ) );
            if ( $cats ) {
                echo '<span class="squirrels-cat-links">' . $cats . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
            }
            $tags = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'squirrels' ) );
            if ( $tags ) {
                echo '<span class="squirrels-tags-links">' . $tags . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
            }
        }
        if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
            echo '<span class="squirrels-comments-link">';
            comments_popup_link( sprintf( wp_kses( __( 'Leave a comment<span class="screen-reader-text"> on %s</span>', 'squirrels' ), array( 'span' => array( 'class' => array() ) ) ), wp_kses_post( get_the_title() ) ) );
            echo '</span>';
        }
        edit_post_link(
            sprintf( wp_kses( __( 'Edit<span class="screen-reader-text"> %s</span>', 'squirrels' ), array( 'span' => array( 'class' => array() ) ) ), wp_kses_post( get_the_title() ) ),
            '<span class="squirrels-edit-link">',
            '</span>'
        );
    }
}

if ( ! function_exists( 'squirrels_post_thumbnail' ) ) {
    function squirrels_post_thumbnail() {
        if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
            return;
        }
        if ( is_singular() ) {
            echo '<div class="squirrels-post-thumbnail">';
            the_post_thumbnail( 'full' );
            echo '</div>';
        } else {
            echo '<div class="squirrels-post-thumbnail">';
            echo '<a href="' . esc_url( get_permalink() ) . '" tabindex="-1" aria-hidden="true">';
            the_post_thumbnail( 'large' );
            echo '</a>';
            echo '</div>';
        }
    }
}

if ( ! function_exists( 'squirrels_posts_navigation' ) ) {
    function squirrels_posts_navigation() {
        the_posts_navigation( array(
            'prev_text' => esc_html__( 'Older posts', 'squirrels' ),
            'next_text' => esc_html__( 'Newer posts', 'squirrels' ),
        ) );
    }
}
