/**
 * customizer.js
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {
	// Site title and description.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a' ).text( to );
		} );
	} );
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).text( to );
		} );
	} );


	wp.customize( 'bizwhoop_head_info_one', function( value ) {
		value.bind( function( to ) {
			$( '.bizwhoop-header-box-icon .one i' ).text( to );
		} );
	} );


	wp.customize( 'bizwhoop_head_info_two', function( value ) {
		value.bind( function( to ) {
			$( '.bizwhoop-header-box-icon .one h4' ).text( to );
		} );
	} );


	wp.customize( 'bizwhoop_header_widget_one_title', function( value ) {
		value.bind( function( to ) {
			$( '.header-info-one-title h4' ).text( to );
		} );
	} );

	wp.customize( 'bizwhoop_header_widget_one_description', function( value ) {
		value.bind( function( to ) {
			$( '.header-info-one-desc p' ).text( to );
		} );
	} );


	wp.customize( 'bizwhoop_header_widget_two_title', function( value ) {
		value.bind( function( to ) {
			$( '.header-info-two-title h4' ).text( to );
		} );
	} );

	wp.customize( 'bizwhoop_header_widget_two_description', function( value ) {
		value.bind( function( to ) {
			$( '.header-info-two-desc p' ).text( to );
		} );
	} );


	wp.customize( 'bizwhoop_header_widget_three_title', function( value ) {
		value.bind( function( to ) {
			$( '.header-info-three-title h4' ).text( to );
		} );
	} );

	wp.customize( 'bizwhoop_header_widget_three_description', function( value ) {
		value.bind( function( to ) {
			$( '.header-info-three-desc p' ).text( to );
		} );
	} );

	wp.customize( 'bizwhoop_header_widget_four_label', function( value ) {
		value.bind( function( to ) {
			$( '.bizwhoop-header-box a' ).text( to );
		} );
	} );



	// Header text color.
	wp.c
	ustomize( 'header_textcolor', function( value ) {
		value.bind( function( to ) {
			if ( 'blank' === to ) {
				$( '.site-title a, .site-description' ).css( {
					'clip': 'rect(1px, 1px, 1px, 1px)',
					'position': 'absolute'
				} );
			} else {
				$( '.site-title a, .site-description' ).css( {
					'clip': 'auto',
					'position': 'relative'
				} );
				$( '.site-title a, .site-description' ).css( {
					'color': to
				} );
			}
		} );
	} );
} )( jQuery );
