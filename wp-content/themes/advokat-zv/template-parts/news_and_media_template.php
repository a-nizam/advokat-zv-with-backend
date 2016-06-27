<?php get_header() ?>
    <div class="container" xmlns="http://www.w3.org/1999/html">
        <?php if (have_posts()) : ?>
            <div class="row">
                <?php while (have_posts()) : the_post() ?>
                    <article id="post-<?php the_ID(); ?>" class="item col-lg-4 col-md-4 col-sm-6">
                        <h4><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h4>
                        <div class="date"><?php echo get_the_date("j F Y, G:i") ?></div>
                        <?php the_content("Читать полностью") ?>
                    </article>
                <?php endwhile ?>
            </div>
            <div class="text-center">
                <div class="nav-wrapper">
                    <?php wp_bootstrap_pagination() ?>
                </div>
            </div>
        <?php endif ?>
    </div>
<?php get_footer() ?>