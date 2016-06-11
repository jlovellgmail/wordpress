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
define('DB_USER', 'root');

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
define('AUTH_KEY',         '2;8 nP+ioRBZ_1Nw hm;vU#r)V#<Oe8o*};3legb$++/;~qu]G/aS.d|aTTzF5K:');
define('SECURE_AUTH_KEY',  'vyd+`g;$](}vkRa X66N0zh}VJ2Cdi2ir@Wc4<{<^FUjXvp}PhcLKsn%=BM4QygS');
define('LOGGED_IN_KEY',    '1:Vik&+n|;tX|F3#aka2QO(L!Diq2`fVo;GOX!yncO^@68B.,r,fM1-hqZkks=gt');
define('NONCE_KEY',        'HDC`hPC=gTF@0l6wKz.?iX~ZbEXuR3Z<Hh-l%G5TXy#uk>bbjjT8avF7U#nvD]t-');
define('AUTH_SALT',        'i5PT3BYUvlGne.G{M0}Z[O3oP._zWxzfOT=a+3c]e#.HVv)O^# =>;i( |h`||L$');
define('SECURE_AUTH_SALT', 'v&b]jKJ/G<m1<gw0Xu^pBiLU*/;E2p3=3dkk(W6j&VpJ82cl6rTzvR9yT=fIt{K|');
define('LOGGED_IN_SALT',   'v06dRtK]L(Y9cl-$+3d%b0:+TAwF]XI(o>93So|7rB(I_WjGLBo&sR;8!/:Q],ks');
define('NONCE_SALT',       '0aS4Y]TU4^-l41X1p~?#7*x}#oG-uuCl<?yh5Lp:D=Vd1;fxA5xr,p{C:`*w5g[G');

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
