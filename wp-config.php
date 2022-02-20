
text/x-generic wp-config.php ( PHP script, ASCII text, with CRLF, LF line terminators )
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
define('DB_NAME', 'jlodywmy_WPPVJ');

/** MySQL database username */
define('DB_USER', 'jlodywmy_WPPVJ');

/** MySQL database password */
define('DB_PASSWORD', '0%MD.JtK9jo<X3.FQ');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY', 'b56e80a308c1cb82936fbc7d108b0194ba97c8ef4381f596bd4f189f9d7fc267');
define('SECURE_AUTH_KEY', '9ca835dc0973c7db8efa499248c4d2afaf3da787e4675efff532e9044b6c467f');
define('LOGGED_IN_KEY', 'd44f0892d60e008468f0e89ab7807051b13edba8107a8957c775390cb30b6b72');
define('NONCE_KEY', 'f95eeaaef76d5b5a2cee21a6125a49c966c8da9d661dce5f7de063b2c105cd34');
define('AUTH_SALT', 'd0371854a51405c762b70dc6f408177cf3468cb85908ea2099585440ee7e3830');
define('SECURE_AUTH_SALT', '290b2cab284848a8816e983c1ae2d37173d8f55f0cf62b20d3d42b9e34dab6b8');
define('LOGGED_IN_SALT', 'b0564ee276839f6a0c82f859d804e392bf739bc1923371841c309d557ebcea4b');
define('NONCE_SALT', 'dcd9930e01f4a3f69acd5d068c105c67f648a7e3f0ccef10c6d9b0048e4fb8d7');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'dbU_';
define('WP_CRON_LOCK_TIMEOUT', 120);
define('AUTOSAVE_INTERVAL', 300);
define('WP_POST_REVISIONS', 5);
define('EMPTY_TRASH_DAYS', 7);
define('WP_AUTO_UPDATE_CORE', true);

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';