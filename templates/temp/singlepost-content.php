
<?php if(have_posts()):?>
   <?php while(have_posts()): the_post();?>
<div class="card">
    <?php if(has_post_thumbnail()): ?>
    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="img" class="card-img-top">
    <?php endif; ?>
    <p class="card-text"><small>
        <?php get_template_part('templates/temp/post','tags'); ?>
    </small></p>

    <div class="card-body pt-0">
                    <h5 class="card-title">
                        <a href="<?php the_permalink(); ?>" class="link-dark text-decoration-none"><?php echo the_title(); ?></a>
                    </h5>
                   
                    <p class="card-text">
                        <small class="text-muted">
                           <!--load post-categories.php template-->
                           <?php get_template_part('templates/temp/post','categories'); ?>

                            <?php _e('By','behealthy');?>
                            <a href="<?php echo get_author_posts_url(get_the_author_meta("ID")); ?>" class="link-danger text-decoration-none me-2"><?php the_author(); ?></a>
                            <a href="#" class="link-secondary text-decoration-none me-2"><i class="bi bi-clock"></i><?php echo get_the_date();?></a>
                            <a href="<?php echo get_comments_link() ?>" class="link-secondary text-decoration-none"><i class="bi bi-chat me-2">
                            <?php echo get_comments_number(); ?></i></a>
                            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank" class="me-2 ms-2"><i class="text-muted bi bi-facebook"></i></a>
                            <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php the_permalink(); ?>" target="_blank"><i class="text-muted bi bi-linkedin"></i></a>
                        </small>
                    </p>
                    <p class="card-text">
                       <?php echo get_the_content(); 
                          // If comments are open or we have at least one comment, load up the comment template.
                             if ( comments_open() || get_comments_number() ) :
                                comments_template();
                             endif;
                         
                       ?>
                       
                    </p>
                   
                </div>
</div>
<?php endwhile;?>
   <?php else: ?>
    <div class="mt-4"><?php echo wpautop("Sorry! No posts were found");    ?></div>
<?php endif; wp_reset_query();?>