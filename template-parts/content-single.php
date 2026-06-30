<?php
defined( 'ABSPATH' ) || exit;
/**
 * Template part for displaying single posts.
 *
 * @package Squirrels
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'squirrels-post' ); ?>>
    <header class="squirrels-entry-header">
        <?php the_title( '<h1 class="squirrels-entry-title">', '</h1>' ); ?>
        <div class="squirrels-entry-meta"><?php squirrels_posted_on(); ?></div>
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
    <footer class="squirrels-entry-footer">
        <?php squirrels_entry_footer(); ?>
    </footer>
</article>
