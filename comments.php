<?php
defined( 'ABSPATH' ) || exit;
/**
 * The comments template.
 *
 * @package Squirrels
 */
if ( post_password_required() ) {
    return;
}
?>
<div id="comments" class="squirrels-comments-area">
    <?php if ( have_comments() ) : ?>
        <h2 class="squirrels-comments-title">
            <?php
            $count = get_comments_number();
            if ( '1' === $count ) {
                printf( esc_html__( 'One thought on &ldquo;%1$s&rdquo;', 'squirrels' ), wp_kses_post( get_the_title() ) );
            } else {
                printf(
                    /* translators: 1: comment count number, 2: title. */
                    esc_html( _nx( '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $count, 'comments title', 'squirrels' ) ),
                    number_format_i18n( $count ),
                    wp_kses_post( get_the_title() )
                );
            }
            ?>
        </h2>
        <ol class="squirrels-comment-list">
            <?php
            wp_list_comments( array(
                'style'      => 'ol',
                'short_ping' => true,
            ) );
            ?>
        </ol>
        <?php the_comments_navigation(); ?>
    <?php endif; ?>
    <?php if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
        <p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'squirrels' ); ?></p>
    <?php endif; ?>
    <?php comment_form(); ?>
</div>
