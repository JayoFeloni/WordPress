<?php
function bizwhoop_scripts() {
	
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
	
	wp_enqueue_style( 'bizwhoop-style', get_stylesheet_uri() );

	wp_enqueue_style('bizwhoop_color', get_template_directory_uri() . '/css/colors/default.css');

	wp_enqueue_style('smartmenus',get_template_directory_uri().'/css/jquery.smartmenus.bootstrap.css');

	wp_enqueue_style('carousel',get_template_directory_uri().'/css/owl.carousel.css');
	
	wp_enqueue_style('owl-transitions',get_template_directory_uri().'/css/owl.transitions.css');

	wp_enqueue_style('font-awesome',get_template_directory_uri().'/css/font-awesome.css');

	/* Js script */
    
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array('jquery'));

	wp_enqueue_script('jquery-smartmenus', get_template_directory_uri() . '/js/jquery.smartmenus.js', array('jquery'));

	wp_enqueue_script('jquery-smartmenus-bootstrap', get_template_directory_uri() . '/js/jquery.smartmenus.bootstrap.js', array('jquery'));

	wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/js/owl.carousel.js', array('jquery'));

	wp_enqueue_script('bizwhoop_custom', get_template_directory_uri() . '/js/custom.js', array('jquery'));

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action('wp_enqueue_scripts', 'bizwhoop_scripts');

add_action('admin_head','bizwhoop_inline_css');
function bizwhoop_inline_css(){ ?>

  <style>
  .js-ocdi-gl-item-container .ocdi__gl-item.js-ocdi-gl-item + div {
    display: none !important;
}
  </style>

    <?php
}

/**
 	* Added skip link focus
 	*/
	function bizwhoop_skip_link_focus_fix() {
	?>
	<script>
	/(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())},!1);
	</script>
	<?php
	}
	add_action( 'wp_print_footer_scripts', 'bizwhoop_skip_link_focus_fix' );


	function bizwhoop_customizer_selective_preview() {
	wp_enqueue_script(
		'bizwhoop-customizer-preview', get_template_directory_uri() . '/js/customizer.js', array(
			'jquery',
			'customize-preview',
		), 999, true
	);
}

add_action( 'customize_preview_init', 'bizwhoop_customizer_selective_preview' );
?>