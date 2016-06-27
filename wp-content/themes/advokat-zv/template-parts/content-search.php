<?php
/**
 * Template part for displaying results in search pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package advokat-zv
 */

?>

<article id="post-<?php the_ID(); ?>" class="item col-lg-4 col-md-4 col-sm-6">
    <div class="entry-summary">
        <h4><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h4>
        <div class="date"><?php echo get_the_date("j F Y, G:i") ?></div>
        <?php the_content("Читать полностью") ?>
    </div><!-- .entry-summary -->
</article><!-- #post-## -->
