<?php
/**
 * Main Theme Functions File
 * 
 * Extra files & functions are hooked here.
 *
 * @author     Ricko
 * @subpackage Core
 * @version    1.0.0
 */

// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Dont do that !!!.' );
}


function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
    )
  );
}
add_action( 'init', 'register_my_menus' );