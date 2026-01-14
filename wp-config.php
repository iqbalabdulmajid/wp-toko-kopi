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
define( 'DB_NAME', 'db_wp_toko_kopi' );

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
define( 'AUTH_KEY',         'Vsu{]_*6[a~Dc]r`43$nR|{&6`v6M./G$5>SV/N`%4zdLj<5xvPyVYdA(vxj_+`[' );
define( 'SECURE_AUTH_KEY',  'aVDpw}pv,LtP$I~1M]REgOe.6uos,OU7oA;o1]pDWe6#!9ZY1vJWlg .Rtre9vvp' );
define( 'LOGGED_IN_KEY',    '3?5@Sb=ArQ~#zhxB1WD+7<m$>w%cKuj.K$<T0(:cBue!0[E}+1J})^$*{I>KY=OH' );
define( 'NONCE_KEY',        'L.S[@5&irf:0TJu_N$h0Q6bwKV6fzwB{BU}?bFWsB{oin(C.vkmEC@sb(TCMb#Us' );
define( 'AUTH_SALT',        'zA7w^<,xDz`=Ig&fQyMaQx3*z^E?Z;2R/! 6rL?bH<W4:Af.))..zcr0S4Rx=zH/' );
define( 'SECURE_AUTH_SALT', 'S9:m]1JRe&X9>%V}Zhl&r/P{} 7M~dYl(6*U.]|}gc{))5Rkml?=nd{d1y1)F^hr' );
define( 'LOGGED_IN_SALT',   'Qk}Q/C7ybf+%*MD6f` IF[/3O[ho/lf5TN-SvMX-%m*`zB/l/NlV+b.Jj.gD%Tw5' );
define( 'NONCE_SALT',       't6#d%L5nfW^kRthNDZ,WK(f@yL|8Z@;tlL9;w|!![Y,CpIW{Cfo(DTVzX3fDPEok' );

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
