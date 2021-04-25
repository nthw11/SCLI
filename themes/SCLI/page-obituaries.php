<?php

get_header();

?>






<?php
$obituaries = new WP_Query(array(
  'posts_per_page'=> 10,
  'post_type' => 'obituary'
));
while($obituaries->have_posts()) {
  $obituaries->the_post();?>
  <h3><?php the_title();?></h3>
  
  <!-- the_content(); -->
<?php
}
?>

</div>
<?php
get_footer();
?>