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
define('FS_METHOD', 'direct');
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'rcgames');

/** MySQL database username */
define('DB_USER', 'rcgames');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '&i<`hYH-ew8nMI/U9vfTU5w/F2!]cQV`S]LWfud[dG$5U~(ll|yj(_Jwtzk/,DF`');
define('SECURE_AUTH_KEY',  'R3n]92S?;%=,EqM9X!`s7|u6K}jRwabDHXI6@nV^F!q8oOrlzS30box3A*qvC@WG');
define('LOGGED_IN_KEY',    'qT0yr1 &eC2H@5O7?m3b<N`~eVi8s3kjDz#YQ(*gHX[4C5}YK6cDK.<,*ek42B9(');
define('NONCE_KEY',        'Ri3[]wy6NxHMj/^pQ]|1gCVyrb@Zc,)S`fL}EUHsnF9lYq|iiZ0e<.qFG9Ak-4JZ');
define('AUTH_SALT',        '|M$iZ]=l!ddrpd8l!iT[V</=BFU2A?l}dBTsK2=g62Y;IV[;~?ybmcK jr/2,9LT');
define('SECURE_AUTH_SALT', 'muPng,+*Q.-p12.o?[JTTaxOIgs280tI4v)DWQ kMHK[j]jzF:BS;7KBPwMj4*Y#');
define('LOGGED_IN_SALT',   'TwasjM4!k4[:s#LF-T`OV!1S; I`?8%<N 3<?_n&s]mGH~ne#_IuC&XT+MqlaFMI');
define('NONCE_SALT',       '!%+Q/WKOri,gfvZv9RB+jSW@NXvx`#+w^W2eg@Zys~Wz^[ube0Ru0yEi,J0p&O=`');

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
