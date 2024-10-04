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
define( 'DB_NAME', 'staging' );

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
define( 'AUTH_KEY',         'ww$^2yUOp82oOY58]O&}NavJ2CWe4.i0Y4PYZgp5s$^1RNt@|[`4JaXBC$oOKv:R' );
define( 'SECURE_AUTH_KEY',  'DEUrFzzf& RJ$81II%~XH<Z<PQ/U.OH{XAy_+yzUy&C`<gdORs[:Y$usn1eJdE:Q' );
define( 'LOGGED_IN_KEY',    '!/|9t v(>]pgQl U]xtPs%)6LD![QnYFAl/)a*pqi~N7m|[_cjt3rv#rs,t$g0Ac' );
define( 'NONCE_KEY',        'nO)i uT#@LcR%@Yifpc9nJ14.bS^x~xbkF|ex3K)-(0fc($-#h@SsmLlEoI1m4!f' );
define( 'AUTH_SALT',        'uwG wc2;HCaU;-hPOK%DNoA*uUxFo`Z0{XvVD>A1bvB1F$W^&/W4#xZ]-2S>2{}l' );
define( 'SECURE_AUTH_SALT', 'LM(X-GxY~,8L?sV^5CjG7Z_G0^cVpEGoi ?-U=y?&@XvlU *xa+O;MSo]vFlE8fM' );
define( 'LOGGED_IN_SALT',   '_*$R=&-L+VNl:u/YR%2[u(:u*k$R=6;EBtf1$h;Q5!;&gaxQMB fWFgFnj%^l5vg' );
define( 'NONCE_SALT',       'Kx)(ey2VjKpqda<r6XH3;XejKh(~8va7iA(dSy}IRq&z:!T; .ugPXshVgz##l;_' );

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
