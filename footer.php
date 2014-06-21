    <!-- starts footer -->
    <footer id="footer">
        <div class="container">
            <div class="row sections">
                <div class="col-sm-4 recent_posts">
                    <h3 class="footer_header">
                        Recentes
                    </h3>
                    <?php 
                        $args = array(
                            'post_type'    =>  array('post','beletim-informativo','testemunho'),
                            'posts_per_page'	=>	2,
                        );
                        query_posts($args);
                        if(have_posts()):
                            while(have_posts()):
                                the_post();
                    ?>
                    <div class="post">
                        <a href="blogpost.html">
                            <?php the_post_thumbnail('testemunho',array('class'=>'img-circle'));?>
                        </a>
                        <div class="date">
                            <?php the_time('D, d M'); ?>
                            <!-- Wed, 12 Dec -->
                        </div>
                        <a href="blogpost.html" class="title">
                            <?php the_title(); ?>
                            <!-- Randomised words which don't look embarrasing hidden. -->
                        </a>
                    </div>
                    <?php 
                            endwhile;
                        endif;
                    ?>
                    <!-- <div class="post">
                        <a href="blogpost.html">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/recent_post2.png" class="img-circle" />
                        </a>
                        <div class="date">
                            Mon, 12 Dec
                        </div>
                        <a href="blogpost.html" class="title">
                            Randomised words which don't look embarrasing hidden.
                        </a>
                    </div> -->
                </div>
                <div class="col-sm-4 testimonials">
                    <h3 class="footer_header">
                        Testemunho Recente
                    </h3>
                    
                    <?php 
                    	$args = array(
                    		'post_type'	=> 'testemunhos',
                    		'showposts'	=>	1
                    	);
                    	
                    	query_posts($args);
                    	if(have_posts()):
                    		while(have_posts()):
                    			the_post();
                    ?>
                    <div class="wrapper">
                        <div class="quote">
                            <span></span>
                            	<?php the_excerpt();?>
                            <span></span>
                        </div>
                        <div class="author">
                        	<?php the_post_thumbnail('testemunho',array('class'=>'img-circle'));?>
                            <div class="name"><?php the_author();?></div>
                            <div class="info">
                                <?php the_date();?>
                            </div>
                        </div>
                    </div>
                    <?php 
                    		endwhile;
                    	endif;
                    ?>
                </div>
                <div class="col-sm-4 contact">
                    <h3 class="footer_header">
                        Entre em Contato
                    </h3>
                    <div id="retorno" class="hide text-center">
	                    <h5>Mensagem enviada com sucesso!</h5>
                    </div>
                    <form id="form-contato" action="<?php bloginfo('url') ?>/wp-admin/admin-ajax.php" method="post">
                        <input type="hidden" name="action" value="enviarContato" />
                        <input type="text" name="nome" placeholder="Seu Nome" required />
                        <input type="text" name="email" placeholder="Seu email" required />
                        <textarea name="mensagem" rows="3" placeholder="Digite sua Mensagem" required></textarea>
                        <input type="submit" value="Enviar Mensagem" />
                    </form>
                </div>
            </div>
            <div class="row credits">
                <div class="col-md-12">
                    <!--
                    <div class="row social">
                        <div class="col-md-12">
                            <a href="index.html#" class="facebook">
                                <span class="socialicons ico1"></span>
                                <span class="socialicons_h ico1h"></span>
                            </a>
                            <a href="index.html#" class="twitter">
                                <span class="socialicons ico2"></span>
                                <span class="socialicons_h ico2h"></span>
                            </a>
                            <a href="index.html#" class="gplus">
                                <span class="socialicons ico3"></span>
                                <span class="socialicons_h ico3h"></span>
                            </a>
                            <a href="index.html#" class="flickr">
                                <span class="socialicons ico4"></span>
                                <span class="socialicons_h ico4h"></span>
                            </a>
                            <a href="index.html#" class="pinterest">
                                <span class="socialicons ico5"></span>
                                <span class="socialicons_h ico5h"></span>
                            </a>
                            <a href="index.html#" class="dribble">
                                <span class="socialicons ico6"></span>
                                <span class="socialicons_h ico6h"></span>
                            </a>
                            <a href="index.html#" class="behance">
                                <span class="socialicons ico7"></span>
                                <span class="socialicons_h ico7h"></span>
                            </a>
                        </div>
                    </div>
                    -->
                    <div class="row copyright">
                    	<div class="col-md-12">
							<img src="<?php echo get_template_directory_uri(); ?>/images/somente-logo-130x104.png"  />
                    	</div>
                        <div class="col-md-12">
                            © <?php the_time('Y');?> Igreja Evangélica Batista Zona Sul.
                        </div>
                    </div>
                </div>            
            </div>
        </div>
    </footer>
	
	
	
	
    <!-- Scripts -->
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js" type="text/javascript" ></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/libs/jquery.validate.min.js" type="text/javascript" ></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/libs/jquery.forms.js" type="text/javascript" ></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/libs/fancybox.min.js" type="text/javascript" ></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/theme.js" type="text/javascript" ></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/index-slider.js" type="text/javascript" ></script>
    
    
    
    <?php wp_footer(); ?>
</body>
</html>