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
define( 'DB_NAME', 'wordpress1' );

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
define( 'AUTH_KEY',         'bk(`Rpl2@<WSgiCXpl/iZpU?FD5ib1RA~gK_u>(Y/u`Td/aW2*!K#^wCL,0-+`Q:' );
define( 'SECURE_AUTH_KEY',  '241Q E<r12k*EOK_*uL6W`eEjh],]5CmXaErw_4GYVgXS(CHO.-)fV*jjOlz5&q$' );
define( 'LOGGED_IN_KEY',    '~)Zik.[wrpyaGy*Vu-gs.W>o.s:K!EW?@F*V3Gcinx@K+;i.U0DWzKI{9BK3^H0k' );
define( 'NONCE_KEY',        '/?I@bXQl^0y0.zq=g>*,$U [S3yF]38uB#8vzE$_A8h:gd[nFNz$QJe&^[l$Zb)a' );
define( 'AUTH_SALT',        'iS/*nJjG$-r{yjV+3M3yRMmbXyHx*lN$!7sdtkC %?NCaaL/#Af$&xTR|XbL`@8E' );
define( 'SECURE_AUTH_SALT', 'b kfHyFN1[kEOl)9czUmPoZ;,=3aX+slS*z@ZF=`DQi%KK@:VbwPD/2(hmlLM=TR' );
define( 'LOGGED_IN_SALT',   'nN5[F u|d Cfhk[.-~fD`SYb9A^%Zb##irP7GXf3]}tJ-||)ik`D|3;&~g_VyW3,' );
define( 'NONCE_SALT',       'A^3HiBLcM}i->B=VH`md4vA1}JyLL?{I4J1Gf7zo/2NvBWEz7<|#HR] y(_R*W})' );

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
