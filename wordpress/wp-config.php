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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'pizza2020!!' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'ixJNbv<1CQgB^f}:V9[;rZXI^WM&_|;qI*@z|906+[~70B6`;%IZ]nGi70#B>,{-' );
define( 'SECURE_AUTH_KEY',  '-oRDMM|{|ot28>]%)^3~gHVU(;ShCZ+_1%>c}(=d-M!z{mJRK$xyr;hiBdeoY`[!' );
define( 'LOGGED_IN_KEY',    '^OA1w~+ZXVYwN>e+kf5gKmi^otJb~UFF0S#pxf~S22,0{>:V' );
define( 'NONCE_KEY',        ',|L}#kP$Ct__HK/AAup#>FEV>c,=40cGq[q[:rTg?}Q}O8R^|7d/a!L%;$hl-9oN' );
define( 'AUTH_SALT',        '=NC9 b44|++=o[4OTf=a|@]nU+q?,b~WVGC}6PsiA1TZtm%PLIg0H9eFX+~BMvPi' );
define( 'SECURE_AUTH_SALT', ';p;=+7nP.w.R4RSkR2X wf>=4YipSpTl#zx36B,-waL!YtFAKc2[Z{7,97)VuO];' );
define( 'LOGGED_IN_SALT',   'A}b;r?]z}#[FaRLU+eoO{FUO7EK?Leu+-%NABJbp|g:hX.a@f(j-gf.$=UsH]7M^' );
define( 'NONCE_SALT',       '=J>tqLok~o1Cp3G-GquE]kpq`LF)7[a.?2cZ,YI1jWFVro@)<_gWQv|16U;w86F4' );

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

define('WP_HOME','http://212.100.117.162');
define('WP_SITEURL','http://212.100.117.162');
define('DISALLOW_UNFILTERED_HTML', false);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
