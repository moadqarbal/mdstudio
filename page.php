<?php get_header() ?>


<?php if(have_posts()): ?>
	<?php while(have_posts()): the_post(); ?>
        <section class="simple-page">
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
                </div>
            </div>
        </section>
	<?php endwhile; ?>
<?php endif; ?>

<?php get_footer() ?>