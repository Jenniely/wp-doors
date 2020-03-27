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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wpdb' );

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
define( 'AUTH_KEY',         '^uX%2de`PkyeR3OHkK<+O~twm}GCJ|aVGnC$&nq6gS+nlHM3|:.?B94G6bye{3#g' );
define( 'SECURE_AUTH_KEY',  'PDP#Vwms.lkce[IHkJe}| 8t>2)1!*$_kb8/{nf-3w<$Szu(mK#F3J;+I$?>N46_' );
define( 'LOGGED_IN_KEY',    'aq*:vmad^fd?Ufu7]z%m eA/nKh7Xu-J0?$wAJh_n 4E|X-hmYhwacInt!y<Ieg@' );
define( 'NONCE_KEY',        'a*Op3*%YSxhWv2LbOHe-JT)1J68{iu5hrRZHp+&-T,s_*e/$#C-v]PrY~A]ZV,sk' );
define( 'AUTH_SALT',        'X>Im>{+IwThHeWrCF`m[!<cl!>$*qU;dR@~%2~Vf[YD*F.u<}u_T;DOS^[T{x->|' );
define( 'SECURE_AUTH_SALT', '7dO6K-t81:?yoDp&[g_=gS+;U56HHg9Q#Y$x/Xm?2[.YCIy+&v2u.Auy7A-=&J?G' );
define( 'LOGGED_IN_SALT',   '[AwPwH/de|6?vZON3U3Vgd@M<2ZZ26[M7v1:OU(1hu&mIoyh`/#YeIJ=SL+B7t`|' );
define( 'NONCE_SALT',       '$,/rY}J?N@S%eqRlx8&+Djh^U)%zaQX;nHXe@ne]Lbq/g95aW~=qvNn} &Xs{s>H' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );
define('WP_DEBUG_DISPLAY', false);

@ini_set( 'upload_max_filesize' , '128M' );
@ini_set( 'post_max_size', '128M');
@ini_set( 'memory_limit', '256M' );
@ini_set( 'max_execution_time', '300' );
@ini_set( 'max_input_time', '300' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
