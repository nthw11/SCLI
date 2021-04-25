<?php

function scli_files(){
  wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
  wp_enqueue_style('bootstrap-cdn', '//cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css');
  wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css2?family=PT+Serif:wght@400;700&display=swap');
  wp_enqueue_style('scli-main-styles', get_theme_file_uri('/style.css'));
}

add_action('wp_enqueue_scripts', 'scli_files');




?>