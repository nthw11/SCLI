<?php

get_header();

?>
<div id="obit-page-main-div" class="container-fluid">
<div class="row">
<div id="obit-left-column" class="col-sm-12 col-md-2">
<h2 class="obit-header">SCLI Obituaries</h2>
<div class="spacer">
</div><!-- spacer div-->
<div class="spacer">
</div><!-- spacer div-->
<div id="obit-nav">
<ul>
<li><a href="<?php echo site_url('#')?>">Field Marshal Lord Harding of Petherton</a></li>
<li><a href="<?php echo site_url('#')?>">Colonel of The Regiment</a></li>
<li><a href="<?php echo site_url('#')?>">1 SCLI Commanding Officers</a></li>
<li><a href="<?php echo site_url('#')?>">1959 to 1972</a></li>
<li><a href="<?php echo site_url('#')?>">1973 to 1990</a></li>
<li><a href="<?php echo site_url('#')?>">1991 to 2000</a></li>
<li><a href="<?php echo site_url('#')?>">2001 to 2008</a></li>
<li><a href="<?php echo site_url('#')?>">2009 to 2013</a></li>
<li><a href="<?php echo site_url('#')?>">2014 to 2019</a></li>
<li><a href="<?php echo site_url('#')?>">2020 to 2030</a></li>
</ul>


</div><!-- obit nav -->
</div><!-- left column -->

<div id="obit-right-column" class="col-sm-12 col-md-10" >
<div id="obituaries-column-header">
<h2 class="obit-header" id="obit-right-header">SCLI Obituaries</h2>
</div><!-- obituaries column header-->
<div id="obit-badge">
<img id="scli-badge-main" class="mx-auto d-block" src="<?php echo get_theme_file_uri('/img/scli_150.jpg')?>" alt="SCLI Badge">
<h1>Rest in Peace</h1>

</div><!-- obit badge-->

<?php
$obituaries = new WP_Query(array(
  'posts_per_page'=> 10,
  'post_type' => 'obituary'
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