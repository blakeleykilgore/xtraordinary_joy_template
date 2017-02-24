<!DOCTYPE html>
<html>
<head>
    <title>Xtraordinary Joy!</title>
    <?php wp_head(); ?>
    <!-- Links to our Style.css file -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
</head>
<body>
    <header>
        <h1><?php bloginfo('name'); ?></h1>
 		<p><?php bloginfo('description'); ?></p>
    </header>
    <nav>
        <?php
            wp_nav_menu(array(
			    'sort_column' => 'menu_order',
		        'container_class' => 'index_menu'
			));
        ?>
    </nav>
