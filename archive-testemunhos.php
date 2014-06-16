<?php
get_header();
?>		
<div class="container">
	<div class="section_header">
		<h3>
			Lista
		</h3>
	</div>
	<div class="row">
		<?php
		if ( have_posts() ) :
			while(have_posts()):
				the_post();
				the_title(); 
			endwhile;
		endif;
		?>
	</div>
</div>
<?php
get_footer();
?>