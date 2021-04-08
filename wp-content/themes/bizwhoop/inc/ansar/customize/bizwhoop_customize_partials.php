<?php
/** 
 * Bizwhoop Customizer partials.
 *
 * @package Bizwhoop
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'Bizwhoop_Customizer_Partials' ) ) {

	/**
	 * Customizer Partials.
	 */
	class Bizwhoop_Customizer_Partials {

		/**
		 * Instance.
		 *
		 * @access private
		 * @var object
		 */
		private static $instance;

		/**
		 * Initiator.
		 */
		public static function get_instance() {
			if ( ! isset( self::$instance ) ) {
				self::$instance = new self();
			}

			return self::$instance;
		}

		// site title
		public static function customize_partial_blogname() {
			return get_bloginfo( 'name' );
		}

		// Site tagline
		public static function customize_partial_blogdescription() {
			return get_bloginfo( 'description' );
		}	

		// Header info one
		public static function customize_partial_bizwhoop_header_info_one() {
			return get_theme_mod( 'bizwhoop_head_info_one' );
		}

		// Header info one title
		public static function customize_partial_bizwhoop_header_widget_one_title() {
			return get_theme_mod( 'bizwhoop_header_widget_one_title' );
		}

		// Header info one decsription
		public static function customize_partial_bizwhoop_header_widget_one_description() {
			return get_theme_mod( 'bizwhoop_header_widget_one_description' );
		}

		// Header info two title
		public static function customize_partial_bizwhoop_header_widget_two_title() {
			return get_theme_mod( 'bizwhoop_header_widget_two_title' );
		}

		// Header info two decsription
		public static function customize_partial_bizwhoop_header_widget_two_description() {
			return get_theme_mod( 'bizwhoop_header_widget_two_description' );
		}


		// Header info three title
		public static function customize_partial_bizwhoop_header_widget_three_title() {
			return get_theme_mod( 'bizwhoop_header_widget_three_title' );
		}

		// Header info three decsription
		public static function customize_partial_bizwhoop_header_widget_three_description() {
			return get_theme_mod( 'bizwhoop_header_widget_three_description' );
		}

		// Header info four lable
		public static function customize_partial_bizwhoop_header_widget_four_label() {
			return get_theme_mod( 'bizwhoop_header_widget_four_label' );
		}


		
		
		
		
		
		
		




	}
}

Bizwhoop_Customizer_Partials::get_instance();