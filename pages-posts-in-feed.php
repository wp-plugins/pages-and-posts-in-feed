<?php
/*
Plugin Name: Pages and Posts in Feed
Version: 1.0
Plugin URI: http://sumtips.com/2011/12/include-page-custom-post-type-wordpress-feed.html
Description: This plugin modifies WordPress' RSS feeds to include both 'Page' and 'Post' types in the site's feed. Useful for those who use WordPress as a CMS. Plugin has no settings. Activate, and you are good to go.
Author: Renji
Author URI: http://sumtips.com/
*/

function remove_posts_from_rss_feed( $args ) {
  if ( isset( $args['feed'] ) && !isset( $args['post_type'] ) )
    $args['post_type'] = array('post', 'page');
  return $args;
}

add_filter( 'request', 'remove_posts_from_rss_feed' );

?>
