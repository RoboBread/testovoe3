<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'testCRM' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '6ka<V^W~7LGnh W/@Zj(]e pyT}miU8C~Wv3v*{pdf4yb9WCGi/VHL4Ui_^*]HN&' );
define( 'SECURE_AUTH_KEY',  ' GY41G;Ql8A/;37#y=f4>{FYHjzwEdwP8yd)l@W}|j.,.S8&t@)F.r7X2(eD!zA<' );
define( 'LOGGED_IN_KEY',    'g)1gEVUlRU*-`3%F.Rs~ =Dy7fsI]G9x5+?;qp!jNGA^uFFG^N: aSkkZzw[39=T' );
define( 'NONCE_KEY',        'sIM%2wdp_26kv<3cr)+}5 q%W7-q&Rt:c0_3ors]e]p.HZ!?_Bia.(f$.A,KLgQO' );
define( 'AUTH_SALT',        'n;c<2Z4(D,.y=r5Ve*~+]_-a)Om%(3`ZT0Ood%q@Gq}E,}XF4?a:(vL<CR*9B;~1' );
define( 'SECURE_AUTH_SALT', '?IlQBCk!llgum@}ZgNCM+y37#$!C)t,3T1;`i6[IM4(JdbIF*FYDM?idp/Ay9)|0' );
define( 'LOGGED_IN_SALT',   '!]p`%ITTjUHS7p&k_>(]gZ;RdvGXn@R{o,zi)0|a6D@!-bCc9~tDJ;.N=i 3bwW&' );
define( 'NONCE_SALT',       'c)b_,[G9)Rrd|C#|8cKy&_rtnI3T4Mt*<DRM(z|>IW;:43B]6PL{eJw,egEU`AJ}' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
