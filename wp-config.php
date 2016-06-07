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
define('DB_NAME', 'wp_starter');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'admin');

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
define('AUTH_KEY',         'vH&xgF1-HnQw(:SO^*<d`LBH-H*NP+;`?g$EHtg-=8w+PeXzcCyL$$HMEX~Ebj}@');
define('SECURE_AUTH_KEY',  't0|XK[T0[J)ZrqC+_+>`S;x4x&Hz~?)h|[L$1M/I-1{iTW6x;nu-&{:YXqk9(dh3');
define('LOGGED_IN_KEY',    'R1bU-F=MgjprUk=iY}<kr&++{|KTl/woa8NQ{~p5rG~vfjkLKQkw]+7dIK(a?JvH');
define('NONCE_KEY',        '9&2D2x-IazNlA#++={-Y>.J#2&B y{] +QYOl|^p@l>T9m)V`;F}+rk84b~+IR@f');
define('AUTH_SALT',        '3H]:[IN,(+dbE@H1r)bU5:nV^j,+VLgIp&d(,^Fu+/Wa_n&wy{{?{,DUnE#PIpwD');
define('SECURE_AUTH_SALT', 'G)vuCO?_kU{o|nF/dw,@WM~bK_KN)l-bz%<w]Ah?%%-vZTXAOGud`{SA4H,- gS ');
define('LOGGED_IN_SALT',   'wYQ.q;STbWahC$+!E(IU~]AX560NFJ%2WP1}Zg+cnj]5K|y@6U1yDJ?xHJ3EDO2>');
define('NONCE_SALT',       '#7;F.QWZjYOFA.c/J9{3v@Nx&YFGI[,+*nO3$Cbat=79PZ]ua:(y{x/i+b(FHG#,');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define('FS_METHOD','direct');
