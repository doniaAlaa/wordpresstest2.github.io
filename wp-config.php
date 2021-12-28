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
define('AUTH_KEY',         'r44d3PNhoYmfDwAR63Eoo+ottvUqkd7pXrvnONiXktM7vvdsdqW4+wKWz4q4sFaqOJS0YdtXpopL8VJ+f0G5qQ==');
define('SECURE_AUTH_KEY',  'SfT4nagTZUA9P3X3V3DfSzgDkJlW9Bh/y4aMQT1UhSFYCcpcYWQiqgIZ4qT1TzHmAGUa7uIkR0B0pEz5cXy+2Q==');
define('LOGGED_IN_KEY',    'cY9NkmhlGnEMHJlgvlBqMHMgqMP3BxMiED11uBENrvFxs1lXFfVYMSlNkHYlUgkePhPfzDr3+9AttUQFjQYkSw==');
define('NONCE_KEY',        'YU9OkKKN6r5zEMQbxJUtiCMBT+kiHLzC2/PIfh68jDj5OJhb1GJo8j4nGg7RuVW/wqVSLpn34L3Mt0ysNnz/tQ==');
define('AUTH_SALT',        'v6FpX71h3xeHw1ZhscJbuqi0aeL6NyaePK3Bci+N8Lt46rZvBbuQB0gg2mzAAHZkvzpr7pYrZkDiPjfhFDn7/Q==');
define('SECURE_AUTH_SALT', 'WU2Lq5sg3pDeJcXz2N+kmLHBDL3W/7+tCsYJUZ47cPTeEkzGNZFxvRkuqO5ARLgbA0jrNUM02YOuEw1tnufHhA==');
define('LOGGED_IN_SALT',   'rAiIs3iCr+aNiDPREW+hHt94dsLYelX8x3YbM/kGotRaKN4z4uN/SjGYSYUtIpsX4JjobDbeeNhMrkdSXBP8bA==');
define('NONCE_SALT',       'GJGeT+QTl43frk/CT2wgfn/xVkxB7e6FJlEOwa9JRbdblEYWs/Vzvdc331Pb9Xc+dsf+6JEZGjfDrCjDUkzuog==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




define( 'WP_DEBUG', true );
define( 'WP_DEBUG_DISPLAY', true );
define( 'WP_DISABLE_FATAL_ERROR_HANDLER', true );
define( 'WP_DEBUG_LOG', true );
define( 'SCRIPT_DEBUG', true );
define( 'SAVEQUERIES', true );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
