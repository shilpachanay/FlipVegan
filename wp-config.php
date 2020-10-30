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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'flipvegan' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '}P*H2<^Kf`!paGq?!5bs;kvp 2JmvRp-y3joSz_IK@cROSpPdfquUy9>TH^C;KUb' );
define( 'SECURE_AUTH_KEY',  'S8S4q?p4b5LbFM+ZxnBLxv_g8[tg+kvx(c;m!EIU7j%NemuQZOH?RWe#,wW%7sow' );
define( 'LOGGED_IN_KEY',    '_wuQU.]g^9e/?g;kQ{kQ7^w1~/3G8Ff?rXcw~A@0XsGg~K/Sx3tppUl]()vmp`Z#' );
define( 'NONCE_KEY',        'jPrl!@P~[7tY 3EBw[!EJK*U73gk/7b8N9}[mEC[XS{h{;(`hge.L-SVu.-suT3b' );
define( 'AUTH_SALT',        'vtpT}Psif*-c$!n_j!kuMJfI=#+[CEX,(6Y6:-1]7%:d6KeNV6g+`KbOc1r`ZxDl' );
define( 'SECURE_AUTH_SALT', '=[ABR, *xFc~y?`n<?0P=:c QP3l]KEl}(ysCf!x^0ZL`G4U-geBN:K*h{`)C,Vx' );
define( 'LOGGED_IN_SALT',   'Gn-Ql^uX3gCcUCa]yk4^Q;KLRU/O6e^tc@.(C~Z)x*]TXD?pnMQ{7K4;C}B:o|O?' );
define( 'NONCE_SALT',       'FgliBcu}4LZ#[n@qrqs=/*beXJ<.UwRCXWQg*8ObPFM<BJO0<d}F`Be;*vp$PzY_' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
