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
    register_sidebar( array(
		'name' => ('homepage_widget6'),
		'id' => 'homepage-widget6',
		'description' => 'sixth widget for the homepage',
		'before_widget' => '<div class="homepage_upcoming_events">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>'
		));
    register_sidebar( array(
		'name' => ('homepage_widget7'),
		'id' => 'homepage-widget7',
		'description' => 'seventh widget for the homepage',
		'before_widget' => '<div class="homepage_faces">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>'
		));
    register_sidebar( array(
		'name' => ('partner_widget1'),
		'id' => 'partner-widget1',
		'description' => 'First widget for the partner page',
		'before_widget' => '<div class="partner_banner">',
		'after_widget' => '</div>',
		'before_title' => '<p class="display_none">',
		'after_title' => '</p>'
		));
    register_sidebar( array(
        'name' => ('contact_widget1'),
        'id' => 'contact-widget1',
        'description' => 'First widget for the contact page',
        'before_widget' => '<div class="contact_banner">',
        'after_widget' => '</div>',
        'before_title' => '<p class="display_none">',
        'after_title' => '</p>'
        ));
    register_sidebar( array(
        'name' => ('contact_widget2'),
        'id' => 'contact-widget2',
        'description' => 'Second widget for the contact page',
        'before_widget' => '<div class="contact_contactinfo">',
        'after_widget' => '</div>',
        'before_title' => '<p class="display_none">',
        'after_title' => '</p>'
        ));
    register_sidebar( array(
        'name' => ('contact_widget3'),
        'id' => 'contact-widget3',
        'description' => 'Third widget for the contact page',
        'before_widget' => '<div class="contact_follow_us">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'
        ));
	}
add_action('widgets_init', 'blank_widgets_init');

/*-------------- Enable Menu --------------- */
add_theme_support('menus');
?>
