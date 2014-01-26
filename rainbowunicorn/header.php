<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <title><?php wp_title ( '|', true,'right' ); ?></title>
   
  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
   
  <?php
      /*
       *  Add this to support sites with sites with threaded comments enabled.
       */
      if ( is_singular() && get_option( 'thread_comments' ) )
          wp_enqueue_script( 'comment-reply' );
   
      wp_head();
       
      wp_get_archives('type=monthly&format=link');
  ?>
</head>
<body>
  <header class="horizontal-centered">
    <div class="container vertical-centered">
      <h1 class="">
        <a href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a>
      </h1>
    </div>
  </header> 
  
