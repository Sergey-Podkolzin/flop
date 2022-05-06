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
define( 'DB_NAME', 'flopflop' );

/** MySQL database username */
define( 'DB_USER', 'podkolzin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'mqx2mkrd3q' );

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
define( 'AUTH_KEY',         ':pDqHI,+Qmgn!dLXvOeo.6evHn>G{-tULtr{~Q#rl4TsGkA~e%^@{6KRc#%8;r/9' );
define( 'SECURE_AUTH_KEY',  '81yo~F(mp)<+qK&K,M7E2)4FhU*WMp2N&w7XJvOG}3ns%)2.&%D(*0 H>=&*RRB>' );
define( 'LOGGED_IN_KEY',    'cenYV>lvyubN?P@KgPETQ?5k:1Y=_h?>5T2$u%&PHO_u/+Sk9FDy3?nl%}v<E@S9' );
define( 'NONCE_KEY',        'i]wz)lNxQT-D:wfiy58m&g)67krag8V>p|ZUthw@]Jo>z|B{xd<S.{Gx<kUT3 rI' );
define( 'AUTH_SALT',        'SHBu:m-BsNaMde.m&ld4V??9Fv*) R.L>VhLNdn7;)6E=%_)+@58~JB$BoRTN#$-' );
define( 'SECURE_AUTH_SALT', 'R5J{HXL]M5OW`wtBy@!my|Or=XeHzZyMwHs-WJ2P10deNzwdeb:/zQMIz(nS0sUa' );
define( 'LOGGED_IN_SALT',   '%Kds9vvsK4Gl}P-pLZ-uHp!M6_`(hXBmZiwN20uty3+8I2*R9 scY%-~X(#JtshX' );
define( 'NONCE_SALT',       'y9,_Q+KU,KJ=U+H7_a_~b;^06>gA+6_us;C~O&OxQyo RsSdG+K$Qt+FYi3E_m6X' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_flopflop';

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
