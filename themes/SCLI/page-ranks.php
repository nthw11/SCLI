<?php

get_header();

?>
<div id="rank-page" class="container primary-content" >

<div id="intro-div" class="container">
  <h2>On this page we have recorded as many soldiers as we are able to collect the details of that were commissioned from the ranks and rose to substantial rank, also included those that rose from Pte. to RSM. Should you spot inaccuracies please let us know, also you may see soldiers that have been completely missed. <a href="<php? echo site_url('/contact') ?>">Email Webmaster</a> </h2>
  <br>
  <h2>Our thanks for great help in the details go to Lawrie Hodges, Lt. Col. Eric Herrington MBE., Terry Joll and Major Stephen Taylor QM. also to Major General Barry Lane CBE for suggesting these details be added to this website.</h2>
  <br>
  <h2>Due to the passage of time it is not easy to get these details accurate so please do not be offended if there are mistakes, tell us and we will be pleased to <a href="<php? echo site_url('/contact') ?>">correct them.</a> </h2></h2>

</div><!-- intro div-->

<div class="row" id="ranks-container">

  
  <div id="left-column" class="ranks-column col-sm-6">
    <article>
      
    <?php
  $args = array(
    'posts_per_page'=> -1,
    'post_type' => 'rank',
    'order' => 'ASC'
  );
  $the_query = new WP_Query($args);
    if ($the_query->have_posts()){
      ?>
      <div class="rank-box">

        <?php while (  $the_query->have_posts() ) :  $the_query->the_post();
                    if($the_query->current_post % 2 == 1)
                    continue; ?>
                        <h2><?php the_title() ?></h2>
                <?php endwhile; ?>
              </div><!-- .rank-box -->
      <?php 
    }
    ?>

</article>
</div><!-- #left-column-->

<div class="ranks-column col-sm-6" id="right-column">
<article>
  <?php
    $the_query->rewind_posts();
    if ( $the_query->have_posts() ) {
      
      ?>
             <div class="rank-box">
               <?php while (  $the_query->have_posts() ) :  $the_query->the_post();
                        if($the_query->current_post % 2 == 0)
                        continue; ?>
                   <h2><?php the_title() ?></h2>
                   <?php endwhile; ?>
                    </div><!-- .rank-box -->
            
                    <?php
        
      } ?>
</article>
</div>


</div><!-- #ranks-container-->
</div><!-- rank page-->
<?php
get_footer();
?>