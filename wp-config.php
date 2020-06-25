<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '69f s0`oI{-^aA)5&JIK!ym^<ExI8)Tl,G[)Jq1&m!Q3JJ0Ex8pc1;tCRtl+}+@r' );
define( 'SECURE_AUTH_KEY',  'le}:v#-PH/ofxm|!9JV<ACjv;{xK7sQngKySLoU?S=Y=N<@XdEf%2+ 4FtC+^x#r' );
define( 'LOGGED_IN_KEY',    'fIU=?_;GA/Jbr:% ;vld{T,H`G[nG/:*(.GLGlowh4 Er{.~pR,K!ZhK12guNaK#' );
define( 'NONCE_KEY',        'E>)rDu `&Eu3iMC5/Ll7f3[F_^Bi(-;%!H49;t2d}?#$P2[tep96uH*.i1W-TM0Z' );
define( 'AUTH_SALT',        'F3!r=nKCj`uUp$[$kHl&)FeQr(Q?LJ>Vdu|_oZw+(d{@fth^0RW8:wG|41p`F@eE' );
define( 'SECURE_AUTH_SALT', 'Mr6oio/,{Tj*izv)5}!oDx=:#vKRY%24`B%?.`e _FN z3wq+i5MJ*%ROgFmtpD8' );
define( 'LOGGED_IN_SALT',   '4!ra(y#Yp<y~gJ{B{a}sQ+F2|`_EN:O9d{ ~62$P~wjRY$9wneD{cLkD:&?u>N5A' );
define( 'NONCE_SALT',       'P9IqG?_**:uLMQPFmH=@4Q[Jj6LOE1KRtkG|;,#1Xuvc+hsv}$_y&1y>saPoOhBH' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
