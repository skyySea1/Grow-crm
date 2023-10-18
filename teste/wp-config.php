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
define( 'DB_NAME', 'teste' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'LrlaFvv4TGvdMNrKjL1DBYSbD5y2mFxR7Hur1JmJVv4OL8Jixf39rJYcCLJ2Iqgp' );
define( 'SECURE_AUTH_KEY',  'WV86YQDia5F0RkI8x29PsGFt9jAsXexQI7Tlrcwi3V8wDsv5vPFx3Kj30dfk0vTu' );
define( 'LOGGED_IN_KEY',    'uh8lxxVAFko7RuQ4l8uOIYPfYr2MZgO8RhIqiPDB3M7wQ3IBJeyedUPsUayyUZqV' );
define( 'NONCE_KEY',        'rpzwiDaDR8dOTu161v3ARCE0YlBDUVLOnKbdiFgt4gRXtyjI0HT7fMitRKT4ASZv' );
define( 'AUTH_SALT',        '4Ycaqk86bHi3675e9rc96BP2t8AEmQJJzqVQBeWS9gyoQ8jkfZQWqheVYqg9GWEi' );
define( 'SECURE_AUTH_SALT', 'zAIQ7LwE3iLwD4VtkappzW6IPQcsWE4HJazrn2eMhCmniSIqxUAz3h9FcCA9GYxi' );
define( 'LOGGED_IN_SALT',   '37uELDdwvB2ThzLq47dLru17bFeC9wppitkv21ijvGNvgAp7XjNr1aG3MNvQhH10' );
define( 'NONCE_SALT',       'jb9hMjPRmYuKXLGBtBpK8KdJR4zR8G8YApo1VpnYM4Lu4aTUKOSFGt0BKdw6Idwk' );

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
