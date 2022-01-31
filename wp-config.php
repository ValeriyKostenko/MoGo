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
define( 'DB_NAME', 'rask' );

/** MySQL database username */
define( 'DB_USER', 'Gadmin' );

/** MySQL database password */
define( 'DB_PASSWORD', '12345' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'Z~<kI#)@s]Rr<Fu)jzBi>~$nB.^v>1_]aXKx]Bs`RFw,W7RB.#6Z2.awxF-=AZrC' );
define( 'SECURE_AUTH_KEY',  'IsiLx200ISEGAX]P5{1UqPU9>qml0zq.Bj&w}L)[`QPBsZyRgo4WI&^sNFU,i2G3' );
define( 'LOGGED_IN_KEY',    'Wj`WPx}_fOn@p$sg>GX~<%LWA{#F#c~QudV1pEq4@w}4@kG7wgAt#u7|+9IEqz@D' );
define( 'NONCE_KEY',        'jU>5r:1GdaTV(];SwmcmWG)Ys|vcGkqWW=]`b1bzq)=)j!MQfztp[8sPp4[?#.12' );
define( 'AUTH_SALT',        'pT-E>FQ9MTcjvS5=Z+Y(Gz[!0]ix5o=A5 XB7L)<Ua+~:AXo.RB|B[}`rca=VYtd' );
define( 'SECURE_AUTH_SALT', 'Ah[AcVVLDt6lWSe&O9!<n]#DNYYTb%S>!.:aBbYxI}nri$9pK EK7x[]$ZGvpZZy' );
define( 'LOGGED_IN_SALT',   'kjx#`V}WDt1PE^3)u$3WiDSc-hF}(.=1Hi|`zyr{LZw%[*HFC#Kl2`[WY?jtR>W.' );
define( 'NONCE_SALT',       '$#MAs.aFg3tZJ&_uxA@k 8fqGfwsKw?Nz|uig~ uWRqL^+Ej!s/ga#+Ul#pdEh2S' );

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
