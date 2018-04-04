<?php
/**
 * Website Header Assastment
 * 
 * @author     Ricko
 * @subpackage Core
 * @version    1.0.0
 */

// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" prefix="og: http://ogp.me/ns#" itemscope="" itemtype="http://schema.org/blog" <?php language_attributes(); ?>>
	<head profile="http://gmpg.org/xfn/11">
		<?php wp_head(); ?>
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	</head>

	<body id="<?php body_css_id(); ?>" <?php body_class(); ?>>

	<div id="page">

            <header id="header" role="banner">

                <div class="hgroup">
                	<div class="group">
                        	<nav class="nav" role="navigation"><?php wp_nav_menu(array('theme_location'=>'header-menu','container'=>false)); ?></nav>
                        <div class="clear"></div>
                    </div>
                </div>
            </header>
