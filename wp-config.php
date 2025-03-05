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
define( 'DB_NAME', 'sika-website' );

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
define( 'AUTH_KEY',         '[?3qpkM0WVE,XlzjC,kf^vHwH)e!fF&@5 >[bxy)b6kd/%dUS1h$::n~{@ZsKw6 ' );
define( 'SECURE_AUTH_KEY',  '8Y8-j=yIyk$f&@HmH$ u^c,V[N%9x+?p,t}kH9->Q)-hr,-AlA5qtp-%U|xhW .u' );
define( 'LOGGED_IN_KEY',    'Hsl^N+&{(@*8%EvJ/(cTu;@W*3Y}-dTanNFVxUAQ[V a7NG,#`6Op[tchWqb^rjE' );
define( 'NONCE_KEY',        '(BIui/5&$q!ZL^p]#clb<Px#H/HokIT4e<)l[0>*[866OPOHEDYr;;PBV$/Nyg D' );
define( 'AUTH_SALT',        '}/!VB&e0AGSDDg!>a90)OZ=cshmQ|d%y$`~Zp~g)ssG3yU$vSa,-MBa_fXpd9Vg^' );
define( 'SECURE_AUTH_SALT', 'Y79|qO;I%F`,C@tYr75ns]*Zr<qN|=r^pF<a8n:nJ0|N8F<*ZzelI#gNR0C=]3#e' );
define( 'LOGGED_IN_SALT',   'p%VT=m$Q).y#y;!dwGX{(cwC{?d.n0NO[Eb4qZCtcNEZ`L<AzF6@{W QRWX`#R0r' );
define( 'NONCE_SALT',       'G+bJA&Sn>P6@M^jB yr 9C{rV>:<!4#nr~2Z7jX%3D7Ief68O3vhqS~CKA>q;:|I' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
