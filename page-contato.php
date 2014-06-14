<?php
get_header();
?>
<div id="contact">
    <div class="container">
        <div class="section_header">
            <h3>Entre em Contato</h3>
        </div>
        <div class="row contact">
            <p>
                We’d love to hear from you. Interested in working together? Fill out the form below with some info about your project and I will get back to you as soon as I can. Please allow a couple days for me to respond.</p>
            <form action="<?php bloginfo('url'); ?>/wp-admin/admin-ajax.php"  method="post">
                <input type="hidden" name="action" value="enviarContato" />
                <div class="row form">
                    <div class="col-sm-6 row-col">
                        <div class="box">
                            <input class="name form-control" type="text" placeholder="Nome" />
                            <input class="mail form-control" type="text" placeholder="Email" />
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="box">
                            <textarea class="form-control" name="mensagem" placeholder="Digite a mensagem aqui..." ></textarea>
                        </div>
                    </div>
                </div>

                <div class="row submit">
                    <div class="col-md-5 box">
                        <label class="checkbox">
                            <input type="checkbox">Inscreva-se para Newsletter
                        </label>
                    </div>
                    <div class="col-md-3 right">
                        <input type="submit" value="Send your message">
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="map">
        <div class="container">
            <div class="box_wrapp">
                <div class="box_cont">
                    <div class="head">
                        <h6>Contato</h6>
                    </div>
                    <ul class="street">
                        <li>2301 East Lamar Blvd. Suite 140.</li>
                        <li>City, Arlington. United States,</li>
                        <li>Zip Code, TX 76006.</li>
                        <li class="icon icontop">
                            <span class="contacticos ico1"></span>
                            <span class="text">1 817 274 2933</span>
                        </li>
                        <li class="icon">
                            <span class="contacticos ico2"></span>
                            <a class="text" href="contact.html#">bootstrap@twitter.com</a>
                        </li>
                    </ul>

                    <!-- <div class="head headbottom">
                        <h6>Visite-nos</h6>
                    </div>
                    <p>We’ve prepared a simple project planner to get to know you and your project better.</p>
                    -->
                    
                    <a href="contact.html#" class="btn">Let's get started</a>
                </div>
            </div>
        </div>
        <iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=-7.169513,-34.83736&amp;num=1&amp;t=h&amp;ie=UTF8&amp;ll=-7.169515,-34.837365&amp;spn=0.001506,0.002642&amp;z=14&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?q=-7.169513,-34.83736&amp;num=1&amp;t=h&amp;ie=UTF8&amp;ll=-7.169515,-34.837365&amp;spn=0.001506,0.002642&amp;z=14&amp;source=embed"></iframe>
    </div>
</div>
<?php
get_footer();
?>