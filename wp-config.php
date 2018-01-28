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
define('DB_NAME', 'wp800');

/** MySQL database username */
define('DB_USER', 'wp800');

/** MySQL database password */
define('DB_PASSWORD', '60p-s!4b1S');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'dqsxcbswytcjbg3sh2frllwnyrelyjtoe9l9iyugzjsiebysdklim6ktedt6xyan');
define('SECURE_AUTH_KEY',  'ixk4xcnmtiru8qzwlq4pyarngjo0c4vp1xpvwjqqh19mjilz8zr9zectdsb7ekcw');
define('LOGGED_IN_KEY',    '8mhbgoyi6rl49j4fl2noofihkalgvfehenn1t2upvqnvv94cwsxuwhizibkz0gpy');
define('NONCE_KEY',        'wlri1wqsowugyalmgc2gbpuvgrjbpwooheoxqbk2no8fyqta6bmhwipd4gpxyahu');
define('AUTH_SALT',        'lifyomjqi1jqfx4l8wvlhgjvvusye3ck3uuxtfnl1ilnh5303tplqcio4n2mvjd0');
define('SECURE_AUTH_SALT', 'u8smgvne3gxn4k3jmbjz3jtyuidhczpb9gd8dbtcsvymh1ayrfimmemyamppdfg8');
define('LOGGED_IN_SALT',   '3lmp3cwlvjcthef8u3zfo8blfqoffuhv4acr6lom9aiqnzrqyyuimjnr3nongwwz');
define('NONCE_SALT',       '7cyctewvux8fnfpiwedrrpvybx3pzizyvclalybyuri8w1iegep1fumumbplrwvo');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpxc_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
