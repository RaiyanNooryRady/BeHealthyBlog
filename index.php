<?php
//get header.php file
get_header();


?>
        <!--Banner Area-->
        <section class="banner-area mt-4">
            <div class="container">
                <div id="slider-1" class="carousel slide" data-bs-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-bs-target="#slider-1" data-bs-slide-to="0" class="active "></li>
                        <li data-bs-target="#slider-1" data-bs-slide-to="1"></li>
                        <li data-bs-target="#slider-1" data-bs-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <!--<img src="assets/images/food3.jpg" class="d-block w-100 img-fluid " alt="First Slide">-->
                            <?php if(get_theme_mod('slider_image1')):  ?>
                                <img src="<?php echo esc_url(get_theme_mod('slider_image1')); ?>" class="d-block w-100 img-fluid " alt="First Slide">
                            <?php endif; ?>

                            <div class="carousel-caption">
                                <h4 class="text-light fw-bold">
                                  <?php if(get_theme_mod('slider_title1_field')){
                                      echo esc_html(get_theme_mod('slider_title1_field'));
                                  } ?>
                                </h4>
                                <p class="text-description text-light"><?php if(get_theme_mod('slider_description1_field')){
                                      echo esc_html(get_theme_mod('slider_description1_field'));
                                  } ?></p>
                                <?php if(get_theme_mod('slider_button1_text_field')): ?>
                                <a href="<?php echo esc_url(get_theme_mod('slider_button1_link_field')); ?>" class="btn btn-danger fw-bold"><?php echo esc_html(get_theme_mod('slider_button1_text_field')); ?></a>
                                <?php endif;?>
                            </div>


                        </div>
                        <div class="carousel-item">
                            <!--<img src="assets/images/run.jpg" class="d-block w-100 img-fluid" alt="Second Slide">-->
                            <?php if(get_theme_mod('slider_image2')):  ?>
                                <img src="<?php echo esc_url(get_theme_mod('slider_image2')); ?>" class="d-block w-100 img-fluid " alt="Second Slide">
                            <?php endif; ?>
                            <div class="carousel-caption">
                                <h4 class="text-light fw-bold">
                                <?php if(get_theme_mod('slider_title2_field')){
                                      echo esc_html(get_theme_mod('slider_title2_field'));
                                  } ?>
                                </h4>
                                <p class="text-description text-light"><?php if(get_theme_mod('slider_description2_field')){
                                      echo esc_html(get_theme_mod('slider_description2_field'));
                                  } ?></p>
                                 <?php if(get_theme_mod('slider_button2_text_field')): ?>
                                <a href="<?php echo esc_url(get_theme_mod('slider_button2_link_field')); ?>" class="btn btn-danger fw-bold"><?php echo esc_html(get_theme_mod('slider_button2_text_field')); ?></a>
                                <?php endif;?>
                            </div>

                        </div>
                        <div class="carousel-item">
                           <!-- <img src="assets/images/covid.jpg" class="d-block w-100 img-fluid" alt="Third Slide">-->
                           <?php if(get_theme_mod('slider_image3')):  ?>
                                <img src="<?php echo esc_url(get_theme_mod('slider_image3')); ?>" class="d-block w-100 img-fluid " alt="Third Slide">
                            <?php endif; ?>
                            <div class="carousel-caption">
                                <h4 class="text-light fw-bold">
                                <?php if(get_theme_mod('slider_title3_field')){
                                      echo esc_html(get_theme_mod('slider_title3_field'));
                                  } ?>
                                </h4>
                                <p class="text-description text-light">
                                <?php if(get_theme_mod('slider_description3_field')){
                                      echo esc_html(get_theme_mod('slider_description3_field'));
                                  } ?>
                                </p>
                                <?php if(get_theme_mod('slider_button3_text_field')): ?>
                                <a href="<?php echo esc_url(get_theme_mod('slider_button3_link_field')); ?>" class="btn btn-danger fw-bold"><?php echo esc_html(get_theme_mod('slider_button3_text_field')); ?></a>
                                <?php endif;?>
                            </div>

                        </div>

                    </div>
                    <a href="#slider-1" class="carousel-control-prev" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a href="#slider-1" class="carousel-control-next" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                </div>
                <hr class="mt-4 text-muted">
            </div>

        </section>

        <!--End Banner Area-->
        <!--post-area-->
        <section class="post-area mt-3">
            <div class="container">
                <div class="row">
                    <?php if(is_active_sidebar("sidebar-1")): ?>
                    <div class="col-12 col-md-8">
                        <div class="row">
                            <div class="explore-area">
                                <h6 class="pb-2 title-text fw-bold d-inline border-bottom border-2 border-danger">
                                   <?php if(get_theme_mod('explore_field')){
                                       echo esc_html(get_theme_mod('explore_field'));
                                   } ?>
                                </h6>

                                <!--categories area-->
                                <div class="categories-area">

                                    
                                    <?php
                
                                      if(has_nav_menu('categories-menu')){
                                               wp_nav_menu(array(
                                             'theme_location'=>'categories-menu',
                                             'container'=>'',
                                             'depth'=> 0,
                                             'items_wrap'=>'<ul class="nav nav-pills  border-bottom border-2 border-muted mb-5">%3$s</ul>',
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
                                <!--end categories  area-->


                            </div>
                        </div>
                        <!--Featured Area-->
                        <div class="row">
                            
                            <!--one post area-->

                            <div class="one-post-area col-md-6">
                                
                                <?php
                                get_template_part('templates/temp/onepost','content');
                                ?>
                            </div>

                            <!--one post area end-->
                            <!--multiple post area-->

                            <div class="multiple-post-area col-md-6">
                               
                                <?php 
                                get_template_part('templates/temp/multiplepost','content');

                                ?>

                            </div>

                            <!--multiple post area end-->

                        </div>
                        <!--End Featured Area-->
                        <div class="row">
                            <!--All posts area-->
                            <div class="all-post-area mt-4 <?php post_class(); ?>">
                                <?php if(get_theme_mod('all_posts_text_field')): ?>
                                <h6 class="pb-2 title-text fw-bold d-inline border-bottom border-2 border-danger">
                                   <?php echo get_theme_mod('all_posts_text_field'); ?>
                                </h6>
                                <?php endif; ?>
                                <?php 
                                //load template post-content.php 
                                
                                get_template_part('templates/temp/post','content');
                                ?>
                            </div>
                            <!--All Posts area end-->
                        </div>
                        <div class="row">
                            <!--pagination-area-->
                            <div class="pagination-area">
                            <?php echo behealthy_custom_pagination();?>
                               
                            </div>
                            <!--end pagination-area-->
                        </div>

                    </div>
                    <!--Sidebar area-->
                    <div class="col-12 col-md-4">
                       <?php get_sidebar(); ?>
                    </div>
                        <!--end sidebar area-->
                    <?php else: ?>
                    <div class="col-12">
                        <div class="row">
                            <div class="explore-area">
                                <h6 class="pb-2 title-text fw-bold d-inline border-bottom border-2 border-danger">
                                   <?php if(get_theme_mod('explore_field')){
                                       echo esc_html(get_theme_mod('explore_field'));
                                   } ?>
                                </h6>

                                <!--categories area-->
                                <div class="categories-area">

                                    
                                    <?php
                
                                      if(has_nav_menu('categories-menu')){
                                               wp_nav_menu(array(
                                             'theme_location'=>'categories-menu',
                                             'container'=>'',
                                             'depth'=> 0,
                                             'items_wrap'=>'<ul class="nav nav-pills border-bottom border-2 border-muted mb-5">%3$s</ul>',
                                             'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                                             'walker'            => new WP_Bootstrap_Navwalker()

                                            ));
                                        }
                                   ?>

                                </div>
                                <!--end categories  area-->


                            </div>
                        </div>
                        <!--Featured Area-->
                        <div class="row">
                            
                            <!--one post area-->

                            <div class="one-post-area col-md-6">
                                
                                <?php
                                get_template_part('templates/temp/onepost','content');
                                ?>
                            </div>

                            <!--one post area end-->
                            <!--multiple post area-->

                            <div class="multiple-post-area col-md-6">
                               
                                <?php 
                                get_template_part('templates/temp/multiplepost','content');

                                ?>

                            </div>

                            <!--multiple post area end-->

                        </div>
                        <!--End Featured Area-->
                        <div class="row">
                            <!--All posts area-->
                            <div class="all-post-area mt-4 <?php post_class(); ?>">
                                <?php if(get_theme_mod('all_posts_text_field')): ?>
                                <h6 class="pb-2 title-text fw-bold d-inline border-bottom border-2 border-danger">
                                   <?php echo get_theme_mod('all_posts_text_field'); ?>
                                </h6>
                                <?php endif; ?>
                                <?php 
                                //load template post-content.php 
                                get_template_part('templates/temp/post','content');
                                ?>
                            </div>
                            <!--All Posts area end-->
                        </div>
                        <div class="row">
                            <!--pagination-area-->
                            <div class="pagination-area">
                            <?php echo behealthy_custom_pagination();?>
                               
                            </div>
                            <!--end pagination-area-->
                        </div>

                    </div>
                    <?php endif; ?>
                    
                </div>
            </div>

        </section>
        <!--end post-area-->
  <?php
  //get footer.php file
  get_footer();

  ?>