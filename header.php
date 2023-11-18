<!DOCTYPE html>
<html>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <!-- Title generator function -->
    <title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo( 'name' ); ?></title>

    <!-- Fetch CSS URLs -->
    <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Agbalumo&display=swap">

    <!-- Required by WP to be added before closing the head tag -->
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
             <div class="container-fluid">
                <a class="navbar-brand" href="/"><?php bloginfo( 'name' ); ?></a>
                <div class="header-nav">
                    <!-- Display header menu -->
                    <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
                </div>
                <div><?php bloginfo( 'description' ); ?></div>
            </div>
        </nav>
    </header>