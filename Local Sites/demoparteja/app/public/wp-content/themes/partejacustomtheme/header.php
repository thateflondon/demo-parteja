<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <title>Blog Site Template</title> -->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blog Site Template">
    <meta name="author" content="https://jfpl.fr">
    <link rel="shortcut icon" href="images/logo.png">

    <!-- FontAwesome CSS-->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"> -->
    <!-- Bootstrap CSS-->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
    <!-- Theme CSS -->
    <!-- <link rel="stylesheet" href="/wp-content/themes/partejacustomtheme/theme-template/css/style.css"> -->
    <?php
    wp_head();
    ?>

</head>

<body>

    <header class="header text-center">
        <!-- dynamic site title/dashboard->customize theme -->
        <a class="site-title pt-lg-4 mb-0" href="index.html">
            <?php echo get_bloginfo('name'); ?>
        </a>

        <nav class="navbar navbar-expand-lg navbar-dark">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div id="navigation" class="collapse navbar-collapse flex-column">
                <!-- logo dynamic render -->
                <?php
                if (function_exists('the_custom_logo')) {

                    $custom_logo_id = get_theme_mod('custom_logo');
                    $logo = wp_get_attachment_image_src($custom_logo_id);
                }
                ?>

                <img class="mb-3 mx-auto logo" src="<?php echo $logo[0] ?>" alt="logo">

                <!-- dynamic menu render -->
                <?php
                wp_nav_menu(
                    array(
                        'menu' => 'primary',
                        'container' => '',
                        'theme_location' => 'primary',
                        //set custom id and class to customize the items with css
                        'items_wrap' => '<ul id="" class="navbar-nav flex-column text-sm-center text-md-left">%3$s</ul>'
                        //to customize the li we need to go in wp dashboard->apparence-screenOptions->activate ccs classes/links target
                    )
                );
                ?>

                <ul class="navbar-nav flex-column text-sm-center text-md-left">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html"><i class="fas fa-home fa-fw mr-2"></i>Blog Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="post.html"><i class="fas fa-file-alt fa-fw mr-2"></i>Blog Post</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="page.html"><i class="fas fa-file-image fa-fw mr-2"></i>Blog Page</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="archive.html"><i class="fas fa-archive fa-fw mr-2"></i>Blog Archive</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-primary" href="contact.html"><i class="fas fa-envelope fa-fw mr-2"></i>Contact Us</a>
                    </li>
                </ul>
                <hr>
                <ul class="social-list list-inline py-3 mx-auto">
                    <li class="list-inline-item"><a href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-github-alt fa-fw"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-stack-overflow fa-fw"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-codepen fa-fw"></i></a></li>
                </ul>

            </div>
        </nav>
    </header>

    <div class="main-wrapper">
        <header class="page-title theme-bg-light text-center gradient py-5">
            <!-- makes wp render the page title dynamically -->
            <h1 class="heading"><?php the_title(); ?></h1>
        </header>