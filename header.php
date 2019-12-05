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

                            <?php
                                if ( has_nav_menu( 'primary-menu' ) ) : ?>
                                <?php 
                                    wp_nav_menu ( array (
                                        'theme_location' => 'primary-menu' ,
                                        'container'       => 'ul',
                                        'menu_class' => 'navbar-nav ml-auto',
                                        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                    ) ); ?>
                                <?php endif;
                            ?>
                        </div>
                    </div><!-- end container -->
                </nav><!-- en desktop menu -->
                <!-- mobile menu -->
                <div class="barMenuMobile">
                    <nav id="main-nav" class="mobile menu">

                        <?php
                            if ( has_nav_menu( 'primary-menu' ) ) : ?>
                            <?php 
                                wp_nav_menu ( array (
                                    'theme_location' => 'primary-menu' ,
                                    'container'       => 'ul',
                                ) ); ?>
                            <?php endif;
                        ?>
                    </nav>
                </div>
                <!-- end mobile menu -->
                <article class="slideBanner" id="slideBanner">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="content">
                                    <div class="carousel-header">

                                    <?php $loop = new WP_Query( array( 'post_type' => 'slide', 'posts_per_page' => '1' ) ); ?>
                                    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                                    
                                        <?php if( have_rows('slide_header') ): ?>
                                            <?php while( have_rows('slide_header') ): the_row(); 
                                                        // vars
                                                $imgSlideHome = get_sub_field('img_slide_header');
                                                $tSlideHome = get_sub_field('titre_slide_home');
                                                $stSlideHome = get_sub_field('sous_titre_slide_home');
                                                        
                                                if( !empty( $imgSlideHome ) ): ?>
                                                    <div class="slide-item">
                                                        <img src="<?php echo esc_url($imgSlideHome['url']); ?>" alt="<?php echo esc_attr($imgSlideHome['alt']); ?>" />
                                                        <div class="caption">
                                                            <h1 class="ttr"><?php echo $tSlideHome; ?></h1>
                                                            <h2 class="sttr"><?php echo $stSlideHome; ?></h2>
                                                        </div>
                                                        <a href="#" class="btn-primary btn">Voir plus <i class="fa fa-plus"></i></a>
                                                        <a href="#" class="btn-secondary btn">Contact</a>
                                                    </div>
                                                <?php endif; ?>

                                            <?php endwhile; ?>
                                        <?php endif; ?>

                                    <?php endwhile; wp_reset_query(); ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </header><!-- end header -->