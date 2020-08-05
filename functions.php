<?php

// Bootstrap 4 Navbar
require_once 'wp-bootstrap-navwalker.php';

function md_theme_setup()
{
	// add logo
	add_theme_support('custom-logo');

	// thumbnail support
	add_theme_support('post-thumbnails');

	// add nav menus
	register_nav_menus(array(
		'primary' => __('primary navigation menu'),
		'footer' => __('footer menu')
	));
}

add_action('after_setup_theme','md_theme_setup');


/*---------- excerpt ----------------*/
// remove [...] from excerpt
function change_excerpt( $more ) {
	return ' ...';
}
add_filter('excerpt_more', 'change_excerpt');


// custom excerpt
function excerpt($limit) {
	$excerpt = explode(' ', get_the_excerpt(), $limit);

	if (count($excerpt) >= $limit) {
		array_pop($excerpt);
		$excerpt = implode(" ", $excerpt) . '...';
	} else {
		$excerpt = implode(" ", $excerpt);
	}

	$excerpt = preg_replace('`\[[^\]]*\]`', '', $excerpt);

	return $excerpt;
}

function content($limit) {
	$content = explode(' ', get_the_content(), $limit);

	if (count($content) >= $limit) {
		array_pop($content);
		$content = implode(" ", $content) . '...';
	} else {
		$content = implode(" ", $content);
	}

	$content = preg_replace('/\[.+\]/','', $content);
	$content = apply_filters('the_content', $content);
	$content = str_replace(']]>', ']]&gt;', $content);

	return $content;
}

/*---------- excerpt ----------------*/


/*---------- pagination ----------------*/

// pagination
function md_pagination( \WP_Query $wp_query = null, $echo = true ) {

	if ( null === $wp_query ) {
		global $wp_query;
	}

	$pages = paginate_links( [
			'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
			'format'       => '?paged=%#%',
			'current'      => max( 1, get_query_var( 'paged' ) ),
			'total'        => $wp_query->max_num_pages,
			'type'         => 'array',
			'show_all'     => false,
			'end_size'     => 3,
			'mid_size'     => 1,
			'prev_next'    => true,
			'prev_text'    => __( '« Prev' ),
			'next_text'    => __( 'Next »' ),
			'add_args'     => false,
			'add_fragment' => ''
		]
	);

	if ( is_array( $pages ) ) {
		//$paged = ( get_query_var( 'paged' ) == 0 ) ? 1 : get_query_var( 'paged' );

		$pagination = '<div class="pagination"><ul class="pagination">';

		foreach ($pages as $page) {
			$pagination .= '<li class="page-item' . (strpos($page, 'current') !== false ? ' active' : '') . '"> ' . str_replace('page-numbers', 'page-link', $page) . '</li>';
		}

		$pagination .= '</ul></div>';

		if ( $echo ) {
			echo $pagination;
		} else {
			return $pagination;
		}
	}

	return null;
}
/*---------- pagination ----------------*/




/*---------- widgets -------------------*/

function md_sidebar($id)
{
	// Services
	register_sidebar(
		array(
			'name' => 'Services',
			'id' => 'services',
			'before_widget' => '<div class="col-md-4 my-3">
                    <div class="card text-center border-0 shadow">
                        <div class="card-body">',
			'before_title' => '<h4 class="card-title my-2">',
			'after_title' => '</h4>',
			'after_widget' => '</div></div></div>',
		)
	);

	// footer about widget
	register_sidebar(
		array(
			'name' => 'footer about',
			'id' => 'footer-about',
			'before_widget' => '<div class="col-md-3 col-lg-4 col-xl-3 mb-4">',
			'before_title' => '<h4 class="text-white">',
			'after_title' => '</h4>
				<hr class="mb-2 mt-0 d-inline-block mx-auto w-25">',
			'after_widget' => '</div>',
		)
	);


}

add_action('widgets_init','md_sidebar');

/*---------- widgets -------------------*/


// Add Customizer functionality.
require get_template_directory() . '/inc/customizer.php';