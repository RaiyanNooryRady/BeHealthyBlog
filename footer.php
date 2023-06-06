</main>
    <!--end main-area-->
    <footer class="footer-area">
        <hr>
        <div class="container mt-4">
            <div class="row">
                <div class="col-12 col-md-3 text-center">
                  
                    <?php if (is_active_sidebar("footer-1")) {
                           dynamic_sidebar("footer-1");
                    }?>

                </div>
                <div class="col-12 col-md-3 text-center">
                  
                    <?php if (is_active_sidebar("footer-2")) {
                           dynamic_sidebar("footer-2");
                    }?>
                </div>
                <div class="col-12 col-md-3 text-center">
                   
                    <?php if (is_active_sidebar("footer-3")) {
                           dynamic_sidebar("footer-3");
                    }?>
                </div>
                <div class="col-12 col-md-3 text-center">
                  
                    <?php if (is_active_sidebar("footer-4")) {
                           dynamic_sidebar("footer-4");
                    }?>
                   
                </div>
            </div>
            <div class="row mt-1 text-center">
                <ul class="d-flex flex-row flex-wrap justify-content-center list-unstyled">
                    <?php if(get_theme_mod('footer_facebook_field')): ?>
                    <li class="p-2"><a href="<?php echo esc_url(get_theme_mod('footer_facebook_field')) ?>"><i class="text-dark bi bi-facebook"></i></a></li>
                     <?php endif; ?>
                     <?php if(get_theme_mod('footer_youtube_field')): ?>
                    <li class="p-2"><a href="<?php echo get_theme_mod('footer_youtube_field'); ?>"><i class="text-dark bi bi-youtube"></i></a></li>
                    <?php endif; ?>
                    <?php if(get_theme_mod('footer_linkedin_field')): ?>
                    <li class="p-2"><a href="<?php echo get_theme_mod('footer_linkedin_field'); ?>"><i class="text-dark bi bi-linkedin"></i></a></li>
                    <?php endif; ?>


                </ul>
                <p> <?php _e('Copyright ©','behealthy'); echo date('Y'); ?> <a href="<?php echo site_url(); ?>" class="text-decoration-none link-danger"><?php bloginfo("name"); ?></a> <?php _e('|| All
                    rights reserved','behealthy');?><br> <a href="http://liilab.com" class="text-decoration-none link-danger" target="_blank"><?php _e('BeHealthy-Theme ','behealthy'); ?></a><?php _e('by','behealthy'); ?><a href="http://liilab.com" class="text-decoration-none link-danger" target="_blank"><?php _e(' LIILab','behealthy'); ?></a>
                </p>

            </div>
        </div>

    </footer>
   <!--End footer area-->

   <?php wp_footer();?>
</body>

</html>