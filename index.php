<?php
defined( 'ABSPATH' ) || exit;
/**
 * The main template file.
 *
 * @package Squirrels
 */

get_header();
?>
<div class="squirrels-container">
    <div class="squirrels-content-area">
        <main id="main" class="squirrels-main">
        <?php if ( have_posts() ) : ?>
            <?php if ( is_home() && ! is_front_page() ) : ?>
                <header><h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1></header>
            <?php endif; ?>
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
