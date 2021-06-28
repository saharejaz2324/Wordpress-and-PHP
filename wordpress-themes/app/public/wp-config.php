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
define('AUTH_KEY',         'hcni1uc5KskwbInD2hrwPQiOvESXOFNhiitPHwTC6Z4NBPyu5zjL13Ej0M6mFw+Tycft9NShhL4O53akp19kFw==');
define('SECURE_AUTH_KEY',  'VN0yGIjNEY9APauqJg/3hWBKpgc+1YqJ0rhOKG9SWtacxxOJv94jQRzVxxqnuYYVVo5pQfIVYjtFLdpHvcuaeg==');
define('LOGGED_IN_KEY',    'gfbUatNXhpR8S+r7La5ObfnBac2//cV4x+7rX9OdMJ45M8Y2ZuPbbYyQuzrhYI8auh8o6x3nmxosNA9HGzYJdg==');
define('NONCE_KEY',        'ApZSOTmr2jcr9iw/ioIce2va1nLMHM2qzSbBoxc3I3CT2O9J3NOrbORj3l5qhGJLTAf3sC0EYXQTJVdGw0cvCw==');
define('AUTH_SALT',        'ZDSkmmjpt/5XKEBnL3GeXSCIrJt8IwZj+K0nmuXJHAulKqgJd/AE1ZgALEmDEg4zmzxeQ+n8j/u2lRQFG1RGUw==');
define('SECURE_AUTH_SALT', 'ezCM2HoucIMAdaVAQkuRcg7SWNxJW7DYuW6rSgKDt21l/BOt6tYPjg38FAOMR+Lf0fC3XnAgKXWf9ZItEwIByg==');
define('LOGGED_IN_SALT',   'YfGxE6eH2ziy1RGF665DERfcakMHTRdr9709ZQfOynHv4NNme7yS7YWWanaZv0nOErJcjbI+7trDdNol7nwn1w==');
define('NONCE_SALT',       '0kZuaxaU90woDn/QrCIzKOB5EMjdv3dTk+FeyhS5lpB9VnoT6xvqpEkBhiws7wW+jfDrt0kK/1P19hoKTMkC+g==');

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
