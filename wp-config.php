<?php
define( 'WP_CACHE', true ); // Added by WP Rocket

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
define( 'DB_NAME', 'cakado_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',         'j^><Z`/?14CigO;t8J_Xm]O&vW{:H>:1unfRnzmR]sRs9[ iMRJ3e{piC!B;V_1R' );
define( 'SECURE_AUTH_KEY',  'g=hOQD +k8I{GX;qiy?9(,?o 1_ArroWZ=KH~h7hw_t:?dfm.*M(rMpEn}Y][p$~' );
define( 'LOGGED_IN_KEY',    'T(0L,-8L5ml8(G=fq4%qsEAwZ@|o>oP2h.ooOx6EM8F#ZSRM&R0-{-l!D- /!uXs' );
define( 'NONCE_KEY',        '~ZWMuy~gD#s6z&jDTX3e})e>uDl[h/+;OQ-Vc[Zq3s9mc_t)1vgRle$01S1Z#DOS' );
define( 'AUTH_SALT',        'M3D@l>H_kc5sW[w#v-6e99JEZ2)gLm>9[jFfp22 Gg3p>= ,c9O6f=lMEGP(l_%X' );
define( 'SECURE_AUTH_SALT', 'YyV2]kaQ}fHU*3Q4p`Pp#fIi5H{zj{|t|vEZgmowL3|k 6>S2 q|N-}5X(Gm=J/x' );
define( 'LOGGED_IN_SALT',   '[]KvjBe//?_F9r?g ?~6y/GDo-8@9-@jL;+Ny;^WE,F,2w^OHwahr#}_8fc/&usv' );
define( 'NONCE_SALT',       '#?[A4{6cfdONgCtc9HWQFX@eVv~5T:!p~xGnOT$>Et]Rq[^,kd-3i#MCoYv+9 DF' );

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
