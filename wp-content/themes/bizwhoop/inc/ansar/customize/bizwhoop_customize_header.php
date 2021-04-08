<?php
function bizwhoop_header_setting( $wp_customize ) {
/* Header Section */
	$wp_customize->add_panel( 'header_options', array(
		'priority' => 150,
		'capability' => 'edit_theme_options',
		'title' => __('Header settings', 'bizwhoop'),
	) );
	
	$wp_customize->add_section( 'header_contact' , array(
		'title' => __('Header Contact Info', 'bizwhoop'),
		'panel' => 'header_options',
   	) );
	
	$wp_customize->add_setting(
		'bizwhoop_topbar_enable', array(
        'default'        => 'true',
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'bizwhoop_topbar_enable', array(
        'label'   => __('Hide / Show Section', 'bizwhoop'),
        'section' => 'header_contact',
        'type'    => 'radio',
        'choices'=>array('true'=>'Show','false'=>'Hide'),
    ) );

    $wp_customize->add_setting(
		'bizwhoop_head_info_one', array(
        'capability' => 'edit_theme_options',
		'default'=> '<li><a><i class="fa fa-phone "></i>9876543210</a></li>',
		'sanitize_callback' => 'bizwhoop_header_info_sanitize_text',
    ) );
    $wp_customize->add_control( 'bizwhoop_head_info_one', array(
        'label' => __('Contact Number', 'bizwhoop'),
        'section' => 'header_contact',
        'type' => 'textarea',
    ) );
	
	$wp_customize->add_setting(
		'bizwhoop_head_info_two', array(
        'capability' => 'edit_theme_options',
		'default' => '<li><a href="mailto:info@themeansar.com" title="Mail Me"><i class="fa fa-envelope"></i> info@themeansar.com</a></li>',
		'sanitize_callback' => 'bizwhoop_header_info_sanitize_text',
    ) );
    $wp_customize->add_control( 'bizwhoop_head_info_two', array(
        'label' => __('Email', 'bizwhoop'),
        'section' => 'header_contact',
        'type' => 'textarea',
    ) );
	
	// add Header widget one Setting

    $wp_customize->add_section( 'header_widget_one' , array(
		'title' => __('Header Widget One Setting', 'bizwhoop'),
		'panel' => 'header_options',
		'priority'    => 600,
   	) );

   	$wp_customize->add_setting(
    	'bizwhoop_header_widget_one_icon', array(
        'capability'     => 'edit_theme_options',
		'default' => 'fa fa-phone',
        'sanitize_callback' => 'sanitize_text_field',
    ) );  
    $wp_customize->add_control( 
        'bizwhoop_header_widget_one_icon', array(
        'label' => __('Icon','bizwhoop'),
        'section' => 'header_widget_one',
        'type' => 'text',
    ) );

    $wp_customize->add_setting(
        'bizwhoop_header_widget_one_title', array(
        'capability'     => 'edit_theme_options',
		'default' => '+ 007 548 58 5400',
        'sanitize_callback' => 'sanitize_text_field',
    ) );  
    $wp_customize->add_control( 
        'bizwhoop_header_widget_one_title',array(
        'label'   => __('Title','bizwhoop'),
        'section' => 'header_widget_one',
        'type' => 'text',
    ) );

    $wp_customize->add_setting(
        'bizwhoop_header_widget_one_description', array(
        'capability' => 'edit_theme_options',
		'default' => 'Hot Line Number',
		'sanitize_callback' => 'sanitize_text_field',
    ) );  
    $wp_customize->add_control( 
        'bizwhoop_header_widget_one_description', array(
        'label' => __('Description','bizwhoop'),
        'section' => 'header_widget_one',
        'type' => 'textarea',
    ) );

    // add Header widget Two Setting
    
    $wp_customize->add_section( 'header_widget_two' , array(
		'title' => __('Header Widget Two Setting', 'bizwhoop'),
		'panel' => 'header_options',
		'priority'    => 620,
   	) );

   	$wp_customize->add_setting(
    	'bizwhoop_header_widget_two_icon', array(
		'capability'     => 'edit_theme_options',
		'default' => 'fa fa-map-marker',
        'sanitize_callback' => 'sanitize_text_field',
    ) );  
    $wp_customize->add_control( 
        'bizwhoop_header_widget_two_icon', array(
        'label' => __('Icon','bizwhoop'),
        'section' => 'header_widget_two',
        'type' => 'text',
    ) );

    $wp_customize->add_setting(
        'bizwhoop_header_widget_two_title', array(
		'capability'     => 'edit_theme_options',
		'default' => '1240 Park Avenue',
        'sanitize_callback' => 'sanitize_text_field',
    ) );  
    $wp_customize->add_control( 
        'bizwhoop_header_widget_two_title',array(
        'label'   => __('Title','bizwhoop'),
        'section' => 'header_widget_two',
        'type' => 'text',
    ) );

    $wp_customize->add_setting(
        'bizwhoop_header_widget_two_description', array(
		'capability' => 'edit_theme_options',
		'default' => 'NYC, USA 256323',
        'sanitize_callback' => 'sanitize_text_field',
    ) );  
    $wp_customize->add_control( 
        'bizwhoop_header_widget_two_description', array(
        'label' => __('Description','bizwhoop'),
        'section' => 'header_widget_two',
        'type' => 'textarea',
    ) );

    // add Header widget Three Setting
    
    $wp_customize->add_section( 'header_widget_three' , array(
		'title' => __('Header Widget Three Setting', 'bizwhoop'),
		'panel' => 'header_options',
		'priority'    => 620,
   	) );

   	$wp_customize->add_setting(
    	'bizwhoop_header_widget_three_icon', array(
		'capability'     => 'edit_theme_options',
		'default' => 'fa fa-clock-o',
        'sanitize_callback' => 'sanitize_text_field',
        ) );  
    $wp_customize->add_control( 
        'bizwhoop_header_widget_three_icon', array(
        'label' => __('Icon','bizwhoop'),
        'section' => 'header_widget_three',
        'type' => 'text',
    ) );

    $wp_customize->add_setting(
        'bizwhoop_header_widget_three_title', array(
		'capability'     => 'edit_theme_options',
		'default' => '7:30 AM - 7:30 PM',
        'sanitize_callback' => 'sanitize_text_field',
    ) );  
    $wp_customize->add_control( 
        'bizwhoop_header_widget_three_title',array(
        'label'   => __('Title','bizwhoop'),
        'section' => 'header_widget_three',
        'type' => 'text',
    ) );

    $wp_customize->add_setting(
        'bizwhoop_header_widget_three_description', array(
        'capability' => 'edit_theme_options',
		'default' => 'Monday to Saturday',
        'sanitize_callback' => 'sanitize_text_field',
    ) );  
    $wp_customize->add_control( 
        'bizwhoop_header_widget_three_description', array(
        'label' => __('Description','bizwhoop'),
        'section' => 'header_widget_three',
        'type' => 'textarea',
    ) );

    // add Header widget Three Setting
    
    $wp_customize->add_section( 'header_widget_four' , array(
        'title' => __('Header Widget Four Setting', 'bizwhoop'),
        'panel' => 'header_options',
        'priority'    => 620,
    ) );

    $wp_customize->add_setting(
        'bizwhoop_header_widget_four_label', array(
		'capability'     => 'edit_theme_options',
        'default' => 'Get Quote',
        'sanitize_callback' => 'sanitize_text_field',
    ) );  
    $wp_customize->add_control( 
        'bizwhoop_header_widget_four_label', array(
        'label' => __('Button Text','bizwhoop'),
        'section' => 'header_widget_four',
        'type' => 'text',
    ) );

    $wp_customize->add_setting(
        'bizwhoop_header_widget_four_link', array(
		'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw',
        'default' => '#',
    ) );  
    $wp_customize->add_control( 
        'bizwhoop_header_widget_four_link',array(
        'label'   => __('Button Link','bizwhoop'),
        'section' => 'header_widget_four',
        'type' => 'text',
    ) );

    $wp_customize->add_setting(
        'bizwhoop_header_widget_four_target', array(
		'capability' => 'edit_theme_options',
        'sanitize_callback' => 'bizwhoop_header_sanitize_checkbox',
    ) );  
    $wp_customize->add_control( 
        'bizwhoop_header_widget_four_target', array(
        'label' => __('Open link in a new tab','bizwhoop'),
        'section' => 'header_widget_four',
        'type' => 'checkbox',
    ) );
	
	
	function bizwhoop_header_info_sanitize_text( $input ) {

    return wp_kses_post( force_balance_tags( $input ) );

    }
	
	function bizwhoop_header_sanitize_checkbox( $input ) {
	// Boolean check 
	return ( ( isset( $input ) && true == $input ) ? true : false );
	}

    $selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
    // Header info one
        $wp_customize->selective_refresh->add_partial(
            'bizwhoop_head_info_one',
            array(
                'selector'        => '.info-left .left',
                'render_callback' => array( 'Bizwhoop_Customizer_Partials', 'customize_partial_bizwhoop_header_info_one' ),
            )
        );

        $wp_customize->selective_refresh->add_partial(
            'bizwhoop_head_info_two',
            array(
                'selector'        => '.info-left .right',
                'render_callback' => array( 'Bizwhoop_Customizer_Partials', 'customize_partial_bizwhoop_header_info_two' ),
            )
        );

        

        $wp_customize->selective_refresh->add_partial(
            'bizwhoop_header_widget_one_title',
            array(
                'selector'        => '.header-info-one-title h4' ,
                'render_callback' => array( 'Bizwhoop_Customizer_Partials', 'customize_partial_bizwhoop_header_widget_one_title' ),
            )
        );

        $wp_customize->selective_refresh->add_partial(
            'bizwhoop_header_widget_one_description',
            array(
                'selector'        => '.header-info-one-desc p',
                'render_callback' => array( 'Bizwhoop_Customizer_Partials', 'customize_partial_bizwhoop_header_widget_one_description' ),
            )
        );

        

        $wp_customize->selective_refresh->add_partial(
            'bizwhoop_header_widget_two_title',
            array(
                'selector'        => '.header-info-two-title h4',
                'render_callback' => array( 'Bizwhoop_Customizer_Partials', 'customize_partial_bizwhoop_header_widget_two_title' ),
            )
        );

        $wp_customize->selective_refresh->add_partial(
            'bizwhoop_header_widget_two_description',
            array(
                'selector'        => '.header-info-two-desc p',
                'render_callback' => array( 'Bizwhoop_Customizer_Partials', 'customize_partial_bizwhoop_header_widget_two_description' ),
            )
        );


        $wp_customize->selective_refresh->add_partial(
            'bizwhoop_header_widget_three_title',
            array(
                'selector'        => '.header-info-three-title h4',
                'render_callback' => array( 'Bizwhoop_Customizer_Partials', 'customize_partial_bizwhoop_header_widget_three_title' ),
            )
        );

        $wp_customize->selective_refresh->add_partial(
            'bizwhoop_header_widget_three_description',
            array(
                'selector'        => '.header-info-three-desc p',
                'render_callback' => array( 'Bizwhoop_Customizer_Partials', 'customize_partial_bizwhoop_header_widget_three_description' ),
            )
        );

        $wp_customize->selective_refresh->add_partial(
            'bizwhoop_header_widget_four_label',
            array(
                'selector'        => '.bizwhoop-header-box a',
                'render_callback' => array( 'Bizwhoop_Customizer_Partials', 'customize_partial_bizwhoop_header_widget_four_label' ),
            )
        );

        

	
	}
	add_action( 'customize_register', 'bizwhoop_header_setting' );
	?>