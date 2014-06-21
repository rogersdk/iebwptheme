<?php 
get_header();
the_post();

$postMeta = get_post_meta($post->ID);

?>
	<div class="listas">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2><?php the_title();?></h2>
					<?php the_content();?>			
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 text-center">
					<div class="panel">
						<div class="panel-heading">
							<h3>Líderes</h3>
						</div>
						<div class="panel-body">
							<?php
							if(isset($postMeta['ieb_lider'][0])):
								foreach(unserialize($postMeta['ieb_lider'][0]) as $k=>$l):
							?>
								<p><?php echo $l;?></p>
							<?php
								endforeach;
							endif;
							?>
						</div>
					
					</div>
				</div>
				
				<div class="col-md-6 text-center">
					<div class="panel">
						<div class="panel-heading">
							<h3>Membros</h3>
						</div>
						<div class="panel-body">
							<?php
							if(isset($postMeta['ieb_membros'][0])):
								foreach(unserialize($postMeta['ieb_membros'][0]) as $k=>$l):
							?>
								<p><?php echo $l;?></p>
							<?php
								endforeach;
							endif;
							?>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="panel">
					<div class="panel-heading"><h4>Galeria de Fotos</h4></div>
					
					<div class="galeria col-md-12 panel-body">
						<?php 
						
						if ( isset( $postMeta['ieb_galeria'] ) ):
							foreach($postMeta['ieb_galeria'] as $k=>$g):
								$postImg = get_post($g);
								$thumb = wp_get_attachment_image($g,'x-small-image');
						?>
							<div class="col-md-3 item thumbnail">
								<a class="fancybox" rel="group" href="<?php echo $postImg->guid;?>" title="<?php echo $postImg->post_title;?>" >
									<?php echo $thumb;?>
								</a>
							</div>
						<?php
							endforeach;
						endif;
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php
get_footer(); 
?>