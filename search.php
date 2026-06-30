<?php
defined( 'ABSPATH' ) || exit;
/**
 * The search results template.
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
                <h1 class="page-title">
                    <?php
                    /* translators: %s: search query. */
                    printf( esc_html__( 'Search Results for: %s', 'squirrels' ), '<span>' . esc_html( get_search_query() ) . '</span>' );
                    ?>
                </h1>
            </header>
            <?php while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'template-parts/content', 'search' ); ?>
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
