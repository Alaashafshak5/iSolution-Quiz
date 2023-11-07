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
define( 'DB_NAME', 'myproject' );

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
define( 'AUTH_KEY',         '%);cHHV:k@a@ARzC5_k0B-b8:uUW!^|`mY2gbz}aY@mC!SGQ?Nv/N</m@(:sxn-7' );
define( 'SECURE_AUTH_KEY',  'L+9[&3050=TnkKss^>Y72&35j=i|$UU2|aUMB-55OE-ZM9+KF*{T`E;cxf)[ksNo' );
define( 'LOGGED_IN_KEY',    'q/ 17&,<i<K1W,#m_Vh72wP7W@dlP2-XKhlK?J.x:%W!S<to<.ZK>r(@XNm3o^9[' );
define( 'NONCE_KEY',        'S$U<w{Yt2MjozA)%di8r{+hDJb#K*;J$anF=wim<ryfga+8%Hp-)R- 9@rFg-u4/' );
define( 'AUTH_SALT',        '4^d1Q<q9$=c7U{`u#<(mQ?H~d5p45XZ2[#Wrl)np8GvJ<yedB1`YjHPDI1i+/$Z1' );
define( 'SECURE_AUTH_SALT', '<!c>Lq?+EGIhHoVB)2JCUO;q0Jv-^]rX3/x4ibu!x+xeTSl2_mRXN{`fAj}G_H,S' );
define( 'LOGGED_IN_SALT',   'kJm9g9Py,PkauF!n?r#K@B Nz!V#F5WJ^$%dQZpy`:*gfT[@_nwUA1]_k_IyaNJ(' );
define( 'NONCE_SALT',       '8./n<Uky($P*9^,MQ;%S{U9HflHf#t/?^GZvtK&Qwfw/.n%_g,Q]!d*I4]b+G%h2' );

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
