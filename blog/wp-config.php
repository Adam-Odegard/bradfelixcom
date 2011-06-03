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
define('DB_NAME', 'bradfelixcom_wp');

/** MySQL database username */
define('DB_USER', 'sahtra');

/** MySQL database password */
define('DB_PASSWORD', 'menethil');

/** MySQL hostname */
define('DB_HOST', '172.16.96.47');

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
define('AUTH_KEY',         'pc+>kBx-Z,{(~b$3D<$CHl]aeED;QurZ|;.uM:S+GePDV*W)Cy7*TrNc5L.@*LPG');
define('SECURE_AUTH_KEY',  'V8fLU1=]M>w%Gxb5(yreoFZ^dZ-8L,M?46i3jG:,G:^V:4C5+5ao!t5hACFm$G$9');
define('LOGGED_IN_KEY',    '4zUkRP@J+fKdutG)l7kv;R2&w:qV r/pNHrb+ePNXD$slrh6FjE1g+y7>lsEXUl5');
define('NONCE_KEY',        'TN)>F!C~<zt{%10r<-m2W%~;Mp,Aks**+t-iHGY0i7EezOMV c&5,h`iG,<{9,uU');
define('AUTH_SALT',        'HMHMW7?EVY-+=-fa=ZF^DzO{))9n+=oWU836VdHy;L}Xh8<U(3j&~9)(V`!tUh?F');
define('SECURE_AUTH_SALT', 'AOmlgEj#ZbD}+>!<0[@yjSX}6l<h>,p nOu6O,&i%N+Cwj5^jL8G94m%+f( B*+u');
define('LOGGED_IN_SALT',   '*P@p5wr|hzS?#*xiMJVp6j:DE),o!p@@YSwL(?{bM(Jn:C|6i$B|HOgl|`]i&`*m');
define('NONCE_SALT',       'n+SsC;G9-ipE= q|4v_MfbwdFU`$D~l2_;qq.#PAm[g48]+0S70wTg|L-)>Ejo{{');

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
