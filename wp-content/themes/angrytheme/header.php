<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset= "<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <?php wp_head(); ?>
</head>


<nav class="navbar mt-5 navbar-expand-md bg-transparent" style="position:absolute;top:0;left:0;right:1rem;" role="navigation">
  <div class="container px-5 py-3">
    <!-- Brand and toggle get grouped for better mobile display -->

    <!-- Toggle button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <p class="burgermenu open"> <span class="me-3">Menu</span> <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/menu.svg" alt="menu" width=15/></p>
    <p class="burgermenu close active">  <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/cross.svg" alt="menu" width=12/></p>
</button>

<a class="navbar-brand text-uppercase text-white" style="left:30rem;" href="#">Dev restaurant</a>

<?php
        wp_nav_menu( array(
            'theme_location'    => 'primary',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'navbarSupportedContent',
            'menu_class'        => 'nav ms-auto menu_class__navlinks navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>
        <!--<div class="order-btn"><a href="#">Order</a></div>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/supermarketwhite.svg" alt="cart" class="cart"/>
    float-right text-right-->
    </div>
</nav>

