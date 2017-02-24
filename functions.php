<?php
/*-------------- Enable Widgets--------------- */
function blank_widgets_init() {
    register_sidebar( array(
		'name' => ('homepage_widget1'),
		'id' => 'homepage-widget1',
		'description' => 'First widget for the homepage',
		'before_widget' => '<div class="homepage_banner">',
		'after_widget' => '</div>',
		'before_title' => '<p class="display_none">',
		'after_title' => '</p>'
		));
    register_sidebar( array(
		'name' => ('homepage_widget2'),
		'id' => 'homepage-widget2',
		'description' => 'Second widget for the homepage',
		'before_widget' => '<div class="homepage_mission_statement">',
		'after_widget' => '</div>',
		'before_title' => '<p class="display_none">',
		'after_title' => '</p>'
		));
    register_sidebar( array(
		'name' => ('homepage_widget3'),
		'id' => 'homepage-widget3',
		'description' => 'Third widget for the homepage',
		'before_widget' => '<div class="homepage_icon_links">',
		'after_widget' => '</div>',
		'before_title' => '<p class="display_none">',
		'after_title' => '</p>'
		));
    register_sidebar( array(
		'name' => ('homepage_widget4'),
		'id' => 'homepage-widget4',
		'description' => 'Fourth widget for the homepage',
		'before_widget' => '<div class="homepage_my_story">',
		'after_widget' => '</div>',
		'before_title' => '<p class="display_none">',
		'after_title' => '</p>'
		));
    register_sidebar( array(
		'name' => ('homepage_widget5'),
		'id' => 'homepage-widget5',
		'description' => 'fifth widget for the homepage',
		'before_widget' => '<div class="homepage_research">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
		));
	}
add_action('widgets_init', 'blank_widgets_init');

/*-------------- Enable Menu --------------- */
add_theme_support('menus');
?>
