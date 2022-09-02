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
define( 'DB_NAME', 'wordpressfront' );

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
define( 'AUTH_KEY',         'RKA@YhWh?OOhgVs}|@c$A3_txS/R{jXRM[?5l$^@(qDpb~6kRRgRy65`XKpIQ.YF' );
define( 'SECURE_AUTH_KEY',  '>v[BUf<gX<%09ZJebely?uSP{*N4grsqP2}-lYa3aM[:pXSkNV?u Ns-1B$UAnCd' );
define( 'LOGGED_IN_KEY',    '[MPAz_&gI[rl%:9KmE]y%PA0cb7YlZDsG1ih]*[a@W+]<~)9fV0M2vjT?qfffHa~' );
define( 'NONCE_KEY',        '@^9?rAQSaIXM?n[/#V4#aIJntD+&|(R3QBT;=pe*8$:$6@0 &QScm= ^]GM:cH$]' );
define( 'AUTH_SALT',        '-H=(4Xxq~GPXlGl g(u0;>JP7%`ZrvwFg|z07~kT9q&zlbFOm#Hn )#WuIM}+0Wp' );
define( 'SECURE_AUTH_SALT', 'um5p0@&XPi+K1}(52U*oc~m 5[PE2gNw<iWP<S_5OnBZAcR`Yn)ESZJ0~=jtXSp/' );
define( 'LOGGED_IN_SALT',   'DE*)8PGaN~8*e82{nf0rIOsv/K[W/#&Yx.T!u?$0n^Qa2^Fmb;qyWook$CGSZ7ix' );
define( 'NONCE_SALT',       'Q:8S)]e;bG$h<8[/JIN&eO,I<oE9~WAj|M4Dh/oOS;qiy@8rSo[%HQyK;lm`Ac.2' );

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
