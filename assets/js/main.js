/* Squirrels — main.js */
( function ( $ ) {
    'use strict';

    // Mobile menu toggle.
    $( '.squirrels-menu-toggle' ).on( 'click', function () {
        var $nav = $( '.squirrels-main-navigation' );
        var expanded = $( this ).attr( 'aria-expanded' ) === 'true';
        $( this ).attr( 'aria-expanded', String( ! expanded ) );
        $nav.toggleClass( 'toggled' );
    } );

} )( jQuery );
