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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'f5rtHgngfg3RquWanHVmIG1MWFfr3sf16mJw9gddMnAiawpccb0MZeZsjMbxwxymIg1TpZXs3LgYffR6iNBq0g==');
define('SECURE_AUTH_KEY',  'G7L7NMrpFYQfkI1C4n5Yy2EzCQmk3OJU9mLGjiHiM6AzJqrFkLs293IlDpo9gvA1l3H2j3ZMSrPgUpapP0FtLQ==');
define('LOGGED_IN_KEY',    'J+GlqpQ3Sh/QuQVr3dJN7coPCSdwKcMOZRz8UK9bSuRBWUUwKxRIeI4B34u+neeaOeAMtpLiUA0RlfYgFyaflw==');
define('NONCE_KEY',        'KoBGNXVZhcA/Ph02qvEUEdaToD6Bz2dpkWiJI8Hx89+RWI4sSSNe0vU6liNqYJpoubJmw9LJjKkhHSUGUFL9YQ==');
define('AUTH_SALT',        'hTdJCr/3dJzLiNeUdEjlBD/woBuxELoJN7Tjxes6tybudxR++5Lmiq1qWNfHfQY5dV0fbVYCw3jDMbP/imcfpA==');
define('SECURE_AUTH_SALT', 'k7ErOLayS2tvQkljhfEWzg+Ynj4UtF3IHhjyq6msRTtxuTgCCI60+Rx3DuXNBklnHmrH8YMUAIwUWRHib9Yv+w==');
define('LOGGED_IN_SALT',   'KzNkvDB2KTKU38c1gpD3gXyKWt/NzoJdX5tcjIG/TKx92MR9EyXDM5Lmu2U13eQ4BXwMQJmVnjz6qDbHCaLfhw==');
define('NONCE_SALT',       'zQRvtqNWqX8ay+nDExUUCtYewA4vkZgGAJzJUiKItwxvYpN//FNP/HWE/1ETiSTiwiSbQEYsNOlrypCEkX0nNw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
