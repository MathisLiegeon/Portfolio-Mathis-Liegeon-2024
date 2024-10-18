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
define( 'DB_NAME', 'portfolio' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'nO*~pz*u:#5tLtTfWqm-zp8rgS>^s=!q,P{R8JH5CfsJp#~[@s<x8my>$`6=dZrw' );
define( 'SECURE_AUTH_KEY',  '}b}!WYoiJ$co+}[+0NIP`qD2u~zG%V#P0xEm{dw0:l8GjF)mn<?P0X4U9373&ly6' );
define( 'LOGGED_IN_KEY',    'R<~o@y,L#ouR>F.<pTt1(=c7?8WSm8tP4HDkHlk;4_=&tGk,*JEe7qXV4!lU{&#1' );
define( 'NONCE_KEY',        'Qg4)BB>bP_4%37P*qd*JY%~lJ>4bT7$[_pmwnvrPH,.gg)68TX&!-O*MRH-BLI@x' );
define( 'AUTH_SALT',        'Vi/LBP6we85^>W%lMERYg}hV!e1VVVf-2pfwhXk>[KU~nT.@5p s 2K1[WM Hpr2' );
define( 'SECURE_AUTH_SALT', 'ODn]S^b&,}$squdjQJIN]1gt19_@U7T,|^Ki8_@^!HHZTZ+A]sC^`P{cos%@Rxch' );
define( 'LOGGED_IN_SALT',   ')w@q3`S<E{e_r+%jRqQ=%jkFVS5f8tx}Qsg_+~ ~7NhmmzQAY#-w[fnby?}lnbKe' );
define( 'NONCE_SALT',       'yDEd)bQ/`oIxYs.C6&e}i;!K5GKa2ssnsb8GA4.$u<I=~9bDhdD9}h}(:ZRa>z*y' );

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
