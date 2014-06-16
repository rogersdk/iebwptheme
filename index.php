<?php get_header(); ?>
	<section id="feature_slider" class="lol">
		<?php
		$args = array(
		    'post_type' =>  'post',
	        'posts_per_page'    =>  '5'
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
        	'offset'		=> 3
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
            
                <a href="#" >
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
<?php /* ?>
    <div id="showcase">
        <div class="container">
            <div class="section_header">
                <h3>Our Services</h3>
            </div>            
            <div class="row feature_wrapper">
                <!-- Features Row -->
                <div class="features_op1_row">
                    <!-- Feature -->
                    <div class="col-sm-4 feature first">
                        <div class="img_box">
                            <a href="services.html">
                                <img src="img/service1.png">
                                <span class="circle"> 
                                    <span class="plus">&#43;</span>
                                </span>
                            </a>
                        </div>
                        <div class="text">
                            <h6>Responsive theme</h6>
                            <p>
                                There are many variations of passages of generators on the  embarrassing hidden in   content here making it look like.
                            </p>
                        </div>
                    </div>
                    <!-- Feature -->
                    <div class="col-sm-4 feature">
                        <div class="img_box">
                            <a href="services.html">
                                <img src="img/service2.png">
                                <span class="circle"> 
                                    <span class="plus">&#43;</span>
                                </span>
                            </a>
                        </div>
                        <div class="text">
                            <h6>Easy customization</h6>
                            <p>
                                There are many variations of passages of generators on the  embarrassing hidden in   content here making it look like.
                            </p>
                        </div>
                    </div>
                    <!-- Feature -->
                    <div class="col-sm-4 feature last">
                        <div class="img_box">
                            <a href="services.html">
                                <img src="img/service3.png">
                                <span class="circle"> 
                                    <span class="plus">&#43;</span>
                                </span>
                            </a>
                        </div>
                        <div class="text">
                            <h6>Made with love</h6>
                            <p>
                                There are many variations of passages of generators on the  embarrassing hidden in   content here making it look like.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="features">
        <div class="container">
            <div class="section_header">
                <h3>Features</h3>
            </div> 
            <div class="row feature">
                <div class="col-sm-6">
                    <img src="img/showcase1.png" class="img-responsive" />
                </div>
                <div class="col-sm-6 info">
                    <h3>
                        <img src="img/features-ico1.png" />
                        Beautiful on all devices
                    </h3>
                    <p>
                        There are many variations of passages of Lorem Ipsum available, but the randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.
                    </p>
                </div>
            </div>
            <div class="row feature">
                <div class="col-sm-6 pic-right">
                    <img src="img/showcase2.png" class="pull-right img-responsive" />
                </div>
                <div class="col-sm-6 info info-left">
                    <h3>
                        <img src="img/features-ico2.png" />
                        Blog page included
                    </h3>
                    <p>
                        There are many variations of passages of Lorem Ipsum available, but the randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.
                    </p>
                </div>                
            </div>
            <div class="row feature">
                <div class="col-sm-6">
                    <img src="img/showcase3.png" class="img-responsive" />
                </div>
                <div class="col-sm-6 info">
                    <h3>
                        <img src="img/features-ico3.png" />
                        Simple and clean coming soon page
                    </h3>
                    <p>
                        There are many variations of passages of Lorem Ipsum available, but the randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.
                    </p>
                </div>
            </div>
        </div>
    </div>


    Pricing Option
    <div id="in_pricing">
        <div class="container">
            <div class="section_header">
                <h3>Pricing</h3>
            </div>

            <div class="row charts_wrapp">
                <!-- Plan Box -->
                <div class="col-sm-4">
                    <div class="plan">
                        <div class="wrapper">
                            <h3>Lite</h3>
                            <div class="price">
                                <span class="dollar">$</span> 
                                <span class="qty">35</span> 
                                <span class="month">/month</span>
                            </div>
                            <div class="features">
                                <p>
                                    <strong>10</strong>
                                    Shared Projects
                                </p>
                                <p>
                                    <strong>4</strong>
                                    Team Members
                                </p>
                                <p>
                                    <strong>10</strong>
                                    Storage
                                </p>
                            </div>
                            <a class="order" href="pricing.html">ORDER NOW</a>
                        </div>
                    </div>
                </div>
                <!-- Plan Box -->
                <div class="col-sm-4 pro">
                    <div class="plan">
                        <div class="wrapper">
                            <img class="ribbon" src="img/badge.png">
                            <h3>Pro</h3>
                            <div class="price">
                                <span class="dollar">$</span> 
                                <span class="qty">99</span> 
                                <span class="month">/month</span>
                            </div>
                            <div class="features">
                                <p>
                                    <strong>10</strong>
                                    Shared Projects
                                </p>
                                <p>
                                    <strong>25</strong>
                                    Team Members
                                </p>
                                <p>
                                    <strong>Unlimited</strong>
                                     Storage
                                </p>
                                <p>
                                    <strong>Plus </strong>
                                    Phone Support
                                </p>
                            </div>
                            <a class="order" href="pricing.html">ORDER NOW</a>
                        </div>
                    </div>
                </div>
                <!-- Plan Box -->
                <div class="col-sm-4 standar">
                    <div class="plan">
                        <div class="wrapper">
                            <h3>Standard</h3>
                            <div class="price">
                                <span class="dollar">$</span> 
                                <span class="qty">65</span> 
                                <span class="month">/month</span>
                            </div>
                            <div class="features">
                                <p>
                                    <strong>10</strong>
                                    Shared Projects
                                </p>
                                <p>
                                    <strong>4</strong>
                                    Team Members
                                </p>
                                <p>
                                    <strong>10</strong>
                                    Storage
                                </p>
                            </div>
                            <a class="order" href="pricing.html">ORDER NOW</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="start">
                <p>Start your free, no-risk, 14 day trial! </p>
                <a href="pricing.html">Start Now!</a>
            </div>
        </div>
    </div>

    <div id="clients">
        <div class="container">
            <div class="section_header">
                <h3>Clients</h3>
            </div>
            <div class="row">
                <div class="col-md-2 col-sm-4 client">
                    <div class="img client1"></div>
                </div>
                <div class="col-md-2 col-sm-4 client">
                    <div class="img client2"></div>
                </div>
                <div class="col-md-2 col-sm-4 client">
                    <div class="img client3"></div>
                </div>
                <div class="col-md-2 col-sm-4 client">
                    <div class="img client1"></div>
                </div>
                <div class="col-md-2 col-sm-4 client">
                    <div class="img client2"></div>
                </div>
                <div class="col-md-2 col-sm-4 client">
                    <div class="img client3"></div>
                </div>
            </div>
        </div>
    </div>
    */?>
<?php get_footer(); ?>