<?php
//get header.php file
get_header();


?>
      
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