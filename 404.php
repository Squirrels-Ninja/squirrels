<?php
defined( 'ABSPATH' ) || exit;
/**
 * The 404 template.
 *
 * @package Squirrels
 */
get_header();
?>
<div class="squirrels-container">
    <main id="main" class="squirrels-main">
        <section class="squirrels-error-404 not-found">
            <header class="squirrels-page-header">
                <h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'squirrels' ); ?></h1>
            </header>
            <div class="squirrels-page-content">
                <p><?php esc_html_e( 'It looks like nothing was found at this location.', 'squirrels' ); ?></p>
                <?php get_search_form(); ?>
            </div>
        </section>
    </main>
</div>
<?php get_footer(); ?>
