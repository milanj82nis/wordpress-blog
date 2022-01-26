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
define( 'DB_NAME', 'wordpress-blog' );

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
define( 'AUTH_KEY',         'wPj$U9)E3x,E*P$=+BS)fYU-w_q^l ic+u<^+Kh%>1^!&*oktf)!!aC%8 ADWHeu' );
define( 'SECURE_AUTH_KEY',  'oV4U%akt5r2!n0U)ulUk19MESa9oSer`ZUP,potb>COR IU-2?_a.]:vXF<[zlV|' );
define( 'LOGGED_IN_KEY',    'a<@iE37t-J-R?E-f=/ffd2xBfp)0bGJf]([e iazX;o1CDsz51&<[zO5<ZQu#//;' );
define( 'NONCE_KEY',        'hinud$?o$)bg(DivXhirjvhO&_]9j=,bwLgV(/.*j@ve~mNp&IfkdI}U~h1s`?_v' );
define( 'AUTH_SALT',        'gF[Fi}w]oy+v#;P5}hA!ku5fTw<(%lhvXC&MX8` SXePE;F7bLKD:3AE8=NYAfZ*' );
define( 'SECURE_AUTH_SALT', '$+]FO/?j-ts#fVPCCT=9@zkmr>Cq0)NcamX@M.6Zs=>$iaxr<dXzv[6fJh$RY>Vg' );
define( 'LOGGED_IN_SALT',   '28<oJ17_Z3ohosg]T(4rtm$]zy_5zEq0p~Y%QWh,r8Z[%T{Wim!&k&M9MRiqCO/k' );
define( 'NONCE_SALT',       'pU}555Q_h1V[?qUdETe64<Eb>wK00O_]egLgPsuTrBuV9Pzt<BOiJ+oAhzQ-l[eO' );

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
