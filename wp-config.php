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
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         '7cy6*Us5rG0&tjd_Qx-/32&V[|=)swKV4(n!F`Q%gW7.E.:-}AsFe73C!/QHn~v*' );
define( 'SECURE_AUTH_KEY',  'ohi*oMaM7GaT`T2%O|&___S0%N<`J .B}mX<&bAt|i]Qo<mTkM|jTP?Z3`g9Bx_a' );
define( 'LOGGED_IN_KEY',    'H{rq~)#i/9:ZZ$ZmdtfNZK|DrCI _S1iYK1A${Ij3XRPD?CHtE&olIW,aAXEfwVS' );
define( 'NONCE_KEY',        'CN~LK Jlb[Gkc*^9:6ND_f^-<,H:/ |C1X5wWb;]igWmK=T)DnKP&G:w+=37Z0si' );
define( 'AUTH_SALT',        'kMOcq~/VW0t04uqsW<ia`bpVC+.EA2=;L~AML/./PEWi71Y5TYv0o~Q%TI|MrYe{' );
define( 'SECURE_AUTH_SALT', '_ BdW-!,CoPaY<wD>(gI[el)t/A,v+U=Vyv1b={*yhjlTh?8l[f1@5:6qIZeoME_' );
define( 'LOGGED_IN_SALT',   'MkfZe@52nPbLCcYmJ5Mw^mSQI[U$y[5Gg)})/b{?hpQP:X2^35eq#ic|204JvQB0' );
define( 'NONCE_SALT',       'Mhdz(G:{3E5M-ywjrtuclS9VWoDSgeR,rl@4xk{h>;/F4$vPeE7L$f(V_?b8GIA#' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ld_';

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
