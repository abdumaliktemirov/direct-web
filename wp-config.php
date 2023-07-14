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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         '7pxUm1Sc6Vn3aSJG1/1FaiFw2oSl7dwLxZIJjL2jYXCiY48OdvEI/hN0MRel926RjErOC8y+bj8NrzQiiv4y0g==');
define('SECURE_AUTH_KEY',  'Ak5QQvyH95hqMKjzNXJQLjNa8+9gnCL4eXw0CNDjxoN5G1PWFsaVUuncDx+nmKWAPeNtWmdT/Dk9IZ1rRDE3GA==');
define('LOGGED_IN_KEY',    'zC5s7EROzv8ezkk8znrgEsA4HSJIOTBjw0jHwsXkYCwOnzf+NFlh9QNaxPm+44KaJG0j5GPbiA2QOfYLgxfH1w==');
define('NONCE_KEY',        '6EIg/y25qMJiuYq1h6VOrwR+Ll0NxPp9KIBB4xGBhIeaTe19myv9elAgpcrcS/ujx9XRV16mEUOafYyk2MJZIQ==');
define('AUTH_SALT',        'Do6Cs2ELLcQyoctxvmfwmxrBnYO1DIdSQojPaJEBZWplreFmdXhElPLOBOMPBBSooSIkC7CP+xzQB4u46H6kyw==');
define('SECURE_AUTH_SALT', 'Dg4pKVeQ8NUx94X6xX6XVgjNhLS+JFvMU7MuW+YqOun2MeXMRlkCcSvv/AuAt8jjJUgEKhRWFTIHM526eVm4NA==');
define('LOGGED_IN_SALT',   'KiAo0SN6OwN9kQPq4E/XjGGBt69WL8hw5faeisiCQWmVPjKNusI103n9s3KRgnzHyfWqNpP95jk65tnbEzzvyA==');
define('NONCE_SALT',       'KKfIa29q84TPa0ol2J81LP+iC2eDLTh5Z/dEvg3zuf/0xxe8pn/iQVSjlWGazQk8nPO9wjWV46LVphlFspfDUA==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
