<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '(]G3c0q1y}nMbelnX?2s!P9*LImLPW0CE]xbXA;gzO5@sY`.X-]B58avOY OJ!!K' );
define( 'SECURE_AUTH_KEY',  'rqY+f1xw T~z]c4Atq>,]vk8c!gD-0|HjQ`D//.Y`{4bs@F4&AuHH#j:So|e15dy' );
define( 'LOGGED_IN_KEY',    '~<cyw;.AOJ<xjIMsn/~{?3U6yPZ M}DWs203[2b-uC=BvC($[WHKXaA]=6@7+@#0' );
define( 'NONCE_KEY',        '7-vOjYpy4X(?aq5X6AF9tnk0U1ji}N6e;D?!wFj}M-)*6ei#M#~EH@[mEa0ZrxoV' );
define( 'AUTH_SALT',        'Wm6W/WIw<BZH3V~wSs#i!J`bR.DNDyL#_y&bksU,<o=K.s?IZ[`h2>U Vb>p3T(=' );
define( 'SECURE_AUTH_SALT', 'JmJ6qgUMGUHb~{-P.2Kmm_&dF8T&MR}cy*EhfR7w&,0Qym#R|Y@`pwdlccpPIwUk' );
define( 'LOGGED_IN_SALT',   'mKY#TKt<fvdYPjl.cZuunvqRtmvV6R#7/<DVWNpj4.k~!79;,NjY],1~f&5h;M|j' );
define( 'NONCE_SALT',       '(`Efsx!-]f|H*!x%[)a#uu!pIQ#Vfqw^Pae8@l]2l/9G34(S1B,f|^TyGB#V=e+8' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
