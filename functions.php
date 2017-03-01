<?php
/*-------------- Enable Widgets--------------- */
function blank_widgets_init() {
    /*-----Hompeage Widgets-----*/
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
    /*-----Volunteer Page Widgets-----*/
    register_sidebar( array(
		'name' => ('Volunteer Page Banner'),
		'id' => 'volunteer-banner',
		'description' => 'First widget for the volunteer page',
		'before_widget' => '<div class="pages_banner">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="display_none">',
		'after_title' => '</h3>'
		));
    register_sidebar( array(
		'name' => ('Volunteer Page Form'),
		'id' => 'volunteer-form',
		'description' => 'second widget for the volunteer page',
		'before_widget' => '<div class="volunteer_form">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
		));
    /*-----Partner Page Widgets-----*/
    register_sidebar( array(
		'name' => ('Partner Page Banner'),
		'id' => 'partner-banner',
		'description' => 'First widget for the partner page',
		'before_widget' => '<div class="pages_banner">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="display_none">',
		'after_title' => '</h3>'
		));
    /*-----Resources Page Widgets-----*/
    register_sidebar( array(
		'name' => ('Resources Page Banner'),
		'id' => 'resources-banner',
		'description' => 'First widget for the resources page',
		'before_widget' => '<div class="pages_banner">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="display_none">',
		'after_title' => '</h3>'
		));
    /*-----Contact Page Widgets-----*/
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
    /*-----Events Page Widgets-----*/
    register_sidebar( array(
		'name' => ('Events Page Banner'),
		'id' => 'events-banner',
		'description' => 'First widget for the events page',
		'before_widget' => '<div class="pages_banner">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="display_none">',
		'after_title' => '</h3>'
		));
    register_sidebar( array(
		'name' => ('Events Page Upcoming Events'),
		'id' => 'events-page-upcoming-events',
		'description' => 'Second widget for the events page',
		'before_widget' => '<div class="events_page_upcoming_events">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="display_none">',
		'after_title' => '</h3>'
		));
    /*-----Donate Page Widgets-----*/
    register_sidebar( array(
		'name' => ('Donate Page Banner'),
		'id' => 'donate-banner',
		'description' => 'First widget for the donate page',
		'before_widget' => '<div class="pages_banner">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="display_none">',
		'after_title' => '</h3>'
		));
	}
add_action('widgets_init', 'blank_widgets_init');

/*-------------- Enable Menu --------------- */
add_theme_support('menus');
?>
