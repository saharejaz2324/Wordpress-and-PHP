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
define('AUTH_KEY',         'D02EOD5tqpu6dpDVluZbtTfILDSyOVfpXvpoN81iE7ZatErUYnd593Jpvbzx7E6FZX9o7EOL31er5ISxQRgl5A==');
define('SECURE_AUTH_KEY',  'jMJy8DEWU2uESTOsLM5Kyh+3x0Z03zKRLh+KejMlElb66CfbkCfiNwmyl9/D3PBfHPjUWlYY9UDGkxCW8W6gEg==');
define('LOGGED_IN_KEY',    'kQ2rO+f7GmCFKkqmxM7AXo4MFtGpHFELjQM79AxPj3zMwU8n2Tgj5Fx4ltT+bHWflI6WmM/ROxDobWYvyjPEgw==');
define('NONCE_KEY',        'RX1DyptRzDJBzTqHxFvRxpDv0VWcupJjUj9+hx51s3c82BlmuUmIgf2V/IcRRNUAkH3TtKp6EA9+isyumK/Aug==');
define('AUTH_SALT',        'BsRSrGmdV7FS88UFez0YUiy8fnrNJLJncHmk2nYy0A4Gk46fFBX3i6f1DgT1UBvtgPsSlV2LjQ1rnOIUIMV0tA==');
define('SECURE_AUTH_SALT', 'FtJc0DL57T20Bttbr8qqEpOm/Fd+Z8wsHJwJAPq/BKnBJTawhBMY7wHx/NUDD5v5Aruddtx9dyrzxFct/8lJ8A==');
define('LOGGED_IN_SALT',   'ZaCHiPl3iJtCc0zo7TiaDo1wz2PNUOra5BeNIMbnFXJlzMPB7CA+LxpQUDe+ScP5ghikyhdAA7yPTdQ8mxeo5w==');
define('NONCE_SALT',       'pq4rthOyG5B1lu7uAL73DlJJJ+Woktpi80mFxsO4ueDivGYqu8dQgB/TmjzUAnf9bmrrohlJBp536qObq2HC1A==');

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
