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
define( 'DB_NAME', 'tradeplus' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '}9+xCYW&Cb-DiGqMQvmvOjz/vLl5qyi>H+k-,P^q5Y0v{? ?E>FD)Iu2G|BB!sT%' );
define( 'SECURE_AUTH_KEY',  'p5MAhM`^):pS]D9QU]GnJNdU4tUaPyo| ?}.u_^TH04|N:=[lg`Kns~~asoO.+u_' );
define( 'LOGGED_IN_KEY',    's`ip%bxvh^v% ~yMRA%h`w|FALzZhWRdnTc0qt{Nf71;PY..noZ!d5;;.]6bfi|*' );
define( 'NONCE_KEY',        'ljdwrqLD/s=ev9PL,[v4i%_^NK,aErpy_*sZvom4rfN]M|>uKAlA%uik_t9?&%X.' );
define( 'AUTH_SALT',        '2F!3/W--ySD[P=K$Cu^%wj,y=l sGIxUI`lUIX S=mc,.^0Ux%dO3/V2<4f_GKVP' );
define( 'SECURE_AUTH_SALT', '0<>#nMz1sx>zVR*>M)sFo@I@fM(,I4+okZtQY[f*4@{,4g%J>P&:rO5/5(dLTuFb' );
define( 'LOGGED_IN_SALT',   'A) zyi-C<TD5@Ix0%u;vwmaR_[U#d%aw/QB/s=;Cs<ABx(>*4V*e`WdIx/v<VYDu' );
define( 'NONCE_SALT',       '}%BBV(QT/N9}=6qfRs]8,om&cE}##%xCH1-XtUf70,qznas* .(e pc2ke|Y[{L%' );

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
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', true );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
