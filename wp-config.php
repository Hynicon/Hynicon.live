<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpressuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'W0rdpre$$' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
define('FS_METHOD', 'direct');
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'y%1+&]7S`+/wt_x-{7$(s7%E^1g99G|5b|Lr-4fL$BGAoo,me$ #a|:60!wLC.Xt');
define('SECURE_AUTH_KEY',  'B4WrSueZ,U/?D<3M]>a~0u.mBzg*j7l9Xik&Xj)ZXI,xrrWfXsXs7+]sO3k{VPf4');
define('LOGGED_IN_KEY',    'lW[&os{S.|yko:pd;rXCTe,=8!e7a,5Osno@WMRMf. yIe^_kmVd0uJmo.S<:97u');
define('NONCE_KEY',        '+Q8fX)T-l?|+g-A|Cm.r^-s/K_o%2hKXn&H8KeB8,~)f=a#_J6y}(X-_ZuTOXT52');
define('AUTH_SALT',        'K~dFhl6x4uB<(gt|1_6Z~Q~E1F5*RAs^+n}cI#JWoBpwf-W}68-B|^r%-J_@14+1');
define('SECURE_AUTH_SALT', '<fak]k^-m8bsw@QPB+(cOmQU`eg$#)(<A{,&~O~dj#+0gO$X%?Hc,ys,3bl}a]x|');
define('LOGGED_IN_SALT',   ']!EpygS=cq+o^gIljziLsoFhW+G*UO?}whyknuU2qN/zi#x 5 WYqm9&p7<Td;_j');
define('NONCE_SALT',       'cnyiFYN4l=_5_Mfl*pyZ5q)Kzv3eNxvmv*sUQn!L]kL-SqtSt:A/q,T-]`4tkX5U');
/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
