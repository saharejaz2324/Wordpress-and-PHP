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
define('AUTH_KEY',         'f3rNvyaBiJhC9vYbfqmUhxz5yZU5GhDYRJeIX/thIUWZiEYFvkckQ1TP3ZjxuTSFvzk6IxJE4sC6Ehg1QlSabg==');
define('SECURE_AUTH_KEY',  'aH1e5b1M1vr9TFKD7qE/jhBN+8iQcxXnHLwqxHSvOjavxBCvVbwhlfPZgF3Idxk2ye1iJbQQyz7FQEJti6ZG5Q==');
define('LOGGED_IN_KEY',    'AhkFEVIrkgJXHA5vxWMc2W9KBglHB1uuFQTdfyz8q2DCnBhWoETZBzTOEO4UPDTo51MDmPFESpfJoQIVdm1D7w==');
define('NONCE_KEY',        'Lz8mQZA6+AV/ROMpTtAo0pkylFN+ujVRXApJ2XxWNiWaGmPFrXXPd9MBupK4ziGk3WDoXO/gW2kbQ+XQVFiEHQ==');
define('AUTH_SALT',        'kKfqmjhM19A/OWQus+7SluS0rHYCjYx4IWKb3B6N6bLu0tMWmZpqkvT24xfVqaE82ChJv8fIX+xahlvffLkQYA==');
define('SECURE_AUTH_SALT', 'dDqVhFCljpzx70u3M0SpRX9nDm8TFErTsS8t9ZI5j5Zu6vU/tasP/8XRH6rq5dVRwn9xATVZY8WgpR1pUAiaLg==');
define('LOGGED_IN_SALT',   'fLb5ADTpifqg8CeSt9cWwEjnNi5DzpnVFaCH6X7FjgzQYY2TZAQuTrsFQ+d/KoCuGNZdpOivrJvKRd2jVA8m8w==');
define('NONCE_SALT',       'erfha49++EF2QyIXdxfuMhhBDjGxAb0jAvIHrYStsZcGbSBmDWCt7Nm2P9rt8ePvTpAgw+dfzV9tBo/7JPiPrA==');

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
