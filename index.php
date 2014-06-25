<?php get_header(); ?>
	<section id="feature_slider" class="lol">
		<?php
		$args = array(
		    'post_type' =>  'post',
	        'posts_per_page'    =>  '5',
			'meta_key'	=>	'ieb_destaque',
			'meta_value'	=>	1
		);
		query_posts($args);
		if(have_posts()):
			while(have_posts()):
                the_post();
                $url = get_template_directory_uri().'/img/backgrounds/aqua.jpg';
                //$url = 'http://cleancanvas.herokuapp.com/img/backgrounds/color-splash.jpg';
        ?>
            <article id="" class="slide" style="background:url(<?php echo "'$url'"; ?>);" >
                <?php the_post_thumbnail('destaque-image',array('class'=>'asset left-30 sp600 t120 z1 imgshadow')); ?>
                 <div class="info">
                    <h2><a style="color:#fff;"  href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                </div>
            </article>
        <?php
            endwhile;
        endif;
        ?>    
</section>

<div id="home_content" class="container">
    <div class="section_header">
        <h3>Notícias Recentes</h3>
    </div>

    <div class="row">

        <?php
        $args = array(
            'post_type'     =>  'post',
            'posts_per_page'   => 3,
        );

        query_posts($args);

        if(have_posts()):
            while(have_posts()):
                the_post();
        ?>
        <div class="col-sm-4 text-center">
            
                <div class="caption">
                    <h4>
                        <a href="<?php the_permalink();?>">
                        <?php the_title(); ?>
                        </a>
                    </h4>    
                </div>
            
                <a href="<?php the_permalink();?>" >
                    <?php the_post_thumbnail('x-small-image',array('class'=>'img-circle')); ?>
                </a>
                
                <p>
                    <?php the_excerpt(); ?>
                </p>
            
        </div>        
        <?php
            endwhile;
        endif;
        ?>



        <!-- <div class="col-sm-4">
            <h4>
                <a href="#">Missionários da Juvep chegam hoje na Paraíba</a>
            </h4>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat...
            </p>
        </div>
        
        <div class="col-sm-4">
            <h4><a href="#">Missionários da Juvep chegam hoje na Paraíba</a></h4>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat...
            </p>
        </div>

        <div class="col-sm-4">
            <h4><a href="#">Missionários da Juvep chegam hoje na Paraíba</a></h4>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat...
            </p>
        </div> -->


    </div>


</div>
<?php get_footer(); ?>