<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package advokat-zv
 */

?>

</div><!-- #content -->

<footer class="site-footer" role="contentinfo">
    <div class="container">
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 logo">
            <div class="name">Захаряев Вадим</div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 social">
            <a href="http://vk.com" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/img/icons/vk.png" alt="vk"></a>
            <a href="http://instagram.com" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/img/icons/inst.png" alt="inst"></a>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 contacts">
            <div class="adress">пр-т Р. Гамзатова, д. 12 "а"</div>
            <div class="phone"><a href="tel:+79896655778">+7 (989) 66-55-778</a></div>
        </div>
        <div class="copyright col-lg-12 col-md-12 col-sm-12 col-xs-12">2016, &copy; Адвокат Захаряев Вадим</div>
    </div>
</footer>
</div><!-- #page -->
<!-- build:js -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../js/partials/main.js"></script>
<!-- endbuild -->
<?php wp_footer(); ?>

</body>
</html>
