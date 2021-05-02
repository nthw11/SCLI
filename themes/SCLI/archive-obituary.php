<?php


get_header();
get_header('obit');
?>

<?php
$obituaries = new WP_Query(array(
  'posts_per_page'=> 10,
  'post_type' => 'obituary',
  'meta_key' => 'obit_date',
  'orderby' => 'meta_value_num',
  
));
while($obituaries->have_posts()) {
  $obituaries->the_post();?>

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