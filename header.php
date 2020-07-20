<!doctype html>
<html <?php language_attributes() ?>>

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, user-scalable=no,
          initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name') ?></title>

    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri());  ?>/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri());  ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri());  ?>/css/hover.css">
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri());  ?>/css/imagehover.css">
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri());  ?>/css/animate.css">
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri());  ?>/css/main.css">
<?php wp_head() ?>
<body <?php body_class() ?> >

    <!-- search form -->
    <div class="search-zone">
        <i class="fas fa-times fa-3x close-search text-white"></i>
        <form method="get" action="<?php esc_url(home_url('/')); ?>" class="text-center">
            <input type="text" autofocus placeholder="press enter after typing " name="s"
                class="search-input" autocomplete="off">
        </form>
    </div>

    <!-- header -->
    <header class="m-fixed-nav">
        <nav class="navbar navbar-expand-lg md-header navbar fixed-top py-3 navbar-light bg-white shadow-sm">
            <div class="container">

                <?php if (function_exists( 'the_custom_logo' )): ?>
                    <?php if (has_custom_logo()):  ?>
                        <?php the_custom_logo(); ?>
                    <?php else: ?>
                        <a class="navbar-brand md-logo" href="<?php echo get_bloginfo('url'); ?>">
                            <img src="<?php echo esc_url(get_template_directory_uri());  ?>/img/logo.png" style="width:135px;height:30px" class="custom-logo" alt="MD News">
                        </a>
                    <?php endif; ?>
                <?php endif; ?>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-stream"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <?php
				        wp_nav_menu( array(
						'menu'              => 'primary',
						'theme_location'    => 'primary',
						'depth'             => 2,
						'container'         => false,
						'container_id'      => 'navbarNavDropdown',
						'container_class'   => 'collapse navbar-collapse',
						'container_id'      => 'bs-example-navbar-collapse-1',
						'menu_class'        => 'nav navbar-nav',
						'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
						'walker'            => new WP_Bootstrap_Navwalker())
				        );
				        ?>

                    <ul class="navbar-nav ml-auto social-media-navbar">
                        <li class="nav-item mx-1">
                            <a class="nav-link" target="_blank" href="https://www.facebook.com/moadthemes/">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="nav-item mx-1">
                            <a class="nav-link" target="_blank" href="http://www.instagram.com">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li class="nav-item mx-1">
                            <a class="nav-link" target="_blank" href="https://wa.me/212656360919">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                        <li class="nav-item mx-1">
                            <a class="nav-link" target="_blank" href="mailto:mo3ad@gmail.com?subject=Welcome">
                                <i class="fab fa-google"></i>
                            </a>
                        </li>
                        <li class="nav-item mx-1">
                            <a class="nav-link" target="_blank" href="http://www.linkedin.com">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="nav-link btn-show-search">
                                <i class="fas fa-search"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
