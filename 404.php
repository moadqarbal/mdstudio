<?php get_header() ?>

	<!-- 404 Error Text -->
	<div class="container my-5">
		<div class="row">
			<div class="col d-flex justify-content-center">
				<div class="md-error py-5">
					<div class="md-error-404 text-center my-1">
						<h1 class="display-3 mt-3">404</h1>
					</div>
					<h2 class="mb-2">Oups, la page que vous recherchez n'a pas été trouvée!</h2>
                    <img src="<?php echo esc_url(get_template_directory_uri());  ?>/img/cam1.png" alt="<?php bloginfo('name') ?>" class="404-img img-fluid">
					<form method="get" action="<?php echo esc_url(home_url('/')); ?>" class="md-error-search mt-4">
						<div class="row">
							<div class="col-md-9">
								<input type="text" name="s" class="form-control no-raduis" placeholder="rechercher...">
							</div>
							<div class="col-md-3">
								<button type="submit" class="form-control no-raduis">rechercher</button>
							</div>
						</div>
					</form>
					<div class="go-to-homepage text-center my-5">
						<a href="<?php echo get_bloginfo('url'); ?>" class="mt-2 btn btn-lg no-raduis">
							<i class="fas fa-arrow-left"></i> &nbsp; la page d'accueil
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php get_footer() ?>