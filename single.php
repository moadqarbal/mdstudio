<?php get_header() ?>

    <!-- single-page section -->
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>
            <section class="single-page">
            <div class="row">
                <div class="col text-center m-0 p-0" class="title-header">
	                <?php if(has_post_thumbnail()): ?>
		                <?php the_post_thumbnail('blog-single-thumb',array('class'=>'w-100 title-header-img')) ?>
	                <?php else: ?>
                        <img src="https://via.placeholder.com/900" class="w-100 title-header-img">
	                <?php endif; ?>
                    <div class="title">
                        <h1 class="text-white"><?php the_title() ?></h1>
                        <span class="text-white">Creer Par : <a class="author text-white" href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                                        <?php the_author(); ?>
                                    </a> | En : <?php the_date() ?></span>
                    </div>
                    <div class="overlay"></div>
                </div>
            </div>

            <div class="container">
                <div class="row py-5">
                    <div class="col-md-12 main-post">
                        <?php the_content() ?>
                    </div>

                    <div class="col-md-12 my-4">
                        <div class="tags">
                            <h3>Les Tags</h3>
                            <div class="tags mt-4">
		                        <?php
		                        if ( is_singular() ) :
			                        $ordered_tag_list = wp_get_post_terms(get_the_ID(), 'post_tag', array('orderby' => 'term_id', 'fields' => 'all'));
			                        if($ordered_tag_list == []){ echo 'sans tags'; }
			                        foreach($ordered_tag_list as $tag) {
				                        echo '<a class="badge badge-pill mx-1
                                                    px-3 text-white py-2 bg-main bg-dark" href="' . get_term_link( $tag ) . '">' . esc_html( $tag->name ) . '</a>';
			                        }
		                        endif;
		                        ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php endwhile; ?>
    <?php endif; ?>

    <section class="related-posts">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mb-4">Articles Similaires</h2>
                </div>

	            <?php

	            $related = new WP_Query(
		            array(
			            'category__in' => wp_get_post_categories($post->ID),
			            'numberposts' => 4,
			            'post__not_in' => array($post->ID)
		            )
	            );
	            ?>

	            <?php if ($related->have_posts()): ?>
		            <?php while ($related->have_posts()): $related->the_post() ?>
                        <div class="col-md-6 col-sm-12">
                            <div class="card mb-3">
                                <div class="row no-gutters">
                                    <div class="col-md-4">
                                        <a href="<?php the_permalink() ?>">
								            <?php if(has_post_thumbnail()): ?>
									            <?php the_post_thumbnail('blog-thumb-related',array('class'=>'card-img-related w-100')) ?>
								            <?php else: ?>
                                                <img src="https://via.placeholder.com/900" class="card-img-related w-100">
								            <?php endif; ?>
                                        </a>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <p class="card-title">
                                                <a href="<?php the_permalink() ?>"
                                                   class="title-3 text-dark text-capitalize">
										            <?php the_title() ?>
                                                </a>
                                            </p>
                                            <p class="card-text text-muted">
									            <small>
										            <?php echo excerpt(17) ?>
                                                </small>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
		            <?php endwhile; ?>
	            <?php else: ?>
		            <?php echo wpautop('No Posts Yet!'); ?>
	            <?php endif; ?>
            </div>
        </div>
    </section>

    <section class="comments my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="comments-box">
				        <?php  comments_template();  ?>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php get_footer() ?>