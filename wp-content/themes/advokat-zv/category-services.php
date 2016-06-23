<?php get_header() ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 sidebar">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Услуги адвоката</h3>
                    </div>
                    <div class="panel-body">
                        <?php global $query_string ?>
                        <?php query_posts($query_string . '&posts_per_page=20&order=ASC') ?>
                        <?php if (have_posts()) : ?>
                            <?php while (have_posts()) : the_post() ?>
                                <div class="media">
                                    <div class="media-left">
                                        <a href="<?php the_permalink() ?>">
                                            <?php the_post_thumbnail() ?>
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading"><a
                                                href="<?php the_permalink() ?>"><?php the_title() ?></a></h4>
                                    </div>
                                </div>
                            <?php endwhile ?>
                        <?php endif ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-9">
                <?php $query = new WP_Query(array('category_id' => 72, 'posts_per_page' => 1)) ?>
                <?php if ($query->have_posts()) : ?>
                    <?php while ($query->have_posts()) : $query->the_post() ?>
                        <?php the_content() ?>
                    <?php endwhile ?>
                <?php endif ?>
            </div>
        </div>
    </div>
<?php get_footer() ?>