<?php

get_header();
get_header('obit');

?>

<?php
$dateRange_19591972 = new WP_Query(array(
  'posts_per_page'=> -1,
  'post_type' => 'obituary',
  'meta_key' => 'obituary_range',
  'orderby' => 'meta_value_num',
  'meta_query' => array(
    array(
      'key'=> 'obituary_range',
      'compare' => '=',
      'value' => '2020 to 2030'
    )
  )
  
));
while($dateRange_19591972->have_posts()) {
  $dateRange_19591972->the_post();?>

 <div class="obit container">
   <hr>
 <h2 class="obit-headline"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
 <p class="obit-text"> <?php the_content(); ?></p>
 </div> <!-- obit --> 
  
  
 
 <?php
}
?>
</div><!-- right column-->


</div><!-- outside row div-->
</div><!-- main div-->
<?php
get_footer();
?>