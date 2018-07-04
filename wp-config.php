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
define('DB_NAME', 'devpredi_wp712');

/** MySQL database username */
define('DB_USER', 'devpredi_wp712');

/** MySQL database password */
define('DB_PASSWORD', '(pIi50S4d)');

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
define('AUTH_KEY',         '9kasnhi9effvbgd63epvdvt0y5zstqrfh4kktpwlj2poezcs4sqqpu7d8ozaxhru');
define('SECURE_AUTH_KEY',  'gdmvpotcp1hsrxae14gbfwfdwondtfhge5mapvtttnfoi3fuwxkvxus7fqbzwjro');
define('LOGGED_IN_KEY',    'tq18kwj4i0tmrj15wx8nrhxovl29o1ikufspc5791fjoscjyf3k0s55yuz3c0trd');
define('NONCE_KEY',        'oz4i0piivguuqtjzyxj2vz0okugwzhgncfmt0thfm56bzxrjtowvoxputv6xdjkq');
define('AUTH_SALT',        'sirm5j4tsgrtvah5milpje0bjfdpfqflbmzoa6d4qgpjw3bbgtoqrv0s1p1wghjv');
define('SECURE_AUTH_SALT', 'ijdheoscoooeeqbe0hfgg77wld68klhqlbkz7k3xqi1t1uprpybutepdm4vxubw0');
define('LOGGED_IN_SALT',   'vcxoca8ppnrnp8pafisj6utukp4kkls1w8mn8oioytxkdxw7jpj7top86tozy9su');
define('NONCE_SALT',       '2jr8gywchgq1dohuucug2fs0cq2skteebsptmhxikjbiis5zhxv5hmkpej8rrtym');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpap_';

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
