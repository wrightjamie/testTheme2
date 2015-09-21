<?php
/**
 * Created by PhpStorm.
 * User: Jamie
 * Date: 01/09/2015
 * Time: 16:48
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="nojs" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php wp_title(); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->

<?php
/*
 * Time for the website content
 */
?>
<div class="holder">
    <header id="banner" class="container">
        <h1 class="banner_header">2459 Squadron</h1>
        <p class="banner_sub">Poulton-le-Fylde</p>
    </header>
</div>
