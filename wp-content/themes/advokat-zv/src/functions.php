<?php
/**
 * advokat-zv functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package advokat-zv
 */

if (!function_exists('advokat_zv_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function advokat_zv_setup()
    {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on advokat-zv, use a find and replace
         * to change 'advokat-zv' to the name of your theme in all the template files.
         */
        load_theme_textdomain('advokat-zv', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(array(
            'primary' => esc_html__('Primary', 'advokat-zv'),
        ));

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        // Set up the WordPress core custom background feature.
        add_theme_support('custom-background', apply_filters('advokat_zv_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));
    }
endif;
add_action('after_setup_theme', 'advokat_zv_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function advokat_zv_content_width()
{
    $GLOBALS['content_width'] = apply_filters('advokat_zv_content_width', 640);
}

add_action('after_setup_theme', 'advokat_zv_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function advokat_zv_widgets_init()
{
    register_sidebar(array(
        'name' => esc_html__('Sidebar', 'advokat-zv'),
        'id' => 'sidebar-1',
        'description' => esc_html__('Add widgets here.', 'advokat-zv'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}

add_action('widgets_init', 'advokat_zv_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function advokat_zv_scripts()
{
    wp_enqueue_style('owl_style', get_template_directory_uri() . "/css/owl.carousel.min.css", false, "2.16beta");
    wp_enqueue_style('owl_theme_default', get_template_directory_uri() . "/css/owl.theme.default.min.css", false, "2.16beta");
    wp_enqueue_style('advokat-zv-style', get_stylesheet_uri(), array('owl_style', 'owl_theme_default'));

    wp_deregister_script('jquery');
    wp_register_script('jquery', get_template_directory_uri() . '/bower_components/jquery/dist/jquery.min.js', false, '2.2.4', true);
    wp_enqueue_script('jquery');

    wp_enqueue_script('html5shiv', 'https://oss.maxcdn.com/html5shiv/4.7.2/html5shiv.min.js', array(), '4.7.2');
    wp_script_add_data('html5shiv', 'conditional', 'lt IE 9');

    wp_enqueue_script('respond', 'https://oss.maxcdn.com/respond/1.4.2/respond.min.js', array(), '1.4.2');
    wp_script_add_data('respond', 'conditional', 'lt IE 9');

    wp_enqueue_script('advokat-zv-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true);

//    wp_enqueue_script('ymaps', 'https://api-maps.yandex.ru/2.1/?lang=ru_RU', array('jquery'), '20151215', true);

    wp_enqueue_script('owl_script', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), '2.1.6beta', true);

    wp_enqueue_script('advokat-zv-script', get_template_directory_uri() . '/js/script.js', array('jquery', 'owl_script'), '20151215', true);

    if (is_home()) {
        wp_enqueue_script('advokat-zv-home', get_template_directory_uri() . '/js/home.js', array('jquery', 'advokat-zv-script'), '20151215', true);
    }

    wp_enqueue_script('advokat-zv-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'advokat_zv_scripts');

function wp_bootstrap_pagination($args = array())
{

    $defaults = array(
        'range' => 4,
        'custom_query' => FALSE,
        'previous_string' => __('Пред.', 'text-domain'),
        'next_string' => __('След.', 'text-domain'),
        'before_output' => '<div class="post-nav"><ul class="pagination">',
        'after_output' => '</ul></div>'
    );

    $args = wp_parse_args(
        $args,
        apply_filters('wp_bootstrap_pagination_defaults', $defaults)
    );

    $args['range'] = (int)$args['range'] - 1;
    if (!$args['custom_query'])
        $args['custom_query'] = @$GLOBALS['wp_query'];
    $count = (int)$args['custom_query']->max_num_pages;
    $page = intval(get_query_var('paged'));
    $ceil = ceil($args['range'] / 2);

    if ($count <= 1)
        return FALSE;

    if (!$page)
        $page = 1;

    if ($count > $args['range']) {
        if ($page <= $args['range']) {
            $min = 1;
            $max = $args['range'] + 1;
        } elseif ($page >= ($count - $ceil)) {
            $min = $count - $args['range'];
            $max = $count;
        } elseif ($page >= $args['range'] && $page < ($count - $ceil)) {
            $min = $page - $ceil;
            $max = $page + $ceil;
        }
    } else {
        $min = 1;
        $max = $count;
    }

    $echo = '';
    $previous = intval($page) - 1;
    $previous = esc_attr(get_pagenum_link($previous));

    $firstpage = esc_attr(get_pagenum_link(1));
//    if ($firstpage && (1 != $page))
//        $echo .= '<li class="previous"><a href="' . $firstpage . '">' . __('Нач.', 'text-domain') . '</a></li>';
    if ($previous && (1 != $page))
        $echo .= '<li><a href="' . $previous . '" title="' . __('previous', 'text-domain') . '">' . $args['previous_string'] . '</a></li>';

    if (!empty($min) && !empty($max)) {
        for ($i = $min; $i <= $max; $i++) {
            if ($page == $i) {
                $echo .= '<li class="active"><span class="active">' . str_pad((int)$i, 2, '0', STR_PAD_LEFT) . '</span></li>';
            } else {
                $echo .= sprintf('<li><a href="%s">%002d</a></li>', esc_attr(get_pagenum_link($i)), $i);
            }
        }
    }

    $next = intval($page) + 1;
    $next = esc_attr(get_pagenum_link($next));
    if ($next && ($count != $page))
        $echo .= '<li><a href="' . $next . '" title="' . __('next', 'text-domain') . '">' . $args['next_string'] . '</a></li>';

//    $lastpage = esc_attr(get_pagenum_link($count));
//    if ($lastpage) {
//        $echo .= '<li class="next"><a href="' . $lastpage . '">' . __('Last', 'text-domain') . '</a></li>';
//    }
    if (isset($echo))
        echo $args['before_output'] . $echo . $args['after_output'];
}


/**
 * Admin panel settings
 */

if (!is_admin()) {
    add_action('init', create_function('$a', "remove_action( 'init', 'wp_version_check' );"), 2);
    add_filter('pre_option_update_core', create_function('$a', "return null;"));

    add_filter('pre_site_transient_update_core', create_function('$a', "return null;"));
}

function remove_menus()
{
    remove_submenu_page('index.php', 'update-core.php');
    remove_menu_page('edit-comments.php');          // Комментарии
    remove_menu_page('themes.php');                 // Внешний вид
    remove_menu_page('plugins.php');                // Плагины
    remove_menu_page('users.php');                  // Пользователи
    remove_menu_page('tools.php');                  // Инструменты
    remove_menu_page('options-general.php');        // Настройки
    remove_menu_page('wpseo_dashboard');            // Yoast SEO
    remove_menu_page('wpcf7');                      // Contact Form 7
}

if (!is_admin()) {
    add_action('admin_menu', 'remove_menus');
}

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
