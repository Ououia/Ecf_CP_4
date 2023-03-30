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
define( 'DB_NAME', 'ecfcp4' );

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
define( 'AUTH_KEY',         'xg7cI5s9c9>MkjmNVQ]gn5^5ab?-Gvt.;V]Z>K,*n48q{r*l- A@Y!h?XFET:^t ' );
define( 'SECURE_AUTH_KEY',  '*TN^[f?y!pg.t;YSmlOQb{d|O^1~AFy][[ulzEz3RILwHq]@WPIq=xmw`c?~Kea^' );
define( 'LOGGED_IN_KEY',    'a#lyQTiu}92W[rl1cKj XbgR8Fff$weB7SMeBW+`&<2]_;ZOo7c:7)DUw4/5yT:)' );
define( 'NONCE_KEY',        'D2QEh4!roGx:9aX-&z+Z6u;zlMgO@;7z@D?lc|kNOXRWVde`*OkX,U3g/i@xB&h(' );
define( 'AUTH_SALT',        '-;]l8Fqt~+%JYI!We{W|DXjBCSi(xRC*j:.DSfV(Gmp1znw{s8VQb;))a~{TUjuv' );
define( 'SECURE_AUTH_SALT', 'X0;/-x>`SC9NyW>.CX/H!^H$Z#DSNe2fd00Pg.MmssK}~`z+:6~kj4a!mR:=x)<q' );
define( 'LOGGED_IN_SALT',   '<lmBEPk`>PjiZCP$-t<v)X$*`O`Bj_k#kFu,K5cDR7=r2l1VH~xI/|4uJF*Ux[*;' );
define( 'NONCE_SALT',       'l4!0@<9z+8{<Hn3_dl(e0bf*urt6f<Fj&H!D^}xjIJ,jliQ=Y4s%N4Lp<@nZm.CQ' );

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
