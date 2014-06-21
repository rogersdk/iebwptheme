<?php
/*
Template Name: Archives
*/
get_header();
?>		
<div class="container listas">
	<div class="section_header">
		<h3>
			<?php
				$postType = get_post_type_object($post->post_type);
				echo $postType->labels->all_items;
			?>
		</h3>
	</div>
	<div class="row">
		<div class="col-md-12">
	<?php
		if ( have_posts() ) :
			while(have_posts()):
				the_post();
		?>
				<div class="panel panel-default">		
					<div class="panel-heading">
						<h4><a href="<?php the_permalink();?>" ><?php the_title();?></a></h4>
					</div>
					<div class="panel-body">
						<?php the_content();?>
					</div>
				</div>
	<?php 
		endwhile;
	endif;
	?>
		</div>
	</div>
</div>
<?php
get_footer();
?>