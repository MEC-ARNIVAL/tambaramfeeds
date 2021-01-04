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
define( 'DB_NAME', 'tbmfeed_db' );

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
define( 'AUTH_KEY',         '/~wv) ;=B89^Q&mJ/J q.BPH $#TF*ie/?Zc6fLO S&:)CmXPwhZXbCscPA8p**n' );
define( 'SECURE_AUTH_KEY',  'zKm5tD^Fz?J!e+Ff0xyuf{JOxp:Ojl}5@~[d.T@gTueIPzvBKD!ku@OQ{ +CbFmG' );
define( 'LOGGED_IN_KEY',    'c&-=W(@tVL&Ob Y]z4sosYY*-]&(@`b/`K K%m=pT6!Y^_N0ye2?#4rE)bYb^l:-' );
define( 'NONCE_KEY',        'Y4BQ;gKom8uH&MGBMOWnp%@lZj_|TXO6EvgDfy$CM#i.]Sb{!%Y,Y~Xv1P^#S6O2' );
define( 'AUTH_SALT',        'v9tO/?S=X&Jolb+CP4LC]?pe-9U*_eF}ch9BOX#,FD2F0B&H]NwjR/(?fDMf/]f#' );
define( 'SECURE_AUTH_SALT', 'YwH{CfSW ]Me2~OrhOc@lcHEcw^cErO{d522nS6018.]K(RAN9/d~T9.Rhgtg6i8' );
define( 'LOGGED_IN_SALT',   'Rea[zQtQRB^kuyVBCbL/S{hR2<+h?Qx4XkU|NxNmMW(WZ[ *9Ef81#h,481*%/Y`' );
define( 'NONCE_SALT',       'UMZz$/ArqKo|ybWj~)yoJtw/BpmC$:8;@ik6>xa(|b(*MO3O:W!(yrE9uTgA::w]' );

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
