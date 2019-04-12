<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Mi_Tema
 * @since Twenty Sixteen 1.0
 */

?><!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php bloginfo('title'); wp_title('-', true); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="theme-color" content="#333333">
  <link
    rel="icon"
    sizes="196x196"
    href="<?php bloginfo('template_url'); ?>/imagenes/favicon.png">
	<link
    href="<?php bloginfo('template_url'); ?>/css/estilos.css"
    rel="stylesheet"
    type="text/css">
	<?php wp_head(); ?>
  <link
    rel="stylesheet"
    href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous">

</head>

<body <?php body_class(); ?>>


