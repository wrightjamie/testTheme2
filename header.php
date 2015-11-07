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

<div class="holder">
    <header id="banner" class="container">
        <?php //TODO make a link to home ?>
        <h1 class="banner_header">
            <a href="<?php bloginfo('url'); ?>">
                <?php bloginfo('name'); ?>
            </a>
        </h1>
        <p class="banner_sub">
            <?php bloginfo('description'); ?>
        </p>
    </header>
</div>


<?php //TODO move menu to footer and add js to move it up ?>
<?php if ( has_nav_menu( 'main-menu' ) ) : ?>
    <div class="holder">
        <?php $args = array(
            'theme_location' => 'main-menu',
            'container' => 'nav',
            'depth' => 1,
            'container_class' => 'container'
        );
        //TODO Multi level main menu
        wp_nav_menu( $args ); ?>
    </div>
<?php endif; ?>

<?php if(get_theme_mod('show-breadcrumbs',true) && function_exists('yoast_breadcrumb') && !is_front_page()): ?>
    <div class="holder">
        <?php yoast_breadcrumb('<div class="container">','</div>'); ?>
    </div>
<?php endif; ?>
