<?php

function rank_post_types(){
  register_post_type('rank', array(
    'show_in_rest' => true,
    'supports' => array('title', 'editor', 'excerpt'),
    'has_archive' => true,
    'public' => true,
    'labels' => array(
      'name'=> 'Ranks',
      'add_new_item' => 'Add new Rank',
      'edit_item' => 'Edit Rank',
      'all_items'=> 'All Ranks',
      'singular_name'=> 'rank'
    ),
    'menu_icon'=> 'dashicons-star-filled'
  ));
}

add_action('init', 'rank_post_types');