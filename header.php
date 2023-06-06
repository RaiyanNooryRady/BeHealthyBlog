<!DOCTYPE html>
<html <?php language_attributes(); ?> dir="ltr">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <?php wp_head();?>



</head>

<body <?php body_class(); ?>>


    <!--header area-->
    <header class="header-area">
        
        <!--navigation bar-->
        <nav class="navbar navbar-expand-lg bg-light fixed-top shadow">
         
            <div class="container">
                <a class="navbar-brand link-danger fw-bold" href="<?php bloginfo('url'); ?>">
                <?php
                if(get_custom_logo()){
                    the_custom_logo();
                   

                }
                else{
                    bloginfo('name');
                
                }
                  ?>
                </a>
                <button class="navbar-toggler text-light " type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="bi bi-justify text-danger"></i>

                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                
                <?php
                
                if(has_nav_menu('primary-menu')){
                    wp_nav_menu(array(
                        'theme_location'=>'primary-menu',
                        'container'=>'',
                        'depth'=> 0,
                        'items_wrap'=>'<ul class="navbar-nav ms-auto">%3$s</ul>',
                        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                        'walker'            => new WP_Bootstrap_Navwalker()

                    ));
                }
                else{
                    ?>
                    <a href="wp-admin/nav-menus.php?action=edit" class="m-auto link-danger">
                    <?php
                       _e('Add Menu');
                    ?>
                    </a>
                    <?php
                }
                ?>
                
                </div>
            </div>
        </nav>
        <!--end navigation bar-->
        <!--app area-->
        <div class="app-area mt-5 pt-5">
            <div class="container">

                <div class="row">


                    <div class="col-12 col-md-4">

                        <ul class="d-flex flex-row flex-wrap justify-content-center justify-content-md-start list-unstyled">
                             <?php if(get_theme_mod('header_facebook_field')): ?>
                            <li class="p-2"><a href="<?php echo esc_url(get_theme_mod('header_facebook_field')); ?>" target="_blank"><i class="text-dark bi bi-facebook"></i></a></li>
                            <?php endif; ?>
                            <?php if(get_theme_mod('header_youtube_field')): ?>
                            <li class="p-2"><a href="<?php echo esc_url(get_theme_mod('header_youtube_field')); ?>" target="_blank"><i class="text-dark bi bi-youtube"></i></a></li>
                            <?php endif; ?>
                            <?php if(get_theme_mod('header_linkedin_field')): ?>
                            <li class="p-2"><a href="<?php echo esc_url(get_theme_mod('header_linkedin_field')); ?>" target="_blank"><i class="text-dark bi bi-linkedin"></i></a></li>
                            <?php endif; ?>
                            <?php if(get_theme_mod('header_download_text_field') || get_theme_mod('header_download_link_field')): ?>
                            <li class="p-2 text-uppercase">
                            <a href="<?php echo esc_url(get_theme_mod('header_download_link_field')); ?>" target="_blank"
                            class="link-danger text-decoration-none fw-bold"> <?php echo esc_html(get_theme_mod('header_download_text_field')); ?> </a>
                            </li>
                            <?php endif; ?>

                        </ul>

                    </div>
                    <div class="col-12 col-md-4">
                        <div class="text-center">
                            <h2 class="text-title">
                             <?php if(get_theme_mod('header_title_field')): ?>

                           <!-- <a href="#" class="text-decoration-none link-danger">BeHealthy</a>-->
                           <a href="<?php home_url(); ?>" class="text-decoration-none link-danger"><?php echo(get_theme_mod('header_title_field'));?></a>
                            <?php endif;?>
                            </h2>
                            <p class="text-description text-dark">
                            <?php if(get_theme_mod('header_description_field')){
                               echo (get_theme_mod('header_description_field'));
                            }
                            ?>

                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="search">
                            <!--get the searchform.php file using get_search_form template tag-->
                            <?php get_search_form(); ?>
                            
                        </div>
                        
                    </div>

                </div>
            </div>
        </div>

        <!--end app area-->
        <!--categories area-->
        <div class="categories-area mt-4">

            <div class="container">
             
             <?php
                
                if(has_nav_menu('secondary-menu')){
                    wp_nav_menu(array(
                        'theme_location'=>'secondary-menu',
                        'container'=>'',
                        'depth'=> 0,
                        'items_wrap'=>'<ul class="nav nav-pills nav-fill shadow bg-light">%3$s</ul>',
                        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                        'walker'            => new WP_Bootstrap_Navwalker()

                    ));
                }
                else{
                    ?>
                    <a href="wp-admin/nav-menus.php?action=edit" class="m-auto link-danger">
                    <?php
                       _e('Add Menu');
                    ?>
                    </a>
                    <?php
                }
                

                ?>
            </div>
        </div>
        <!--end categories area-->
    </header>
    <!--End Header Area-->

    <main class="main-area">