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
define( 'DB_NAME', 'db_name_here' );

/** Database username */
define( 'DB_USER', 'db_user_here' );

/** Database password */
define( 'DB_PASSWORD', 'db_password_here' );

/** Database hostname */
define( 'DB_HOST', 'db_host_here' );

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
define( 'AUTH_KEY',         'Ywc^wLP5d2zQ*?2~:Tc[1Ys%I[:_`DktXQ}Bgn^Gx=Z^fZ0N$X. jm)|2Udt~qdD' );
define( 'SECURE_AUTH_KEY',  '-Xw2Uj lr#k=M.1Q/zd*vyn_=H`s&,MOW@0T;jiS?%:~Rc74YJBJ-C&Ekp8{LQ35' );
define( 'LOGGED_IN_KEY',    ']a9, r7)n=QB^hR_^$nfTICU&6<T}c~$Z0[hwD }bZ6>j40Nmj)8e~C>0VlFax4n' );
define( 'NONCE_KEY',        'un*1/&>UR2$2mh:l#7I+J?%<4,@uu1QEkcR&5E,~I.oIO^4lGe[,lB;oYRhMR-wC' );
define( 'AUTH_SALT',        '_)@xMIOc`+=Qbf~:M^j=0Z%|[42Q7.Fb6B*51(j2FdOVuBub^oQsFlTn{RT]_0J_' );
define( 'SECURE_AUTH_SALT', 'G4x2v-/qIC}K[ |SIK*<f.s0;IhdmoiCSbpA,(h9=C)?r@p*rhnX4!<<~ >fp@H~' );
define( 'LOGGED_IN_SALT',   'Q,FV8xUu=#,ShGq-SBK|rYk)TdY`_}W:`jQXj*^>:9j>#2_GSs2gAhw4s$c!U|;s' );
define( 'NONCE_SALT',       'tE>%ISGz::s?@>%-!G,G)E4bg) f~ycv?2mtK?,U>qJ5sgYHwyWLx#:oPx!0hH$n' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_inception_';

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
