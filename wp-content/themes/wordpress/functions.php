<?php
	add_theme_support('menus');

	register_sidebar(
		array(
			'before_widget' => '<div class="widget">',
			'after_widget' => '</div>',
			'before_title' => '<h3>',
			'after_title' => '</h3>',
			'id' => 'sidebar-1',
			'description'   => __( 'Add widgets here to appear in your sidebar.', 'twentyfifteen' ),
		)
	);

	add_theme_support('post-thumbnails');
?>