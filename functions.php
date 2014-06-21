<?php
/**
 * Iebzs functions and definitions
 *
 * Sets up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development
 * and http://codex.wordpress.org/Child_Themes), you can override certain
 * functions (those wrapped in a function_exists() call) by defining them first
 * in your child theme's functions.php file. The child theme's functions.php
 * file is included before the parent theme's file, so the child theme
 * functions would be used.
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters, @link http://codex.wordpress.org/Plugin_API
 *
 * @package Iebzs
 * @subpackage Iebzs
 * 
 */

function iebzs_setup() {
	/*
	 * Iebzs Thirteen available for translation.
	 *
	 * Translations can be added to the /languages/ directory.
	 * If you're building a theme based on Twenty Thirteen, use a find and
	 * replace to change 'twentythirteen' to the name of your theme in all
	 * template files.
	 */
	load_theme_textdomain( 'iebzs', get_template_directory() . '/languages' );

	// Adds RSS feed links to <head> for posts and comments.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Switches default core markup for search form, comment form,
	 * and comments to output valid HTML5.
	 */
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list' ) );
	add_post_type_support( 'page', 'excerpt' ); 

	/*
	 * This theme supports all available post formats by default.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	
	/*add_theme_support( 'post-formats', 
		array(
		'aside', 'audio', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video'
		) 
	);*/


	// This theme uses wp_nav_menu() in one location.
	register_nav_menu( 'primary', __( 'Navigation Menu', 'iebzs' ) );

	add_theme_support( 'post-thumbnails' );

	add_image_size( 'full-image', '1350', '480', true );
	add_image_size( 'medium-image', '800', '600', true );
	add_image_size( 'destaque-image', '560', '320', true );
	add_image_size( 'small-image', '400', '300', true );
	add_image_size( 'x-small-image', '200', '200', true );
	add_image_size( 'testemunho','58','58',true);

	/**
	** Includes
	**/
	require_once 'inc/custom-walker.php';
	require_once 'inc/post-types.php';
	require_once 'inc/meta-boxes.php';



}

add_action( 'after_setup_theme', 'iebzs_setup' );
add_filter('show_admin_bar', '__return_false');


function get_pagename(){
	if(is_home()){
		return 'home';
	}elseif(is_page('sobre-a-igreja')){
		return 'about';
	}elseif(is_single()){
		return 'single';
	}elseif(is_archive('ministerio')){
		return 'services';
	}
}

function enviarContato(){
	foreach($_POST as $key=>$value){
		$$key = $value;
	}
	
	$to = "rogeriocnobrega@gmail.com";
	
	$subject = "Formulário de Contato - $nome";
	
	if( wp_mail($to,$subject,$mensagem) ){
		$returnMsg = "Mensagem enviada com sucesso!";
	}else{
		$returnMsg = "Falha ao enviar sua mensagem!";
	}
	
	echo $returnMsg;
	die();
	
}

add_action("wp_ajax_enviarContato", "enviarContato");
add_action("wp_ajax_nopriv_enviarContato", "enviarContato");