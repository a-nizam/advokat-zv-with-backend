<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package advokat-zv
 */
?>

<?php get_header(); ?>

<section id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <div class="container">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post() ?>
                    <?php get_template_part('template-parts/content', 'search') ?>
                <?php endwhile ?>
                <div class="text-center">
                    <div class="nav-wrapper">
                        <?php wp_bootstrap_pagination() ?>
                    </div>
                </div>
            <?php else : ?>
                <?php get_template_part('template-parts/content', 'none') ?>
            <?php endif ?>
        </div>
    </main><!-- #main -->
</section><!-- #primary -->

<?php get_footer() ?>