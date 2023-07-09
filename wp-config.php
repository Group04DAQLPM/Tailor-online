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
define( 'DB_NAME', "abc" );

/** Database username */
define( 'DB_USER', "root" );

/** Database password */
define( 'DB_PASSWORD', "" );

/** Database hostname */
define( 'DB_HOST', "localhost" );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'ewkt2lfqxtofuvdqfogf6rq0uuvagqc8jfz2eod9wxqf0pjcgq2mlqb0evhvanb4' );
define( 'SECURE_AUTH_KEY',  '8ypcb1ihduoh93p9uu0eide6amm3auan4nmlibl5jh8owqpckclj3ymjatjih0zk' );
define( 'LOGGED_IN_KEY',    'sapwwpbqsscjb1suy9ampw9bxgjelkia7jlkwyoo3zlqtks3okjl3p35tea9l9bj' );
define( 'NONCE_KEY',        '7xsk0gkcnj0wrsvjmwjjpxvz2owssyoblacvzji2br3oexa9k13q5afebdwgyjhh' );
define( 'AUTH_SALT',        '7wzziya2sqedlfba7fh0ya4pzux58tpe24nqnhdwpy8hqnuie41qzvacpaw4xt9p' );
define( 'SECURE_AUTH_SALT', 'such5wvlrfp2pvdbaojvuyytuxrpyresri3bwo13wehzjzkri61sllhq65wqae4s' );
define( 'LOGGED_IN_SALT',   'k5crrvrxtj0eifnjxy7zeo8iy1fhofszqx6dn5kunrhutzhgnlkbu3z2l5jmeeiu' );
define( 'NONCE_SALT',       'jni6nm9p7nyuhcylxinli7pomi1rrjhu8kkdxuq4ijwouixxkzxicue5vmfofbkm' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpkh_';

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



define( 'WP_SITEURL', 'http://localhost/Tailor-online/' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname(__FILE__) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
