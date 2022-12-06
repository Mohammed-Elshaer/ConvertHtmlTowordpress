<!DOCTYPE html>
<html class="no-js" lang="<?php bloginfo("language"); ?>">

<head>
    <meta charset="utf-8">
    <meta name="description" content="Electronic Restaurant Menu where you can browse our meals and drinks in an easier way and choose what you prefer.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo("name"); ?>
</title>
    <link rel="icon" href="img/logo.png">

    <!-- <link rel="stylesheet" href="css/style.css">  -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/all.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/normalize.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/aos.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">

    <?php if (is_rtl()) : ?>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style-rtl.css">
        <!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style-rtl.css"> -->
    <?php else : ?>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
        <!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css"> -->
    <?php endif; ?>

    <?php wp_head(); ?>
</head>

<body>

    <!-- Start Page Loader -->
    <div class="pageLoader"></div>

    <!-- Start Header -->


    <header class="header" <?php if (is_admin_bar_showing()){echo 'style="top:33px;"';}?>>
        <div class="container">
            <div class="row justifyContentBetween alignItemsCenter">
                <div class="logo">
                    <a href="#"><img src="<?php echo get_bloginfo('template_directory') ?>/assets/img/logo.png" alt="logo" style="width: 100px;highte: 100px;"></a>
                </div>
                <button type="button" class="nav-toggler" name="togglerButton">
                    <span></span>
                </button>

                <nav class="nav">
                    <ul>
                        <li class="navItem"><a href="#home">home</a></li>
                        <li class="navItem"><a href="#about">about</a></li>
                        <li class="navItem"><a href="#ourMenu">our menu</a></li>
                        <li class="navItem"><a href="#testim">testimonials</a></li>
                        <li class="navItem"><a href="#team">team</a></li>
                        <li class="navItem"><a href="#contact">contact Us</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <!-- Start Home Section -->
    <section class="homeSection" id="home">
        <div class="homeBg"></div>
        <div class="container">
            <div class="row min-vh-100 alignItemsCenter">
                <div class="homeText" data-aos="fade-up" data-aos-duration="1000">
                    <!-- <h1>Dine Out Restaurant</h1> -->
                    <h1 id="logo-text" style="color:#fff;"><a href="<?php bloginfo("wpurl"); ?>" title="" style="color:#fff;">
                  <?php bloginfo("name"); ?>
              </a></h1>

                    <!-- <p>Join us for your next meal. We get the juices flowing <br> Always expect
                        GREAT TASTE, GOOD TIMES</p> -->
                        <p><?php bloginfo("description"); ?></p>

                    <a href="#ourMenu" class="btn btnDefault">our menu</a>
                </div>
            </div>
        </div>
    </section>