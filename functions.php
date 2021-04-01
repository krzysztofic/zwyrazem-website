<?php

/**
*Functions and definitions for z wyrazem theme.
*
*@subpackage Twenty_Twenty_One
*/



/**Enable support for Post Thumbnails on posts and pages.
 * 
 * 
 */
 
if ( function_exists( 'add_theme_support' ) ) {
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 350,180 );

}


?>

