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
define( 'DB_NAME', 'techweb' );

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
define( 'AUTH_KEY',         '/l_Y$)Nzl%Io9HtjG,[Fs/%6S86w>?IiVz=0SkChVLM|G*afDV#Bq8SD8#=<-uc[' );
define( 'SECURE_AUTH_KEY',  '4gfr(JcG;EuKle:{{jlO.U(?F2a*>A24EZZ3!%e;x=<u{DK`#xFg;@V%qq}xdU-~' );
define( 'LOGGED_IN_KEY',    'u=:(L,[X/E?~D^@e1*h#|RY JAx]Uf:Cr6 `4`-fC@8k|rNnl}zJ##jkcW[O$upd' );
define( 'NONCE_KEY',        'HuCCnnnfv<I_^{8`t/HS#diAsvicC1JXScB+,cg59Rdt?we;9+t[c)5S : .1lf,' );
define( 'AUTH_SALT',        'oJdCV7HF?Z?xd&D3/bg4%cA4OW7M]l,]}HL_`H)xUmY4RnrHh]}jv4zeo)ieGF,g' );
define( 'SECURE_AUTH_SALT', 'Vh/tkCP]jA/u>b6=S@1b.y!QB^ymNm0h#>{w6kDA9sr);1z 1<!VY0HbCfw*5puU' );
define( 'LOGGED_IN_SALT',   '%AK=nkmx8x7BqnAKY4tAk6?<HNr3{!vqh*djk3}Jd^TzkjVbM6R>L_VJtGI}6Jz6' );
define( 'NONCE_SALT',       '4MCq# %t0|/D9^/Q6TlOP/i:lz><JN2B _[o(CN7UkJ5;7F~Xh)CoipK@7Fp>yd&' );

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
