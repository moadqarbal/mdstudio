<?php get_header() ?>

	<section class="md-search mb-3">
		<div class="container">
			<div class="row search-posts">
				<div class="col-md-12">
					<h1 class="border-left-title pl-4 my-4">
						<?php
						if(is_category()){
							single_cat_title();
						} else if(is_author()){
							the_post();
							echo 'Archives par auteur: ' .get_the_author();
							rewind_posts();
						} else if(is_tag()){
							single_tag_title();
						} else if(is_day()){
							echo 'Archives par jour: ' .get_the_date();
						} else if(is_month()){
							echo 'Archives par mois: ' .get_the_date('F Y');
						} else if(is_year()){
							echo 'Archives par année: ' .get_the_date('Y');
						} else {
							echo 'Archives';
						}
						?>
					</h1>
				</div>

				<?php if (have_posts()): ?>
					<?php while (have_posts()): the_post() ?>
						<div class="col-md-12">
							<div class="card mb-3">
								<div class="row no-gutters">
									<div class="col-md-4">
										<a href="<?php the_permalink() ?>">
											<?php if(has_post_thumbnail()): ?>
												<?php the_post_thumbnail('blog-thumb',array('class'=>'card-img search-thumb w-100')) ?>
											<?php else: ?>
												<img src="https://via.placeholder.com/900" class="card-img search-thumb w-100">
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


				<div class="col-md-12">
					<div class="md-pagination d-flex justify-content-center py-3 my-4">
						<?php md_pagination() ?>
					</div>
				</div>
			</div>
		</div>
	</section>



<?php get_footer(); ?>