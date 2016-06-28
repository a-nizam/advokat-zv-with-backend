<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package advokat-zv
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <section id="services-for-individual">
                <div class="container">
                    <h2>Услуги адвоката физическим лицам</h2>
                    <ul>
                        <li class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                            <div class="media">
                                <div class="media-left"><a href="<?php the_permalink(15) ?>"><img
                                            src="<?php echo get_template_directory_uri() ?>/img/icons/icon-1.png"
                                            alt=""></a></div>
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="<?php the_permalink(15) ?>">Уголовные дела</a>
                                    </h4>
                                </div>
                            </div>
                        </li>
                        <li class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                            <div class="media">
                                <div class="media-left"><a href="<?php the_permalink(45) ?>"><img
                                            src="<?php echo get_template_directory_uri() ?>/img/icons/icon-6.png"
                                            alt=""></a></div>
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="<?php the_permalink(45) ?>">Трудовые споры</a>
                                    </h4>
                                </div>
                            </div>
                        </li>
                        <li class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                            <div class="media">
                                <div class="media-left"><a href="<?php the_permalink(60) ?>"><img
                                            src="<?php echo get_template_directory_uri() ?>/img/icons/icon-11.png"
                                            alt=""></a></div>
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="<?php the_permalink(60) ?>">Исполнительное
                                            производство</a></h4>
                                </div>
                            </div>
                        </li>
                        <li class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                            <div class="media">
                                <div class="media-left"><a href="<?php the_permalink(33) ?>"><img
                                            src="<?php echo get_template_directory_uri() ?>/img/icons/icon-2.png"
                                            alt=""></a></div>
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="<?php the_permalink(33) ?>">Исковое заявление в
                                            суд</a></h4>
                                </div>
                            </div>
                        </li>
                        <li class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                            <div class="media">
                                <div class="media-left"><a href="<?php the_permalink(48) ?>"><img
                                            src="<?php echo get_template_directory_uri() ?>/img/icons/icon-2.png"
                                            alt=""></a></div>
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="<?php the_permalink(48) ?>">Кредитные споры</a>
                                    </h4>
                                </div>
                            </div>
                        </li>
                        <li class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                            <div class="media">
                                <div class="media-left"><a href="<?php the_permalink(63) ?>"><img
                                            src="<?php echo get_template_directory_uri() ?>/img/icons/icon-12.png"
                                            alt=""></a></div>
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="<?php the_permalink(63) ?>">Наследственные
                                            споры</a></h4>
                                </div>
                            </div>
                        </li>
                        <li class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                            <div class="media">
                                <div class="media-left"><a href="<?php the_permalink(36) ?>"><img
                                            src="<?php echo get_template_directory_uri() ?>/img/icons/icon-3.png"
                                            alt=""></a></div>
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="<?php the_permalink(36) ?>">Семейные споры</a>
                                    </h4>
                                </div>
                            </div>
                        </li>
                        <li class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                            <div class="media">
                                <div class="media-left"><a href="<?php the_permalink(51) ?>"><img
                                            src="<?php echo get_template_directory_uri() ?>/img/icons/icon-8.png"
                                            alt=""></a></div>
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="<?php the_permalink(51) ?>">Защита прав
                                            потребителей</a></h4>
                                </div>
                            </div>
                        </li>
                        <li class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                            <div class="media">
                                <div class="media-left"><a href="<?php the_permalink(66) ?>"><img
                                            src="<?php echo get_template_directory_uri() ?>/img/icons/icon-13.png"
                                            alt=""></a></div>
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="<?php the_permalink(66) ?>">Урегулирование
                                            споров</a></h4>
                                </div>
                            </div>
                        </li>
                        <li class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                            <div class="media">
                                <div class="media-left"><a href="<?php the_permalink(39) ?>"><img
                                            src="<?php echo get_template_directory_uri() ?>/img/icons/icon-4.png"
                                            alt=""></a></div>
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="<?php the_permalink(39) ?>">Помощь при ДТП</a>
                                    </h4>
                                </div>
                            </div>
                        </li>
                        <li class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                            <div class="media">
                                <div class="media-left"><a href="<?php the_permalink(54) ?>"><img
                                            src="<?php echo get_template_directory_uri() ?>/img/icons/icon-9.png"
                                            alt=""></a></div>
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="<?php the_permalink(54) ?>">Земельные споры</a>
                                    </h4>
                                </div>
                            </div>
                        </li>
                        <li class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                            <div class="media">
                                <div class="media-left"><a href="<?php the_permalink(69) ?>"><img
                                            src="<?php echo get_template_directory_uri() ?>/img/icons/icon-14.png"
                                            alt=""></a></div>
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="<?php the_permalink(69) ?>">Жилищные споры</a>
                                    </h4>
                                </div>
                            </div>
                        </li>
                        <li class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                            <div class="media">
                                <div class="media-left"><a href="<?php the_permalink(42) ?>"><img
                                            src="<?php echo get_template_directory_uri() ?>/img/icons/icon-5.png"
                                            alt=""></a></div>
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="<?php the_permalink(42) ?>">Взыскание долгов</a>
                                    </h4>
                                </div>
                            </div>
                        </li>
                        <li class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                            <div class="media">
                                <div class="media-left"><a href="<?php the_permalink(57) ?>"><img
                                            src="<?php echo get_template_directory_uri() ?>/img/icons/icon-10.png"
                                            alt=""></a></div>
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="<?php the_permalink(57) ?>">Представление в
                                            суде</a></h4>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
            <section id="what-for">
                <div class="container">
                    <div class="icon-arrow-left"></div>
                    <div class="icon-arrow-right"></div>
                    <div class="row">
                        <div class="col-sm-10 col-sm-offset-1">
                            <div class="title">
                                Многие спрашивают, зачем нужны юристы, если право в стране не работает или обвиняемый
                                признает вину в инкриминируемом ему деянии. Хотелось бы Вам вкратце рассказать, что
                                реально
                                можно ожидать от юриста, нужен ли он и зачем. Перечислю наиболее частые вопросы, которые
                                мне
                                задают и свои ответы на них.
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 content">
                            <div class="owl-carousel owl-theme">
                                <div class="item">
                                    <strong>Чем раньше в деле появится адвокат, тем больше он сможет сделать.</strong>
                                    Как я
                                    сказал выше, если задача прекратить уголовное преследование, усилия нужно прилагать
                                    на
                                    стадии следствия. Тактика, позиция, стратегия, выбор средств и методов защиты в
                                    каждом
                                    деле
                                    уникальны. Единого совета быть не может.
                                </div>
                                <div class="item">
                                    <strong>Собирайте доказательства невиновности.</strong> Оставьте презумпцию
                                    невиновности
                                    сериалу «Закон и порядок» и Конституции. Активная линия защиты, всевозможные
                                    исследования,
                                    подтверждение алиби, альтернативная следственной версия событий с доказательствами
                                    гораздо
                                    эффективнее. И все это является работой квалифицированного адвоката, со статусом
                                    адвоката
                                    наделяемого адвокатской палатой.
                                </div>
                                <div class="item">
                                    <strong>Условное наказание, любое не связанное с колонией наказание, штраф,
                                        минимальный
                                        срок
                                        — вот, за что в реальности идет основная битва, причем уже на
                                        следствии.</strong>
                                    Прекращение и оправдание — не единственный допустимый положительный исход.
                                    Освобождение
                                    в
                                    зале суда с условным сроком или штрафом — это чистая победа адвокатов.
                                </div>
                                <div class="item">
                                    <strong>Торг всегда уместен.</strong> Речь идет не о взятках и чистосердечных
                                    признаниях.
                                    Выстраивать или нет отношения со следователем, решает клиент. Его право уйти в
                                    глухую
                                    оборону. Он также может запретить это делать и адвокату. Но в нашей практике есть
                                    несколько
                                    случаев, когда дела прекращались под обещание не шуметь по этому поводу в СМИ или не
                                    подавать иск о реабилитации. По одному из очень известных дел адвокат аккуратно в
                                    течение
                                    полугода, играя на сроках дознания и имеющихся доказательствах невиновности, успешно
                                    убедил
                                    дознавателя в отсутствии в деле состава преступления. Если же клиент готов давать
                                    показания,
                                    каждая уступка следствию, безусловно, должна конвертироваться во встречную с его
                                    стороны.
                                </div>
                                <div class="item">
                                    <strong>Верить нельзя.</strong> Следователь, а еще чаще оперативники, обещают
                                    изменить
                                    меру
                                    пресечения или «дать условный срок» в обмен на показания здесь и сейчас. Подобные
                                    посулы,
                                    как правило, за собой ничего не несут. Помните, приговор по делу выносит только СУД,
                                    на
                                    основании тех смягчающих обстоятельств, которые приобщил к материалам дела адвокат.
                                </div>
                                <div class="item">
                                    <strong>Признавать вину смысла нет.</strong> Но решает это вопрос подзащитный всегда
                                    сам.
                                    Практика показывает, что особый порядок не влечет более мягкого наказания. Он лишь
                                    ускоряет
                                    весь процесс. Признание вины допустимо на любой стадии предварительного следствия и
                                    судебного разбирательства, и чем позже вы признаете вину тем, больше выгоды можно из
                                    этого
                                    извлечь. Тактику должен выбрать именно защитник.
                                </div>
                                <div class="item">
                                    <strong>Боритесь.</strong> Во всех известных мне случаях упорная защита, уверенная
                                    позиция
                                    приводила к результату. Даже если этим результатом было 5, а не 12 лет, как
                                    соучастникам
                                    или
                                    дело заканчивалось штрафом, а не реальным наказанием.
                                </div>
                                <div class="item">
                                    <strong>С приговором работа адвоката не заканчивается.</strong> Во многих случаях
                                    имеет
                                    смысл проходить весь пусть надзорного обжалования. Случаи снижения сроков или даже
                                    частичного оправдания вступившего в силу приговора нередки. Предметом судебных
                                    разбирательств могут быть регион и учреждение, где будет отбывать наказание человек,
                                    наложенные на него взыскания, замена вида наказания, перевод на более легкие условия
                                    содержания, наконец, условно-досрочное освобождение. Тюремное начальство
                                    предпочитает не
                                    связываться с подопечными, к которым ездят адвокаты.
                                </div>
                                <div class="item">
                                    <strong>Переговоры с потерпевшей стороной, возмещение ущерба, примирение
                                        сторон.</strong> В
                                    большинстве случаев по уголовным делам, возбужденным в отношении граждан Кыргызстана
                                    возможно примирение сторон. Однако для этого необходимо поговорить с потерпевшей
                                    стороной,
                                    возместить ущерб и взять надлежащим образом оформленные процессуальные документы.
                                    Это
                                    является работой адвоката.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div id="map"></div>
        </main><!-- #main -->
    </div><!-- #primary -->
<?php
get_footer();