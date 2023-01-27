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
define( 'DB_NAME', 'development' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'passwords' );

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
define( 'AUTH_KEY',         'QA@t/<?{f19)+P#ihA,L22/v9c2V6p/z#4BAPlO`yIWY.f(A,G6*SnGGHp.G#A[m' );
define( 'SECURE_AUTH_KEY',  'ctX(TL=n8f:{NU9D$+!T4h2nJD>070WX4aC8CkNR2b(O2]Gbi]Q5:gHr7;c|<SMc' );
define( 'LOGGED_IN_KEY',    '3luh6~Aq<W5y8m)-C+QF*B`*g-i$CZ2`vbKyy/*]mt]x/0g4L{HTRU]+D8.J748J' );
define( 'NONCE_KEY',        'haZnfy*hD?iXT Lv!BGD5*xy5=<{F{UZ[2RJ0W1emVF ?LDqBuuxs=3KNo& FvAR' );
define( 'AUTH_SALT',        '%tEn1XHMN4esk0<##H9dm=A<8SI]O9)zFej:ZFhRc0#({rd7gq=U|OBv}dk^r3Sw' );
define( 'SECURE_AUTH_SALT', ']FP2-#: ^(6e[<iwth1$<f&=C]+cYhx1w}eE:zMA>Oy)qqHqiVR6`;V/w?{4vb`_' );
define( 'LOGGED_IN_SALT',   'Lfg=5@hTIbW`y&e.}W*b5uR:^up9@[`b3@%,{q(Y-6H;060cVv)/Nbn7j~_>kmt=' );
define( 'NONCE_SALT',       '|oY NAKs?C>;HuG 28tn95&;)oCI+4!d#Q,3y,YfvHP}!lu4D+op=41mT4_Z1OI?' );

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
