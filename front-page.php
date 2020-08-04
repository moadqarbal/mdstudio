<?php get_header(); ?>

    <!-- slider -->
    <div id="carouselExampleCaptions" class="carousel md-slider slide carousel-slide" data-ride="carousel">
        <ol class="carousel-indicators">
			<?php
			$indicator=0;
			$servicePost = new WP_Query(array(
				'post_type'     => 'slider_post',
				'posts_per_page' => 5
			));
			while($servicePost->have_posts()){
				$servicePost->the_post();
				?>
                <li data-target="#carouselExampleCaptions" data-slide-to="<?php echo $indicator; ?>" class="<?php echo ($indicator == 1) ? 'active':''; ?>"></li>
				<?php $indicator++; } ?>
        </ol>
        <div class="carousel-inner">
			<?php
			$activetor=0;
			$myPost = new WP_Query(array(
				'post_type'     => 'post',
				'category_name' => 'slider',
				'posts_per_page' => 6,
				'orderby' => 'rand'
			));
			while($myPost->have_posts()):
				$myPost->the_post();
				$activetor++;
				?>
                <div class="carousel-item <?php echo ($activetor == 1) ? 'active':''; ?>">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="d-block w-100" alt="md-slider">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>
                            <a href="<?php the_permalink() ?>" class="text-white">
								<?php the_title() ?>
                            </a>
                        </h5>
                        <p>
                            <a href="<?php the_permalink() ?>" class="text-white">
								<?php echo excerpt(7) ?>
                            </a>
                        </p>
                    </div>
                </div>

			<?php endwhile; ?>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- Services section -->
    <section class="our-services py-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col text-center">
                    <h2 class="d-inline py-2 mb-5">Nos Services</h2>
                </div>
            </div>
            <div class="row mt-4">

	            <?php if (is_active_sidebar('services')): ?>
		            <?php dynamic_sidebar('services') ?>
	            <?php endif; ?>

            </div>
        </div>
    </section>

    <!-- gallery section -->
    <section class="gallery py-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col text-center">
                    <h2 class="d-inline py-2 mb-5">Gallery</h2>
                </div>
            </div>
        </div>

        <div class="row p-0 m-0">
	        <?php
	        $args_gallery = array(
		        'post_type' => 'post',
		        'category_name' => 'gallery',
		        'order'=> 'DESC'
	        );
	        $gallery = new WP_Query( $args_gallery );
	        ?>

            <?php if($gallery->have_posts()): ?>
	            <?php while($gallery->have_posts()): $gallery->the_post() ?>
                    <div class="col-md-3 p-0">
                        <a href="<?php echo get_the_post_thumbnail_url() ?>" data-lightbox="image-1" data-title="<?php echo get_the_post_thumbnail_caption() ?>">
	                        <?php if(has_post_thumbnail()): ?>
		                        <?php the_post_thumbnail('light-box-img',array('class'=>'w-100')) ?>
	                        <?php else: ?>
                                <img src="https://via.placeholder.com/600" class="w-100">
	                        <?php endif; ?>
                        </a>
                    </div>
                <?php endwhile; ?>
	        <?php endif; ?>

        </div>
    </section>

    <!-- about-us section -->
    <section class="about-us py-5">
        <div class="container">
            <div class="row mt-4">
                <div class="col-md-4 my-3">
                    <img src="<?php echo esc_url( get_theme_mod( 'customizer_setting_one' ) ); ?>" alt="<?php bloginfo('name') ?>" class="wow bounceInLeft" data-wow-offset="350" data-wow-delay="0.3s">
                </div>
                <div class="col-md-8 my-3">
                    <div class="about-us-text wow bounceInRight" data-wow-offset="350" data-wow-delay="0.3s">
                        <h2 class="d-inline py-2 mb-5 ">QUI SOMME</h2>


                        <p class="lead mt-5 text-weight-bold">
		                    <?php echo get_theme_mod('about_title2','A SOLID, RENOWNED LABO'); ?>
                        </p>

                        <p class="mt-5">
		                    <?php echo get_theme_mod('about_paragraph','At Labo, quality is an essential point, present in each stage of the processing of your photos and your creations (printing, packaging, monitoring of your order)'); ?>
                        </p>

                        <a href="<?php echo get_theme_mod('about_link'); ?>" class="btn btn-lg btn-dark mt-5 py-2 px-4 ">En Savoir Plus</a>
                    </div>

                </div>
            </div>
        </div>
    </section>
<?php get_footer() ?>