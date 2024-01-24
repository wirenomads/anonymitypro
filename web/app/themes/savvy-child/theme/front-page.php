<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * To generate specific templates for your pages you can use:
 * /mytheme/templates/page-mypage.twig
 * (which will still route through this PHP file)
 * OR
 * /mytheme/page-mypage.php
 * (in which case you'll want to duplicate this file and save to the above path)
 *
 * Methods for TimberHelper can be found in the /lib sub-directory
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since    Timber 0.1
 * 
 */

use Timber\Timber;
use Timber\Post;

$context            = Timber::context();
$timber_post        = new Post();
$context['post']    = $timber_post;

$post_content = $timber_post->post_content;

Timber::render( array( 'pages/page-home.twig', 'posts/page.twig' ), $context );
