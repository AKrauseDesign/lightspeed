<?php
  /*
    This is a template for the header
    @package highpocketstheme
  */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel='stylesheet' href='<?php echo get_template_directory_uri() . "/css/highpockets.css"; ?>'>
    <script src="https://use.fontawesome.com/8051288c36.js"></script>
    <script src="https://use.typekit.net/syf2drw.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri() . '/js/highpockets.js'; ?>"></script>
    <?php if(is_singular() && pings_open(get_queried_object())): ?>
      <link rel="pingback" href="<?php bloginfo("pingback_url"); ?>">
    <?php endif; ?>
    <?php wp_head(); ?>
    <title>TDKrause Consulting LLC</title>
    <?php
      $custom_css = esc_attr( get_option( 'highpockets_css') );
      if( !empty( $custom_css ) ):
        echo '<style>' . $custom_css . '</style>';
      endif;
    ?>

  </head>
