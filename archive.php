<?php
defined( 'ABSPATH' ) || exit;
/**
 * The archive template.
 *
 * @package Squirrels
 */
get_header();
?>
<div class="squirrels-container">
    <div class="squirrels-content-area">
        <main id="main" class="squirrels-main">
        <?php if ( have_posts() ) : ?>
            <header class="squirrels-page-header">
                <?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
                <?php the_archive_description( '<div class="archive-description">', '</div>' ); ?>
            </header>
            <?php while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'template-parts/content', get_post_type() ); ?>
            <?php endwhile; ?>
            <?php squirrels_posts_navigation(); ?>
        <?php else : ?>
            <?php get_template_part( 'template-parts/content', 'none' ); ?>
        <?php endif; ?>
        </main>
    </div>
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
