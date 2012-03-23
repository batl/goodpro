<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи, язык WordPress и ABSPATH. Дополнительную информацию можно найти
 * на странице {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется сценарием создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'cmd_goodpro');

/** Имя пользователя MySQL */
define('DB_USER', 'cmd_root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'iKv1cDUl0l');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется снова авторизоваться.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ',/r]rE1s]OM@H`2yW3?=aZ8y@ rwx<Y};d7fekI=L0%{;uyX:*z/l}r|&$*N`$F;');
define('SECURE_AUTH_KEY',  '}lw91(T^a27@V:aC_#Mro3<t/I&oXzN_-.sgNFJWb5r,# KsvyXGg0;H1Giv.92O');
define('LOGGED_IN_KEY',    'zg9$$/Oi-)#nyOb~xY;r&eJyVX127Ab,$~LPkB[-(FCVjDs#`,pqDA)&jFIxV+{b');
define('NONCE_KEY',        'f7Wkj9Kqd~Ar(nv_f!ysK<Wl*v211}1%(uUK}|in0/376oimp71dBHSeVPBtSKI0');
define('AUTH_SALT',        'j,T70:H!s<W<>^LLh)Ng5W9N^iM=6e0t3K1V,&H+Fi~)<j.f0`.c>[)@$CoyTI*p');
define('SECURE_AUTH_SALT', '-WS!nIT{]?ePJZ9N;=1i*As0Z ~pROGdhIuiY=7&Q`KYGOB<Flp10kvO?L =m.km');
define('LOGGED_IN_SALT',   ':A^uil5=xRJDDR.K=T58@W2e7{*OOdNK0Y!g=y+doutJ:[N-@,HOc.}Ohu/1 8?6');
define('NONCE_SALT',       'pECLi,&2<kQ[M:}3(TJE[cQD^]X5/5y,^_A9o%2KoyAPZ:_Zn-~VPeUaL,6wv]x;');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько блогов в одну базу данных, если вы будете использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Язык локализации WordPress, по умолчанию английский.
 *
 * Измените этот параметр, чтобы настроить локализацию. Соответствующий MO-файл
 * для выбранного языка должен быть установлен в wp-content/languages. Например,
 * чтобы включить поддержку русского языка, скопируйте ru_RU.mo в wp-content/languages
 * и присвойте WPLANG значение 'ru_RU'.
 */
define('WPLANG', 'ru_RU');

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Настоятельно рекомендуется, чтобы разработчики плагинов и тем использовали WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
