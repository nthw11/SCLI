<?php

get_header();

?>
<div id="rank-page">
  <h2>intro content goes here. will be hard-coded.</h2>

  
  <?php
$ranks = new WP_Query(array(
  'posts_per_page'=> -1,
  'post_type' => 'rank',
  
));
while($ranks->have_posts()) {
  $ranks->the_post();?>

<div class="container">
  <div class="d-inline-flex rank-box">

    
    
    
    <h2 class="rank-headline"><?php the_title(); ?></h2>
    <h2 class="rank-text"> <?php the_content(); ?></h2>
  </div><!-- flex -->
</div> <!-- rank --> 



<?php
}
?>

</div><!-- rank page-->
<?php
get_footer();
?>