<?php
/*-------------- Enable Widgets--------------- */
function blank_widgets_init() {
    register_sidebar( array(
		'name' => ('Homepage Banner'),
		'id' => 'homepage-banner',
		'description' => 'First widget for the homepage',
		'before_widget' => '<div class="homepage_banner">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="display_none">',
		'after_title' => '</h3>'
		));
    register_sidebar( array(
		'name' => ('Homepage Mission Statement'),
		'id' => 'homepage-mission-statement',
		'description' => 'Second widget for the homepage',
		'before_widget' => '<div class="homepage_mission_statement">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="display_none">',
		'after_title' => '</h3>'
		));
    register_sidebar( array(
		'name' => ('Homepage Icon Links'),
		'id' => 'homepage-icon-links',
		'description' => 'Third widget for the homepage',
		'before_widget' => '<div class="homepage_icon_links">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="display_none">',
		'after_title' => '</h3>'
		));
    register_sidebar( array(
		'name' => ('Hompage Our Story Section'),
		'id' => 'homepage-our-story',
		'description' => 'Fourth widget for the homepage',
		'before_widget' => '<div class="homepage_our_story">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
		));
    register_sidebar( array(
		'name' => ('Homepage Money Raised Section'),
		'id' => 'homepage-money-raised',
		'description' => 'fifth widget for the homepage',
		'before_widget' => '<article class="homepage_research">',
		'after_widget' => '</article>',
		'before_title' => '<h4 class="display_none">',
		'after_title' => '</h4>'
		));
    register_sidebar( array(
		'name' => ('Hompeage Upcoming Events'),
		'id' => 'homepage-upcoming-events',
		'description' => 'sixth widget for the homepage',
		'before_widget' => '<div class="homepage_upcoming_events">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
		));
    register_sidebar( array(
		'name' => ('Hompeage Faces of Xq27.3-q28 Deletion'),
		'id' => 'homepage-faces',
		'description' => 'seventh widget for the homepage',
		'before_widget' => '<div class="homepage_faces">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
		));
    register_sidebar( array(
		'name' => ('Partner Page Banner'),
		'id' => 'partner-banner',
		'description' => 'First widget for the partner page',
		'before_widget' => '<div class="pages_banner">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="display_none">',
		'after_title' => '</h3>'
		));
    register_sidebar( array(
        'name' => ('Contact Page Banner'),
        'id' => 'contact-banner',
        'description' => 'First widget for the contact page',
        'before_widget' => '<div class="pages_banner">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="display_none">',
        'after_title' => '</h3>'
        ));
    register_sidebar( array(
        'name' => ('Contact Page Contact Information'),
        'id' => 'contact-info',
        'description' => 'Second widget for the contact page',
        'before_widget' => '<div class="contact_info">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="display_none">',
        'after_title' => '</h3>'
        ));
    register_sidebar( array(
        'name' => ('Contact Page Social Media Links'),
        'id' => 'contact-social-info',
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
