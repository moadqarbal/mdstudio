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
						Le jour de son mariage est un jour unique où se succèdent des instants furtifs de joie et de bonheur intenses. C’est une journée qu’on ne vit qu’une fois... donc Il est important de faire appel à un vrai professionnel pour immortaliser ces moments précieux,
						un photographe professionnel à votre écoute, qui saura mettre son savoir-faire et sa bonne humeur au service de votre mémoire, mettre en évidence la profondeur des émotions ressenties ce jour-là. Pour celà Labo Photos Phenix
						donne des services pour garder en mémoires les meilleurs moments de ce jour.
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