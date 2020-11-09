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
define('AUTH_KEY',         '0wY2IpO2Lgb1XJUlJC5QVB+rxFvnkaxC7eEXiyOkmcSgMzYTXwWY9xwzGvww0OQkbR+asZZ7WWOfExeFtVjuMg==');
define('SECURE_AUTH_KEY',  'ejFHFO/Da/nQ8djuCzCoeemLCQFVRDAClRNQu1rZ+vq+vidsDgIh6WRjCUrTpU+yiS156H1qZRbwYySemW9DhA==');
define('LOGGED_IN_KEY',    'qDV43JFh+1QcPDhN/ZYs/SxMkJqEup7/ArJ0x8j8pk6uKWlLa8LwWfynsqRFfahmDLqczeoviREfZIPUN/ncOQ==');
define('NONCE_KEY',        '/33GUY+RkTDUAC3BFavwzk6Af60rniFByp5Eqs/z6lW4N7Xi1X1MClEdBmtkiydCWL6iQM9zz8K+gu9DsXKuAA==');
define('AUTH_SALT',        'dit6dpJ41qmSHxvlnwPlRyaAeXFxOn12z0xIHflTrvrkHTVX/o2aZvMCE/Uf33yGcs1LM6Kjt0Ov0ylGdwiFcw==');
define('SECURE_AUTH_SALT', 'hGS3Y1M2gpy0RhUxktbr5jO1D8YCch4VmyjEcpySy+s9e2FjNXCyUMQP3vi5brzaKIjYCxhw4ShOCqf0KFTDmg==');
define('LOGGED_IN_SALT',   'gxB8KyQ79eRpTWfphBWQfYYaKQn2bQYJPfHuDy0r7s3JZ/iUuNSqjUT60YLj+kvzam0KoIJ26ckrcOTWcAqnhw==');
define('NONCE_SALT',       'OUHRo7YkR3K8ABW8EmMz5TguTXvCU/vpBQ6YXoAIrrb1QRJJY8YkFZ5Edv+MLt8RuOuX1O8vUAsdLngR0FLGWQ==');

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
