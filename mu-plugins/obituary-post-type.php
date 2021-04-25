<?php

function obit_post_types(){
  register_post_type('obituary', array(
    'public' => true,
    'labels' => array(
      'name'=> 'Obituaries',
      'add_new_item' => 'Add new Obituary',
      'edit_item' => 'Edit Obituary',
      'all_items'=> 'All Obituaries',
      'singular_name'=> 'Obituary'
    ),
    'menu_icon'=> 'dashicons-id-alt'
  ));
}

add_action('init', 'obit_post_types');