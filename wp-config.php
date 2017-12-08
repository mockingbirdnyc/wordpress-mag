<?php
/**
 * Created by IntelliJ IDEA.
 * User: jamesfishwick
 * Date: 12/8/17
 * Time: 12:11 PM
 */
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */
define('WP_CACHE', TRUE);
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', getenv('DB_NAME'));

/** MySQL database username */
define('DB_USER', getenv('DB_USER'));

/** MySQL database password */
define('DB_PASSWORD', getenv('DB_PASSWORD'));

/** MySQL hostname */
define('DB_HOST', getenv('DB_HOST'));

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define( 'WP_MAX_MEMORY_LIMIT', '256M' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '25a76996f5d524a54807f665d0a2dff269a95b5efc1603b5112a02ac8df1dbaf');
define('SECURE_AUTH_KEY',  '63b17c3d862f6516b8788738cdcbc2bc0956714f3fd619bf265c69627f8c63a9');
define('LOGGED_IN_KEY',    'bf5679b10ea6449cbb19e2cc29268f0f40802fdfc120233236379d2df9de4b19');
define('NONCE_KEY',        '3d6c65da5b1662c0edc775b02caaf5a60556efc1faf70e08046294b94a0ce4a2');
define('AUTH_SALT',        '81928bea55e3f8a459457d8a20f77d628591a2962a37a492a028f487c69d9c0a');
define('SECURE_AUTH_SALT', '549cf48eab186a238aa62056a182c04df7a01312ecf5b3f93d1910934b117cbd');
define('LOGGED_IN_SALT',   '8e8a3d30d5c04613e9f633ba2f57589c22918f546ca36ef2905eb090596ffca9');
define('NONCE_SALT',       '435cb655991b1ed89d226af79eeb28587a3bb6c9a767c988aea3a1d9189afe50');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mag_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);
define('WP_DEBUG_LOG', false);
define('SCRIPT_DEBUG', false);

/* That's all, stop editing! Happy blogging. */
/**
 * The WP_SITEURL and WP_HOME options are configured to access from any hostname or IP address.
 * If you want to access only from an specific domain, you can modify them. For example:
 *  define('WP_HOME','http://example.com');
 *  define('WP_SITEURL','http://example.com');
 *
 */

//change debugging and relocation into env vars
define('RELOCATE',true);


/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');


