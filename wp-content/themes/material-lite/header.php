<?php
/**
 * @version    1.0
 * @package    Material Lite
 * @author     Ghuwad Team <contact@ghuwad.com>
 * @license    GNU/GPL v2 or later http://www.gnu.org/licenses/gpl-2.0.html
 *
 * Websites: http://www.ghuwad.com
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width">
	<meta name="mobile-web-app-capable" content="yes">
	<title><?php wp_title( ' ', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
    <?php material_lite_theme_favicon(); ?>
</head>

<body <?php body_class('gstq mdl-color--grey-100 mdl-color-text--grey-700'); ?>>
    <div id="page" class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header class="mdl-layout__header mdl-layout__header--scroll  header-bg ">
            <div class="mdl-layout--large-screen-only mdl-layout__header-row">
            </div>
            <div class="mdl-layout__header-row header-logo">
              <h3><?php bloginfo('name'); ?></h3>
            </div>
            <div class="mdl-layout--large-screen-only mdl-layout__header-row">
            </div>
            
            <?php if ( has_nav_menu( 'main_menu' ) ) { ?>
    		<div class="mdl-layout__tab-bar mdl-js-ripple-effect nav-bg">
              <?php 
              $primaryMenu = array(
                    'theme_location'  => 'primary',
                    'menu'            => '',
                    'container'       => '',
                    'container_class' => false,
                    'container_id'    => '',
                    'menu_class'      => 'menu',
                    'menu_id'         => 'primary-menu',
                    'echo'            => false,
                    'fallback_cb'     => 'wp_page_menu',
                    'before'          => '',
                    'after'           => '',
                    'link_before'     => '',
                    'link_after'      => '',
                    'depth'           => 0,
                    'walker' => ''
                );
                echo strip_tags( wp_nav_menu( $primaryMenu ), '<a>' );
              ?>
              <!--
              <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored mdl-shadow--4dp mdl-color--accent" id="add">
                <i class="material-icons" role="presentation">add</i>
                <span class="visuallyhidden">Add</span>
              </button>
              -->
              
            </div>
    		<?php } ?>
        </header>
        
		<main id="main" class="mdl-layout__content">
		    
		    