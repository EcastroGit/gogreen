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
define( 'DB_NAME', 'wordpress_db' );

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
define( 'AUTH_KEY',         'Aj8LY6Z0_^^ZE03ccbxn:J3[KH-;DzOEIKQk3$@>Q;u(}w&ZpI{.HJ2Kyw}6ep{`' );
define( 'SECURE_AUTH_KEY',  'JmUwOu  ] PneQa.eh%X!diC:k;k@#uLW{}5TREJk{O@|wCRze]_*UP*GEKUUCEf' );
define( 'LOGGED_IN_KEY',    '0y9_p`LY{]_9H:GVm1^(!U*(!$q!ov>l`[|nqz<~;ljSVu1`<)4dHuMGJ.sk@V$-' );
define( 'NONCE_KEY',        '=+QnB7]]W,@<{r6kJ!Yw~MFBC3724E+^L;U;T5owbZfBFj[&kv|H4%K6cn|-hdk1' );
define( 'AUTH_SALT',        'Ua8>`KP<T#[`Rl0U^EmeWOKinQCpZo61H D^JHz}uO~{;rBP~VmJV+.^LN6!6e9h' );
define( 'SECURE_AUTH_SALT', 'ZeZup0/F@xrl)7a2m5<{YZs8*xs=07N2m+%Ji|=:O]FAkbKWlnR$~]AL[vMobi[x' );
define( 'LOGGED_IN_SALT',   '_Gk]i].G[m0SP,U{7!t|k0j1wE)lVRUVr`}ui1/u_4PN,o0>sWjM(~6ME1$s*#?u' );
define( 'NONCE_SALT',       'Cq&iia?_Kao;(T1S*?hrqvP}oh*2qA:1Zx bP>g@ELDkSn>^12ut#d E1hwaBxc]' );

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
