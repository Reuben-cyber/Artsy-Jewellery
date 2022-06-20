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
define( 'DB_NAME', 'jewel_db' );

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
define( 'AUTH_KEY',         'Of3]eyhSEK^oZ|y5xcL=69n?Ym5;wurg$4j6mEsrK`^,:5L(e.;&4$/z5O8WHA`|' );
define( 'SECURE_AUTH_KEY',  'I|bnf1|.cmz_T=E>]CJ{V/:W0/l3MLKaz5|!l2m)+kqLg5.pKX}eO]`ok-T1n6V.' );
define( 'LOGGED_IN_KEY',    'REt6klqA/T%jwx5)KVe6N(j{wLe+uTHU*Q5<Vh?[3y4 @N,;d&tu@4aTH;f>^N@4' );
define( 'NONCE_KEY',        'eWVQi$P};/QR90qXqQ#$Z_,`Z?6^I`tLCBG#|wQ|RU[z -FkLxkB{2i*<erN~J.B' );
define( 'AUTH_SALT',        'gUE}LGs~Rh3%*B4d!S-L7dZ;U2#Pe}>:z=Vuv2r6fK l_>Incy2>>|xplj7>NbHE' );
define( 'SECURE_AUTH_SALT', '@^B`l<.^:kd:WaJi@o}:S`e-Rq5`gcGdIx;vp)I${l--*)p?c<lgGO?6_DgjH|~d' );
define( 'LOGGED_IN_SALT',   '@v_Sw=VT@SK!HW6aJs|fkDO!Z6_9gxU||zdYz|J( JV`q1_tc<zwT4:@pGW<gkbJ' );
define( 'NONCE_SALT',       '#;kAk!ngF=,.jO76Qdn( <>;V}4.IvuGcZAM=[leles^WO/te<VraeO&K2-HwX2>' );

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
