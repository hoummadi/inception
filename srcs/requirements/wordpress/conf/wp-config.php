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
// define( 'DB_NAME', 'wpdbase' );
define( 'DB_NAME', getenv('DB_NAME'));

/** Database username */
// define( 'DB_USER', 'hmmd' );
define( 'DB_USER', getenv('DB_USER'));

/** Database password */
// define( 'DB_PASSWORD', '1234base' );
define( 'DB_PASSWORD', getenv('DB_PASSWORD'));

/** Database hostname */
// define( 'DB_HOST', 'mariadb' );
define( 'DB_HOST', getenv('DB_HOST'));

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
define( 'AUTH_KEY',         '&ZL#-M_op?k*qiVE#l@r1>LMf*cSGQxiEf5Dj1m+U8:p<,sbf6`:wd}+BAY(}4+{' );
define( 'SECURE_AUTH_KEY',  ',.D&y0RvZhbU])YUx6Bk~f^4w%/1J9J3xRC9kI`V>+*Qg Nw/$77K}m2;#l[~LEz' );
define( 'LOGGED_IN_KEY',    'AtMne}.Xl9(F83xO%<j$X? 7,*|^LVkx:wvrmZ^8co+ BKl9G8kqa(}29<>DDvY-' );
define( 'NONCE_KEY',        'LuV(r$23d$^D=*mHD876ak~:TIJTyMSEtvQ,%x;~u9<wH(&=i8ag.)j2vuD/5vR-' );
define( 'AUTH_SALT',        'V2<,7?EmI+Wj;0*J6Q[=XSwvBP@+I_<.;h16&-z}:+3TitfQ{g84T^_M%u>PgM}T' );
define( 'SECURE_AUTH_SALT', 'UUL*cjA+TX~99^lrV`+8~R:el7IvIMP/^L}S+5iu9vc`@CB>}^;FeJp5mVwR[g-M' );
define( 'LOGGED_IN_SALT',   'rZeCG9D6!P8r1EiB+_LCVB]+ag9p+_#~1l>QDIeAItm-=@m IN!~}FHrlfu$R~f(' );
define( 'NONCE_SALT',       'ZUB;|4<e#O3eK04fV&?6Qx&6VDYFzrU=hglKN(D`v5_dv2`Us3=<B&qr[|8$cP ,' );

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
