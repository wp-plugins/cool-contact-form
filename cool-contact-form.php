<?php
/*
Plugin Name: Cool Contact Form
Plugin URI: http://www.nischalmaniar.info/
Version: 1.00
Author: <a href="http://www.nischalmaniar.info/">Nischal Maniar</a>
Description: A Cool Contact form plugin.
*/

function add_coolform_js_and_css()
{
    echo '<script language="JavaScript" src="' . get_bloginfo('wpurl') . '/wp-content/plugins/cool-contact-form/js/coolform.js" type="text/javascript"></script>' . "\n";
    echo '<link type="text/css" rel="stylesheet" href="' . get_bloginfo('wpurl') . '/wp-content/plugins/cool-contact-form/css/coolform.css" />' . "\n";
}

function addContactForm($content)
{
  if(false !== strpos($content, '<--contact form-->'))
  {
    include('coolform.php');
  }
  else
  {
    return $content;
  }
}

function cool_contactform_options()
{
	include('coolformoptions.php');
}

function cool_contactform_menu()
{
  add_options_page('Cool Contact Form Options', 'Cool Contact Form', 8, __FILE__, 'cool_contactform_options');
}

add_action('wp_head','add_coolform_js_and_css');
add_action('admin_menu', 'cool_contactform_menu');
add_filter('the_content','addContactForm');
?>