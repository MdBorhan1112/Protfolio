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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'dy6m$.jp5PW(K@u=VCTDYR,mU/$MZ.Mm%BD91Ue#te4b;m%~_=mQi#XPa#eH0 kq' );
define( 'SECURE_AUTH_KEY',  'KNwEmg,@Bp+!cB5hOZ6<rJK~N#!SStKAaUw-s*oW*=ByjW$5P_1rrsWJ9hQ;n_d%' );
define( 'LOGGED_IN_KEY',    'lcg=)@-HUayepl,Ue9A}#FQ-6P2tdN}bXWLA4E8S<CP>cn*qO$VD665GXQLh?;KZ' );
define( 'NONCE_KEY',        'zy0(//gRr>}yFJj{$8]7fTw ]ls$b~)R@CcYV]<P}YD~`pKwKz$X5UVd<Mtn%]B{' );
define( 'AUTH_SALT',        '}L7SORN(]^?GunNCO!/A45&Z9!&cC~`)~H!Y#EpWd(iDgo`etI *yF=!N N!u]WP' );
define( 'SECURE_AUTH_SALT', 'D:z[okSO@0qfHbHsQ(!t:CFPWhNqCMJ(,I5GWF%n7$9SO].<5eA!Yw4`|[p!~Z[a' );
define( 'LOGGED_IN_SALT',   'C5nwzOL3knnk=^ =t6*&k5QH8o7X][yc^lGgZX[?d#NrLBf~P6c/|`5$.Pr}e;nh' );
define( 'NONCE_SALT',       'I3Qk>?R8Rgs?Hz}r$u|OeBK4=7G|Dq8<7@2jJr`{8?:P70#5PiL)Z4{UwL<eE$@r' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define('WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */


define('WP_ALLOW_MULTISITE', true);
define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
define( 'DOMAIN_CURRENT_SITE', 'localhost' );
define( 'PATH_CURRENT_SITE', '/wordpress/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
