<?php
/*
	Template Name: About / a propos
*/
?>
<?php get_header() ?>

    <!-- about-page section -->
    <section class="about-page py-5">
        <div class="container">
            <div class="row">
                <div class="col text-center py-3">
                    <h1 class="text-uppercase d-inline">
                        A propos de Nous
                    </h1>
                </div>
            </div>

            <div class="row">
                <div class="col text-center">
                    <div class="about-page-text py-5">
                        <p class="lead text-muted">
                            <?php echo get_theme_mod('about_p') ?>
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">

	            <?php if(get_theme_mod('person1_name') != '') : ?>
                    <div class="col-md-4">
                        <div class="photographer py-3">
                            <figure class="imghvr-zoom-out">
		                        <?php if(get_theme_mod('person1') != '') : ?>
                                    <img src="<?php echo esc_url(get_theme_mod('person1'))  ?>" class="w-100" style="height: 280px;" alt="<?php bloginfo('name') ?>">
			                    <?php else: ?>
                                    <img src="https://via.placeholder.com/900" class="w-100" style="height: 280px;" alt="<?php bloginfo('name') ?>">
			                    <?php endif; ?>
                                <div class="text-center py-3 lead">
		                            <?php echo get_theme_mod('person1_name')  ?>
                                </div>
                                <figcaption>
                                    <h3><?php echo get_theme_mod('person1_name')  ?></h3>
                                    <p class="mt-3">
                                        <a href="<?php echo esc_url(get_theme_mod('facebook_txt1'))  ?>" class="btn btn-outline-light
                                    no-raduis mr-2">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                        <a href="<?php echo esc_url(get_theme_mod('instagram_txt1'))  ?>" class="btn btn-outline-light
                                    no-raduis mr-2">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </p>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
	            <?php endif; ?>
	            <?php if(get_theme_mod('person2_name') != '') : ?>
                    <div class="col-md-4">
                        <div class="photographer py-3">
                            <figure class="imghvr-zoom-out">
		                        <?php if(get_theme_mod('person2') != '') : ?>
                                    <img src="<?php echo esc_url(get_theme_mod('person2'))  ?>" class="w-100" style="height: 280px;" alt="<?php bloginfo('name') ?>">
			                    <?php else: ?>
                                    <img src="https://via.placeholder.com/900" class="w-100" style="height: 280px;" alt="<?php bloginfo('name') ?>">
			                    <?php endif; ?>
                                <div class="text-center py-3 lead">
		                            <?php echo get_theme_mod('person2_name')  ?>
                                </div>
                                <figcaption>
                                    <h3><?php echo get_theme_mod('person2_name')  ?></h3>
                                    <p class="mt-3">
                                        <a href="<?php echo esc_url(get_theme_mod('facebook_txt2'))  ?>" class="btn btn-outline-light
                                    no-raduis mr-2">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                        <a href="<?php echo esc_url(get_theme_mod('instagram_txt2'))  ?>" class="btn btn-outline-light
                                    no-raduis mr-2">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </p>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
	            <?php endif; ?>
	            <?php if(get_theme_mod('person3_name') != '') : ?>
                    <div class="col-md-4">
                        <div class="photographer py-3">
                            <figure class="imghvr-zoom-out">
		                        <?php if(get_theme_mod('person3') != '') : ?>
                                    <img src="<?php echo esc_url(get_theme_mod('person3'))  ?>" class="w-100" style="height: 280px;" alt="<?php bloginfo('name') ?>">
			                    <?php else: ?>
                                    <img src="https://via.placeholder.com/900" class="w-100" style="height: 280px;" alt="<?php bloginfo('name') ?>">
			                    <?php endif; ?>
                                <div class="text-center py-3 lead">
		                            <?php echo get_theme_mod('person3_name')  ?>
                                </div>
                                <figcaption>
                                    <h3><?php echo get_theme_mod('person3_name')  ?></h3>
                                    <p class="mt-3">
                                        <a href="<?php echo esc_url(get_theme_mod('facebook_txt3'))  ?>" class="btn btn-outline-light
                                    no-raduis mr-2">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                        <a href="<?php echo esc_url(get_theme_mod('instagram_txt3'))  ?>" class="btn btn-outline-light
                                    no-raduis mr-2">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </p>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
	            <?php endif; ?>
	            <?php if(get_theme_mod('person4_name') != '') : ?>
                    <div class="col-md-4">
                        <div class="photographer py-3">
                            <figure class="imghvr-zoom-out">
		                        <?php if(get_theme_mod('person4') != '') : ?>
                                    <img src="<?php echo esc_url(get_theme_mod('person4'))  ?>" class="w-100" style="height: 280px;" alt="<?php bloginfo('name') ?>">
			                    <?php else: ?>
                                    <img src="https://via.placeholder.com/900" class="w-100" style="height: 280px;" alt="<?php bloginfo('name') ?>">
			                    <?php endif; ?>
                                <div class="text-center py-3 lead">
		                            <?php echo get_theme_mod('person4_name')  ?>
                                </div>
                                <figcaption>
                                    <h3><?php echo get_theme_mod('person4_name')  ?></h3>
                                    <p class="mt-3">
                                        <a href="<?php echo esc_url(get_theme_mod('facebook_txt4'))  ?>" class="btn btn-outline-light
                                    no-raduis mr-2">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                        <a href="<?php echo esc_url(get_theme_mod('instagram_txt4'))  ?>" class="btn btn-outline-light
                                    no-raduis mr-2">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </p>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
	            <?php endif; ?>
	            <?php if(get_theme_mod('person5_name') != '') : ?>
                    <div class="col-md-4">
                        <div class="photographer py-3">
                            <figure class="imghvr-zoom-out">
		                        <?php if(get_theme_mod('person5') != '') : ?>
                                    <img src="<?php echo esc_url(get_theme_mod('person5'))  ?>" class="w-100" style="height: 280px;" alt="<?php bloginfo('name') ?>">
			                    <?php else: ?>
                                    <img src="https://via.placeholder.com/900" class="w-100" style="height: 280px;" alt="<?php bloginfo('name') ?>">
			                    <?php endif; ?>
                                <div class="text-center py-3 lead">
		                            <?php echo get_theme_mod('person5_name')  ?>
                                </div>
                                <figcaption>
                                    <h3><?php echo get_theme_mod('person5_name')  ?></h3>
                                    <p class="mt-3">
                                        <a href="<?php echo esc_url(get_theme_mod('facebook_txt5'))  ?>" class="btn btn-outline-light
                                    no-raduis mr-2">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                        <a href="<?php echo esc_url(get_theme_mod('instagram_txt5'))  ?>" class="btn btn-outline-light
                                    no-raduis mr-2">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </p>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
	            <?php endif; ?>
	            <?php if(get_theme_mod('person6_name') != '') : ?>
                    <div class="col-md-4">
                        <div class="photographer py-3">
                            <figure class="imghvr-zoom-out">
		                        <?php if(get_theme_mod('person6') != '') : ?>
                                    <img src="<?php echo esc_url(get_theme_mod('person6'))  ?>" class="w-100" style="height: 280px;" alt="<?php bloginfo('name') ?>">
			                    <?php else: ?>
                                    <img src="https://via.placeholder.com/900" class="w-100" style="height: 280px;" alt="<?php bloginfo('name') ?>">
			                    <?php endif; ?>
                                <div class="text-center py-3 lead">
		                            <?php echo get_theme_mod('person6_name')  ?>
                                </div>
                                <figcaption>
                                    <h3><?php echo get_theme_mod('person6_name')  ?></h3>
                                    <p class="mt-3">
                                        <a href="<?php echo esc_url(get_theme_mod('facebook_txt6'))  ?>" class="btn btn-outline-light
                                    no-raduis mr-2">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                        <a href="<?php echo esc_url(get_theme_mod('instagram_txt6'))  ?>" class="btn btn-outline-light
                                    no-raduis mr-2">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </p>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
	            <?php endif; ?>

            </div>


        </div>
    </section>

<?php get_footer() ?>