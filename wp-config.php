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
define( 'DB_NAME', 'wordpress_59' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'NsxY})ged,9lP8`.jo9BVHMM_IqOD$pT#RiI9wHeo;9|%)/OiC 8`MbXrcF(Wk$?' );
define( 'SECURE_AUTH_KEY',  'Y/Me*&K(Y]Ge6wc~0#]v3Y^[[sGJbBnnU)RzNGt(}LSqKK|/p %sBFhuB^1JHUgd' );
define( 'LOGGED_IN_KEY',    'h1#yMEOGTY{JyC.D2x$7xzSU^vx?O8R`bGu^*=yI5tFmC-Wbn<L?jY{aPLW&UAU!' );
define( 'NONCE_KEY',        '@nP00vpJ+:bN`,r-#pVqwG#_EWXtXF4wjw57~[|~rF_bdPrilL.cm;7{}TI_ZJcQ' );
define( 'AUTH_SALT',        '/UZ<%T>$w9b.:xHQM[D!*F[Rk42#T`Zt1:ua]}rvRn5YyQY{#1&Q [+<:L!<)EUP' );
define( 'SECURE_AUTH_SALT', ';48O1YqJc]`zJyo$h_q[Fni!M0aDBRpGziN,U-JCp#^0D]9aByG&+6Eo$gou5h<3' );
define( 'LOGGED_IN_SALT',   '|69vpw/x$fj^};@xGR@=%g)#{q)k9!m#dzgqRL.Z5CZw&T~@]5&~^eDTK^E/+bp=' );
define( 'NONCE_SALT',       '4.KN`up>[1FnGl@48ccrPYE!)8a){0-2/6?`]%M@)-r[AO&K-4]zf&c%#LLymhBG' );

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

// Custom settings
define('AUTOMATIC_UPDATER_DISABLED', true);
define('WP_POST_REVISIONS', 0);
define('AUTOSAVE_INTERVAL', 1800);
define('WP_AUTO_UPDATE_CORE', false);

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
