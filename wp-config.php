<?php

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'testsite');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', '');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '}A0&3J4]snb:+vIn8$h5<41,F?Z~ZBQX=qANR:7X4Rpare:S]T[a2Yo~@v9E_)/V');
define('SECURE_AUTH_KEY',  'Akb>u},_<^RiB2 Qv3}d5koJ-pv`x_@6m+q|i(r9K|fm$l9fRRm4ASpo.(V6)F5{');
define('LOGGED_IN_KEY',    'L>gS^ik*&E#j$:%{84GMwcP7}[Rr5r6`0t:K82a;;-nI{PrPutqO?vZ=9w &;>LE');
define('NONCE_KEY',        '`HB%_uRYTM?yqeKcZaDX@$LB{@8h61.9JoQ$E}k[/vP<l k_KPkDxsX-GkBvH.`l');
define('AUTH_SALT',        'ws6ESSr*tA{Bl/}ku//9GyI+WgZw`aDylWA0+n1W-r?s?-wS]Rc0CW51ZY%-Ns0V');
define('SECURE_AUTH_SALT', 'ib~#&Ft.T; >=UAR==5]*<Gp5j,o2$xXL}Ts7wu/wZ]~ilDG[bfNPPe;A`2U,&Mo');
define('LOGGED_IN_SALT',   'DS$Xm1*kRw/.0Ypy+A%,]NXAm+uVJ^H8IODB9ZamZQ>DGx9dHo.c/>k4w$#W<1_?');
define('NONCE_SALT',       '9wHTX(FfF{1/G`E!c4&~hi>Fo{7fk[X{PT#W?e2NtNlYAI&{#}=!tq+r|wTBh1N$');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

define('FS_METHOD', 'direct');
