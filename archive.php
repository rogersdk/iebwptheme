<?php
get_header();
?>		
<div class="container">
	<div class="section_header">
		<h3>
			Lista
		</h3>
	</div>
	<?php
			query_posts($args);
		if ( have_posts() ) :
			while(have_posts()):
				the_post();
		?>
	<div class="row">
		
		
		<?php the_title();?>
		
		<?php the_content();?>
		
	</div>
	<?php 
		endwhile;
	endif;
	?>
</div>
<?php
endif;
get_footer();
?>