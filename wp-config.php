<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'mywp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '4Ts|]Pqd_q$I3r`!WiWOECR NoOxIh w-9z+#In61PEz*u(BSz2bqjc` <~.{+pf');
define('SECURE_AUTH_KEY',  '4<K^3_VAnOwN:$e5~?Q^ZA(U@=uh?01X^{8i{aNLW.-&j@mo]7Kj%z,I!h<Z>D33');
define('LOGGED_IN_KEY',    'x+>xF`oKu.pR3H[0mv6N$?p<g mlM>x-]b/,GQ3#{qfv{+.;*@e$bIYeGt)i+J3+');
define('NONCE_KEY',        '&OxSOd,N,R{mVEM^1mhavs_tF7;^&gMa~tq!TI+0)2VD~dIr80OVb$Su;N[|e_`u');
define('AUTH_SALT',        '_HH`rU|d6`ju/k+ALv}5LggOo#Df--e]3d5JjU8;&gi!p|Y{v=-]1IR3K@S8Z%DC');
define('SECURE_AUTH_SALT', 'pf0cZ#=}][ Sv_c6/ eJDq9W(o6]B(HP VvB>,Q:?mnksJTnc.0|+R7ghwF/Ud+x');
define('LOGGED_IN_SALT',   '6v9#-J9j/y&5J!72lE Zb9Hh&`Wt`oRCv2j<[TR47u2KLSU:Eu da@ySAI|wx_b+');
define('NONCE_SALT',       '|rWZRHJ+#hVXt<MFiw+q;Bg:%dlcrHUnDprrLG.v1q|ie!4A-k2IoZ)oN4aU[4PY');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
