<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'o=%C_)U_wIudtKLCbN~odxYJL}B]f(iAFb>L^YX*i$p#&:g 0KT9;4A5_ln/2EMV' );
define( 'SECURE_AUTH_KEY',  '*B=VdkU`{o6E%.Y[8y:EPL+-6JrzQ@0Dq|wKfN~ yVX(t-AN4=UsxLW>z}gxJwR-' );
define( 'LOGGED_IN_KEY',    'yn:oip.OM<p8l]j,NZsX}~lA+RX!e7oGvwG*N2&,(+ts 5x]C;hJNLl=s97-Opmq' );
define( 'NONCE_KEY',        'J_8DqLNy9-Rc?K&F[G_ UenG?G<_GsS*rp;9q,$TGk,j)t{Tb$-0FX#rStwyBRM#' );
define( 'AUTH_SALT',        '%0#S~%uOMfT];<n~6L?Bx:m7h|^OPQ<6b;i`Lf466ZHp8J=Nxxz~s~GZv2?)ecp{' );
define( 'SECURE_AUTH_SALT', '(yQhcTDMN/DN^3}SpKtiLKLs6.#pQz*!?nvcE=EihRLXtn`%.Q%s/99W!v0J$^@}' );
define( 'LOGGED_IN_SALT',   'Jb67I}Y;{6!1H)a?Y~3X&IS(]mo+@6tq=EyFa|zeu~h(_^tzq3r1GjiRAg?9$QeD' );
define( 'NONCE_SALT',       'yhl#PvO&W:YpoA}5NZtKtqLWg1|tyc;qyKB&KV]&Mc$f51MWdeDof*`9i|H}A(TE' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'rawan_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
