<!doctype html>
<html>
    <head>
        <link rel="stylesheet" href="http://localhost/wordpress/wp-content/themes/my2_test/style/bootstrap.min.css">
        <link rel="stylesheet" href="http://localhost/wordpress/wp-content/themes/my2_test/style/style.css">

        <script src="http://localhost/wordpress/wp-content/themes/my2_test/js/jquery-1.10.2.min.js"></script>
        <script src="http://localhost/wordpress/wp-content/themes/my2_test/js/bootstrap.min.js"></script>

        <meta charset="utf-8">
        <!--  підключення стандртної тблиці  -->
          <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
       
        <title>Супер шаблон</title>
    </head>

    <body>

        <div class="container">

            <header>
                <div class="info">
                    <img src="http://localhost/wordpress/wp-content/themes/my2_test/images/logo.png" alt="" />
                </div>

                <div class="banner">

                </div>
            </header>

            <div class="navbar">
                <div class="navbar-inner">
                    <?php
                if ( function_exists( 'wp_nav_menu' ) )
                    wp_nav_menu( 
                        array( 
                        'theme_location' => 'custom-menu',
                        'fallback_cb'=> 'custom_menu',
                        'container' => 'ul',
                        'menu_id' => 'nav',
                        'menu_class' => 'nav') 
                    );
                else custom_menu();
                ?>
                </div>
            </div>
