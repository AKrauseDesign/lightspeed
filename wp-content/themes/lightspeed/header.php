<?php
  /*
    This is a template for the header
    @package lightspeed
  */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php if(is_singular() && pings_open(get_queried_object())): ?>
      <link rel="pingback" href="<?php bloginfo("pingback_url"); ?>">
    <?php endif; ?>
    <?php wp_head(); ?>
    <title>Lightspeed</title>
    <?php
      // $custom_css = esc_attr( get_option( 'highpockets_css') );
      // if( !empty( $custom_css ) ):
      //   echo '<style>' . $custom_css . '</style>';
      // endif;
    ?>

  </head>
  <body <?php body_class(); ?>>
