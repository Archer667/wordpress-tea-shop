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
define( 'DB_NAME', 'newsha-nush-db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '~q$A|uPsT#eA(EDh ukt&w^g$elC0r+Yq}ax,8<6C6A4;y-Wmdpkas6eC+d%`>n?' );
define( 'SECURE_AUTH_KEY',  'y-UM%2A)HzYtHadhgRZoW;}s@*c2-QZ*5M}./cTxJFop/rk6c,g7fPc1p9Sx&j!j' );
define( 'LOGGED_IN_KEY',    'atD_<u~^+K8*|g:Jnz~jC#mlY>Cv^v<x5R#WdP|A9DyWP@=W.qvV;I2[rv=9BQAS' );
define( 'NONCE_KEY',        't)9)w,y|e, `=inntKRMNR?9i6(uOF9^Qv[=+fVtfjWsw%5WAC[I!2qI{>9y8)1u' );
define( 'AUTH_SALT',        '%.Kgou8$W*ct!FyYLPwJ`u8sK{;efYD}FkFi5{nb89v<[i+W_)|#v8?@Mi^CFmF<' );
define( 'SECURE_AUTH_SALT', '+_d *4j1D3&7R#D;Y],l7=l{LYyB6$u4PBMmhl@^;p2%d*a8cOOn1[Kw+]O_dw,r' );
define( 'LOGGED_IN_SALT',   'DoxTpQ$R=y]Zz8e=ba?G0SrZ%9VoPHcnyA(Su7}_-%EW)UQL8 pxEqi;;<iQGZNI' );
define( 'NONCE_SALT',       'fa)}uO02`D-fmYL9Y3#;nNGm/[-TL(O)]^? eeLjI*B`AH5syz5^;m~JxJ ;iz:Y' );

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
