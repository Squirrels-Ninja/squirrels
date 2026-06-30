<?php
defined( 'ABSPATH' ) || exit;
/**
 * The sidebar template.
 *
 * @package Squirrels
 */
if ( ! is_active_sidebar( 'sidebar-1' ) ) {
    return;
}
?>
<aside id="secondary" class="squirrels-widget-area">
    <?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside>
