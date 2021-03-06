<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'u3011751_ti');

/** MySQL database username */
define('DB_USER', 'u3011751_root');

/** MySQL database password */
define('DB_PASSWORD', 'Stimik@1011');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'I5f_v15^c.M 4;y=yNV?1b&Sj%!o5if9Z>8Y!u:%Vq{&H4qYO:r$$dJWaD$9tk(D');
define('SECURE_AUTH_KEY', '&V}eLV]uX/{o/)%[@pPFK3.T_n$TS=)9$gK6{=<*[fZ/=UJ-?Y$r4h06Zyv+*om}');
define('LOGGED_IN_KEY', '#>:hPY$g{:IuH!ZdCl4[uPsrVEnTUrz*<4:cZ[{L@f,x,[0<#@x)HOIpys?7?|0,');
define('NONCE_KEY', 'qVM;q&|}gxL50r(EP^{K?3QkQU=d[<-O(gmtPD2ShwQW_l0/?4rwn<vXpAs4[Y92');
define('AUTH_SALT', '&~o$,HXkx<v*7OH/><43C(VYAW];PIYC<{-XSys $^~oO-,vne}3|Qk4RtnB_}h{');
define('SECURE_AUTH_SALT', '/Lga3JM:Gl#<mR,FUh/]n-6/]:fk^Cy?43p=w H4Ylm%&J2tizys42:*P;Ay[Yk5');
define('LOGGED_IN_SALT', 'SQ-ldM40$&%4OK>#`X+AjWuQ3!jaC<wf5RZj]AUDlGVl0wD8t$h]U1|I0nx4x/i^');
define('NONCE_SALT', '-uv:a At,|Dw4b[6d{ycnwU!nU]xzZg$7J3A4$WG)ih,hw-N5=lmluJMm3H$oodD');

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
