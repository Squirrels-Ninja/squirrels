<?php
defined( 'ABSPATH' ) || exit;
/**
 * Template part for displaying posts.
 *
 * @package Squirrels
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'squirrels-post' ); ?>>
    <header class="squirrels-entry-header">
        <?php
        if ( is_singular() ) {
            the_title( '<h1 class="squirrels-entry-title">', '</h1>' );
        } else {
            the_title( '<h2 class="squirrels-entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
        }
        if ( 'post' === get_post_type() ) {
            squirrels_posted_on();
        }
        ?>
    </header>
    <?php squirrels_post_thumbnail(); ?>
    <div class="squirrels-entry-content">
        <?php
        the_content( sprintf(
            wp_kses(
                __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'squirrels' ),
                array( 'span' => array( 'class' => array() ) )
            ),
            wp_kses_post( get_the_title() )
        ) );
        wp_link_pages( array(
            'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'squirrels' ),
            'after'  => '</div>',
        ) );
        ?>
    </div>
    <footer class="squirrels-entry-footer">
        <?php squirrels_entry_footer(); ?>
    </footer>
</article>
