<?php
/**
 * header
 *
 * This is the template that displays all of the <head> section, opens the <body> tag and adds the site's header.
 *
 * @package Corus-Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <title>CORUS Entertainment Coding Interview!</title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

	<link rel="profile" href="http://gmpg.org/xfn/11">
    <link type="text/css" href="/wp-content/themes/corus-theme/style.css" rel="stylesheet">
    <link type="text/css" href="/wp-content/themes/corus-theme/components/slick-slider/slick.css" rel="stylesheet">
    <link type="text/css" href="/wp-content/themes/corus-theme/components/slick-slider/slick-theme.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <div class="d-inline-flex" ><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title( '<h3>', '</h3>' ); ?></a></div>
    <div class="d-inline-flex" ><h2>&#8226;</h2></div>
    <div class="d-inline-flex" ><a href="/" title="<?php wp_title(); ?>"><h5>Homepage</h5></a></div>

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>


