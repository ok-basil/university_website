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
define( 'DB_NAME', 'test' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',         '!p-y^p?Ru3;d$D]?<kD#%RzV-E%Dr#)/#-h]$*HXK!k-DK/%77Xj0lW,sJ/G.-zo' );
define( 'SECURE_AUTH_KEY',  ';OUH[z1O(4& B!E/YN2QbY].h>[ApGs3@I [svL$G0OM87M6+kziQbR4b,@;FiR}' );
define( 'LOGGED_IN_KEY',    '[eg+z^g1`P4qoKSF2Uj/xkiIzT]$}D!$tj3/)YE#)4!:1sA${=D|K}V yqalj%2l' );
define( 'NONCE_KEY',        ';*:jfA|bv6Et)7TUZ9[A|EH*#fQ2Yt}1oxvQSP+E17lVydJ&;ZuT50^`D( nDl;<' );
define( 'AUTH_SALT',        'jP-BgIvctms!{@Dtz(3s*n#6hB+19*# s(E1&}T6 /Y$F8?x]uv_#:Vd8~t6j;yD' );
define( 'SECURE_AUTH_SALT', '?Y-uvAF`3>&Bc18O~&[!%_qG>NfNX4Hh?&b&)2]<8_`ci8-!lG&O6sFbs!_{|7Vv' );
define( 'LOGGED_IN_SALT',   '5tpT=2lh;+5 Wh)f/k#:$NkjanA*0P-B,-x|#t_;/66]j.:=S(ON#=NNcYJ8$Ob.' );
define( 'NONCE_SALT',       '.Kcm@@w9<d-w/TDr$W=P7r;C)zU8S`1}&w&j#FCcAIRJ3{!I)ZY[<q7T/-tK.}st' );

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
