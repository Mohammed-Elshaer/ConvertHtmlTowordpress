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
define( 'DB_NAME', 'greenstor' );

/** Database username */
define( 'DB_USER', 'mhaasn' );

/** Database password */
define( 'DB_PASSWORD', 'm2022' );

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
define( 'AUTH_KEY',         'GSbL:a*Uj*=^13.;iJF98d2}sGoMuW~kCTUl?g8GBw9;v}eG2,85TvCXz|Ad;UZN' );
define( 'SECURE_AUTH_KEY',  '*>5&;RN_EF:5*48M>(SN17!ishr!%;AcR=2u^o7#R8N835J&mBze=HSvIQDJ2TLd' );
define( 'LOGGED_IN_KEY',    'KV&qGTVNCBD4kX2Vw_0WEfZy]4m.?#$D[(1(b(20g`N}:1Y_lLCshSgQ-P,B,|^%' );
define( 'NONCE_KEY',        'S~fAL~4E>2{eSy9b=p4{hg:3L~:/[#X8+rO%(ULr<ZK-qReXrYjP#)2xs2BW:3?e' );
define( 'AUTH_SALT',        '!jy _?#O%S<cR!7v@#*JH;_.eJVPZRKODf9s+>%%[v~uK[6p@j9.#!Sz%SG|$|6N' );
define( 'SECURE_AUTH_SALT', '62;(/]O|qi%,}wB0 ROoo4SJ2KpxAo;f@#@e0cfZlO]Ypmd#S%0&2>(8is>qBa#2' );
define( 'LOGGED_IN_SALT',   '6wzT>?sk)=Y/Tjp)]t.y[B~)4FltGMo1U(V1uF vg#-Y h>oAqH|664bQubk$6W-' );
define( 'NONCE_SALT',       'c|.(YmMd$8ob^@l.zDE$Fc;7B^}PD1p3eD-P?DAeWH5JyNHG2S^r?~,6x1lj>G$D' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
