<?php

get_header();
while ( have_posts() ) {
?>
<div class="container standard-page-content">

	<?php

the_post();
the_content();
}
?>

</div>
<?php
get_footer();
?>