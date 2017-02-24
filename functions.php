<?php
/*-------------- Enable Widgets--------------- */
function blank_widgets_init() {
    register_sidebar( array(
		'name' => ('homepgae_widget1'),
		'id' => 'homepage-widget1',
		'description' => 'First widget for the homepage',
		'before_widget' => '<div class="homepage_banner">',
		'after_widget' => '</div>',
		'before_title' => '<p class="display_none">',
		'after_title' => '</p>'
		));
    register_sidebar( array(
		'name' => ('homepgae_widget2'),
		'id' => 'homepage-widget2',
		'description' => 'Second widget for the homepage',
		'before_widget' => '<div class="homepage_mission_statement">',
		'after_widget' => '</div>',
		'before_title' => '<p class="display_none">',
		'after_title' => '</p>'
		));
	}
add_action('widgets_init', 'blank_widgets_init');

/*-------------- Enable Menu --------------- */
add_theme_support('menus');
?>
