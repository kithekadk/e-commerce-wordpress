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
define( 'DB_NAME', 'learn_wordpress' );

/** Database username */
define( 'DB_USER', 'kitheka' );

/** Database password */
define( 'DB_PASSWORD', 'KITHEKA' );

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
define( 'AUTH_KEY',         ')>B)yi4~]gtzM-:Yh+i0G#&|^IH:wA)D,zfxmV-.Y2`?1K1}vm]Yxgf*1I,a;i8N' );
define( 'SECURE_AUTH_KEY',  'NJ^``n?S rI9{h~!?ibo~:]4I#/H4$0Wv}NV]R*z~aA[~WuRHL65IOFG)wTjLua0' );
define( 'LOGGED_IN_KEY',    'E]qd^XWA1 mU{h/P4sFAe9tN}D@.*=)b7)Zg-ykh^&&Cj-w!S=,$!^k>0aqT8(0.' );
define( 'NONCE_KEY',        'Z?dNpl6[ R3L6PSRSSa|Lh0*Umr=iw dROD<~$tkwcif3.+:k5ox-qBxU(ruJWIp' );
define( 'AUTH_SALT',        'F,{2EPuQ2QsoviqMi0KLD36Zze2To^4{Czh&#|N$|RZU1qjG*K9=Pk2M3tIG6{PC' );
define( 'SECURE_AUTH_SALT', ' :mE/FMz]b y]1DKM0QkX7Sz]<|3@NvDmS+)998hdNXkEUKtlbvye8?DIQ4}kYCG' );
define( 'LOGGED_IN_SALT',   '*ZS*oUH+naapl{FVT?!AfAY.s3;&m)me>gWa4{#aA0)PwIQf0yEZWju8.^@!eS&T' );
define( 'NONCE_SALT',       'sMAq[gmFz,n#T2sP)aV@GE)MvV yvejUAP}9oTV,=A~R +UqTai&jB04NQDbd*16' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'dk_';

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
