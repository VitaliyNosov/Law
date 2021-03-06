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
define( 'DB_NAME', 'mysql' );

/** MySQL database username */
define( 'DB_USER', 'mysql' );

/** MySQL database password */
define( 'DB_PASSWORD', 'IQ86SgAg993BHcS5' );

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
define( 'AUTH_KEY',         'UFgi! l6]F-;gYKn5LF-ms7Z[Y1 ?G<]$c|B?e+I#4F4};R6h)*u||Joq+Yd_#l.' );
define( 'SECURE_AUTH_KEY',  'W3H|m,N5c%MlK|YC==#!&CpJw{[&#(0((R]VIb?(:|3}*-P*yg6*epn6f}UOdplU' );
define( 'LOGGED_IN_KEY',    'mL/Up`;-eg[5cBKVx,W]jUE|~C];yzj6`2oCS.S0?:;wb;Tw n<|_m5FDGreo`9e' );
define( 'NONCE_KEY',        '1o;>oCW0J#i*mu0oP^4kA#TqxS9_t<<iNV?4+GY^V*TRlc87MnQ8|*Kl~.K&JkBC' );
define( 'AUTH_SALT',        '<@3dk,WrxuWkC~)aAlY1kfOp`p}~Bj8gyE=Iccnr[oS$PlF$W3mgV`_B<WZ`3s%^' );
define( 'SECURE_AUTH_SALT', '>Dg,LmHqKSDnH3kU0JMHT*6iYM eFRbr8dmz%KywA52Cha^+F]Y9ug[fW2K}z>g+' );
define( 'LOGGED_IN_SALT',   'A~jD!S})fcq31Ich?7Vw9rNi+2i>R;HfIWIZj>v,RH~AY#_.ZAEi<Ac,iH4)+K~9' );
define( 'NONCE_SALT',       '8=*fJL*p<fAQo_88pk:a]:8Ti_u]576H9IuLqm(!4Rwz6zcl8JW+tR*Z:E*3>3&G' );

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
