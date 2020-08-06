<?php
/*
	Template Name: Our Services / Nos Services
*/
?>
<?php get_header() ?>

<!-- our-services section -->
<section class="our-services-page py-5">
	<div class="container">
		<div class="row">
			<div class="col text-center py-3">
				<h1 class="text-uppercase d-inline main-color">
					NOS SERVICES
				</h1>
			</div>
		</div>
		<div class="row">
			<div class="col text-center">
				<div class="our-services-page-text py-5">
					<p class="lead text-muted">
						<?php echo get_theme_mod('services_p') ?>
					</p>
				</div>
			</div>
		</div>

		<div class="row">

			<?php if (is_active_sidebar('our-services')): ?>
				<?php dynamic_sidebar('our-services') ?>
			<?php endif; ?>

		</div>
	</div>
</section>



<?php get_footer() ?>