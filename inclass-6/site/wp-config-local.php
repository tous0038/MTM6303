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
define('AUTH_KEY',         '6cuKCgipiMlrPol2sQaL51Nvd0p6HjgrGnozfsu2vIggjMphCD8trTNl5QihGxP/yTx+Ueop+X9pg6+UlwCt9Q==');
define('SECURE_AUTH_KEY',  't61c+fAwqS/N+uAtTPD+Wc2Mx8DPpwo0crH9kh/gbf2RyHe//CLxWhB8pWiSr0T6Kabj9Uq8ACbhmp/UQdUqXA==');
define('LOGGED_IN_KEY',    'xEkHDmwfkV4cW1oLyThmW0GqVq8DngQI92b6TF2bffU0OYfHVIfehErPXLYlxfD2hVOi+ktv+PbmiEt5A3Hghg==');
define('NONCE_KEY',        'rXCMlUPZvmttAaN+CK9do2o6NlkYGLgMQUJNx68DZs3/780OH2vKd8JH9VageM2sEll+xycfrsX41wwZe/RDFg==');
define('AUTH_SALT',        '0wOaN2zGrF0L9Pvw/OIpZemgVo9/xg8E6GRLNTgV0RPRlaU49rnkcqYRH7UjuqDO4Gls0pZ8HNPz66T7378ekg==');
define('SECURE_AUTH_SALT', 'KYRWECfdYwli732fqVSPBvk+N5r4RYdsu4NiOdjNwRVVLPr2HusqMyNbzSf9uJoA5P2RBqusGmz/t7Vb9p9n7A==');
define('LOGGED_IN_SALT',   '1fOJvm/RVhzlc1uTUBbyh07fys+xhvYk7NBi2IX9gH88N1+PlB53uPSKWPCzNdKzxjXY9Ka2pOala9skSofyug==');
define('NONCE_SALT',       'DmDmJMeJ3Jhc90k7rZRHgt0rUjnKwr/DMdkyxW65tk7koAa41lCXdYmTo5zE5o3vRl0XAIseGl7qABxLtLQZNw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define( 'WP_HOME', 'http://tous0038mtm6303inclass6.local' );
define( 'WP_SITEURL', 'http://tous0038mtm6303inclass6.local' );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
