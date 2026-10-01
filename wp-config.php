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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'VI[0~~gAD~}^`G:/2beoX1j-DwHxPKmSK7q>?O.6 @qWL4[}}nZE;rN;rsLw_J2(' );
define( 'SECURE_AUTH_KEY',  ')J0gm00Qkaxm@IoA?A2(Gdnl(VGw;#?~q@/ow#)Z{07T`J!<zaV@v|3o5kuF.vO1' );
define( 'LOGGED_IN_KEY',    '#AFr ~@M7RIT%z$z/8~3O5ax5#B2.Nh3+Yn%wNl-nl 83N4b+<kWcF_G76}WqXl;' );
define( 'NONCE_KEY',        's<#a-:DHpUkXT6h(   6X7|FTkO3fd8>xC`$m`)Z 5%> ):g%H2$6u}4z*U0>Y_c' );
define( 'AUTH_SALT',        '1jLEg~o@G|Vrob1VeR%>5K<6S$W@Q@Hm!^U`)UR*%q&+Q/yB4a^/?_hI+WoV v4I' );
define( 'SECURE_AUTH_SALT', 'AY?;I?$heVJ7T&6c&/5+$Dk,ZgU4 `4riO{UD&E4M%%0zNDv,Pkg$stl8w}fkF4t' );
define( 'LOGGED_IN_SALT',   'W7bkk~zae!tXEn{.;QLzcP89j~bL0.iwzVZ_8r$H(7<7w)ElWcG(R=l^Pg3FkFc<' );
define( 'NONCE_SALT',       'h%gz:hPZ-YvIV} dDz,7LR*`tk(P%1t@#?k r}fD!K<:y/D?d]jt)MI*A%f41N*P' );

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
