<?php
get_header();
the_post();
?>
    <div id="aboutus">
        <div class="container">
            <div class="section_header">
                <h3><?php the_title();?></h3>
            </div>
            <div class="row">
                <div class="col-sm-6 intro">
           			<?php the_content();?>
                </div>
                <div class="col-sm-6">
                	<?php the_post_thumbnail();?>
                    
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
                <h3><?php the_title();?></h3>
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
			
            <div class="row people">
		            <?php 
		            if(count($usuarios)):
		            	foreach($usuarios as $k=>$u):
		            ?>
				<div class="row row1">
					<div class="col-sm-6 bio_box">
					<?php
						$imgURL = get_cupp_meta($u->ID,'thumbnail');
					?>
					<img src="<?php echo $imgUrl;?>" alt="">
					<div class="info">
						<p class="name"><?php echo $u->user_nicename;?></p>
						<p class="area">Creative Director</p>
						<a href="about-us.html#" class="facebook">
							<span class="socialicons ico1"></span>
							<span class="socialicons_h ico1h"></span>
						</a>
                            <a href="about-us.html#" class="twitter">
                                <span class="socialicons ico2"></span>
                                <span class="socialicons_h ico2h"></span>
                            </a>
                            <a href="about-us.html#" class="flickr">
                                <span class="socialicons ico4"></span>
                                <span class="socialicons_h ico4h"></span>
                            </a>
                            <a href="about-us.html#" class="dribble">
                                <span class="socialicons ico6"></span>
                                <span class="socialicons_h ico6h"></span>
                            </a>
                        </div>
                    </div>
                    <?php 
                    	endforeach;
                    endif;
                    ?>
					<!-- 
                    <div class="col-sm-6 bio_box bio_boxr">
                        <img src="img/ale.png" alt="">
                        <div class="info">
                            <p class="name">Alejandra Galvan Castillo</p>
                            <p class="area">Creative Director</p>
                            <a href="about-us.html#" class="facebook">
                                <span class="socialicons ico1"></span>
                                <span class="socialicons_h ico1h"></span>
                            </a>
                            <a href="about-us.html#" class="twitter">
                                <span class="socialicons ico2"></span>
                                <span class="socialicons_h ico2h"></span>
                            </a>
                            <a href="about-us.html#" class="flickr">
                                <span class="socialicons ico4"></span>
                                <span class="socialicons_h ico4h"></span>
                            </a>
                            <a href="about-us.html#" class="dribble">
                                <span class="socialicons ico6"></span>
                                <span class="socialicons_h ico6h"></span>
                            </a>
                        </div>
                    </div>
                </div>
 				 -->
                
            </div>
        </div>
    </div>

    <!-- <div id="process">
        <div class="container">
            <div class="section_header">
                <h3>Our Process</h3>
            </div>
            <div class="row services_circles">
                <div class="col-sm-4 description">
                    <div class="text active">
                        <h4>Plan what you need.</h4>
                        <p>
                            There are many variations of passages of  this suffered alteration in some form, by injected look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to making this the first true generator  Internet.</p>
                    </div>
                    <div class="text">
                        <h4>Develop your product or service.</h4>
                        <p>
                            There are many variations of passages of  this suffered alteration in some form, by injected look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to 
                            making this the first true generator  Internet.</p>
                    </div>
                    <div class="text">
                        <h4>Design this theme to your needs.</h4>
                        <p>
                            There are many variations of passages of  this suffered alteration in some form, by injected look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to making this the first true generator  Internet.</p>
                    </div>
                </div>

                <div class="col-sm-7 areas">
                    <div class="circle active">
                        <img src="img/plan.png" />
                        <span>Plan</span>
                    </div>
                    <div class="circle">
                        <img src="img/develop.png" />
                        <span>Develop</span>
                    </div>
                    <div class="circle last_circle">
                        <img src="img/design.png" />
                        <span>Design</span>
                    </div>
                </div>
            </div>
        </div>
    </div>	 -->
<?php
get_footer();
?>