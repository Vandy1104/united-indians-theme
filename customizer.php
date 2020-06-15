<?php

//Hook1: customize-register to define new Cutomizer panels, settings, controls
function mytheme_customize_register( $wp_customize ) {
   //All our sections, settings, and controls will be added here


   // Background Colour
   $wp_customize->add_setting( 'unitedIndians_backgroundColour' , array(
       'default'   => '#ffffff',
       'transport' => 'refresh',
   ) );


   $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'unitedIndians_backgroundColourControl', array(
   	'label'      => __( 'Background Colour', 'unitedIndiansTheme' ),
    'description' => 'Change the background Colour',
   	'section'    => 'colors',
   	'settings'   => 'unitedIndians_backgroundColour',
   ) ) );

   // Header and Footer unitedIndians_backgroundColour // Background Colour
    $wp_customize->add_setting( 'unitedIndians_headerFooterColour' , array(
        'default'   => '#000000',
        'transport' => 'refresh',
    ) );


    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'unitedIndians_headerFooterColourControl', array(
    	'label'      => __( 'Header and Footer Colour', 'unitedIndiansTheme' ),
     'description' => 'Change the Header and Footer Colour',
    	'section'    => 'colors',
    	'settings'   => 'unitedIndians_headerFooterColour',
    ) ) );
  //
  //
  //  // Footer Message
   $wp_customize->add_section( 'unitedIndians_footerSection' , array(
       'title'      => __( 'Footer Text', 'unitedIndiansTheme' ),
       'priority'   => 30,
   ));

   $wp_customize->add_setting( 'unitedIndians_footerMessage' , array(
       'default'   => 'copyright@2020',
       'transport' => 'refresh',
   ) );

   $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'unitedIndians_footerMessageControl', array(
     'label'      => __( 'Footer Text', 'unitedIndiansTheme' ),
     'section'    => 'unitedIndians_footerSection',
     'settings'   => 'unitedIndians_footerMessage',
   ) ) );
  //
  //  // Site Title Text
   $wp_customize->add_section( 'unitedIndians_siteTitleTextSection' , array(
       'title'      => __( 'Site Title Text', 'unitedIndiansTheme' ),
       'priority'   => 30,
   ));

   $wp_customize->add_setting( 'unitedIndians_siteTitleText' , array(
       'default'   => 'United Indians',
       'transport' => 'refresh',
   ) );

   $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'unitedIndians_siteTitleTextControl', array(
     'label'      => __( 'Site Title Text', 'unitedIndiansTheme' ),
     'section'    => 'unitedIndians_siteTitleTextSection',
     'settings'   => 'unitedIndians_siteTitleText',
   ) ) );
  //
  //  // footer icon image
  //
   $wp_customize->add_section( 'unitedIndians_footerIconImage' , array(
      'title'      => __( 'Footer Icon Image', 'unitedIndiansTheme' ),
      'priority'   => 45,
  ) );

  $wp_customize->add_setting( 'unitedIndians_footerIcon' , array(
      'default'   => get_template_directory_uri() . 'images/facebook.png',
      'transport' => 'refresh',
  ) );

  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'unitedIndians_footerIconImageControl', array(
    'label'      => __( 'Footer Icon Image', 'unitedIndiansTheme' ),
    'section'    => 'unitedIndians_footerIconImage',
    'settings'   => 'unitedIndians_footerIcon',
  ) ) );

   }

 add_action( 'customize_register', 'mytheme_customize_register' );


//Hook2: wp_head to output custom-generated CSS
 function mytheme_customize_css()
 {
   ?>
    <style type="text/css">
    body {
            background-color: <?php echo get_theme_mod('unitedIndians_backgroundColour','#ffffff'); ?>!important;
         }
   .myTheme{
             background-color: <?php echo get_theme_mod('unitedIndians_headerFooterColour', '#8f1818'); ?>!important;
           }


  </style>
<?php
}
add_action( 'wp_head', 'mytheme_customize_css');
