<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'bloomandfortune_wordpress');

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
define('AUTH_KEY',         '?QL7=}@6h2^|8YZXJnb#LhE5Q 0q)1-k*3)|%_ePnVSE.!G4u+kf|wj6xa=N=xr<');
define('SECURE_AUTH_KEY',  'h-M;QB|1b,?M7k#Fr-bw#y#C|9wCQ2_br@BTB{i^3Fh?MJ.{Mo|/1~laZy%<<%++');
define('LOGGED_IN_KEY',    'Lv?AtbOe!,^;|wL~r+sLW<XR(vhD&Vv 7SA{+fU-C2x),y+o.~oO&a;P6#z5-Ls-');
define('NONCE_KEY',        '_[70v[n<xQPqor:UT5lV:q2RHFD8AyG[@!Qg-,O_./u+FYtY#}%]2n%_G=M$_w l');
define('AUTH_SALT',        '3@A:Gj|P7X?PC#$XHqy?hU>A/)DM%(tT2PzC[-U0uO@+C8t),ZF|Y.3X*wn^<K9N');
define('SECURE_AUTH_SALT', ']RJ4vWQp|cREp9m+9Ou|aEA0aLJ_{(_?DFncj3_TMTJ?t~>JH7QgYVG bUi+R`c?');
define('LOGGED_IN_SALT',   '4~+5:6twqBxqrgH@oj?APx|^--DHS%Ne#1_iOP07Hoy276i6:O++r#,~$DcPYer(');
define('NONCE_SALT',       'fFL|kE!PO.}E&Z9R](n1;VtZu+r8`fgdh;i)v2*d1!cGTZ 0eRI,)6;{&[J_C0X#');

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
