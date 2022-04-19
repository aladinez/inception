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
define( 'DB_USER', 'alae' );

/** Database password */
define( 'DB_PASSWORD', 'alae123' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

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
define( 'AUTH_KEY',         'iN94!y}UFaFd*fb{MO]{9f@#nzd|XKDDF(kMRTwVV~ w%FFky#z,HlPtf;y,o(.N' );
define( 'SECURE_AUTH_KEY',  'E!% ]db>P+y-PCW(Y&DQ(ZE<(nLjp{1UMSU*af:J(/kX&apIiEx^}5JYkTDCZE7e' );
define( 'LOGGED_IN_KEY',    '|nW9i%).OH`#_,bj?k2sL8t:0A})n]m}I])`*e#QxZf$9>%j/^aS(TFEGYWjntRk' );
define( 'NONCE_KEY',        'kQCwI0R_t-#u2EUn|rbtuXlVxWFh53`6p3ga#5gAyEa^c6@TjN7xF<BKo`(=iy)%' );
define( 'AUTH_SALT',        'UA[3$-cnC8Os!Z/Ef%zcJJ^E{R1QljbM.yBsxz?#v% L]c{iNG^3>~&T/p:tb@x{' );
define( 'SECURE_AUTH_SALT', '(=urD1.H6m.BnSqs$*o:`.2~I;4x&hN=S+*Nx[ Dfj4LQ;b-f=kEvoVF(1VuifGp' );
define( 'LOGGED_IN_SALT',   'X{}uwuB&,fP ~:Z3NpVw7dZ[ F~]Nt0K2cKzN=b.|:LVj&wu9$a)Gx)S}nL=t5ME' );
define( 'NONCE_SALT',       'md?&q}+_nHX%^l#_cnuCSugZF@X5:Sq&jMM|^1W/9.N*T[Jm*}Qgb<yF#5sx6%:H' );

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
