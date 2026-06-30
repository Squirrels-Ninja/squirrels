<?php
defined( 'ABSPATH' ) || exit;
/**
 * WooCommerce template wrapper.
 *
 * @package Squirrels
 */
get_header();
?>
<div class="squirrels-container">
    <div class="squirrels-content-area squirrels-woocommerce">
        <main id="main" class="squirrels-main">
            <?php woocommerce_content(); ?>
        </main>
    </div>
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
