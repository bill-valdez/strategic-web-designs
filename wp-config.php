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

if ($_SERVER['HTTP_HOST']=='localhost') {


	define('DB_NAME', 'wp-project-william-valdez');

	/** MySQL database username */
	define('DB_USER', 'bill');

	/** MySQL database password */
	define('DB_PASSWORD', 'ZSuDeD3sY9fZ5w2c');
}else{
	define('DB_NAME', 'bill_strategic');
	define('DB_USER', 'bill_stratecic');
	define('DB_PASSWORD', 'av5l?_mz-2Xs');

}

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
define('AUTH_KEY',         'k7 ldvx7V<~U;xLYDL~KTo#8-rVz9UN7}-a(_M#+oyMpWay95q:7d$0bOF:.E81:');
define('SECURE_AUTH_KEY',  'I;6~!N[I;VvC~u(0y(FO3V `6TuD6#2: ir@LTr?kM+#0][rJt(h#@x~GuCFm6 L');
define('LOGGED_IN_KEY',    't}5L2d=w+7t=grerTmCM%BV~+7-GVZ3tTlEi-iI[L@?mQmU*hq-ia}8T*KHei Xr');
define('NONCE_KEY',        'ooX* 2w@<h@6du>]w Tg4wsSW$Q%KV)$FSvI4u$3xVm.DN<[|o|.OM++H[psfB2%');
define('AUTH_SALT',        'eP2T(q!zU7Y`,zRwfd4CoM<*xReZmsW|R$JoAyS.rvv{aX%]+6Y$&-yhh&cE s/X');
define('SECURE_AUTH_SALT', '@>K(f@_1pns++8$w *|(ElpvI-k; byC2LQoK;H@0_Ty2?P:zu%5Vc-&2-(K[5nc');
define('LOGGED_IN_SALT',   ',z:hz:4WAnM]lS1xEOw DdS5bL&+f9avV1li&=|_LSo0(L:.>;fw6?y}}RL@z,Qd');
define('NONCE_SALT',       'Q?C@aLnA4|.pGSMf]|%W+0byY{|*z$-Obng&-j^@}I`j[<iXy4f.3kx^*y1g8?OS');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'tv_';

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
