<?php get_header() ?>

    <!-- blog-page section -->
    <section class="blog-page py-5">
        <div class="container">

            <div class="row">
                <div class="col text-center py-3 mb-5">
                    <h1 class="text-uppercase d-inline">
                        Actualités
                    </h1>
                </div>
            </div>

            <div class="row">

	            <?php

	            $slug1 = 'slider';
	            $slug2 = 'gallery';
	            $cat1 = get_category_by_slug($slug1);
	            $cat2 = get_category_by_slug($slug2);
	            $id1 = $cat1->term_id;
	            $id2 = $cat2->term_id;

	            $args_blog = array(
		            'post_type' => 'post',
		            'post_status' => 'publish',
		            'category__not_in' => array( $id1,$id2 ),
		            'posts_per_page' => 9,
		            'order'=> 'DESC'
	            );
	            $blog = new WP_Query( $args_blog );
	            ?>

                <?php if ($blog->have_posts()): ?>
	                <?php while ($blog->have_posts()): $blog->the_post() ?>
                        <div class="col-md-12">
                            <div class="card mb-3">
                                <div class="row no-gutters">
                                    <div class="col-md-4">
                                        <a href="<?php the_permalink() ?>">
		                                    <?php if(has_post_thumbnail()): ?>
			                                    <?php the_post_thumbnail('blog-thumb',array('class'=>'card-img w-100')) ?>
		                                    <?php else: ?>
                                                <img src="https://via.placeholder.com/900" class="card-img w-100">
		                                    <?php endif; ?>
                                        </a>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">
                                                <a href="<?php the_permalink() ?>"
                                                   class="title-3 text-dark text-capitalize">
		                                            <?php the_title() ?>
                                                </a>
                                            </h5>
                                            <p class="card-text">
	                                            <?php echo excerpt(17) ?>
                                            </p>
                                            <p class="card-text">
                                                <small class="text-muted">
                                                    <span class="date"><?php the_date() ?> <?php the_time() ?> Par :</span>
                                                    <a class="author" href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author() ?></a>
                                                </small>
                                            </p>

                                            <div class="post-categories mt-3">
		                                        <?php
		                                        $categories = get_the_category();
		                                        $separator = " ";
		                                        $output = '';

		                                        if($categories){
			                                        foreach($categories as $category){
				                                        $output .= '<a class="post-category badge badge-pill py-2 px-3
                                 mr-1                   badge-dark" href="'.get_category_link($category->term_id).'">'.$category->cat_name .'</a>'. $separator;
			                                        }
		                                        }
		                                        echo trim($output, $separator);
		                                        ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
	                <?php endwhile; ?>
	            <?php else: ?>
                    <?php echo wpautop('No Posts Yet!'); ?>
                <?php endif; ?>

                <div class="md-pagination d-flex justify-content-center py-3 my-4">
		            <?php md_pagination() ?>
                </div>
            </div>

        </div>
    </section>


<?php get_footer() ?>