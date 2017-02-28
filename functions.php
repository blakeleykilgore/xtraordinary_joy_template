<?php
/*-------------- Enable Widgets--------------- */
function blank_widgets_init() {
    register_sidebar( array(
		'name' => ('Homepage Banner'),
		'id' => 'homepage-widget1',
		'description' => 'First widget for the homepage',
		'before_widget' => '<div class="homepage_banner">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="display_none">',
		'after_title' => '</h3>'
		));
    register_sidebar( array(
		'name' => ('Homepage Mission Statement'),
		'id' => 'homepage-widget2',
		'description' => 'Second widget for the homepage',
		'before_widget' => '<div class="homepage_mission_statement">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="display_none">',
		'after_title' => '</h3>'
		));
    register_sidebar( array(
		'name' => ('Homepage Icon Links'),
		'id' => 'homepage-widget3',
		'description' => 'Third widget for the homepage',
		'before_widget' => '<div class="homepage_icon_links">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="display_none">',
		'after_title' => '</h3>'
		));
    register_sidebar( array(
		'name' => ('Hompage Our Story Section'),
		'id' => 'homepage-widget4',
		'description' => 'Fourth widget for the homepage',
		'before_widget' => '<div class="homepage_our_story">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="display_none">',
		'after_title' => '</h3>'
		));
    register_sidebar( array(
		'name' => ('Homepage Money Raised Section'),
		'id' => 'homepage-widget5',
		'description' => 'fifth widget for the homepage',
		'before_widget' => '<article class="homepage_research">',
		'after_widget' => '</article>',
		'before_title' => '<h4 class="display_none">',
		'after_title' => '</h4>'
		));
    register_sidebar( array(
		'name' => ('Hompeage Upcoming Events'),
		'id' => 'homepage-widget6',
		'description' => 'sixth widget for the homepage',
		'before_widget' => '<div class="homepage_upcoming_events">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
		));
    register_sidebar( array(
		'name' => ('Hompeage Faces of Xq27.3-q28 Deletion'),
		'id' => 'homepage-widget7',
		'description' => 'seventh widget for the homepage',
		'before_widget' => '<div class="homepage_faces">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
		));
    register_sidebar( array(
		'name' => ('Partner Page Banner'),
		'id' => 'partner-widget1',
		'description' => 'First widget for the partner page',
		'before_widget' => '<div class="partner_banner">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="display_none">',
		'after_title' => '</h3>'
		));
    register_sidebar( array(
        'name' => ('Contact Page Banner'),
        'id' => 'contact-widget1',
        'description' => 'First widget for the contact page',
        'before_widget' => '<div class="contact_banner">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="display_none">',
        'after_title' => '</h3>'
        ));
    register_sidebar( array(
        'name' => ('Contact Page Contact Information'),
        'id' => 'contact-widget2',
        'description' => 'Second widget for the contact page',
        'before_widget' => '<div class="contact_contactinfo">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="display_none">',
        'after_title' => '</h3>'
        ));
    register_sidebar( array(
        'name' => ('Contact Page Social Media Links'),
        'id' => 'contact-widget3',
        'description' => 'Third widget for the contact page',
        'before_widget' => '<div class="contact_follow_us">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
        ));
	}
add_action('widgets_init', 'blank_widgets_init');

/*-------------- Enable Menu --------------- */
add_theme_support('menus');
?>
