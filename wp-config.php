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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'marupstorebd' );

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
define( 'AUTH_KEY',         'oRbQn$s~6M@v[o{;KhX~CY`72Vi4?Y=aGYJ|]@JC^Ui<j3]LRrgc86~u_|k^M(x6' );
define( 'SECURE_AUTH_KEY',  '7em3Tt46O-UW4|N.}2X]j!y@>3RA,+n||3)sLf6Lglli4iC^KVz({(0CD>oo>PoU' );
define( 'LOGGED_IN_KEY',    '+;4maYJ,edr%RQOf&3E#lKEw}E]M9+w=ryRKrg~5$Op@sjy 6T4Y{vG@JO}Ps>UH' );
define( 'NONCE_KEY',        'ty? ##J;71it-hN|DurKpl[uvKlvqdR51OB/y<<(LdCe?,&y%[tl,A_A?]-(Z<zG' );
define( 'AUTH_SALT',        'BEg_Wz)=%#jh-titdVr%yT[tK&A<aU2x_)+mi@:0PV4K]NvLa1#}Pu~Ub`3`TVP=' );
define( 'SECURE_AUTH_SALT', 'LyVBvG!tv#4y{*s#681knk46!bS3/wW:uPItvKN]ABtlT@8IB,zVrm}B_42DN0;(' );
define( 'LOGGED_IN_SALT',   'LW*_ &7rT+80LXg!5aQida;EK/KYqX(g@GGKaXQK3L gx~(0^Iv(AeL|=b}ZvnE ' );
define( 'NONCE_SALT',       ':&thG~Az4VsvF[h9%V|@TWsEu?niX*c>z2Phu{ly2|VfI+YmvRm~`.{tV|^ff;cf' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'markbd_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
