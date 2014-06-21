<?php
get_header();
?>
<div id="service_1">
	<div class="container">
		<div class="row">
			<div class="section_header">
				<h3>Ministérios da Igreja</h3>
			</div>
		</div>
		<div class="row service_wrapper">
		<?php
		if ( have_posts() ) :
			while(have_posts()):
				the_post();
		?>
                <div class="col-sm-4">
                    <div class="feature">
                        <div class="img_box">
                            <a href="<?php the_permalink();?>">
                                <?php the_post_thumbnail('small-image',array('class'=>'img-responsive'));?>
                                <span class="circle"> 
                                    <span class="plus">+</span>
                                </span>
                            </a>
                        </div>
                        <div class="text">
                            <h4><?php the_title();?></h4>
                            <p><?php the_excerpt();?></p>
                        </div>
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