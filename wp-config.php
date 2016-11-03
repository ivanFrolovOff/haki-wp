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
define('DB_NAME', 'haki');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123456');

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
define('AUTH_KEY',         'izv;8rQLk8Pn`o._XLs:$.!KA1%:gt?cX8e{NiEKkX.=i3Q]rY<h[NS&dn+ZQM6:');
define('SECURE_AUTH_KEY',  '?TF#&X0 h=v;*R~9A?`DRv/c/rDdxfLY/e%G+<>Zvhl1%(vRNF*82/y7wv_0n-x`');
define('LOGGED_IN_KEY',    'W3ZkADuyp<sKmtshh;>6T#rzkUa<efH9Y6EwKhyc@&.z&kh12:iQ-V(Ig!*/t!tr');
define('NONCE_KEY',        'R{S[N7_,E>~uCMvrT9%:QxcEj2ZuJCY~q<0Y9N#(H_ty^-:&Q, 7i5@44io).=_M');
define('AUTH_SALT',        '.d~g,N-viC%aXeDiErDn?e!1( m!npG[)m%hd|;Fw>1dN1Q:qz4,*2B9.z$&eU>w');
define('SECURE_AUTH_SALT', 'H^SX3Ds7H+7lH:sqx:7nZl#!+_!-zr)%D$Wm=A~F*#vpG[rv24D]Np!h*y_{o $q');
define('LOGGED_IN_SALT',   '{jx~QEQJU}f@=PNe2chX<cv>SyOx,*.8TZkKhzB!Fr03pQdRPU8OC%0HQ%xj&v^a');
define('NONCE_SALT',       'zhi(),Ezy8ckWHq.F,,L;[ncnh+~%K.:+~0)vD^HF~9/H/H~%J2i-V=T?_cDn,##');

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
