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
define('DB_NAME', 'wp_maxim');

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
define('AUTH_KEY',         '(0viY6us<3)[MAk#ZO?d%C?.6T?A!vHD}AtZg.eo~g~8dM`48f38; 4siUTnI<+V');
define('SECURE_AUTH_KEY',  '[?sSJ<erWXfFH3x;gloeiTg-95K=jJY?2k)|y%5|nDT-nV<5g)YKCJR)hVB&e7X{');
define('LOGGED_IN_KEY',    'Q8=>&9qni>%Bjy.~>92H(k9-NkcHCjQ+1$%/K@mC&ed] bQqaw{<_lWaJ@.F;.JD');
define('NONCE_KEY',        '#Ag@CGv~Z]Rj=|b/Y4EPcBCus6>8Bq!uQ9Q#P`<x^+l0aU=LFl}.)# NPHlK2mP(');
define('AUTH_SALT',        'vm~-FDR&?HUmLi,v}2zembE?L%2{?ob&&$nubqeReX3Qo+jR)Ss;& UB;:&9){t}');
define('SECURE_AUTH_SALT', '_2QG]3<dmW+1cfbWiusS W/@bo$-fYGI%jynpJ4(J+MuG0)NY#Fu{by}dA4 uIk-');
define('LOGGED_IN_SALT',   '7b$~XUo_b?I>r14BT3jeca1fAn|gkv:aq&3vgVE,JFmesZhK#Z`Jg<4~^A|P;;i;');
define('NONCE_SALT',       ':s}#?3eD+?#%_S09cDUVW&0=V5?rz/lIPh]w$UsSdMrSYoydKePM9^N+86LoUb2p');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'maxim_wp_';

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
