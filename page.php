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
		<div class="col-sm-6 intro">
			<?php the_content();?>
		</div>
		<div class="col-sm-6">
			<?php the_post_thumbnail('destaque-image',array('class'=>'img-responsive'));?>
		</div>
	</div>
</div>
<?php get_footer();?>