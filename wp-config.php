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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', 'password');

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
define('AUTH_KEY',         '4^-]5O{1AJHf/Pmfk{Co2iSc<d;~N#XMZVvTQv{*C4VU1Uu?LZPBF:A-tynj$`/T');
define('SECURE_AUTH_KEY',  'N&hTYah4NrfLih%ER!5E,])gGXSJ!xy^?[-aKUegcS+]NB}C{Nf3c,@6_K>j2]ma');
define('LOGGED_IN_KEY',    '`^S}s)3G%EBjVTY Ymo[76>lWEXL}}DEa;jd_gT->lZh~&ZF^:mWwj,[f`%c#:KO');
define('NONCE_KEY',        'wd%6QFni:DX3|I_IN^O;u_b8pXl}I4<1|yC#%&(np/Rb5x2lzWEv!hCc[p<!,KQ;');
define('AUTH_SALT',        '}4Q7@qV~4@@Wif^s{U$UFi+zP_X[_sPa{)pYu-ChAMv~LS?UzXcrh3jekn Z*,m^');
define('SECURE_AUTH_SALT', 'm7VBK<+dYa0uZw{|#B #Cn(++6,${cjw+=0/&8wh5w&S^x.kgPS9tM/vdyl$s!B+');
define('LOGGED_IN_SALT',   '6mGXdX=M,wN895ntr(O|B?%SVjB1j`@9Y$i^)CJsGeOi* c4L$Y-s[WTCa*:=me/');
define('NONCE_SALT',       'aTdQm-{|JFy}`0UN0&bTranvEvp6Y~WrW)YKqI?KHAUrR-T=O9SwSap*#6|cUv }');

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
