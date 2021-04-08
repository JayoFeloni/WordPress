<?php
function bizwhoop_homepage_setting( $wp_customize ) { 

	/* Option list of all post */  
    $options_pages = array();
    $options_pages_obj = get_pages('posts_per_page=-1');
    $options_pages[''] = __( '— Select —', 'bizwhoop' );
    foreach ( $options_pages_obj as $posts ) {
    	$options_pages[$posts->ID] = $posts->post_title;
    } 

	$service_pages = array();
    $service_pages_obj = get_pages('posts_per_page=-1');
    $service_pages[''] = __( '— Select —', 'bizwhoop' );
    foreach ( $service_pages_obj as $posts ) {
    	$service_pages[$posts->ID] = $posts->post_title;
    } 
	
	
			/* --------------------------------------
            =========================================
            Slider Section
            =========================================
            -----------------------------------------*/ 
            $wp_customize->add_section(
                'bizwhoop_slider_section_settings', array(
                'title' => __('Slider settings','bizwhoop'),
            ) );
            
            
            //Enable slider
            $wp_customize->add_setting(
			'bizwhoop_slider_enable', array(
        	'default'        => 'on',
        	'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
    		) );
		    $wp_customize->add_control( 'bizwhoop_slider_enable', array(
		        'label'   => __('Hide / Show Section', 'bizwhoop'),
		        'settings'   	 => 'bizwhoop_slider_enable',
		        'section' => 'bizwhoop_slider_section_settings',
		        'type'           => 'radio',
		        'choices' => array('on' => __( 'Show', 'bizwhoop' ),'off' => __( 'Hide', 'bizwhoop' )
			)
		    ) );


            
            //Select Post One
            $wp_customize->add_setting('slider_post_one',array(
                'capability'=>'edit_theme_options',
                'sanitize_callback'=>'sanitize_text_field',
            ));
            
            $wp_customize->add_control('slider_post_one',array(
                'label' => __('Select Page','bizwhoop'),
                'section'=>'bizwhoop_slider_section_settings',
                'type'=>'select',
                'choices'=>$options_pages,
            ));
            
            //Select Post Two
            $wp_customize->add_setting('slider_post_two',array(
                'capability'=>'edit_theme_options',
                'sanitize_callback'=>'sanitize_text_field',
            ));
            
            $wp_customize->add_control('slider_post_two',array(
                'label' => __('Select Page','bizwhoop'),
                'section'=>'bizwhoop_slider_section_settings',
                'type'=>'select',
                'choices'=>$options_pages,
            ));
            
            //Select Post Three
            $wp_customize->add_setting('slider_post_three',array(
                'capability'=>'edit_theme_options',
                'sanitize_callback'=>'sanitize_text_field',
            ));
            
            $wp_customize->add_control('slider_post_three',array(
                'label' => __('Select Page','bizwhoop'),
                'section'=>'bizwhoop_slider_section_settings',
                'type'=>'select',
                'choices'=>$options_pages,
            ));
			
		    /* --------------------------------------
		    =========================================
		    Service Section
		    =========================================
		    -----------------------------------------*/  
		    // add section to manage Services
		    $wp_customize->add_section(
		        'bizwhoop_service_section_settings', array(
		        'title' => __('Service settings','bizwhoop'),
		    ) );

            //Enable service
            $wp_customize->add_setting(
			'bizwhoop_service_enable', array(
        	'default'        => 'on',
        	'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
    		) );
		    $wp_customize->add_control( 'bizwhoop_service_enable', array(
		        'label'   => __('Hide / Show Section', 'bizwhoop'),
		        'settings'   	 => 'bizwhoop_service_enable',
		        'section' => 'bizwhoop_service_section_settings',
		        'type'           => 'radio',
		        'choices' => array('on' => __( 'Show', 'bizwhoop' ),'off' => __( 'Hide', 'bizwhoop' )
			)
		    ) );


            //Service Title setting
		   	$wp_customize->add_setting(
                'bizwhoop_service_title', array(
                'capability'     => 'edit_theme_options',
                'sanitize_callback' => 'bizwhoop_homepage_sanitize_text',
            ) );	
            $wp_customize->add_control( 
            	'bizwhoop_service_title',array(
                'label'   => __('Title','bizwhoop'),
                'section' => 'bizwhoop_service_section_settings',
                'type' => 'text',
            ) );

            //Service SubTitle setting
            $wp_customize->add_setting(
                'bizwhoop_service_subtitle', array(
                'capability'     => 'edit_theme_options',
                'sanitize_callback' => 'bizwhoop_homepage_sanitize_text',
            ) );  
            $wp_customize->add_control( 'bizwhoop_service_subtitle', array(
                'label'   => __('Description','bizwhoop'),
                'section' => 'bizwhoop_service_section_settings',
                'type' => 'textarea',
            ) );
			
			
			 //Select Service One
            $wp_customize->add_setting('service_post_one',array(
                'capability'=>'edit_theme_options',
                'sanitize_callback'=>'sanitize_text_field',
            ));
            
            $wp_customize->add_control('service_post_one',array(
                'label' => __('Select Page','bizwhoop'),
                'section'=>'bizwhoop_service_section_settings',
                'type'=>'select',
                'choices'=>$service_pages,
            ));
            
            //Select Post Two
            $wp_customize->add_setting('service_post_two',array(
                'capability'=>'edit_theme_options',
                'sanitize_callback'=>'sanitize_text_field',
            ));
            
            $wp_customize->add_control('service_post_two',array(
                'label' => __('Select Page','bizwhoop'),
                'section'=>'bizwhoop_service_section_settings',
                'type'=>'select',
                'choices'=>$service_pages,
            ));
            
            //Select Post Three
            $wp_customize->add_setting('service_post_three',array(
                'capability'=>'edit_theme_options',
                'sanitize_callback'=>'sanitize_text_field',
            ));
            
            $wp_customize->add_control('service_post_three',array(
                'label' => __('Select Page','bizwhoop'),
                'section'=>'bizwhoop_service_section_settings',
                'type'=>'select',
                'choices'=>$service_pages,
            ));
			
			
			/* --------------------------------------
		    =========================================
		    Callout Section
		    =========================================
		    -----------------------------------------*/
		    // add section to manage Callout
		    $wp_customize->add_section(
		    	'bizwhoop_callout_section_settings', array(
		        'title' => __('Contact callout settings','bizwhoop'),
		    ) );
			
			//Enable callout
            $wp_customize->add_setting(
			'bizwhoop_callout_enable', array(
        	'default'        => 'on',
        	'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
    		) );
		    $wp_customize->add_control( 'bizwhoop_callout_enable', array(
		        'label'   => __('Hide / Show Section', 'bizwhoop'),
		        'settings'   	 => 'bizwhoop_callout_enable',
		        'section' => 'bizwhoop_callout_section_settings',
		        'type'           => 'radio',
		        'choices' => array('on' => __( 'Show', 'bizwhoop' ),'off' => __( 'Hide', 'bizwhoop' )
			)
		    ) );
			
			//Callout Background image
		    $wp_customize->add_setting( 
		    	'bizwhoop_callout_background', array(
		    	'sanitize_callback' => 'esc_url_raw',
		    ) );

		    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 
		    	'bizwhoop_callout_background', array(
		    	'label'    => __( 'Background Image', 'bizwhoop' ),
		    	'section'  => 'bizwhoop_callout_section_settings',
		    	'settings' => 'bizwhoop_callout_background',) 
		    ) );

		   
			// Callout Title Setting
		    $wp_customize->add_setting(
		    	'bizwhoop_callout_title', array(
		        'default' => '',
		        'capability'     => 'edit_theme_options',
		        'sanitize_callback' => 'wp_kses_post',
		    ) );	
		    $wp_customize->add_control( 
		    	'bizwhoop_callout_title', array(
		    	'label'   => __('Title','bizwhoop'),
		    	'section' => 'bizwhoop_callout_section_settings',
		    	'type' => 'text',
		    ) );	

			// Callout Description Setting	    
		    $wp_customize->add_setting(
		    	'bizwhoop_callout_description', array(
		        'default' => '',
		        'capability'     => 'edit_theme_options',
		        'sanitize_callback' => 'bizwhoop_homepage_sanitize_text',
		    ) );	
		    $wp_customize->add_control( 
		    	'bizwhoop_callout_description', array(
		    	'label'   => __('Description','bizwhoop'),
		    	'section' => 'bizwhoop_callout_section_settings',
		    	'type' => 'textarea',
		    ) );	

		    // Callout Button One Label Setting	 
		    $wp_customize->add_setting(
		    	'bizwhoop_callout_button_one_label', array(
		        'default' => '',
		        'capability' => 'edit_theme_options',
		        'sanitize_callback' => 'sanitize_text_field',
		    ) );	
		    $wp_customize->add_control( 
		    	'bizwhoop_callout_button_one_label', array(
		    	'label' => __('Button Text','bizwhoop'),
		    	'section' => 'bizwhoop_callout_section_settings',
		    	'type' => 'text',
		    ) );	

		    //Callout Button One Link Setting	
		    $wp_customize->add_setting(
		    	'bizwhoop_callout_button_one_link', array(
		        'default' => '',
		        'capability' => 'edit_theme_options',
		        'sanitize_callback' => 'sanitize_text_field',
		    ) );	
		    $wp_customize->add_control( 
		    	'bizwhoop_callout_button_one_link',array(
		    	'label' => __('Button Link','bizwhoop'),
		    	'section' => 'bizwhoop_callout_section_settings',
		    	'type' => 'text',
		    ) );	

		    //Callout Button One Target Setting	
		    $wp_customize->add_setting(
		    	'bizwhoop_callout_button_one_target', array(
		        'default' => 'true',
		        'capability' => 'edit_theme_options',
		        'sanitize_callback' => 'sanitize_text_field',
		    ) );	
		    $wp_customize->add_control( 
		    	'bizwhoop_callout_button_one_target',array(
		    	'label' => __('Open link in a new tab','bizwhoop'),
		    	'section' => 'bizwhoop_callout_section_settings',
		    	'type' => 'checkbox',
		    ) );

		    //Callout Button Two Label Setting	
		    $wp_customize->add_setting(
		    	'bizwhoop_callout_button_two_label', array(
		        'default' => '',
		        'capability' => 'edit_theme_options',
		        'sanitize_callback' => 'sanitize_text_field',
		    ) );	
		    $wp_customize->add_control( 
		    	'bizwhoop_callout_button_two_label', array(
		    	'label' => __('Button Text','bizwhoop'),
		    	'section' => 'bizwhoop_callout_section_settings',
		    	'type' => 'text',
		    ) );	

		    //Callout Button Two Link Setting
		    $wp_customize->add_setting(
		    	'bizwhoop_callout_button_two_link', array(
		        'default' => '#',
		        'capability' => 'edit_theme_options',
		        'sanitize_callback' => 'esc_url_raw',
		    ) );	
		    $wp_customize->add_control( 
		    	'bizwhoop_callout_button_two_link', array(
		    	'label' => __('Button Link','bizwhoop'),
		    	'type' => 'text',
		    	'section' => 'bizwhoop_callout_section_settings',
		    ) );	

		    //Callout Button Two Target Setting
		    $wp_customize->add_setting(
		    	'bizwhoop_callout_button_two_target', array(
		        'default' => 'true',
		        'capability' => 'edit_theme_options',
		        'sanitize_callback' => 'sanitize_text_field',
		    ) );	
		    $wp_customize->add_control( 
		    	'bizwhoop_callout_button_two_target', array(
		    	'label' => __('Open link in a new tab','bizwhoop'),
		    	'section' => 'bizwhoop_callout_section_settings',
		    	'type' => 'checkbox',
		    ) );
			
	
			/* --------------------------------------
            =========================================
            Latest News Section
            =========================================
            -----------------------------------------*/
            // add section to manage Latest News
            $wp_customize->add_section(
                'bizwhoop_news_section_settings', array(
                'title' => __('Latest News settings','bizwhoop'),
            ) );
            
            //Latest News Enable / Disable setting
		    $wp_customize->add_setting(
			'bizwhoop_news_enable', array(
        	'default'        => 'on',
        	'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
    		) );
		    $wp_customize->add_control( 'bizwhoop_news_enable', array(
		        'label'   => __('Hide / Show Section', 'bizwhoop'),
		        'settings'   	 => 'bizwhoop_news_enable',
		        'section' => 'bizwhoop_news_section_settings',
		        'type'           => 'radio',
		        'choices' => array('on' => __( 'Show', 'bizwhoop' ),'off' => __( 'Hide', 'bizwhoop' )
			)
		    ) );
			

            // hide meta content
            $wp_customize->add_setting(
                'disable_news_meta', array(
                'default' => false,
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'sanitize_text_field',
            ) );
            $wp_customize->add_control(
                'disable_news_meta', array(
                'label' => __('Hide post meta from News section','bizwhoop'),
                'section' => 'bizwhoop_news_section_settings',
                'type' => 'checkbox',
            ) );

            // Latest News Title Setting
            $wp_customize->add_setting(
                'bizwhoop_news_title', array(
                'default' => '',
                'capability'     => 'edit_theme_options',
                'sanitize_callback' => 'wp_kses_post',
            ) );    
            $wp_customize->add_control( 
                'bizwhoop_news_title',array(
                'label'   => __('Title','bizwhoop'),
                'section' => 'bizwhoop_news_section_settings',
                'type' => 'text',
            ) );

            // Latest News Subtitle Setting
            $wp_customize->add_setting(
                'bizwhoop_news_subtitle', array(
                'default' => '',
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'bizwhoop_homepage_sanitize_text',
            ) );  
            $wp_customize->add_control( 
                'bizwhoop_news_subtitle',array(
                'label'   => __('Description','bizwhoop'),
                'section' => 'bizwhoop_news_section_settings',
                'type' => 'textarea',
            ) );    

            //Select number of latest news on front page
            $wp_customize->add_setting(
                'news_select', array(
                'default' =>'3',
                'sanitize_callback' => 'sanitize_text_field',
            ) );

            $wp_customize->add_control(
                'news_select', array(
                'type' => 'select',
                'label' => __('Select number of Posts','bizwhoop'),
                'section' => 'bizwhoop_news_section_settings',
                'choices' => array('3'=>__('3', 'bizwhoop'),'6' => __('6','bizwhoop'), '9' => __('9','bizwhoop'),'12'=> __('12','bizwhoop'), '15'=> __('15','bizwhoop'),'18'=> __('18','bizwhoop'), '21' =>__('21','bizwhoop')),
            ) );

            
	function bizwhoop_homepage_sanitize_text( $input ) {

    return wp_kses_post( force_balance_tags( $input ) );

	}
	
	
	function bizwhoop_homepage_sanitize_checkbox( $input ) {
	// Boolean check 
	return ( ( isset( $input ) && true == $input ) ? true : false );
	}

	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';	

	if ( isset( $wp_customize->selective_refresh ) ) {
		
		// site title
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title',
				'render_callback' => array( 'Bizwhoop_Customizer_Partials', 'customize_partial_blogname' ),
			)
		);

	    // site tagline
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => array( 'Bizwhoop_Customizer_Partials', 'customize_partial_blogdescription' ),
			)
		);

	}



}
add_action( 'customize_register', 'bizwhoop_homepage_setting' );
?>