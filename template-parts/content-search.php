<?php
defined( 'ABSPATH' ) || exit;
/**
 * Template part for displaying results in search pages.
 *
 * @package Squirrels
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'squirrels-post' ); ?>>
    <header class="squirrels-entry-header">
        <?php the_title( sprintf( '<h2 class="squirrels-entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
        <?php if ( 'post' === get_post_type() ) : ?>
            <div class="squirrels-entry-meta"><?php squirrels_posted_on(); ?></div>
        <?php endif; ?>
    </header>
    <?php squirrels_post_thumbnail(); ?>
    <div class="squirrels-entry-summary">
        <?php the_excerpt(); ?>
    </div>
    <footer class="squirrels-entry-footer">
        <?php squirrels_entry_footer(); ?>
    </footer>
</article>
