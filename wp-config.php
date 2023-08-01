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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'acf_learning' );

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
define( 'AUTH_KEY',         '[{mSW~MkLO5}cIZm`mn]!@.Y9]YEoOlmFV6Da>@i_RMopMf%co[kTtu d!UH`<{-' );
define( 'SECURE_AUTH_KEY',  'LIgcZ[,^vLR;ho^}FsWts[>.1>T$;LxV]JCzUI4$6J:vWkqh8EZ%?`LKK(T%N5F>' );
define( 'LOGGED_IN_KEY',    'Q~Xyp%mz(.(Hai:4; #Rw?2adiVAn1Phqt*[ol&wD+N[)p,vf/eaipcdl,-x~dTi' );
define( 'NONCE_KEY',        '7/Q`*Hz-W8xKFc%I_xRAd)E9}O^vYVAVrb23x4gwx^Ws,U2C?;qEg4l6UxgK<E$Y' );
define( 'AUTH_SALT',        ':x|Vv-e4y}bw15*~!}GB6|-dJ[k5) ~O=AuZxUH4S/yH)&!oz[>WP?;e<6!5z+D:' );
define( 'SECURE_AUTH_SALT', 'WZH3F,%a_u$w|g5)cPr1ndst[QMsf|e5:|Pl<Q,qIe/Cm#t8*|Zd|mYGr+T)hT4C' );
define( 'LOGGED_IN_SALT',   'MQh;OLZ!4y[_,OS44blp{wf!opRCp`S{7)(zG~fc8#Y7nYVzf>zFw:L_*G#OLTzP' );
define( 'NONCE_SALT',       'UbXMKOImlZ2N=oO|4hur Hc%:=FyC)^pnOPtNyWWb;LLOe5S{VBxeQ3I/a[Xx;6*' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );
define( 'FS_METHOD', 'direct' );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

