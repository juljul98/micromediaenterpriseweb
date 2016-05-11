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
define('DB_NAME', 'wp_micromedia');

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
define('AUTH_KEY',         '>3;u%!S$p4)mR:W%_#Tf:/-=>0BcSln!hCsRvJ~+~aB]oL Zd+d9&5;dS `=}89M');
define('SECURE_AUTH_KEY',  '~V/3+&VU]$Dv&ymwB}}p-luI.k%hYH874!C#}h-)^WiT_g-#`4/&w?)$O=Ms+(1O');
define('LOGGED_IN_KEY',    'wLK)MZfu+-B,8u#``)9^)A*#I!+9IbApt4ze0L!t/Z_q_=xF~pZ|!H{8fzkdO}[2');
define('NONCE_KEY',        'zJn<0v#:ld@IV/J@wKUVjoM8VpzjBN]w*;3VX+`A:TEH@Xlt:ilVZ<tGFsIX=b&c');
define('AUTH_SALT',        'aUpp|Ns ~?195vZ.AuP&|ry=E,}`$MIh0Q3|dd$EWH+WvR0-~]ccb=n+Jb-U}Foy');
define('SECURE_AUTH_SALT', '{J6Gw$|j5B[&xlm{A^i99?0-([pYEW_Y)Wh3%5#AG-;*X@,pxK=5U}Hp!{{Jor<s');
define('LOGGED_IN_SALT',   'NQ,/8=lzu)my%G3/HUWTNXMmx#7n5SV:)NO{+#EHNly}DL)=5(8)*T:!|1AO{@a|');
define('NONCE_SALT',       '923~;n@eK0G[qki.HPp-LBk XF79;vx((`|*8f3B2BXb&WIhbUJkE`H[|*nBGnM7');

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
