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
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress' );

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
define( 'AUTH_KEY',         '0QX!.Gt `9m@G|48[WnA%46jy>5PH}!hnGMNsn[O(rA.k;k6%ef&em-9)/M<+**2' );
define( 'SECURE_AUTH_KEY',  '`kHD+qC2-[6Ln^i4@-X_%|DehI@lN=.3*/>a7z?9@/n[;]1k@Ce4DUDOyteo-G/j' );
define( 'LOGGED_IN_KEY',    'b%9HW5atO(02UQS{acyU! m){n]rM@B2P}xZETXCBG9JxSC{H/C:]h+wzxM@l4hD' );
define( 'NONCE_KEY',        'UjghM~bvD{,MdE{eMgr(Gs8~<<krp4#lrHSi}|z`C!ESo}T>=%ky~(x~n}U4OsG+' );
define( 'AUTH_SALT',        '.Dln5c8mIt{K&w^LlCy+%ZSj%?i!/T;V^^qWcUzrI^m00Q,*neb@c+C7n8&->FXL' );
define( 'SECURE_AUTH_SALT', 'BBBM*#=~pzkP8G[mlXo%n.O,1y$!_W2<L[4n8db!wD]_b[(Xt-dwj40Z.47h?o%4' );
define( 'LOGGED_IN_SALT',   'uO(_=|?ET}`g)EZ<udeB[8nY!@@NC!/K<q,^3UnZh+]wLbTQV@~*y8c!-8|WH+%/' );
define( 'NONCE_SALT',       '`fMf_3hy@]Ssj24m~oK{+;id2|cWudWrm6ZP=r0&;q$q|o=qBK;xY<&7?RZNIh?x' );

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
