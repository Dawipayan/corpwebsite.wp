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
define( 'DB_NAME', 'wp2' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'qwerty' );

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
define( 'AUTH_KEY',         '7sP-r`boq*[r-(HjfMm!^Zw,C _T;jS*2|k?Fe:NUL*/Ho7`2X2~c!^g1H$`{Vxo' );
define( 'SECURE_AUTH_KEY',  'M&c=O*GVS+h<rq]L]nPf?p*&`?l5oR/0zr]XeHQ/nhn6!V)Y~=i?hb3Yuu;O+0!E' );
define( 'LOGGED_IN_KEY',    'LT+AL5Y(H.{(IntKSHILG>s1z2)~SwcTMhxL?Q*`h;PgYfZ+|HYiYMDP*v9<n+tS' );
define( 'NONCE_KEY',        's?7BDZRG2qL6+pDQ!W FWEa<iK9v(K.bc1MnxU.o#PDzrwrJ^a%?Hg0?{<Hs!< E' );
define( 'AUTH_SALT',        'ScYyw~L9#G@%BN(TN!Pz[mAA c-k(vl(!+XpVCW`e D0TVfpAGT%:4/_uQZ[Edx_' );
define( 'SECURE_AUTH_SALT', 'y?;4R]@PW}k2GL m(>]C07]2eOEDoE0}G=Hzz_%iA4nH~Ra![u$,U?Q(4z}~E-gs' );
define( 'LOGGED_IN_SALT',   'np}I_uao019:h,IN}GEK[K t.u=%mVsVLKeC6bSXJ>cyGIvn#b,/]Hfy_^%YM _3' );
define( 'NONCE_SALT',       '%]qRHES%wnb94oMhZWJ+f  <<W3siC14j(^u<q!ob<w1X@[t:-f,BlunCk ~16#?' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
