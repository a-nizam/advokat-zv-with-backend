<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package advokat-zv
 */
?>
<?php get_header() ?>
<div class="container">
    <div class="row">
        <?php $isServices = get_the_category()[0]->category_nicename == 'services' ? 1 : 0 ?>
        <?php if ($isServices) : ?>
            <div class="col-lg-3 col-md-4 col-sm-5 sidebar">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Услуги адвоката</h3>
                    </div>
                    <div class="panel-body">
                        <?php $query = new WP_Query(array('category_name' => 'services', 'posts_per_page' => 20, 'order' => 'ASC')) ?>
                        <?php if ($query->have_posts()) : ?>
                            <?php while ($query->have_posts()) : $query->the_post() ?>
                                <div class="media">
                                    <div class="media-left">
                                        <a href="<?php the_permalink() ?>">
                                            <?php the_post_thumbnail() ?>
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">
                                            <a href="<?php the_permalink() ?>">
                                                <?php the_title() ?>
                                            </a>
                                        </h4>
                                    </div>
                                </div>
                            <?php endwhile ?>
                        <?php endif ?>
                    </div>
                </div>
            </div>
        <?php else : ?>
            <h1 class="col-sm-12"><?php the_title() ?></h1>
        <?php endif ?>
        <div class="<?php echo $isServices ? 'col-lg-9 col-md-8 col-sm-7' : 'col-sm-12' ?>">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post() ?>
                    <?php the_content() ?>
                <?php endwhile ?>
            <?php endif ?>
        </div>
    </div>
</div>
<?php get_footer() ?>