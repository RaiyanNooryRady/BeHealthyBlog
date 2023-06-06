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
                                             'items_wrap'=>'<ul class="nav nav-pills nav-fill border-bottom border-2 border-muted mb-5">%3$s</ul>',
                                             'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                                             'walker'            => new WP_Bootstrap_Navwalker()

                                            ));
                                        }
                                   ?>

                                </div>
                                <!--end categories  area-->


                            </div>
                        </div>
                       
                        <div class="row">
                           <?php echo wpautop("<h2>404!</h2><br> <h3>Oops! That page can’t be found. </h3> <br> <p>It looks like nothing was found at this location. Maybe try one of the links above or a search?</p>");?>
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
                                             'items_wrap'=>'<ul class="nav nav-pills nav-fill border-bottom border-2 border-muted mb-5">%3$s</ul>',
                                             'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                                             'walker'            => new WP_Bootstrap_Navwalker()

                                            ));
                                        }
                                   ?>

                                </div>
                                <!--end categories  area-->


                            </div>
                        </div>
                        
                        <div class="row">
                        <?php echo wpautop("<h2>404!</h2><br> <h3>Oops! That page can’t be found. </h3> <br> <p>It looks like nothing was found at this location. Maybe try one of the links above or a search?</p>");?>
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