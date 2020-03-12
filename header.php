<?php
/*
* The header for our theme
*/
?>

<!doctype html>
<html <?php language_attributes();?>>
  <head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



   <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?> >
    <header>
        <nav class="navbar navbar-expand-md navbar-light bg-light">
            <a class="navbar-brand" href="<?php echo esc_url(home_url());  ?>"><?php echo get_bloginfo('name') ?></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
        <?php 
        wp_nav_menu( array(
            'theme_location'  => 'primary',
            'depth'           => 1, // 1 = no dropdowns, 2 = with dropdowns.
            'container'       => 'div',
            'container_class' => 'collapse navbar-collapse justify-content-end',
            'container_id'    => 'navbarNav',
            'menu_class'      => 'navbar-nav',
            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
            'walker'          => new WP_Bootstrap_Navwalker(),
        ) );
        ?>
            
        </nav>

        <section class="container-fluid">
            <div class="row position-relative d-flex justify-content-center align-items-center text-center">
                <img src="images/lake.jpg" alt="Lake background" class="header_img">
                <div class="position-absolute feature-bg">
                    <p class="feature-text">FULLY RESPONSIVE<br> SPA THEME<br> FOR WORDPRESS</p>
                </div>
            </div>
        </section>
    </header>