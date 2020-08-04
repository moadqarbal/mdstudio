
    <!-- footer section -->
    <footer class="footer bg-dark text-white py-5 ">
        <div class="container ">
            <div class="row mt-4 ">
                <div class="col text-center ">
                    <h2 class="pb-4 ">
	                    <?php if(get_theme_mod('logo_white') != '') : ?>
                            <a class="font-weight-bold " href="<?php echo esc_url(home_url('/')); ?>">
                                <img src="<?php echo esc_url( get_theme_mod( 'logo_white' ) ); ?>" alt="<?php bloginfo('name') ?>" class="wow bounceInDown footer-logo" data-wow-offset="350" data-wow-delay="0.3s">
                            </a>
	                    <?php else: ?>
                            <a class="font-weight-bold " href="<?php echo esc_url(home_url('/')); ?>">
                                <img src="<?php echo esc_url(get_template_directory_uri());  ?>/img/logo-white.png" alt="<?php bloginfo('name') ?>" class="wow bounceInDown footer-logo" data-wow-offset="350" data-wow-delay="0.3s">
                            </a>
                        <?php endif; ?>
                    </h2>
                    <p class="text-footer">
                        <i class="fas mr-1 fa-map-marker "></i> <?php echo get_theme_mod('adresse_txt' , 'Adresse exemple Adresse'); ?> </p>
                    <p class="text-footer">
                        <i class="fas mr-1 fa-envelope "></i> <a href="mailto:<?php echo get_theme_mod('gmail_txt' , 'yougmail@gmail.com'); ?>"><?php echo get_theme_mod('gmail_txt' , 'yougmail@gmail.com'); ?></a> </p>
                    <p class="text-footer">
                        <i class="fas mr-1 fa-phone "></i> <?php echo get_theme_mod('phone_txt' , '+212 00000000'); ?>
                    </p>

                    <div class="footer-social-media my-5 ">

	                    <?php if(get_theme_mod('facebook_url', 'http://www.facebook.com') != '') : ?>
                            <a class="text-white mx-2" target="_blank"
                               href="<?php echo get_theme_mod('facebook_url', 'http://www.facebook.com'); ?>">
                                <i class="fab fa-facebook fa-3x"></i>
                            </a>
	                    <?php endif; ?>
	                    <?php if(get_theme_mod('instagram_url', 'http://www.instagram.com') != '') : ?>
                            <a class="text-white mx-2" target="_blank"
                               href="<?php echo get_theme_mod('instagram_url', 'http://www.instagram.com'); ?>">
                                <i class="fab fa-instagram fa-3x"></i>
                            </a>
	                    <?php endif; ?>
	                    <?php if(get_theme_mod('twitter_url', 'http://www.twitter.com') != '') : ?>
                            <a class="text-white mx-2" target="_blank"
                               href="<?php echo get_theme_mod('twitter_url', 'http://www.twitter.com'); ?>">
                                <i class="fab fa-twitter fa-3x"></i>
                            </a>
	                    <?php endif; ?>
	                    <?php if(get_theme_mod('pinterest_p_url', 'http://www.pinterest.com') != '') : ?>
                            <a class="text-white mx-2" target="_blank"
                               href="<?php echo get_theme_mod('pinterest_p_url', 'http://www.pinterest.com'); ?>">
                                <i class="fab fa-pinterest fa-3x"></i>
                            </a>
	                    <?php endif; ?>
	                    <?php if(get_theme_mod('youtube_url', 'http://www.youtube.com') != '') : ?>
                            <a class="text-white mx-2" target="_blank"
                               href="<?php echo get_theme_mod('youtube_url', 'http://www.youtube.com'); ?>">
                                <i class="fab fa-youtube fa-3x"></i>
                            </a>
	                    <?php endif; ?>
	                    <?php if(get_theme_mod('gmail_url', 'example@gmail.com') != '') : ?>
                            <a class="text-white mx-2" target="_blank"
                               href="mailto:<?php echo get_theme_mod('gmail_url', 'example@gmail.com'); ?>">
                                <i class="fab fa-google fa-3x"></i>
                            </a>
	                    <?php endif; ?>
	                    <?php if(get_theme_mod('linkedin_url', 'http://www.linkedin.com') != '') : ?>
                            <a class="text-white mx-2" target="_blank"
                               href="<?php echo get_theme_mod('linkedin_url', 'http://www.linkedin.com'); ?>">
                                <i class="fab fa-linkedin-in  fa-3x"></i>
                            </a>
	                    <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
    </footer>





    <script src="<?php echo esc_url(get_template_directory_uri());  ?>/js/jquery.min.js "></script>
    <script src="<?php echo esc_url(get_template_directory_uri());  ?>/js/popper.min.js "></script>
    <script src="<?php echo esc_url(get_template_directory_uri());  ?>/js/bootstrap.min.js "></script>
    <script src="<?php echo esc_url(get_template_directory_uri());  ?>/js/wow.min.js "></script>
    <script>
        new WOW().init();
    </script>
    <script src="<?php echo esc_url(get_template_directory_uri());  ?>/js/lightbox.js "></script>
    <script src="<?php echo esc_url(get_template_directory_uri());  ?>/js/html5shiv.min.js "></script>
    <script src="<?php echo esc_url(get_template_directory_uri());  ?>/js/main.js "></script>

    <?php wp_footer() ?>
</body>

</html>