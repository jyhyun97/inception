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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', getenv('DB_DATABASE') );

/** Database username */
define( 'DB_USER', getenv('DB_USER') );

/** Database password */
define( 'DB_PASSWORD', getenv('DB_PASSWORD' ) );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define('AUTH_KEY',         'Y,}}#}o(U|/tJNdEl-`+(`HK+l~4Z3%_LCnjf*ER-L_J>8?&n|oteNa3!mWGG=c3');
define('SECURE_AUTH_KEY',  'v0Y |aYNrkHJ7x0 x.iRS(~9[V9XT@ST>0oN-YPC43:?9f81T{^l!E&&!S?uVJjf');
define('LOGGED_IN_KEY',    'nQYSO|XnYJ;A2k{b_:75?[HD$;X$|[0IvxY+`/QZTW&vHl`b{rC,B#,-|oBfW3L}');
define('NONCE_KEY',        '_}GR4x>sm!Fo6LF094L/rmsiORh->uAomh#gw.dh?40%j(zNSe`j*D0%D@[hq</Y');
define('AUTH_SALT',        'O!RU/0G7+~D+_z-4|Q+A>=PWmA.56 rW{!XX_fB>(`-+#n+{{gqTx9 qB-8-jL@g');
define('SECURE_AUTH_SALT', 'vUkALG(Rk.n[ei*Fn[~1n>9m16ac}xMH%3rC3POY;xjXwd5J4|ID l+P2<5)%4R(');
define('LOGGED_IN_SALT',   '*W**:6cJDvhK{!i_cGn<(OeA0zp|h65DRWgrg~ZnvQ6~0]]u2j;9E+uH+xZYscq5');
define('NONCE_SALT',       '?$[DS~LD11Pn/Y<ByX,j$1xdxGO;hlWe.hwuIf3l=x[51MMI4gHB9D,.lju >S0/');

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
