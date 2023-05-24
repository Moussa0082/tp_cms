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
define( 'DB_NAME', 'monsitedb' );

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
define( 'AUTH_KEY',         '*pH6ly5.E~fB)H[G?n*_?@At=zR.l+m%$~zPYZUv*tm_YCDzMzxqe|X0.K5LJ.1z' );
define( 'SECURE_AUTH_KEY',  'G&sY1Z}},a&%Lo.`/{],.d(xP.+Go_q}[7]t)c1d@id0*wHKEt6`e *w?2O*N~R]' );
define( 'LOGGED_IN_KEY',    'L?gyKAQ<%>3LGr}gq|_@cT)<+mB0wo/zQZ4ggm=V^1$-wgoPl5=PVI+sI%(/s[oQ' );
define( 'NONCE_KEY',        't~*6fjJZn|X)a>*;[T#KdcWuk;bmr#+i2/&t<LOd@d%p[m4&9EO=-?kf~jWdm!ZD' );
define( 'AUTH_SALT',        '49`)rtGn0#1:B?0W{ugP>UC0+{;S@s5LF+G*Z;%#5>FxEFwh[0I~YuKzi(dt+;m^' );
define( 'SECURE_AUTH_SALT', '|!`tvTM24g[n: &KfexQQ6c2Gjo{.!gx4h5Huq(Hay;rX0WU>UUH;:RmP+;}qP7<' );
define( 'LOGGED_IN_SALT',   '8?5kU~GnCY3;*h@5:tSKSPX/5l+<5GYda@[#p7Gq6D/? 9BGbwH<WZ$FoS/2_R^=' );
define( 'NONCE_SALT',       ' S|Jc<o^eW4F`Er=oUR>B=#$R8d~L!<qfE_3.[Md{.=UB,<n^!_3~CkL^oN<qJK[' );

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
