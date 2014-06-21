<?php
get_header();
the_post();
?>
<div id="aboutus">
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
			<?php the_post_thumbnail('',array('class'=>'img-responsive'));?>

			</div>
		</div>
	</div>
</div>

<?php
$args = array('post_type'=>'page', 'name'=>'equipe-pastoral');
query_posts($args);
the_post();
?>
<div id="team">
	<div class="container">
		<div class="section_header">
			<h3>
			<?php the_title();?>
			</h3>
		</div>
		<?php
		$args = array(
					'blog_id'      => $GLOBALS['blog_id'],
					'meta_query'   => array(),
					'include'      => array(),
					'exclude'      => array(),
					'orderby'      => 'user_nicename',
					'order'        => 'ASC',
					'count_total'  => false,
					'fields'       => 'all',
		);
		$usuarios = get_users($args);

		?>
		<div class="row people text-center">
		<?php
		if(count($usuarios==null)):
			foreach($usuarios as $k=>$u):
				$userMeta = get_user_meta($u->ID);
				$imgUrl = get_cupp_meta($u->ID,'thumbnail');
		?>
			<div class="col-md-6 bio_box">
				<img src="<?php echo $imgUrl;?>" alt="" class="img-circle" />
				<div class="info">
					<p class="name">
					<?php echo $userMeta['first_name'][0].' '.$userMeta['last_name'][0];?>
					</p>
					<p class="area">
					<?php echo $userMeta['description'][0]?>
					</p>
				</div>
				
			</div>
		<?php
			endforeach;
		?>
		</div>
		<?php
		endif;
		?>
		
	</div>
</div>

<div class="vis-val-obj text-center">
	<div class="container">
	<?php 
		$args = array('post_type'=>'page','name'=>'visao');
		query_posts($args);
		if(have_posts()):
			the_post();
	?>
		<div class="visao row">
			<div class="section_header">
				<h3><?php the_title();?></h3>
			</div>
			<div class="col-md-12">
				<?php the_content();?>
			</div>
		</div>
	<?php
		endif;
	?>
	<?php 
		$args = array('post_type'=>'page','name'=>'missao');
		query_posts($args);
		if(have_posts()):
			the_post();
	?>
		<div class="missao row">
			<div class="section_header">
				<h3><?php the_title();?></h3>
			</div>
			<div class="col-md-12">
				<?php the_content();?>
			</div>
		</div>
	<?php
		endif;
	?>
	
	<?php
		$args = array('post_type'=>'page','name'=>'valores');
		query_posts($args);
		if(have_posts()):
			the_post();
	?>
		<div class="valores row">
			<div class="section_header">
				<h3><?php the_title();?></h3>
			</div>
			<div class="col-md-12">
				<?php the_content();?>
			</div>
		</div>
	<?php
		endif;
	?>	
	
	</div>
</div>


<?php
get_footer();
?>