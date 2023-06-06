<?php
/**
 * 
 * Template Name: Wordpress Customizer Setting
 * Description: Add Features to Wordpress Customizer
 * 
 */
 function behealthy_customizer_settings($wp_customizer){
     /*Header Setting */
        //add a customizer setting
      //include new section
      $wp_customizer->add_section('header',array(
        'title'=>__("Header Settings","behealthy"),
        'priority'=>70
      ));
      //add header facebook link
      ////allow us to capability to the customizer setting
      $wp_customizer->add_setting("header_facebook_field",array(
        'capability'=>'edit_theme_options',
        'default'=>'https://facebook.com/liilabapp'
      ));
      //add controls in the customizer settings
      $wp_customizer->add_control('header_facebook_control',array(
          'label'=>__('Header Facebook Field','behealthy'),
          'description'=>'Change Facebook Link',
          'section'=>'header',
          'settings'=>'header_facebook_field'

      ));
       //add header youtube link
      //allow us to capability to the customizer setting
      $wp_customizer->add_setting("header_youtube_field",array(
        'capability'=>'edit_theme_options',
        'default'=>'https://www.youtube.com/channel/UCaQ9KUghUymXUJFiYr0YPvQ'
      ));
      //add controls in the customizer settings
      $wp_customizer->add_control('header_youtube_control',array(
          'label'=>__('Header Youtube Field','behealthy'),
          'description'=>'Change Youtube Link',
          'section'=>'header',
          'settings'=>'header_youtube_field'

      ));
      //add header linkedIn link
      //allow us to capability to the customizer setting
      $wp_customizer->add_setting("header_linkedin_field",array(
        'capability'=>'edit_theme_options',
        'default'=>'https://linkedin.com/company/liilab'
      ));
      //add controls in the customizer settings
      $wp_customizer->add_control('header_linkedin_control',array(
          'label'=>__('Header LinkedIn Field','behealthy'),
          'description'=>'Change LinkedIn Link',
          'section'=>'header',
          'settings'=>'header_linkedin_field'

      ));
       //add header Download Field
      //allow us to capability to the customizer setting
      $wp_customizer->add_setting("header_download_link_field",array(
        'capability'=>'edit_theme_options',
        'default'=>'https://play.google.com/store/apps/developer?id=APK+Builder&hl=en&gl=US'
      ));
      //add controls in the customizer settings
      $wp_customizer->add_control('header_download_link_control',array(
          'label'=>__('Header Download Link','behealthy'),
          'description'=>'Change Download Link',
          'section'=>'header',
          'settings'=>'header_download_link_field'

      ));
      //add header Download Text
      //allow us to capability to the customizer setting
      $wp_customizer->add_setting("header_download_text_field",array(
        'capability'=>'edit_theme_options',
        'default'=>'Download The App'
      ));
      //add controls in the customizer settings
      $wp_customizer->add_control('header_download_text_control',array(
          'label'=>__('Header Download Text','behealthy'),
          'description'=>'Change Download Text',
          'section'=>'header',
          'settings'=>'header_download_text_field'

      ));
       //add header title
       //allow us to capability to the customizer setting
       $wp_customizer->add_setting("header_title_field",array(
        'capability'=>'edit_theme_options',
        'default'=>'BeHealthy'
      ));
      //add controls in the customizer settings
      $wp_customizer->add_control('header_title_control',array(
          'label'=>__('Header Title','behealthy'),
          'description'=>'Change Header Title',
          'section'=>'header',
          'settings'=>'header_title_field'

      ));
      //add header Description
      //allow us to capability to the customizer setting
      $wp_customizer->add_setting("header_description_field",array(
        'capability'=>'edit_theme_options',
        'default'=>'Healthy Lifestyle Tips For Everybody'
      ));
      //add controls in the customizer settings
      $wp_customizer->add_control('header_description_control',array(
          'label'=>__('Header Description','behealthy'),
          'description'=>'Change Header Description',
          'section'=>'header',
          'settings'=>'header_description_field'

      ));
      

     /*End Header Setting*/

    /* Slider Setting */
/*First Slider Setting Start*/    
     //add a customizer setting
      //include new section
      $wp_customizer->add_section('slider',array(
        'title'=>__("Slider Settings","behealthy"),
        'priority'=>71
    ));
    //allow us to capability to the customizer setting
    $wp_customizer->add_setting("slider_image1",array(
        'capability'=>'edit_theme_options'
    ));
    //add controls in the customizer settings
    $wp_customizer->add_control(new Wp_Customize_Image_Control($wp_customizer,'slider_image1',array(
        'label'=>__('First Slider Image','behealthy'),
        'description'=>'Change First Slider Image',
        'section'=>'slider'
    )));

    //add First Slider Title
      //allow us to capability to the customizer setting
      $wp_customizer->add_setting("slider_title1_field",array(
        'capability'=>'edit_theme_options',
        'default'=>'Do Exercises'
      ));
      //add controls in the customizer settings
      $wp_customizer->add_control('slider_title1_control',array(
          'label'=>__('First Slider Title','behealthy'),
          'description'=>'Change First Slider Title',
          'section'=>'slider',
          'settings'=>'slider_title1_field'

      ));
    //add First Slider Description
      //allow us to capability to the customizer setting
      $wp_customizer->add_setting("slider_description1_field",array(
        'capability'=>'edit_theme_options',
        'default'=>'Get tips for physical exercises'
      ));
      //add controls in the customizer settings
      $wp_customizer->add_control('slider_description1_control',array(
          'label'=>__('First Slider Description','behealthy'),
          'description'=>'Change First Slider Description',
          'section'=>'slider',
          'settings'=>'slider_description1_field'

      ));
       //add First Slider Button Text
      //allow us to capability to the customizer setting
      $wp_customizer->add_setting("slider_button1_text_field",array(
        'capability'=>'edit_theme_options',
        'default'=>'Visit Us'
      ));
      //add controls in the customizer settings
      $wp_customizer->add_control('slider_button1_text_control',array(
          'label'=>__('First Slider Button Text','behealthy'),
          'description'=>'Change First Slider Button Text',
          'section'=>'slider',
          'settings'=>'slider_button1_text_field'

      ));
      //add First Slider Button Link
      //allow us to capability to the customizer setting
      $wp_customizer->add_setting("slider_button1_link_field",array(
        'capability'=>'edit_theme_options',
        'default'=>'http://liilab.com/'
      ));
      //add controls in the customizer settings
      $wp_customizer->add_control('slider_button1_link_control',array(
          'label'=>__('First Slider Button Link','behealthy'),
          'description'=>'Change First Slider Button Link',
          'section'=>'slider',
          'settings'=>'slider_button1_link_field'

      ));
/*First Slider Setting End*/
/*Second Slider Setting Start*/
    //allow us to capability to the customizer setting
    $wp_customizer->add_setting("slider_image2",array(
        'capability'=>'edit_theme_options'
    ));
    //add controls in the customizer settings
    $wp_customizer->add_control(new Wp_Customize_Image_Control($wp_customizer,'slider_image2',array(
        'label'=>__('Second Slider Image','behealthy'),
        'description'=>'Change Second Slider Image',
        'section'=>'slider'
    )));

     //add Second Slider Title
      //allow us to capability to the customizer setting
      $wp_customizer->add_setting("slider_title2_field",array(
        'capability'=>'edit_theme_options',
        'default'=>'Eat Healthy Food'
      ));
      //add controls in the customizer settings
      $wp_customizer->add_control('slider_title2_control',array(
          'label'=>__('Second Slider Title','behealthy'),
          'description'=>'Change Second Slider Title',
          'section'=>'slider',
          'settings'=>'slider_title2_field'

      ));
    //add Second Slider Description
      //allow us to capability to the customizer setting
      $wp_customizer->add_setting("slider_description2_field",array(
        'capability'=>'edit_theme_options',
        'default'=>'Get tips for eating healthy food'
      ));
      //add controls in the customizer settings
      $wp_customizer->add_control('slider_description2_control',array(
          'label'=>__('Second Slider Description','behealthy'),
          'description'=>'Change Second Slider Description',
          'section'=>'slider',
          'settings'=>'slider_description2_field'

      ));
       //add Second Slider Button Text
      //allow us to capability to the customizer setting
      $wp_customizer->add_setting("slider_button2_text_field",array(
        'capability'=>'edit_theme_options',
        'default'=>'Visit Us'
      ));
      //add controls in the customizer settings
      $wp_customizer->add_control('slider_button2_text_control',array(
          'label'=>__('Second Slider Button Text','behealthy'),
          'description'=>'Change Second Slider Button Text',
          'section'=>'slider',
          'settings'=>'slider_button2_text_field'

      ));
      //add Second Slider Button Link
      //allow us to capability to the customizer setting
      $wp_customizer->add_setting("slider_button2_link_field",array(
        'capability'=>'edit_theme_options',
        'default'=>'http://liilab.com/'
      ));
      //add controls in the customizer settings
      $wp_customizer->add_control('slider_button2_link_control',array(
          'label'=>__('Second Slider Button Link','behealthy'),
          'description'=>'Change Second Slider Button Link',
          'section'=>'slider',
          'settings'=>'slider_button2_link_field'

      ));
/*End Second Slider Setting*/
/*Third Slider Setting*/
    //allow us to capability to the customizer setting
    $wp_customizer->add_setting("slider_image3",array(
        'capability'=>'edit_theme_options'
    ));
    //add controls in the customizer settings
    $wp_customizer->add_control(new Wp_Customize_Image_Control($wp_customizer,'slider_image3',array(
        'label'=>__('Third Slider Image','behealthy'),
        'description'=>'Change Third Slider Image',
        'section'=>'slider'
    )));
    //add Third Slider Title
      //allow us to capability to the customizer setting
      $wp_customizer->add_setting("slider_title3_field",array(
        'capability'=>'edit_theme_options',
        'default'=>'Be aware of diseases'
      ));
      //add controls in the customizer settings
      $wp_customizer->add_control('slider_title3_control',array(
          'label'=>__('Third Slider Title','behealthy'),
          'description'=>'Change Third Slider Title',
          'section'=>'slider',
          'settings'=>'slider_title3_field'

      ));
    //add Third Slider Description
      //allow us to capability to the customizer setting
      $wp_customizer->add_setting("slider_description3_field",array(
        'capability'=>'edit_theme_options',
        'default'=>'Prevention is better than cure'
      ));
      //add controls in the customizer settings
      $wp_customizer->add_control('slider_description3_control',array(
          'label'=>__('Third Slider Description','behealthy'),
          'description'=>'Change Third Slider Description',
          'section'=>'slider',
          'settings'=>'slider_description3_field'

      ));
       //add Third Slider Button Text
      //allow us to capability to the customizer setting
      $wp_customizer->add_setting("slider_button3_text_field",array(
        'capability'=>'edit_theme_options',
        'default'=>'Visit Us'
      ));
      //add controls in the customizer settings
      $wp_customizer->add_control('slider_button3_text_control',array(
          'label'=>__('Third Slider Button Text','behealthy'),
          'description'=>'Change Third Slider Button Text',
          'section'=>'slider',
          'settings'=>'slider_button3_text_field'

      ));
      //add Third Slider Button Link
      //allow us to capability to the customizer setting
      $wp_customizer->add_setting("slider_button3_link_field",array(
        'capability'=>'edit_theme_options',
        'default'=>'http://liilab.com/'
      ));
      //add controls in the customizer settings
      $wp_customizer->add_control('slider_button3_link_control',array(
          'label'=>__('Third Slider Button Link','behealthy'),
          'description'=>'Change Third Slider Button Link',
          'section'=>'slider',
          'settings'=>'slider_button3_link_field'

      ));
/*End Third Slider Setting*/
/*End Slider Setting*/
/*Post Settings*/
 //add a customizer setting
//include new section
$wp_customizer->add_section('post',array(
    'title'=>__("Post Settings","behealthy"),
    'priority'=>72
  ));

 //allow us to capability to the customizer setting
 $wp_customizer->add_setting("explore_field",array(
    'capability'=>'edit_theme_options',
    'default'=>'Explore'
  ));
  //add controls in the customizer settings
  $wp_customizer->add_control('explore_control',array(
      'label'=>__('Explore Area Title','behealthy'),
      'description'=>'Change Explore Area Title',
      'section'=>'post',
      'settings'=>'explore_field'

  ));
   // Alll Posts text change
  //allow us to capability to the customizer setting
 $wp_customizer->add_setting("all_posts_text_field",array(
  'capability'=>'edit_theme_options',
  'default'=>'All Posts'
));
//add controls in the customizer settings
$wp_customizer->add_control('all_post_text_control',array(
    'label'=>__('All Posts Text','behealthy'),
    'description'=>'Change \'All Posts\' Text',
    'section'=>'post',
    'settings'=>'all_posts_text_field'

));
  // Read more.. button text change
  //allow us to capability to the customizer setting
 $wp_customizer->add_setting("read_more_text_field",array(
  'capability'=>'edit_theme_options',
  'default'=>'Read more...'
));
//add controls in the customizer settings
$wp_customizer->add_control('read_more_text_control',array(
    'label'=>__('Read More Button Text','behealthy'),
    'description'=>'Change \'Read More\' Button Text',
    'section'=>'post',
    'settings'=>'read_more_text_field'

));

 /*Footer Setting */
        //add a customizer setting
      //include new section
      $wp_customizer->add_section('footer',array(
        'title'=>__("Footer Settings","behealthy"),
        'priority'=>73
      ));
      //add header facebook link
      ////allow us to capability to the customizer setting
      $wp_customizer->add_setting("footer_facebook_field",array(
        'capability'=>'edit_theme_options',
        'default'=>'https://facebook.com/liilabapp'
      ));
      //add controls in the customizer settings
      $wp_customizer->add_control('footer_facebook_control',array(
          'label'=>__('Footer Facebook Field','behealthy'),
          'description'=>'Change Facebook Link',
          'section'=>'footer',
          'settings'=>'footer_facebook_field'

      ));
       //add header youtube link
      //allow us to capability to the customizer setting
      $wp_customizer->add_setting("footer_youtube_field",array(
        'capability'=>'edit_theme_options',
        'default'=>'https://www.youtube.com/channel/UCaQ9KUghUymXUJFiYr0YPvQ'
      ));
      //add controls in the customizer settings
      $wp_customizer->add_control('footer_youtube_control',array(
          'label'=>__('Footer Youtube Field','behealthy'),
          'description'=>'Change Youtube Link',
          'section'=>'footer',
          'settings'=>'footer_youtube_field'

      ));
      //add header linkedIn link
      //allow us to capability to the customizer setting
      $wp_customizer->add_setting("footer_linkedin_field",array(
        'capability'=>'edit_theme_options',
        'default'=>'https://linkedin.com/company/liilab'
      ));
      //add controls in the customizer settings
      $wp_customizer->add_control('footer_linkedin_control',array(
          'label'=>__('Footer LinkedIn Field','behealthy'),
          'description'=>'Change LinkedIn Link',
          'section'=>'footer',
          'settings'=>'footer_linkedin_field'

      ));

 }

add_action('customize_register','behealthy_customizer_settings');

?>