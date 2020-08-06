<?php
	function md_customize_register($wp_customize){



		/*---------------------------------------------------------------------------------*/
		// Nav Social Media Section
  		$wp_customize->add_section('nav_social_media', array(
			'title'          => __('Navbar Social Media', 'md-studio'),
			'description'    => sprintf( __('Options for MD Theme', 'md-studio')
			),
			'priority'       => 40,
		));

		/*--------------------------- end main section  -------------------------------*/

		  // Facebook URL Setting
			 $wp_customize->add_setting('facebook_url', array(
			   'default'              => _x('http://www.facebook.com', 'md-studio'),
			   'type'                 => 'theme_mod'
			 ));

			 // Facebook URL Control
			 $wp_customize->add_control( 'facebook_url', array(
			   'label'    => __('Facebook URL', 'md-news'),
			   'section'  => 'nav_social_media',
			   'priority' => 3,
			 ));

			 // Instagram URL Setting
			 $wp_customize->add_setting('instagram_url', array(
			   'default'              => _x('http://www.instagram.com', 'md-studio'),
			   'type'                 => 'theme_mod'
			 ));

			 // Instagram URL Control
			 $wp_customize->add_control( 'instagram_url', array(
			   'label'    => __('Instagram URL', 'md-studio'),
			   'section'  => 'nav_social_media',
			   'priority' =>4,
			 ));

			 // Twitter URL Setting
			 $wp_customize->add_setting('twitter_url', array(
			   'default'              => _x('http://www.twitter.com', 'md-studio'),
			   'type'                 => 'theme_mod'
			 ));

			 // Twitter URL Control
			 $wp_customize->add_control( 'twitter_url', array(
			   'label'    => __('Twitter URL', 'md-studio'),
			   'section'  => 'nav_social_media',
			   'priority' =>4,
			 ));

			 // pinterest URL Setting
			 $wp_customize->add_setting('pinterest_p_url', array(
			   'default'              => _x('http://www.pinterest.com', 'md-studio'),
			   'type'                 => 'theme_mod'
			 ));

			 // pinterest URL Control
			 $wp_customize->add_control( 'pinterest_p_url', array(
			   'label'    => __('Pinterest URL', 'md-studio'),
			   'section'  => 'nav_social_media',
			   'priority' =>4,
			 ));

			 // Linkedin URL Setting
			 $wp_customize->add_setting('linkedin_url', array(
			   'default'              => _x('http://www.linkedin.com', 'md-studio'),
			   'type'                 => 'theme_mod'
			 ));

			 // Linkedin URL Control
			 $wp_customize->add_control( 'linkedin_url', array(
			   'label'    => __('LinkedIn URL', 'md-studio'),
			   'section'  => 'nav_social_media',
			   'priority' =>3,
			 ));

			 // Gmail URL Setting
			 $wp_customize->add_setting('gmail_url', array(
			   'default'              => _x('mo3ad@gmail.com', 'md-studio'),
			   'type'                 => 'theme_mod'
			 ));

			 // Gmail URL Control
			 $wp_customize->add_control( 'gmail_url', array(
			   'label'    => __('Gmail URL', 'md-studio'),
			   'section'  => 'nav_social_media',
			   'priority' =>4,
			 ));

			 // Youtube URL Setting
			 $wp_customize->add_setting('youtube_url', array(
			   'default'              => _x('http://www.youtube.com', 'md-studio'),
			   'type'                 => 'theme_mod'
			 ));

			 // Youtube URL Control
			 $wp_customize->add_control( 'youtube_url', array(
			   'label'    => __('YouTube URL', 'md-studio'),
			   'section'  => 'nav_social_media',
			   'priority' =>5,
			 ));

		/*---------------------------------------------------------------------------------*/

		/*---------------------------------------------------------------------------------*/
		// Front-about Section
		$wp_customize->add_section('front_about', array(
			'title'          => __('Homepage About Section', 'md-studio'),
			'description'    => sprintf( __('Options for about section photo and texts', 'md-studio')
			),
			'priority'       => 50
		));

		/*--------------------------- end main section  -------------------------------*/
		// Add Settings
		$wp_customize->add_setting('customizer_setting_one', array(
			'transport'         => 'refresh',
			'height'         => 325,
		));

		// Add Controls
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'customizer_setting_one_control', array(
			'label'             => __('about Image (png)', 'md-studio'),
			'section'           => 'front_about',
			'settings'          => 'customizer_setting_one',
		)));


		// about paragraph Setting
		$wp_customize->add_setting('about_title2', array(
			'default'              => _x('A SOLID, RENOWNED LABO', 'md-studio'),
			'type'                 => 'theme_mod'
		));

		// about title Control
		$wp_customize->add_control( 'about_title2', array(
			'label'    => __('About Title', 'md-studio'),
			'section'  => 'front_about',
			'priority' =>2,
		));

		// about paragraph Setting
		$wp_customize->add_setting('about_paragraph', array(
			'default'              => _x('At Labo, quality is an essential point, present in each stage of the processing of your photos and your creations (printing, packaging, monitoring of your order).', 'md-studio'),
			'type'                 => 'theme_mod'
		));

		// about paragraph Control
		$wp_customize->add_control( 'about_paragraph', array(
			'label'    => __('About Paragraph', 'md-studio'),
			'section'  => 'front_about',
			'priority' =>3,
		));

		// about link Setting
		$wp_customize->add_setting('about_link', array(
			'default'              => _x('https://www.yourpage.com', 'md-studio'),
			'type'                 => 'theme_mod'
		));

		// about link Control
		$wp_customize->add_control( 'about_link', array(
			'label'    => __('About Link', 'md-studio'),
			'section'  => 'front_about',
			'priority' =>4,
		));



		/*---------------------------------------------------------------------------------*/
		// Footer contact info Section
		$wp_customize->add_section('contact_info', array(
			'title'          => __('Contact informations (Footer)', 'md-studio'),
			'description'    => sprintf( __('Options for MD Theme', 'md-studio')
			),
			'priority'       => 60,
		));

		/*----------------------------------------------------------------------*/

		// Add Settings
		$wp_customize->add_setting('logo_white', array(
			'transport'         => 'refresh',
			'height'         => 325,
		));

		// Add Controls
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo_white_control', array(
			'label'             => __('White Logo (png)', 'md-studio'),
			'section'           => 'contact_info',
			'settings'          => 'logo_white',
		)));


		// Adresse Txt Setting
		$wp_customize->add_setting('adresse_txt', array(
			'default'              => _x('Adresse exemple Adresse', 'md-studio'),
			'type'                 => 'theme_mod'
		));

		// Adresse Txt Control
		$wp_customize->add_control( 'adresse_txt', array(
			'label'    => __('Adresse', 'md-news'),
			'section'  => 'contact_info',
			'priority' => 1,
		));

		// Gmail Txt Setting
		$wp_customize->add_setting('gmail_txt', array(
			'default'              => _x('example@gmail.com', 'md-studio'),
			'type'                 => 'theme_mod'
		));

		// Gmail Txt Control
		$wp_customize->add_control( 'gmail_txt', array(
			'label'    => __('Gmail', 'md-studio'),
			'section'  => 'contact_info',
			'priority' => 2,
		));

		// phone Txt Setting
		$wp_customize->add_setting('phone_txt', array(
			'default'              => _x('+212 00000000', 'md-studio'),
			'type'                 => 'theme_mod'
		));

		// phone Txt Control
		$wp_customize->add_control( 'phone_txt', array(
			'label'    => __('Phone Number', 'md-studio'),
			'section'  => 'contact_info',
			'priority' => 3,
		));


		/*---------------------------------------------------------------------------------*/


		/*---------------------------------------------------------------------------------*/
		// About paragraph Section
		$wp_customize->add_section('about_page_paragraph', array(
			'title'          => __('About Us Paragraph', 'md-studio'),
			'description'    => sprintf( __('Options for MD Theme (About)', 'md-studio')
			),
			'priority'       => 65,
		));

		/*----------------------------------------------------------------------*/

		// Instagram Txt Setting
		$wp_customize->add_setting('about_p', array(
			'default'              => _x('test', 'md-studio'),
			'type'                 => 'theme_mod'
		));

		// Instagram Txt Control
		$wp_customize->add_control( 'about_p', array(
			'label'    => __('About p', 'md-studio'),
			'section'  => 'about_page_paragraph',
			'priority' => 3,
		));



		/*---------------------------------------------------------------------------------*/
		// About profile 1 infos Section
		$wp_customize->add_section('about_page_infos1', array(
			'title'          => __('About Us Profile informations 1', 'md-studio'),
			'description'    => sprintf( __('Options for MD Theme (About)', 'md-studio')
			),
			'priority'       => 70,
		));

		/*----------------------------------------------------------------------*/

		// Add Settings
		$wp_customize->add_setting('person1', array(
			'transport'         => 'refresh',
			'height'         => 325,
		));

		// Add Controls
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'person1_control', array(
			'label'             => __('Person Photo', 'md-studio'),
			'section'           => 'about_page_infos1',
			'settings'          => 'person1',
		)));

		// Full Name Txt Setting
		$wp_customize->add_setting('person1_name', array(
			'default'              => _x('Jhon Doe', 'md-studio'),
			'type'                 => 'theme_mod'
		));

		// Full Name Txt Control
		$wp_customize->add_control( 'person1_name', array(
			'label'    => __('Full Name', 'md-news'),
			'section'  => 'about_page_infos1',
			'priority' => 1,
		));

		// Facebook Txt Setting
		$wp_customize->add_setting('facebook_txt1', array(
			'default'              => _x('facebook.com', 'md-studio'),
			'type'                 => 'theme_mod'
		));

		// Facebook Txt Control
		$wp_customize->add_control( 'facebook_txt1', array(
			'label'    => __('Facebook', 'md-studio'),
			'section'  => 'about_page_infos1',
			'priority' => 2,
		));

		// Instagram Txt Setting
		$wp_customize->add_setting('instagram_txt1', array(
			'default'              => _x('instagram.com', 'md-studio'),
			'type'                 => 'theme_mod'
		));

		// Instagram Txt Control
		$wp_customize->add_control( 'instagram_txt1', array(
			'label'    => __('Instagram', 'md-studio'),
			'section'  => 'about_page_infos1',
			'priority' => 3,
		));
		/*---------------------------------------------------------------------------------*/



		/*---------------------------------------------------------------------------------*/
		// About profile 2 infos Section
		$wp_customize->add_section('about_page_infos2', array(
			'title'          => __('About Us Profile informations 2', 'md-studio'),
			'description'    => sprintf( __('Options for MD Theme (About)', 'md-studio')
			),
			'priority'       => 72,
		));

		/*----------------------------------------------------------------------*/

		// Add Settings
		$wp_customize->add_setting('person2', array(
			'transport'         => 'refresh',
			'height'         => 325,
		));

		// Add Controls
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'person2_control', array(
			'label'             => __('Person Photo', 'md-studio'),
			'section'           => 'about_page_infos2',
			'settings'          => 'person2',
		)));

		// Full Name Txt Setting
		$wp_customize->add_setting('person2_name', array(
			'default'              => _x('Jhon Doe', 'md-studio'),
			'type'                 => 'theme_mod'
		));

		// Full Name Txt Control
		$wp_customize->add_control( 'person2_name', array(
			'label'    => __('Full Name', 'md-news'),
			'section'  => 'about_page_infos2',
			'priority' => 1,
		));

		// Facebook Txt Setting
		$wp_customize->add_setting('facebook_txt2', array(
			'default'              => _x('facebook.com', 'md-studio'),
			'type'                 => 'theme_mod'
		));

		// Facebook Txt Control
		$wp_customize->add_control( 'facebook_txt2', array(
			'label'    => __('Facebook', 'md-studio'),
			'section'  => 'about_page_infos2',
			'priority' => 2,
		));

		// Instagram Txt Setting
		$wp_customize->add_setting('instagram_txt2', array(
			'default'              => _x('instagram.com', 'md-studio'),
			'type'                 => 'theme_mod'
		));

		// Instagram Txt Control
		$wp_customize->add_control( 'instagram_txt2', array(
			'label'    => __('Instagram', 'md-studio'),
			'section'  => 'about_page_infos2',
			'priority' => 3,
		));
		/*---------------------------------------------------------------------------------*/



		/*---------------------------------------------------------------------------------*/
		// About profile 3 infos Section
		$wp_customize->add_section('about_page_infos3', array(
			'title'          => __('About Us Profile informations 3', 'md-studio'),
			'description'    => sprintf( __('Options for MD Theme (About)', 'md-studio')
			),
			'priority'       => 74,
		));

		/*----------------------------------------------------------------------*/

		// Add Settings
		$wp_customize->add_setting('person3', array(
			'transport'         => 'refresh',
			'height'         => 325,
		));

		// Add Controls
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'person3_control', array(
			'label'             => __('Person Photo', 'md-studio'),
			'section'           => 'about_page_infos3',
			'settings'          => 'person3',
		)));

		// Full Name Txt Setting
		$wp_customize->add_setting('person3_name', array(
			'default'              => _x('Jhon Doe', 'md-studio'),
			'type'                 => 'theme_mod'
		));

		// Full Name Txt Control
		$wp_customize->add_control( 'person3_name', array(
			'label'    => __('Full Name', 'md-news'),
			'section'  => 'about_page_infos3',
			'priority' => 1,
		));

		// Facebook Txt Setting
		$wp_customize->add_setting('facebook_txt3', array(
			'default'              => _x('facebook.com', 'md-studio'),
			'type'                 => 'theme_mod'
		));

		// Facebook Txt Control
		$wp_customize->add_control( 'facebook_txt3', array(
			'label'    => __('Facebook', 'md-studio'),
			'section'  => 'about_page_infos3',
			'priority' => 2,
		));

		// Instagram Txt Setting
		$wp_customize->add_setting('instagram_txt3', array(
			'default'              => _x('instagram.com', 'md-studio'),
			'type'                 => 'theme_mod'
		));

		// Instagram Txt Control
		$wp_customize->add_control( 'instagram_txt3', array(
			'label'    => __('Instagram', 'md-studio'),
			'section'  => 'about_page_infos3',
			'priority' => 3,
		));
		/*---------------------------------------------------------------------------------*/


		/*---------------------------------------------------------------------------------*/
		// About profile 4 infos Section
		$wp_customize->add_section('about_page_infos4', array(
			'title'          => __('About Us Profile informations 4', 'md-studio'),
			'description'    => sprintf( __('Options for MD Theme (About)', 'md-studio')
			),
			'priority'       => 76,
		));

		/*----------------------------------------------------------------------*/

		// Add Settings
		$wp_customize->add_setting('person4', array(
			'transport'         => 'refresh',
			'height'         => 325,
		));

		// Add Controls
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'person4_control', array(
			'label'             => __('Person Photo', 'md-studio'),
			'section'           => 'about_page_infos4',
			'settings'          => 'person4',
		)));

		// Full Name Txt Setting
		$wp_customize->add_setting('person4_name', array(
			'default'              => _x('Jhon Doe', 'md-studio'),
			'type'                 => 'theme_mod'
		));

		// Full Name Txt Control
		$wp_customize->add_control( 'person4_name', array(
			'label'    => __('Full Name', 'md-news'),
			'section'  => 'about_page_infos4',
			'priority' => 1,
		));

		// Facebook Txt Setting
		$wp_customize->add_setting('facebook_txt4', array(
			'default'              => _x('facebook.com', 'md-studio'),
			'type'                 => 'theme_mod'
		));

		// Facebook Txt Control
		$wp_customize->add_control( 'facebook_txt4', array(
			'label'    => __('Facebook', 'md-studio'),
			'section'  => 'about_page_infos4',
			'priority' => 2,
		));

		// Instagram Txt Setting
		$wp_customize->add_setting('instagram_txt4', array(
			'default'              => _x('instagram.com', 'md-studio'),
			'type'                 => 'theme_mod'
		));

		// Instagram Txt Control
		$wp_customize->add_control( 'instagram_txt4', array(
			'label'    => __('Instagram', 'md-studio'),
			'section'  => 'about_page_infos4',
			'priority' => 3,
		));
		/*---------------------------------------------------------------------------------*/


		/*---------------------------------------------------------------------------------*/
		// About profile 5 infos Section
		$wp_customize->add_section('about_page_infos5', array(
			'title'          => __('About Us Profile informations 5', 'md-studio'),
			'description'    => sprintf( __('Options for MD Theme (About)', 'md-studio')
			),
			'priority'       => 78,
		));

		/*----------------------------------------------------------------------*/

		// Add Settings
		$wp_customize->add_setting('person5', array(
			'transport'         => 'refresh',
			'height'         => 325,
		));

		// Add Controls
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'person5_control', array(
			'label'             => __('Person Photo', 'md-studio'),
			'section'           => 'about_page_infos5',
			'settings'          => 'person5',
		)));

		// Full Name Txt Setting
		$wp_customize->add_setting('person5_name', array(
			'default'              => _x('Jhon Doe', 'md-studio'),
			'type'                 => 'theme_mod'
		));

		// Full Name Txt Control
		$wp_customize->add_control( 'person5_name', array(
			'label'    => __('Full Name', 'md-news'),
			'section'  => 'about_page_infos5',
			'priority' => 1,
		));

		// Facebook Txt Setting
		$wp_customize->add_setting('facebook_txt5', array(
			'default'              => _x('facebook.com', 'md-studio'),
			'type'                 => 'theme_mod'
		));

		// Facebook Txt Control
		$wp_customize->add_control( 'facebook_txt5', array(
			'label'    => __('Facebook', 'md-studio'),
			'section'  => 'about_page_infos5',
			'priority' => 2,
		));

		// Instagram Txt Setting
		$wp_customize->add_setting('instagram_txt5', array(
			'default'              => _x('instagram.com', 'md-studio'),
			'type'                 => 'theme_mod'
		));

		// Instagram Txt Control
		$wp_customize->add_control( 'instagram_txt5', array(
			'label'    => __('Instagram', 'md-studio'),
			'section'  => 'about_page_infos5',
			'priority' => 3,
		));
		/*---------------------------------------------------------------------------------*/


		/*---------------------------------------------------------------------------------*/
		// About profile 6 infos Section
		$wp_customize->add_section('about_page_infos6', array(
			'title'          => __('About Us Profile informations 6', 'md-studio'),
			'description'    => sprintf( __('Options for MD Theme (About)', 'md-studio')
			),
			'priority'       => 80,
		));

		/*----------------------------------------------------------------------*/

		// Add Settings
		$wp_customize->add_setting('person6', array(
			'transport'         => 'refresh',
			'height'         => 325,
		));

		// Add Controls
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'person6_control', array(
			'label'             => __('Person Photo', 'md-studio'),
			'section'           => 'about_page_infos6',
			'settings'          => 'person6',
		)));

		// Full Name Txt Setting
		$wp_customize->add_setting('person6_name', array(
			'default'              => _x('Jhon Doe', 'md-studio'),
			'type'                 => 'theme_mod'
		));

		// Full Name Txt Control
		$wp_customize->add_control( 'person6_name', array(
			'label'    => __('Full Name', 'md-news'),
			'section'  => 'about_page_infos6',
			'priority' => 1,
		));

		// Facebook Txt Setting
		$wp_customize->add_setting('facebook_txt6', array(
			'default'              => _x('facebook.com', 'md-studio'),
			'type'                 => 'theme_mod'
		));

		// Facebook Txt Control
		$wp_customize->add_control( 'facebook_txt6', array(
			'label'    => __('Facebook', 'md-studio'),
			'section'  => 'about_page_infos6',
			'priority' => 2,
		));

		// Instagram Txt Setting
		$wp_customize->add_setting('instagram_txt6', array(
			'default'              => _x('instagram.com', 'md-studio'),
			'type'                 => 'theme_mod'
		));

		// Instagram Txt Control
		$wp_customize->add_control( 'instagram_txt6', array(
			'label'    => __('Instagram', 'md-studio'),
			'section'  => 'about_page_infos6',
			'priority' => 3,
		));
		/*---------------------------------------------------------------------------------*/


		/*---------------------------------------------------------------------------------*/
		// Map Section
		$wp_customize->add_section('map_section', array(
			'title'          => __('Map URL', 'md-news'),
			'description'    => sprintf( __('Options for MD Theme', 'md-news')
			),
			'priority'       => 130,
		));

		/*----------------------------------------------------------------------*/

		$map_url = '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d106422.18139158416!2d-7.688586639500092!3d33.53536228645181!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda62d6834f7e94b%3A0x5d7196c6fff04acf!2sA%C3%AFn%20Chock%2C%20Casablanca!5e0!3m2!1sen!2sma!4v1589224332215!5m2!1sen!2sma" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>';

		// Brand Txt Setting
		$wp_customize->add_setting('map_url', array(
			'default'              => _x($map_url, 'md-news'),
			'type'                 => 'theme_mod'
		));

		// Brand Txt Control
		$wp_customize->add_control( 'map_url', array(
			'label'    => __('Map Full iframe Tag', 'md-news'),
			'section'  => 'map_section',
			'priority' => 1,
		));

		/*---------------------------------------------------------------------------------*/


		/*---------------------------------------------------------------------------------*/
		// website color section

		// Settings Section
		$wp_customize->add_section('settings', array(
			'title'	=> __('Theme Settings', 'md-news'),
			'description'    => sprintf( __('Options for MD News', 'md-news')
			),
			'priority'	=> 10,
		));

		/*---------------------------------------------------------------------------------*/

		// Color Setting
		$wp_customize->add_setting('color', array(
			'default'              => _x('#ff6800', 'md-news'),
			'type'                 => 'theme_mod'
		));

		// Color Control
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'color',
				array(
					'label'      => __( 'Theme Color', 'md-news' ),
					'section'    => 'settings',
					'priority' => 1,
				) )
		);

		/*---------------------------------------------------------------------------------*/


		/*---------------------------------------------------------------------------------*/
		// Logo dimensions section

		// Settings Section
		$wp_customize->add_section('logo_dimensions', array(
			'title'	=> __('Logo Dimensions', 'md-studio'),
			'description'    => sprintf( __('Options for MD Studio', 'md-studio')
			),
			'priority'	=> 20,
		));

		/*---------------------------------------------------------------------------------*/

		// width logo Setting
		$wp_customize->add_setting('width', array(
			'default'              => _x('80', 'md-studio'),
			'type'                 => 'theme_mod'
		));

		// width logo Control
		$wp_customize->add_control( 'width',
				array(
					'label'      => __( 'Logo Width', 'md-studio' ),
					'section'    => 'logo_dimensions',
					'priority' => 1,
				)
		);

		/*---------------------------------------------------------------------------------*/

		/*---------------------------------------------------------------------------------*/

		// height logo Setting
		$wp_customize->add_setting('height', array(
			'default'              => _x('35', 'md-studio'),
			'type'                 => 'theme_mod'
		));

		// height logo Control
		$wp_customize->add_control('height',
				array(
					'label'      => __( 'Logo Height', 'md-studio' ),
					'section'    => 'logo_dimensions',
					'priority' => 2,
				)
		);

		/*---------------------------------------------------------------------------------*/



	}

add_action('customize_register', 'md_customize_register');