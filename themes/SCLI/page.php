<?php

get_header();
while ( have_posts() ) {
?>
<div class="container standard-page-content">
<h1>test test test</h1>
	<?php

the_post();
the_content();
}
?>

</div>
<?php
get_footer();
?>