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
define( 'DB_NAME', 'test1' );

/** Database username */
define( 'DB_USER', 'panda' );

/** Database password */
define( 'DB_PASSWORD', 'stal1234567890.' );

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
define( 'AUTH_KEY',         '+3rewX VukDRsa$ck)DYB27D@0yu$G*B_@bTb|s88m|/QDbX e:AH4|nW{K4fwTE' );
define( 'SECURE_AUTH_KEY',  ']^><&&14Xwz/N|`s0YV,y|Xvg`|6U*n6kgg@}lOv=1rIuGdK1.U%@9_a,P@q~7V|' );
define( 'LOGGED_IN_KEY',    '0KhXm{>pob~rVl~&*/U!H5Pw3V/%c!?Gx,TnTsa^rBQB&4GHupU{vK!ep{6K?6V=' );
define( 'NONCE_KEY',        'nERR!e3qa*U(dC3zy#V+0=ksyfD6qp;_TJv_s^Ld}TI,Z6Hvo*xAU2~SeCj&jOV]' );
define( 'AUTH_SALT',        'c#1Hk,U/}R?h}!f+q<j:Ev)dj+s}B:aA,(l+^|MX:apT|uz`PSS#$qJ$V4yLG:$a' );
define( 'SECURE_AUTH_SALT', 'mlYA]>6xz?-y_or7+69;BfR/oNy&|?Gbb()PqP%)]yA(RA8(EZ369^u5p=0Q@Ng>' );
define( 'LOGGED_IN_SALT',   '2{;ilCP_BHw9u&Q@XIWqA7rd]z|s%;wCCE_)c8zT}MO{L-b`Iplp:(f$Oss)HM|3' );
define( 'NONCE_SALT',       'r;3kx$o{5LE,ty(`7 u#t]veZZQRwZg[r9J?I%s:f%!KU--}&c@LB*_V>#hy@*~l' );

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
