<?php
/*
Template Name: Boletins
*/
get_header();
?>		
<div class="container listas conteudo">
	<div class="section_header">
		<h3>
			Lista de Boletins
		</h3>
	</div>
	<div class="row">
		<div class="col-md-12">
		<?php
			$args = array('post_type'=>'boletins');
			query_posts($args);
		if ( have_posts() ) :
			while(have_posts()):
				the_post();
				$postMeta = get_post_meta($post->ID);
				$linkPDF = wp_get_attachment_url($postMeta['ieb_arquivo'][0]);
		?>
			<div class="panel" style="background: #F5F5F5" >		
				<div class="panel-heading">
					<h4><a href="<?php echo $linkPDF;?>" target="_blank" ><?php the_title();?></a></h4>
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