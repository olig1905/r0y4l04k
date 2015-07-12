<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '#');

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
define('AUTH_KEY',         '=)7L,rX*V`r-+blYP24:*)8L`-*=GJ;uO}2*Nq@fqnT)U[~ ed0oT6&Bev~zQ}i+');
define('SECURE_AUTH_KEY',  'lTW;rh<Ch>`MJWbs!qlcl,)-gl[:^!WU(c2*tH0#op]<N0]tpo.z1yxJ,gDgCfbw');
define('LOGGED_IN_KEY',    'nMaARFtwyxh?ud}>U_2v~B{(0k@{&%4aKhe1hP9_2grXLJy_H,D|2foSyHgELBl?');
define('NONCE_KEY',        'gL`]fO(sb~OId%9bT=%4G|`n2XFkEJTS$w^H01V>`v!^o-yt/Q--x|&^Q^.33oJv');
define('AUTH_SALT',        '@]3*pWhN&JdWu?DCO -8F9.p^n]e]Blq/P>>=7zm;]xg6}0l>-cEhJQt[<d+$jrc');
define('SECURE_AUTH_SALT', 'zv-~g{>:]!d!I;9l#N9#6<|f|SOuEi:ZR_2*T)}t(M{H:R.q,>DVlOo*`K#C(yWc');
define('LOGGED_IN_SALT',   'q=TtMg|3.Me^5Xql|6TOzAXB4R+Tv]P)W5Lt{IgF.T0LYTu;?rIj ,+D$cz=;ees');
define('NONCE_SALT',       'O|$|tUTD@U[VfpRA<rZDw6.Hft7ZoRzf6/R-#leZA9|i^#NRSM[9SUU|h#qAgm!b');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
