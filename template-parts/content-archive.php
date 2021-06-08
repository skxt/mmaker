<!-- articolo come archivio dentro blog -->
<div class="col-md-4 fetured-post blog-post" data-aos="fade">
    <article>
        <div class="blog-post-thumbnail-wrapper">
            <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
        </div>
        <p class="blog-post-category"><?php the_date(); ?></p>
        <a href="<?php the_permalink(); ?>" class="blog-post-permalink">
            <h6><?php the_title(); ?></h6>
        </a>
    </article>
</div>