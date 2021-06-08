<?php get_header(); ?>
<main class="blog">
    <div class="container">
    <h1 class="pt-5 mt-5 text-center"><?php the_title(); ?></h1>
        <section class="featured-posts-section">
            <div class="row">
                <?php if(have_posts()) {
                    while(have_posts()) {
                        the_post();
                        get_template_part('template-parts/content', 'archive');
                    }
                }
                ?>
                <?php the_posts_pagination(); ?>
            </div>
        </section>
    </div>
</main>
<?php get_footer(); ?>