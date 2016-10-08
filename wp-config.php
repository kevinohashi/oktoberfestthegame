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
define('DB_NAME', 'bgphphackathon');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '1(5#yN,hyxBVOKdA?KXr]M1^0.(M.YOJpaKO@B4}dc)c`G}BGknnU q`6U>F8oE%');
define('SECURE_AUTH_KEY',  '6<O_K(uSR:`*OV c17|[^DF9y23?tl2wfhs1+.&RO,nk-Epf?~Ki.G1=S:8>1u!K');
define('LOGGED_IN_KEY',    'm]^3|;~&58,!:L)^]z)J qlHhF68-87.rqK2)_.?x~$W+tCu!gZ*#X1Q/&WF.q{#');
define('NONCE_KEY',        'e|yQ$)&e(ZV71sItt}ma_$f&ak0y0#Kgi:z~c+y,KGWm`}Q55guo/5&jBg/i)8uj');
define('AUTH_SALT',        'F<:L+!h9h?H*C:WAQ2m/ll:.lXy#n]$6gfWPz*aGx$t6d]/t1#;[qPj]`V?b&te@');
define('SECURE_AUTH_SALT', 'k!4j4|HnnY}2&1&%.PCoq8=9/x-COvM]i7>C] 9@pGZXkdi<AsBgf)).R2.@.p8}');
define('LOGGED_IN_SALT',   '~7e[aF0yQQHpXsQIdf3/(NB-Z/I Xr$0H9L%T/Q2QnON!NtcP!KQvLWTtJOO{$a{');
define('NONCE_SALT',       'qlHLE$ {~07 ,HV+#NOG=WN=$=Nns)%4~X Zd0#&7pEQn!tUCTP[y.Ks$r2+Ol*j');

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
