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
                            <h1><?php bloginfo('name'); ?></h1>
                        </a>
                    </div>
                    <div
                        class="col-lg-3 col-lg-offset-3 col-md-3 col-md-offset-2 col-sm-4 col-sm-offset-0 col-xs-12 contacts">
                        г.Махачкала, <br
                            class="hidden-xs"/>пр-т
                        Р. Гамзатова, д. 12 "а"
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 contacts"><a href="tel:+79896655778">+7 (989)
                            66-55-778</a><br/><a
                            href="mailto:info@logix.su">info@logix.su</a></div>
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
                        <li class="active"><a href="<?php echo esc_url(home_url('/')); ?>">Главная<span class="sr-only">(current)</span></a></li>
                        <li><a href="#">Услуги</a></li>
                        <li><a href="#">Вопрос-ответ</a></li>
                        <li><a href="#">СМИ</a></li>
                        <li><a href="#">Новости</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false">Об
                                адвокате <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Стоимость услуг</a></li>
                                <li><a href="#">Практика</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Контакты</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <form class="navbar-form navbar-left сol-xs-8 col-xs-offset-2" role="search">
                            <div class="form-group">
                                <input name="s" class="form-control" placeholder="Поиск" type="text">
                            </div>
                            <button type="submit" class="btn btn-default">Найти</button>
                        </form>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 about">
                    <div class="name">Захаряев Вадим</div>
                    <div class="services">Услуги профессионального адвоката на страже ваших интересов.</div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 question">
                    <form class="form-horizontal">
                        <fieldset>
                            <legend>Заявка на консультацию</legend>
                            <div class="form-group">
                                <label for="inputName"
                                       class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">ФИО</label>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                    <input class="form-control" id="inputName" placeholder="ФИО" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputCity"
                                       class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">Город</label>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                    <input class="form-control" id="inputCity" placeholder="Город" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputCity" class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">Телефон</label>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                    <input class="form-control" id="inputPhone" placeholder="Телефон" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail"
                                       class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">Email</label>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                    <input class="form-control" id="inputEmail" placeholder="Email" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="textAreaQuestion"
                                       class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">Вопрос</label>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                    <textarea class="form-control" rows="3" id="textAreaQuestion"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div
                                    class="col-lg-10 col-lg-offset-2 col-md-10 col-md-offset-2 col-sm-10 col-sm-offset-2 col-xs-12">
                                    <button type="submit" class="btn btn-default">Отправить</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </header><!-- #masthead -->

    <div id="content" class="site-content">