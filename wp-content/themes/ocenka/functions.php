<?php
include 'blocks/menu.php';

add_action('init', function () {
  remove_action('wp_head', 'feed_links_extra', 3); // Display the links to the extra feeds such as category feeds
  remove_action('wp_head', 'feed_links', 2); // Display the links to the general feeds: Post and Comment Feed
  remove_action('wp_head', 'rsd_link'); // Display the link to the Really Simple Discovery service endpoint, EditURI link
  remove_action('wp_head', 'wlwmanifest_link'); // Display the link to the Windows Live Writer manifest file.
  remove_action('wp_head', 'index_rel_link'); // index link
  remove_action('wp_head', 'parent_post_rel_link'); // prev link
  remove_action('wp_head', 'start_post_rel_link'); // start link
  remove_action('wp_head', 'adjacent_posts_rel_link'); // Display relational links for the posts adjacent to the current post.
  remove_action('wp_head', 'wp_generator'); // Display the XHTML generator that is generated on the wp_head hook, WP version
  remove_action('wp_head', 'print_emoji_detection_script', 7);
  remove_action('wp_print_styles', 'print_emoji_styles');
});

add_action('after_setup_theme', function () {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');

  register_nav_menus(array(
    'menu' => 'Меню',
    'footer_menu' => 'Меню в футере',
  ));

  if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array('page_title' => 'Настройки', 'menu_slug' => 'options'));
  }
});

add_action('wp_enqueue_scripts', function () {
  if (is_admin()) return;

  wp_deregister_script('jquery');
  wp_enqueue_script('jquery', get_template_directory_uri() . '/js/app.js', false, null, true);
});

add_filter('upload_mimes', function ($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
});

function hint($i)
{
  $hint = get_field('hint_' . $i);
  if (!$hint) return;
  echo '<div class="form__mark"><div class="form__mark-content">' . $hint . '</div></div>';
}