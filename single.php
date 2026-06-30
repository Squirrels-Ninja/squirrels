<?php
defined( 'ABSPATH' ) || exit;
/**
 * The single post template.
 *
 * @package Squirrels
 */
get_header();
?>
<div class="squirrels-container">
    <div class="squirrels-content-area">
        <main id="main" class="squirrels-main">
        <?php while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'template-parts/content', 'single' ); ?>
            <?php
            the_post_navigation( array(
                'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'squirrels' ) . '</span> <span class="nav-title">%title</span>',
                'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'squirrels' ) . '</span> <span class="nav-title">%title</span>',
            ) );
            ?>
            <?php if ( comments_open() || get_comments_number() ) : ?>
                <?php comments_template(); ?>
            <?php endif; ?>
        <?php endwhile; ?>
        </main>
    </div>
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
