<?php
// Make widgets and feeds work
automatic_feed_links();
if ( function_exists('register_sidebar') ) {
	register_sidebar();
}

/*
// http://briancray.com/2009/08/19/wordpress-head-element/
remove_action('wp_head', 'feed_links_extra');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'parent_post_rel_link');
remove_action('wp_head', 'start_post_rel_link');
remove_action('wp_head', 'adjacent_posts_rel_link');
remove_action('wp_head', 'locale_stylesheet');
remove_action('wp_head', 'noindex');
remove_action('wp_head', 'wp_print_styles');
remove_action('wp_head', 'wp_print_head_scripts');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'rel_canonical');
*/

add_action('wp_head', 'ie_html5_js');
function ie_html5_js()
{
	/* http://remysharp.com/2009/01/07/html5-enabling-script/ */
	echo "<!--[if lte IE 7]><script>(function(){if(!/*@cc_on!@*/0)return;var e = \"abbr,article,aside,audio,canvas,datalist,details,eventsource,figure,footer,header,hgroup,mark,menu,meter,nav,output,progress,section,time,video\".split(','),i=e.length;while(i--){document.createElement(e[i])}})()</script><![endif]-->\n";
}
?>
