<?php
defined( 'ABSPATH' ) || exit;
/**
 * Template part for displaying page content.
 *
 * @package Squirrels
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'squirrels-post' ); ?>>
    <header class="squirrels-entry-header">
        <?php the_title( '<h1 class="squirrels-entry-title">', '</h1>' ); ?>
    </header>
    <?php squirrels_post_thumbnail(); ?>
    <div class="squirrels-entry-content">
        <?php
        the_content();
        wp_link_pages( array(
            'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'squirrels' ),
            'after'  => '</div>',
        ) );
        ?>
    </div>
</article>
