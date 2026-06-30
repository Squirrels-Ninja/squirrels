<?php
/**
 * Squirrels Demo Importer.
 *
 * Registers the admin page and enqueues assets for one-click demo import.
 *
 * @package Squirrels
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

require_once SQUIRRELS_DIR . '/inc/demo-import/ajax-handlers.php';

/**
 * Add the Acorn submenu under Appearance.
 */
function squirrels_demo_import_menu() {
    add_theme_page(
        esc_html__( 'Acorn – Starter Sites', 'squirrels' ),
        esc_html__( 'Acorn', 'squirrels' ),
        'manage_options',
        'squirrels-acorn',
        'squirrels_demo_import_page'
    );
}
add_action( 'admin_menu', 'squirrels_demo_import_menu' );

/**
 * Enqueue admin assets for the demo import page.
 */
function squirrels_demo_import_assets( $hook ) {
    if ( 'appearance_page_squirrels-acorn' !== $hook ) {
        return;
    }
    wp_enqueue_style(
        'squirrels-acorn',
        SQUIRRELS_URI . '/assets/css/demo-import.css',
        array(),
        SQUIRRELS_VERSION
    );
    wp_enqueue_script(
        'squirrels-acorn',
        SQUIRRELS_URI . '/assets/js/demo-import.js',
        array( 'jquery' ),
        SQUIRRELS_VERSION,
        true
    );
    wp_localize_script( 'squirrels-acorn', 'squirrelsAcorn', array(
        'ajaxUrl' => admin_url( 'admin-ajax.php' ),
        'nonce'   => wp_create_nonce( 'squirrels_demo_import' ),
        'i18n'    => array(
            'importing'  => esc_html__( 'Importing…', 'squirrels' ),
            'imported'   => esc_html__( 'Imported!', 'squirrels' ),
            'error'      => esc_html__( 'Import failed. Please try again.', 'squirrels' ),
            'confirm'    => esc_html__( 'This will import demo content. Continue?', 'squirrels' ),
        ),
    ) );
}
add_action( 'admin_enqueue_scripts', 'squirrels_demo_import_assets' );

/**
 * Returns the list of available demo packs.
 *
 * @return array[]
 */
function squirrels_get_demo_packs() {
    $demos_dir = SQUIRRELS_DIR . '/inc/demo-import/demos/';
    return array(
        array(
            'id'          => 'classic-store',
            'name'        => esc_html__( 'Classic Store', 'squirrels' ),
            'description' => esc_html__( 'A clean product-focused layout with shop pages, featured products, and a newsletter section.', 'squirrels' ),
            'file'        => $demos_dir . 'classic-store.json',
        ),
        array(
            'id'          => 'minimal-blog',
            'name'        => esc_html__( 'Minimal Blog', 'squirrels' ),
            'description' => esc_html__( 'A typography-first blog layout with sidebar, categories, and a clean reading experience.', 'squirrels' ),
            'file'        => $demos_dir . 'minimal-blog.json',
        ),
        array(
            'id'          => 'creative-portfolio',
            'name'        => esc_html__( 'Creative Portfolio', 'squirrels' ),
            'description' => esc_html__( 'A full-width portfolio layout with project grids and a bold hero section.', 'squirrels' ),
            'file'        => $demos_dir . 'creative-portfolio.json',
        ),
    );
}

/**
 * Render the demo import admin page.
 */
function squirrels_demo_import_page() {
    if ( ! current_user_can( 'manage_options' ) ) {
        return;
    }
    $demos = squirrels_get_demo_packs();
    ?>
    <div class="wrap squirrels-acorn-wrap">
        <h1><?php esc_html_e( 'Acorn – Starter Sites', 'squirrels' ); ?></h1>
        <p class="description">
            <?php esc_html_e( 'Choose a demo pack to import sample pages, settings, and menus. Existing content will not be deleted.', 'squirrels' ); ?>
        </p>
        <div class="squirrels-demo-grid">
            <?php foreach ( $demos as $demo ) : ?>
            <div class="squirrels-demo-card">
                <div class="squirrels-demo-card-body">
                    <h2><?php echo esc_html( $demo['name'] ); ?></h2>
                    <p><?php echo esc_html( $demo['description'] ); ?></p>
                </div>
                <div class="squirrels-demo-card-footer">
                    <button
                        type="button"
                        class="button button-primary squirrels-import-btn"
                        data-demo="<?php echo esc_attr( $demo['id'] ); ?>"
                    >
                        <?php esc_html_e( 'Import', 'squirrels' ); ?>
                    </button>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <?php
}
