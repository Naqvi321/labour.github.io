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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'labour' );

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
define( 'AUTH_KEY',         'rMO0oGCP@SsO~D^|tQ6OK3`=cT+]BdI|djvk+U*RzsKpjw=2ht8u:e.I[:0[P1XH' );
define( 'SECURE_AUTH_KEY',  'R2?N),U1sRE+CB+!p`+#P>.%d4ge6q4qLf_9f+&I6.Q%PX|Il5:mVWTwH/&:0y33' );
define( 'LOGGED_IN_KEY',    '-s(^iHDu>])qj0d1Dh3D~1Vjn?LM0!g/E2Y;5C{bG#A~cDXjgNWYj=<pP|oUPDnY' );
define( 'NONCE_KEY',        'FuC+GF+^v%? ]&E$+8M*Y;7iI:8|fbOZc|wQxpZB6!mF4=|2Y=jN3Wr`x_{AtR%D' );
define( 'AUTH_SALT',        'Q5!5p/zA~8>OOEgMiB_S Cep660?0}v$tL3g/d}Z9qL0/[BGT(DdzYFdMX}tBK6#' );
define( 'SECURE_AUTH_SALT', 'uOF;1 HX*3Fmyt4cB[![ZpZ_$Dh(@@>X{%MvV.e)Jjlf,ab6}8/e;WDDYfg{P=nm' );
define( 'LOGGED_IN_SALT',   '2K.7UwQcZsr}6Pwox>ZYK`&>C,9b<fV|u6sx#.XJ5@[/Q:N&@Js$.$:MOT9hN}jn' );
define( 'NONCE_SALT',       'nvtP;Okp49d0Kn!`g wkff;,uf?<,fV7o4f;m.7O^b.&;#<Yl]IU^|zTWC9F~1tT' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
