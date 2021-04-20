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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'HomeShopTV' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '1fNOMDkWmgLXwMNLwpaIK3dJ7SgNr8kFszissbBs1JgsCnuuzJizSxfYPhw7yft2' );
define( 'SECURE_AUTH_KEY',  'put08CkSg0TuFqs4so30Diil0IwUVtuBIBQK8OZ6vDw1CpdWQ1BuSvIfTtTjAJib' );
define( 'LOGGED_IN_KEY',    'li2stUFEmc86fNBZCgB3kry9Gw4lCNDELmlhQltUY0YYnXPA4yahc3RdhcZEknkV' );
define( 'NONCE_KEY',        '8XRoQYNncYoIY5zOx7o5heSDoEGT36r6KGPeBbZ9qUO64G3DAQvGYKzpqLZ4Doqx' );
define( 'AUTH_SALT',        'Whot1jCw94sxfM2RlLjQxLmQq3TAmNzXyYIe0USBSmGkzW1VYP83ycEj5bd2jRio' );
define( 'SECURE_AUTH_SALT', 'gAYRU54yAYYlJMrglxdZFmwijQMvZ36VL6bthLRJsC4rF00QrJeJZG6SgVz9fjkM' );
define( 'LOGGED_IN_SALT',   'zmC149wQkTV7yLoGViqj7ZQlQiGS8NeFMF9cLzE1WqKgqSgVUsAdgzv6AQ6YdD15' );
define( 'NONCE_SALT',       'WMWh1tFzb9E3VcNloSJnQnl7I10q9WISBdtX2gQwrXte209feTeElbh2pCRnyorB' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
