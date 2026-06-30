/* Squirrels — Demo Import JS */
( function ( $ ) {
    'use strict';

    $( '.squirrels-import-btn' ).on( 'click', function () {
        if ( ! window.confirm( squirrelsAcorn.i18n.confirm ) ) {
            return;
        }

        var $btn    = $( this );
        var $card   = $btn.closest( '.squirrels-demo-card' );
        var demoId  = $btn.data( 'demo' );
        var $notice = $card.find( '.squirrels-import-notice' );

        if ( ! $notice.length ) {
            $notice = $( '<div class="squirrels-import-notice"></div>' ).insertAfter( $btn );
        }

        $btn.addClass( 'is-importing' ).text( squirrelsAcorn.i18n.importing );
        $notice.removeClass( 'success error' ).hide();

        $.post( squirrelsAcorn.ajaxUrl, {
            action:   'squirrels_run_demo_import',
            nonce:    squirrelsAcorn.nonce,
            demo_id:  demoId,
        } )
        .done( function ( response ) {
            if ( response.success ) {
                $notice.addClass( 'success' ).text( squirrelsAcorn.i18n.imported );
                $btn.text( squirrelsAcorn.i18n.imported ).prop( 'disabled', true );
            } else {
                $notice.addClass( 'error' ).text( response.data.message || squirrelsAcorn.i18n.error );
                $btn.removeClass( 'is-importing' ).text( 'Import' );
            }
        } )
        .fail( function () {
            $notice.addClass( 'error' ).text( squirrelsAcorn.i18n.error );
            $btn.removeClass( 'is-importing' ).text( 'Import' );
        } );
    } );

} )( jQuery );
