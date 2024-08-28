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
define( 'DB_NAME', 'cocacola' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'MySQL-8.2' );

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
define( 'AUTH_KEY',         '/Yc#)Yq3N[l<H1)8e2X0EY@hNCNq;_~fR}j2HKWJ$a*Lt{J*pV[=shSk.B^<iF%L' );
define( 'SECURE_AUTH_KEY',  ')KM YN0d0zYeZt%54*_@d;9dU_eez:<EK__VrSA!|]B0}W~RwjSsPs*FD(r9&5Mi' );
define( 'LOGGED_IN_KEY',    '=Dp5??3Q9aWH?kW|c*~ G<@$P _aL+FXD$XQbsn#O6~Ek0}m6Wh>h1y^O;+AW^Xt' );
define( 'NONCE_KEY',        'PT.#- n h:p2mS]G y m-6:K*2bC=acvE7h`9V$PA/y~=mdb!n_^#i#hdT%lP#>q' );
define( 'AUTH_SALT',        'Sp]mI;QPS=_h;^a[rU>i}yLj9^.*JBsoq,o1dH<odsNLa|O!`xOX7f1i/.+7`=8L' );
define( 'SECURE_AUTH_SALT', ',R!w.IuAJ5(ajr3bNF(DyW.iTsEoT675A kHvQn=kFYsBsX1xc>?M)DCAY4cw|/C' );
define( 'LOGGED_IN_SALT',   'Ne]zxTmM@s53aC?)rcX([B0__GMa%zP0;{i}fUiP]e/|O4]~Qu?Y85$t3b=[G94^' );
define( 'NONCE_SALT',       '^Pm4HsZ. tUBkYw^ymyLl-|r.Xy|*mm[H|5<a}=R_u;Ire,A1OghL/5{XpgBDUba' );

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
