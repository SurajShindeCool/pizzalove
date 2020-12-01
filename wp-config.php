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
define( 'DB_NAME', 'pizzallove_db' );

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
define( 'AUTH_KEY',         'D+t2:mbRKVYm:!0)H^NxIqX~AQF=R_GM3;,+00#v/J:cEd)$7N!x?dTp#Gou4VoZ' );
define( 'SECURE_AUTH_KEY',  '0,}H?OoJyCd9%m7]$+9gk>%TQPqi7fP7rg-~QuXWxIsi]UgC##RG}UB=3LUqa0~Q' );
define( 'LOGGED_IN_KEY',    'w-h,.ME7Y2OORY?mKP_<B@^TUL[`>|N:-X!6o4H}8U7=iw|9dnQ:yH;EOx@(>lxF' );
define( 'NONCE_KEY',        'nE4TA^Z-2+ D:x|PJ^^okMw2uxcbu=_(cir4eQ4V8/b7)F~2mfW_t(/]p6]&;_1P' );
define( 'AUTH_SALT',        'EbA4Z3NIxagf7dVci`2:GW@|?R{%OpTy /J1#zDF2nSSg _S,#eQ`5Jn3X.qtyfX' );
define( 'SECURE_AUTH_SALT', '^?hv23P226o{vwFY)blRBT0@5$hL?Ri :UGf]xJYoEt%GwWmu lGA,ifsudkrJ~d' );
define( 'LOGGED_IN_SALT',   'WE,nq,,A5i;Q;.XIINwgtVk78O^s-$=W=(alKJ?@F1^&BkJHs(010V7ncbFp&_!J' );
define( 'NONCE_SALT',       'u*S;BTm8&H kBcrqa_uHSYXQz(oTL[ih/g+@!,1GmnVnVa*!)iK{gLcPmbWJDD3$' );

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
