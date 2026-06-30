<?php
defined( 'ABSPATH' ) || exit;
/**
 * The page template.
 *
 * @package Squirrels
 */
get_header();
?>
<div class="squirrels-container">
    <div class="squirrels-content-area">
        <main id="main" class="squirrels-main">
        <?php while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'template-parts/content', 'page' ); ?>
            <?php if ( comments_open() || get_comments_number() ) : ?>
                <?php comments_template(); ?>
            <?php endif; ?>
        <?php endwhile; ?>
        </main>
    </div>
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
