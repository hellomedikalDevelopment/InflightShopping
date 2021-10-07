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
define( 'DB_NAME', 'inflight_shopping' );

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
define( 'AUTH_KEY',         'x,LGs){;k*f<^l5I3$hA|%,GjodRo4U&<%#e9GomNT(Z|3dv0%7Yg;o9 WpXG!-6' );
define( 'SECURE_AUTH_KEY',  'A[J#*18=OI>(dVc@Mem^LrS`N:31N/ H@`phmtT!>.YSJ3e&$U8BSFEr/Z.Q0 ![' );
define( 'LOGGED_IN_KEY',    '(*KyR{3:>fVN%NX:%-BJjw`:-BSpI()<ovqD&eZR#B*StDj9K7W_vPk8lDE0=2K0' );
define( 'NONCE_KEY',        '8?Nb:nUj<FDu1A5~x$L$/}HqG3nbS$>|kY6]VhWghs!IO!p0pAYidx>$[?L9R @_' );
define( 'AUTH_SALT',        'H:Pq-A9|uQcvl?46CVHsh6zUmj_^5d@z<D228M:h)U{Xf,!9e&_RxvUTx&<NPgnU' );
define( 'SECURE_AUTH_SALT', '>Bs],B*var_?kkA#+fAWxr9`PVYuF56NGAJR+,x=eNkCat~!g1TVm|l(*=d+KYdK' );
define( 'LOGGED_IN_SALT',   'zOo#Xs/lXo$aU}#!zSmdz%@j7e}?Sk_;CXGn<=w8mK{#0czCLc2tREbm%nI-`EbH' );
define( 'NONCE_SALT',       'EKx%QGs.2JG]o$1/5^r@Xs6Y)cke v;8y1=u w3V2eq{06Me*N2iE:Bqt2C:|cx-' );

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
