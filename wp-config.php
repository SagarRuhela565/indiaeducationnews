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
define( 'DB_NAME', 'guruk2cy_demosuperadmin' );

/** Database username */
define( 'DB_USER', 'guruk2cy_superadmin' );

/** Database password */
define( 'DB_PASSWORD', 'superadmin@123#' );

/** Database hostname */
define( 'DB_HOST', '119.18.54.49' );

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
define( 'AUTH_KEY',         '1H*?ChGk/%VxQZ~_%]@t8~fLiJ$90w=st^[[{{vUEAK_9hV~:]b-$T-|V|&=I&Fu' );
define( 'SECURE_AUTH_KEY',  '^RM^:@h#T#]T,X%t=Str3/A+*T J=*/r+)7`?R)RlBW.>G`yI`VOf!G|l[DSh_e>' );
define( 'LOGGED_IN_KEY',    '|AD`9$So`e0R3TcRq+|1Z`L!j3#s/-RyQ(-8M(!j56wgZ@VKPw]>xmg-vd}z.I;a' );
define( 'NONCE_KEY',        'e$KT3yx_N{m{(&o4!k0-|KZXkS#!yfWb0Xp83]n(z_OSDc-%E_tNZ3yP-{h5PD0|' );
define( 'AUTH_SALT',        'YpMWT&#FU0JnuT9U@R:x ]IKpy F9C[fes^F5a,Nh$7B1cD{cQsjc6hXtN?Qg0$@' );
define( 'SECURE_AUTH_SALT', 'rQHVZg/2@[f&7$hFSv0qmDAgB)K;3xP*%9*H.0Sx}iGOZe:i!~D-+fw5-|5hQy5*' );
define( 'LOGGED_IN_SALT',   '-pRP^tjZY1uUY7clb5gF5mQr;GF@-xv*lp,6(?LVj7PX&n9*GvD_4]pp$+IQ668=' );
define( 'NONCE_SALT',       'ct0]0Shn!-%@UMSr47A.v@aFO3Q,,F0Q*Va$x)oj4y^.OdD-Y,ZNw7E*mZF@gdAv' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
