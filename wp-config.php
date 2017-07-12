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
define('DB_NAME', 'eventnew');

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
define('AUTH_KEY',         '.LB!=1GAHg-l-SF`iY]KzaLGA>E{JQ{V:bkS2D~B# AJ0SGB{0UaFc|+cpIyrw%E');
define('SECURE_AUTH_KEY',  '|2f2b2x5]6CK74/SQ+}W7-uVfX0R;Wtb$@o&O/9#Tt|;&1MYp!8l:1?i.xdtP<7z');
define('LOGGED_IN_KEY',    'C_X14~6RMtj<6+~N0y1Xv9?`w5UrTS44G;LuUwaN?Clx kZb3&k&+1Ds{ 7oe6dW');
define('NONCE_KEY',        '1[)69fHL AGB{W[6DyP78nnu$e|~GLfDeafs}qt7i6O:7dE!4B)5HcP!FwWHAT3/');
define('AUTH_SALT',        'Hk1!xUkd+>b29:|Eo{~T}@5@0U<be#GU=]vfvx4gey&/r#w_:W)<EG`kFjB!%4=*');
define('SECURE_AUTH_SALT', '*;kTM8XuU/g04{qtui[!|FW{L!EyuERVnAn6zc[CEgP)flh2E#^Bs%4lEyYDDy=!');
define('LOGGED_IN_SALT',   'BBgQ,.?)UyCI}1TU:<a#zr{V|e90;7Zv}wTEMh2Z,cyKb>Q|27hJk|Ke,-cDI:9q');
define('NONCE_SALT',       '1*@K2<J.Iw Q~xBjK1A#/:Y-ELx>mRgL*u+NVOhBT.*JqI-LA4,0)c+I%czA>hFl');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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

