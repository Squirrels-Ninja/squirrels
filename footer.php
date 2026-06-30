<?php
defined( 'ABSPATH' ) || exit;
/**
 * The footer template.
 *
 * @package Squirrels
 */
?>
    </div><!-- #content -->
    <footer id="colophon" class="squirrels-footer">
        <div class="squirrels-container">
            <?php if ( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' ) ) : ?>
            <div class="squirrels-footer-widgets">
                <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
                <div class="squirrels-footer-widget-area"><?php dynamic_sidebar( 'footer-1' ); ?></div>
                <?php endif; ?>
                <?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
                <div class="squirrels-footer-widget-area"><?php dynamic_sidebar( 'footer-2' ); ?></div>
                <?php endif; ?>
                <?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
                <div class="squirrels-footer-widget-area"><?php dynamic_sidebar( 'footer-3' ); ?></div>
                <?php endif; ?>
            </div>
            <?php endif; ?>
            <div class="squirrels-site-info">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
                <span class="sep"> &mdash; </span>
                <?php
                /* translators: %s: WordPress */
                printf( esc_html__( 'Proudly powered by %s', 'squirrels' ), '<a href="https://wordpress.org/">WordPress</a>' );
                ?>
            </div>
        </div>
    </footer>
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>
