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
define( 'DB_NAME', 'oriental_lotus_wp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '$QgIcsnU8QNnJ7&AA1' );

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
define( 'AUTH_KEY',         'pa1`~fkWb}#EspVhOdV)EA(Z|r?_IXypVdX(hu%;+Ou6]N7SS])-P9{)xH]nO)wZ' );
define( 'SECURE_AUTH_KEY',  'zl$_.Nf;x} c%t08HQPzT5e#LE4]@5{S({PL2:6b<VTKun9l}_!eA4~t1q(`7^q5' );
define( 'LOGGED_IN_KEY',    '8xb1eQafE<]YQJVAl5`0FC<^w~@S9Q2,dZ~2/2$d&=`U#Vgh[_yo/b819UqmW&O8' );
define( 'NONCE_KEY',        'vZ25C/UVMB(.#]>5BGHA>o4_^}`AWqfh0m^,WO([5t$DYO=!^F;LyRYXPW5xYBC2' );
define( 'AUTH_SALT',        '&!*u_ iL_IfeEf*g]t;<S`xBd5fa`{rlFns$X:GNwPDM?kvv}6][:)TV]LqT?rrx' );
define( 'SECURE_AUTH_SALT', '1?*o1<YI5GLnA1?=srB;5}V=#Lz5}hD7`wRS3o}3PLB_=gKvnm60KfE|_`@)buTi' );
define( 'LOGGED_IN_SALT',   'ehQ28VJ(f-*}i=(z2;n= x^MGur9Ma4?L@~@TP}Ua$a9a/CO8A`G7!3zoigiq<F9' );
define( 'NONCE_SALT',       '[7#mBX%d/=5_)-&J-$FT-2Q}x:Ef?&{RUVej+(_o~IUH>Hr!Y^`lb`F%jXwD-I.A' );

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
