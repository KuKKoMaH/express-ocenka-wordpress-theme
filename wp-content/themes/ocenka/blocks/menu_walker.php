<?php

class Walker_Menu extends Walker_Nav_Menu
{
  function start_lvl(&$output, $depth = 0, $args = array())
  {
    $output .= "\n";
  }

  function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
  {
    $attributes = !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
    $attributes .= !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
    $attributes .= !empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
    $attributes .= !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';

    $have_subitem = in_array('menu-item-has-children', $item->classes);
    $item_output = sprintf('%1$s<a class="footer__link" %2$s>%3$s%4$s%5$s</a> %6$s',
      $args->before,
      $attributes,
      $args->link_before,
      apply_filters('the_title', $item->title, $item->ID),
      $args->link_after,
      $args->after
    );
    $output .= $item_output;


  }

  function end_el(&$output, $item, $depth = 0, $args = array())
  {
    $output .= "\n";
  }
}