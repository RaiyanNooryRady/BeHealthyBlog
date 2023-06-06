<?php
/**
 * 
 * Featured Area
 * Template: Multiple Post Content
 * 
 */


?>
<?php $c=4; if(have_posts()):?>
<?php while($c--): 
 if(have_posts()):
 the_post();

?>

<div class="card border-0 mb-3">
    <div class="row g-0">
        <div class="col-4">
             <?php if(has_post_thumbnail()): ?>
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Image" class="card-img" />
            <?php endif;?>
        </div>
        <div class="col-8">
            <div class="card-body pt-0">
                <h6 class="card-title">
                    <a href="<?php the_permalink(); ?>" class="link-dark text-decoration-none"> <?php echo the_title(); ?></a>
                </h6>
                <p class="card-text">
                    <small class="text-muted"><a href="#" class="link-secondary text-decoration-none"><i
                                class="bi bi-clock"></i> <?php echo get_the_date(); ?></a></small>
                </p>
            </div>
        </div>
    </div>
</div>
<?php endif; endwhile; ?>
<?php endif; wp_reset_query(); wp_reset_postdata();?>
<!--
<div class="card border-0 mb-3">
    <div class="row g-0">
        <div class="col-4">
            <img src="assets/images/food.jpg" alt="run" class="card-img" />
        </div>
        <div class="col-8">
            <div class="card-body pt-0">
                <h6 class="card-title">
                    <a href="#" class="link-dark text-decoration-none">Eat delicious but healthy d kd k kdkdk dk dk
                        foods</a>
                </h6>
                <p class="card-text">
                    <small class="text-muted"><a href="#" class="link-secondary text-decoration-none"><i
                                class="bi bi-clock"></i> Feb 5, 2021</a></small>
                </p>
            </div>
        </div>
    </div>
</div>
<div class="card border-0 mb-3">
    <div class="row g-0">
        <div class="col-4">
            <img src="assets/images/heart.jpg" alt="run" class="card-img" />
        </div>
        <div class="col-8">
            <div class="card-body pt-0">
                <h6 class="card-title">
                    <a href="#" class="link-dark text-decoration-none">Do action before attacked by diseases.</a>
                </h6>
                <p class="card-text">
                    <small class="text-muted"><a href="#" class="link-secondary text-decoration-none"><i
                                class="bi bi-clock"></i> Feb 5, 2021</a></small>
                </p>
            </div>
        </div>
    </div>
</div>
<div class="card border-0 mb-3">
    <div class="row g-0">
        <div class="col-4">
            <img src="assets/images/run.jpg" alt="run" class="card-img" />
        </div>
        <div class="col-8">
            <div class="card-body pt-0">
                <h6 class="card-title">
                    <a href="#" class="link-dark text-decoration-none">All about do physical exercises regularly</a>
                </h6>
                <p class="card-text">
                    <small class="text-muted"><a href="#" class="link-secondary text-decoration-none"><i
                                class="bi bi-clock"></i> Feb 5, 2021</a></small>
                </p>
            </div>
        </div>
    </div>
</div>
-->