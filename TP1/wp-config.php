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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wp_user' );

/** Database password */
define( 'DB_PASSWORD', 'Passw0rd' );

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
define( 'AUTH_KEY',         'j2])lF{hf+p6olwJZ7,x8g$$29O-g,t$A>0SA7~7xBnL1m1P74+3ml]tpB~qGMU=' );
define( 'SECURE_AUTH_KEY',  'd$ULJf!.*pt#-q$[3U6.{C[87v<v^j5Ig19Z{D(BfJ>FOr-f3RfPjBX^|K6rjZO]' );
define( 'LOGGED_IN_KEY',    'fkHS-/@S2~g^m*];mRos>DcMuV_]1|Hb8Eob/*Qw;z%Cu,<_qV6wTX#M@^Ku&H=d' );
define( 'NONCE_KEY',        '*NEVhw6`nsE~VF;pAuxLmu~Xp^+dh:g~BTP^,Y25^m,MXZnWiw(6A#W+Q 1G3?;)' );
define( 'AUTH_SALT',        '6?N9,=>olre0,Tm=]IzC>8!%pfcS[2Y(n5D>5A`t]stL]:?w|*Wrl;:,cuan13r+' );
define( 'SECURE_AUTH_SALT', '&.3w|<ephwo;_^%06/9I^Z8fF% O]XVb}WY#;T9CdiGiR!cq~9A6qx0n_vgA36rf' );
define( 'LOGGED_IN_SALT',   '9?T~tb<Pgh8-pvFVL?3il4k R5~$c*9Rlj*wwjp=YN1EPB/ K>:u-EVWn1_qZ:w?' );
define( 'NONCE_SALT',       'ufT]+|.lLV5e&t* +^ ydM:alOay}@ J/6>d~LlSI91=`k[Z6vUxX!$cgE9GUC90' );

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
