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
define( 'DB_NAME', 'okgw' );

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
define( 'AUTH_KEY',         '[ed`*z]fhs.X;snepG4%,#_xy@g^D]e1+{hADek0e2Lv8!USLJq$oLbqg2X_l/69' );
define( 'SECURE_AUTH_KEY',  '$&[]g*.?6J@y)sm7Av.FIdoNM:5t97ssa{VJZ]aGgOTn-Ayj}7ZKAFw_`jC$(1NP' );
define( 'LOGGED_IN_KEY',    'n,Ez[#vy2.<<%!o`K_X1aen%tUO|22P[`cRxc5LC7;_-g|j~YW[^6yz:D@dQJId7' );
define( 'NONCE_KEY',        ' +^w2TECs`GJ2?II75].&E7f7VLL]=-cSL/oasWMz&N=Uw#h&IC[ja1Hs4b0)M %' );
define( 'AUTH_SALT',        '}cJ:x{q+;_DMy9XQMldq?b3bqgi*YJGga3foORFf%s[-gv4%G~`Ijv@AmZ&:jdMd' );
define( 'SECURE_AUTH_SALT', 'k=QzDDS]1V>|$uF#!am*/Bwi@Zwx?.oYUN1h&LQZs_-qAk{2Sw[ `i%+0UX]^*&x' );
define( 'LOGGED_IN_SALT',   '`xSOjhH#@cl|0`9 xC_t*nzw%pEK)eppl0A ]<}[5 zKL0qK~m:-B1P-ES5dh*sY' );
define( 'NONCE_SALT',       'ly(c8]h]Y~LT5aoGScY30A}@9~{9~neIki#s>_u^y_6NSAJV(pA]g!;o>pGy)[8A' );

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
