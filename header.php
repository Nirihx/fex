<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/slick.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/slick-theme.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <?php wp_head(); ?>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <header class="header">
                <!-- en desktop menu -->
                <nav id="nav-desk" class="desktop navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
                    <div class="container">
                        <a class="navbar-brand logo" href="<?php echo home_url( '/' ); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Logo">
                        </a> 
                        <div class="collapse navbar-collapse" id="my-nav">

                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#"><i class="fa fa-home"></i> Accueil</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa fa-adn"></i> Services</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa fa-user-circle-o"></i> Pièces</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa fa-info-circle"></i> A propos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa fa-picture-o"></i> Galeris</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa fa-phone"></i> Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div><!-- end container -->
                </nav><!-- en desktop menu -->
                <!-- mobile menu -->
                <div class="barMenuMobile">
                    <nav id="main-nav" class="mobile menu">
                        <ul>
                            <li>
                                <a href="#"><i class="fa fa-home"></i> Accueil</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-adn"></i> Services</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-user-circle-o"></i> Pièces</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-info-circle"></i> A propos</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-picture-o"></i> Galeris</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-phone"></i> Contact</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- end mobile menu -->
                <article class="slideBanner" id="slideBanner">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img class="d-block m-auto" src="<?php echo get_template_directory_uri(); ?>/images/slide1.png" alt="">
                                            <div class="caption">
                                                <h1 class="ttr">Lorem, ipsum dolor.</h1>
                                                <h2 class="sttr">Consectetur adipisicing</h2>
                                            </div>
                                            <a href="#" class="btn-primary btn">Voir plus <i class="fa fa-plus"></i></a>
                                            <a href="#" class="btn-secondary btn">Contact</a>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block m-auto" src="<?php echo get_template_directory_uri(); ?>/images/slide1.png" alt="">
                                            <div class="caption">
                                                <h1 class="ttr">Lorem, ipsum dolor.</h1>
                                                <h2 class="sttr">Consectetur adipisicing</h2>
                                            </div>
                                            <a href="#" class="btn-primary btn">Voir plus <i class="fa fa-plus"></i></a>
                                            <a href="#" class="btn-secondary btn">Contact</a>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block m-auto" src="<?php echo get_template_directory_uri(); ?>/images/slide1.png" alt="">
                                            <div class="caption">
                                                <h1 class="ttr">Lorem, ipsum dolor.</h1>
                                                <h2 class="sttr">Consectetur adipisicing</h2>
                                            </div>
                                            <a href="#" class="btn-primary btn">Voir plus <i class="fa fa-plus"></i></a>
                                            <a href="#" class="btn-secondary btn">Contact</a>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block m-auto" src="<?php echo get_template_directory_uri(); ?>/images/slide1.png" alt="">
                                            <div class="caption">
                                                <h1 class="ttr">Lorem, ipsum dolor.</h1>
                                                <h2 class="sttr">Consectetur adipisicing</h2>
                                            </div>
                                            <a href="#" class="btn-primary btn">Voir plus <i class="fa fa-plus"></i></a>
                                            <a href="#" class="btn-secondary btn">Contact</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </header><!-- end header -->