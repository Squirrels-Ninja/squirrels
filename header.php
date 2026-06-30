<?php
defined( 'ABSPATH' ) || exit;
/**
 * The header template.
 *
 * @package Squirrels
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="squirrels-site">
    <a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'squirrels' ); ?></a>
    <header id="masthead" class="squirrels-header">
        <div class="squirrels-container">
            <div class="squirrels-site-branding">
                <?php the_custom_logo(); ?>
                <?php if ( is_front_page() && is_home() ) : ?>
                    <h1 class="squirrels-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
                <?php else : ?>
                    <p class="squirrels-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></p>
                <?php endif; ?>
                <?php
                $description = get_bloginfo( 'description', 'display' );
                if ( $description || is_customize_preview() ) :
                ?>
                <p class="squirrels-site-description"><?php echo esc_html( $description ); ?></p>
                <?php endif; ?>
            </div>
            <nav id="site-navigation" class="squirrels-main-navigation" aria-label="<?php esc_attr_e( 'Primary Navigation', 'squirrels' ); ?>">
                <button class="squirrels-menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                    <?php esc_html_e( 'Menu', 'squirrels' ); ?>
                </button>
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'menu_id'        => 'primary-menu',
                    'container'      => false,
                ) );
                ?>
            </nav>
        </div>
    </header>
    <div id="content" class="squirrels-site-content">
