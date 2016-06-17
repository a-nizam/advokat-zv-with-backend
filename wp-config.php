<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'advokat-zv');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '~O`<N#Y:Xm@hw)_KNMB7wH<9Emas{&]$txee}8,t%r[)48vHqG$.ZSu`>5A `#o)');
define('SECURE_AUTH_KEY',  'rbDa=I,3k<n}F^hHY{/kx/qBssG<-Z(k!x~/v[I?M__~k8LzNy:yJ{z:[JG5Y^TV');
define('LOGGED_IN_KEY',    ';xFycsr0O:$=%lO*J6e{6 A.N Hx[ 2~wud9Tu(_upW>LVDwh0x!Gbq+sQ1;K$cq');
define('NONCE_KEY',        'GDxqDohkmmy!JHFt<op*D>Qqqj@T-s }[(l}R`k*y^Q<S*Sc3Zc5J9V_Xuxu=rB[');
define('AUTH_SALT',        'w9M>{d(^0f-Iz_aQ/5`y){Zj#?l+$?~_sDk[65ZI/Lf#$Mx>GCU;EYW}C%Um6W:>');
define('SECURE_AUTH_SALT', 'rv_4ySJs[ylAO0?3:<~LsMP#0p<ao{|21gX%jh/_(D-bVkp%/Z)!!lg3wJ&bF_Gr');
define('LOGGED_IN_SALT',   'HuClIFEmq0eHtq^]x,:htV(X$~zd7n 0;BcZ@vnz{k9h~K50e{yqVv-4l&H=50#@');
define('NONCE_SALT',       '&5&d(1{]9FP|TL1sF.B6Er9iv97:B}UH|f-J^#nKl5U4su!NdLr=7^@qM$`Qeqwx');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'mvnb_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 * 
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
