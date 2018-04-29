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
define('DB_NAME', 'justinh9_wp885');

/** MySQL database username */
define('DB_USER', 'justinh9_wp885');

/** MySQL database password */
define('DB_PASSWORD', 'AD9!)k8pS5');

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
define('AUTH_KEY',         'xveoioiqfhdxkmvgu4tqkpojwerpqjj7n62yyqhk3xm9jhie6m9xzlcvpikzal20');
define('SECURE_AUTH_KEY',  'lcqqp92vsngfgysqskmm2rvnq27cmdogbewerezenmomkoyxpjdabh1j47xldkb4');
define('LOGGED_IN_KEY',    'yfkoa5enddyyjneimda5jkmwrkyzol2syhrkyxf92gwqpzpfw59sikyzupp0tsvb');
define('NONCE_KEY',        'wsgd98zg4cxwky54gjebk34dfo2vmfzeaudtrjj0i5gwqeh0qipxujbcuk5okibp');
define('AUTH_SALT',        'rgxpchl9qoshay2gd5zwha5r9a9d3thdhwy3zpz1ucawulippxeg3kz7cmfsgsfc');
define('SECURE_AUTH_SALT', 'asmvbzeqmc75fseallqrdkxnpyr34x1gbo3lljtomlw7kezgcabl53geyhz0o8mj');
define('LOGGED_IN_SALT',   'brurauulxjaqqokjpyeydfhrrkq8mlmuwlpdapgutw54zdrt045bxrrgttaooyo9');
define('NONCE_SALT',       'lsbzzwgi8bbb8pem6qqppdv9h9souu6arpio7mnbuig7dqbptbuw3wmbkxubfkjd');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define( 'WP_MEMORY_LIMIT', '128M' );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

# Disables all core updates. Added by SiteGround Autoupdate:
define( 'WP_AUTO_UPDATE_CORE', false );
