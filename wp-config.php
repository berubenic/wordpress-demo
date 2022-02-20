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
define( 'DB_NAME', 'liza-epil-et-ongles-dev' );

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
define( 'AUTH_KEY',         '1Z$C&f+NADXN/EqRU8GFcf|^K-vli] x:[0~:`M;f(<_8)Dh<]9?mxyu(q.+MDWI' );
define( 'SECURE_AUTH_KEY',  '9Wy||!bgXg(+{Nx#dx18+ZYd2a%.h}$xm`CALLg[N63s7BJ`,rHn-u27hKutD0OD' );
define( 'LOGGED_IN_KEY',    'Ih5ccAii/],Iv 77}gWmD1*(Kj4nED!83inYeY`] L0+QwoQ*w&%5Yt5eBg/dxv}' );
define( 'NONCE_KEY',        ']nwlpsV-<tW;fi./2/uVK~Tw]*;W@u6K{!,~<)oDx-IXz),T+`(/RGB<gipPcXJk' );
define( 'AUTH_SALT',        'yR10vl+mEj*k([GF ?.Qki5m=%X[suCeC/=nd/(7zbozIQPyTb(oVy2Z&*]JTj^I' );
define( 'SECURE_AUTH_SALT', '{gqQ(CCA~ZAiRSmGK:kAlyTSs=0]fqo+98YCal)=#a+>@y62:F]qisM7S$z;a)4/' );
define( 'LOGGED_IN_SALT',   'A:LI|b2*rP>|$N6E/b?.45U?%uxZW ye98arNX#=ee|C@UY<Ny0L2O17=hjA3,m6' );
define( 'NONCE_SALT',       'Imq}b-CuN:X(AaULM8|QO%yLlD~dF(<i(^#`Z%y%QJIEd8pL:*sF<&ZhZzV#Ww,W' );

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
