<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'interior' );

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
define( 'AUTH_KEY',         '${&^=<5Ujx9ec{mD{yTZAg?^HI`)MF<.GYv ^P|k}Gry:(9J3RLRl{j=U10~vf&5' );
define( 'SECURE_AUTH_KEY',  'z-oPZVtNTDSALcXf0aVqp.r/4 Ckf>!(I#[Wt25yNK{Jhtb],?qQ;/B&O7!cRyg.' );
define( 'LOGGED_IN_KEY',    'I!eH8Zf%CeAPP4uDKoU;X0ZQ:WQAW8I[i^Mi9iBzJJl3F3G%I+G4_VBK}F6:l%5I' );
define( 'NONCE_KEY',        'lM#bN9=.&{N`<h,1<,uk-)zlkf9)>t(i=}8_&XW[Si0h6HdF(XQ^5/Q*l,Rk/%lw' );
define( 'AUTH_SALT',        'xS^(O7()c<X`;Uthc)!1v`64w=>O6XW+)aeHA&VKvUfcy@i(m,LkUT3f-C$m~%s^' );
define( 'SECURE_AUTH_SALT', 'u2CZ$W)-2pORm$2lgXyAkuMmY=45@Con};{LY!1:f9to@qO?rV1[6&;ZaLhkKYT#' );
define( 'LOGGED_IN_SALT',   '?y:fk=(tCiqWzPz!?_1*+f7sn/ `OG&W?6Ok^>9>RQiui&lC~xS[[sM9}C6SJmv`' );
define( 'NONCE_SALT',       '=?{^c3hMUHwQbS=V$ab=&wae?(!|jhC%j%ezB78p;[gE;cd(Grj:%W{a5a#e_k*d' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
