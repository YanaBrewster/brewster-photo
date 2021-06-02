<?php

//Hook1
function mytheme_customize_register( $wp_customize ) {

   // Footer Message
   $wp_customize->add_section( 'brewsterPhotoTheme_footerSection' , array(
       'title'      => __( 'Footer Text', 'brewsterPhotoTheme' ),
       'priority'   => 30,
   ));

   $wp_customize->add_setting( 'brewsterPhotoTheme_footerMessage' , array(
       'default'   => 'Copyright &copy; 2021',
       'transport' => 'refresh',
   ) );

   $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'brewsterPhotoTheme_footerMessageControl', array(
     'label'      => __( 'Footer Text', 'brewsterPhotoTheme' ),
     'section'    => 'brewsterPhotoTheme_footerSection',
     'settings'   => 'brewsterPhotoTheme_footerMessage',
   ) ) );

   // Site Title Text
   $wp_customize->add_section( 'brewsterPhotoTheme_siteTitleTextSection' , array(
       'title'      => __( 'Site Title Text', 'brewsterPhotoTheme' ),
       'priority'   => 30,
   ));

   $wp_customize->add_setting( 'brewsterPhotoTheme_siteTitleText' , array(
       'default'   => 'Site Title',
       'transport' => 'refresh',
   ) );

   $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'brewsterPhotoTheme_siteTitleTextControl', array(
     'label'      => __( 'Site Title Text', 'brewsterPhotoTheme' ),
     'section'    => 'brewsterPhotoTheme_siteTitleTextSection',
     'settings'   => 'brewsterPhotoTheme_siteTitleText',
   ) ) );

   }
 add_action( 'customize_register', 'mytheme_customize_register' );


//Hook2:
 function mytheme_customize_css()
 {
   ?>
    <style type="text/css">
    .myHeadings{
        color: <?php echo get_theme_mod('brewsterPhotoTheme_headingTextColour', '#333333'); ?>!important ;
    }

  </style>
<?php
}
add_action( 'wp_head', 'mytheme_customize_css');
