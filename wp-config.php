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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

define('AUTH_KEY',         'pdJeh//1vIv7rvF7a/qBsOJPLsdxIKTZTgmSLyo3h+6rerZXrwWHqLHRdMHPAHVM2DqNJVSvwQjnhZktHR3XQw==');
define('SECURE_AUTH_KEY',  'B4aKnndMf6ajTBCXxRsSBxOjnyKQdxS5aMZ+Skc9YMM20QgrlKZbd0HIOxADbnY94pyxzYO3CqlQIc81zA8YrQ==');
define('LOGGED_IN_KEY',    'p+OfvG3L8T9wsfk94OTEzbTPhv8d3AJp/RUqT4QBmU7MTJffPflsBIj1RlczIfslvOkT6ZoVwQ2TLgTua62aEA==');
define('NONCE_KEY',        'zFhH5xnAufb9SAU1HB3Nr8pnzGHBNSOhWi13lx0bJUHgwy1TfL+LDMw9dS7GhS8S7056ZPhyU1mcRwdXscJ5bw==');
define('AUTH_SALT',        'gc7/529bb9/dZdfJ38zT9YLEZ9XHzmJvLDJ35MX6qDY2oejhX/g9retIOQ6vfLm80EhVdlFyAXhPOst+FuxwOw==');
define('SECURE_AUTH_SALT', 'EOYpNYzIEkQM0361OjVLetmp5t9D4ZeRZtOHTL7FwT+J32mHBgcdtsXxvgzseFyijoBu9RJp+tsxxZv4nr2FfA==');
define('LOGGED_IN_SALT',   'xeIw1cpVCmgTBA+TrTszMh9+mCrEkaanaZ5JFkf2rv5B0XzhNWBjhVxGmbBIC6mkB3I7JUzq0fD3WEraYQN0jg==');
define('NONCE_SALT',       'Rx8EISUbRIj+kkHZMtyFr8zzGH3w5O6gMw11IdSpDbyfURKJLn5Xqhcc7C5Re0Ha+wFdA1MNfmLcZWqr+mBofA==');