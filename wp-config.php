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
define('DB_NAME', 'wp1');

/** MySQL database username */
define('DB_USER', 'user');

/** MySQL database password */
define('DB_PASSWORD', 'pass');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '/temp');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '0Jd*]Vw3qc;iV>o,_LT%/G-&[P.t{KHgg1+fU?/Vel)_mAXvQkv+X{iY.uumkbx=');
define('SECURE_AUTH_KEY',  'oO0,B!Na.d}+* #UJ;4]Disvo$mEp|]9OOy=)g0LnHbVU$DwovHHr}LsLga=$`?|');
define('LOGGED_IN_KEY',    'e/_BDcTjhV|CD{~@{5L%CywXWS!h2]ahx !xSU<,Is5:kamI&(=j1x(QZ_Y)uL:_');
define('NONCE_KEY',        'dTSU|7Gm0gITl^0z7Rei8iRV*qcTLKw3}<gCQ_y[b_1ql3_6E=4p>(ds{m*8OF]i');
define('AUTH_SALT',        '|dInO!Gb<y9jS;_jZg$P!qNK3tE$ l6pleHe`-VkgQ<}5<1KOGcc@yq}</PypRUB');
define('SECURE_AUTH_SALT', '[sz1?rMf[N8$^z;I(>]lnKs_&%{_.=hzk(=w6_X9wDD($;bz4%JSIzJbYD{)Lw3x');
define('LOGGED_IN_SALT',   'BvIe:z{>=l`_+?6t!:~UJ~qD#LXp|@3.{}!l(]UHO 1/ptvT>03gEnf%%S_i[6Xy');
define('NONCE_SALT',       'Rnsj)06L?|{XD-U05mVK>_?yD.4e.NaAi[](a4;jKuP%`RL[];e?[8~I^*cyTTIR');

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

if(is_admin()) { 
add_filter('filesystem_method', create_function('$a', 'return "direct";' )); 
define( 'FS_CHMOD_DIR', 0751 ); 
}