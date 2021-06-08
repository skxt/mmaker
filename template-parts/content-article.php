<main class="blog-post">
    <div class="container">
        <h1 class="pt-5 mt-5 text-center"><?php the_title(); ?></h1>
        <p class="mmaker-blog-post-meta"><?php the_date(); ?></p>
        <section class="blog-post-featured-img" data-aos="fade-up">
            <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
        </section>
        <section class="post-content">
            <div class="row">
                <div class="col-lg-10 p-5 mx-auto bg-white">
                    <?php the_content(); ?>
                </div>
            </div>               
        </section>
    </div>
</main>