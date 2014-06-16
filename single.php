<?php
get_header();
the_post();
?>
<div class="container">
	<div class="section_header">
		<h3>
		<?php the_title();?>
		</h3>
	</div>

	<div class="row">
		<div class="intro">
		<?php the_content();?>
		</div>
	</div>
</div>
<?php
get_footer();
?>