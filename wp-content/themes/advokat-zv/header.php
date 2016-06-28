<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package advokat-zv
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <header id="masthead" class="site-header" role="banner">
        <div id="logo-and-contacts">
            <div class="container">
                <div class="row">
                    <div id="logo" class="col-lg-4 col-md-5 col-sm-5 col-xs-12">
                        <a href="<?php echo esc_url(home_url('/')); ?>" title="Адвокат" class="logo">
                            <div class="title"><?php bloginfo('name'); ?></div>
                        </a>
                    </div>
                    <div
                        class="col-lg-3 col-lg-offset-3 col-md-3 col-md-offset-2 col-sm-4 col-sm-offset-0 col-xs-12 contacts">
                        г. Москва, <br
                            class="hidden-xs"/>
                        пер. Лебяжий 8/4, стр. 1
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 contacts"><a href="tel:+79250772021">+7 (925) 077-20-21</a><br/><a
                            href="mailto:info@advokat-zv.ru">info@advokat-zv.ru</a></div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                    <ul class="nav navbar-nav">
                        <li><a href="<?php echo esc_url(home_url('/')); ?>">Главная<span class="sr-only">(current)</span></a></li>
                        <li><a href="<?php echo get_category_link(2) ?>">Услуги</a></li>
                        <li><a href="<?php echo get_post_type_archive_link('massmedia') ?>">СМИ</a></li>
                        <li><a href="<?php echo get_post_type_archive_link('news') ?>">Новости</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false">Об
                                адвокате <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="<?php the_permalink(95) ?>">Стоимость услуг</a></li>
                                <li><a href="<?php the_permalink(98) ?>">Практика</a></li>
                                <li class="divider"></li>
                                <li><a href="<?php the_permalink(75) ?>">Контакты</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <form class="navbar-form navbar-left сol-xs-8 col-xs-offset-2" role="search" action="/">
                            <div class="form-group">
                                <input name="s" class="form-control" placeholder="Поиск" type="text">
                            </div>
                            <button type="submit" class="btn btn-default">Найти</button>
                        </form>
                    </ul>
                </div>
            </div>
        </nav>
        <?php if (is_home()) : ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 about">
                    <div class="name">Захаряев Вадим</div>
                    <div class="services">Услуги профессионального адвоката на страже ваших интересов.</div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 question">
                    <?php echo do_shortcode('[contact-form-7 id="93" title="Заявка на консультацию"]') ?>
                </div>
            </div>
        </div>
        <?php endif ?>
    </header><!-- #masthead -->

    <div id="content" class="site-content">