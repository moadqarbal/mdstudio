<?php
/*
	Template Name: Album
*/
?>
<?php get_header() ?>

    <!-- album section -->
    <section class="album-page py-5">
        <div class="container">
            <div class="row">
                <div class="col text-center py-3 mb-5">
                    <h1 class="text-uppercase d-inline main-color">
                        Albums
                    </h1>
                </div>
            </div>

            <div class="row">
	            <?php
	            $args_album = array(
		            'post_type' => 'post',
		            'category_name' => 'album',
		            'order'=> 'DESC'
	            );
	            $album = new WP_Query( $args_album );
	            ?>

                <?php if($album->have_posts()): ?>
	                <?php while($album->have_posts()): $album->the_post() ?>
                        <div class="col-md-4 my-2">
                            <div class="card">
                                <a href="<?php the_permalink() ?>">
		                            <?php if(has_post_thumbnail()): ?>
			                            <?php the_post_thumbnail('album-thumb',array('class'=>'card-img-top w-100')) ?>
		                            <?php else: ?>
                                        <img src="https://via.placeholder.com/600" class="card-img-top w-100">
		                            <?php endif; ?>
                                </a>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a class="text-dark" href="<?php the_permalink() ?>">
	                                        <?php the_title() ?>
                                        </a>
                                    </h4>
                                    <p class="card-text"><?php echo excerpt(15) ?></p>
                                </div>
                            </div>
                        </div>
	                <?php endwhile; ?>
	            <?php endif; ?>

            </div>
        </div>
    </section>


<?php get_footer() ?>