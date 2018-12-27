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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'db_seven_cliks');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ':T9-I((dq/~D.CF|V55dV,MRgz*z((gBg(@*}b =5-X},tHYm]`$:ab]8`zM&@Sh');
define('SECURE_AUTH_KEY',  ')R74Hp08C6!~nWJmnhr9XXZi*nLbHJ%QXv]XXqN?LV?O/4cE^xlhnTeaN{#N?Dwx');
define('LOGGED_IN_KEY',    '.:W/QL@-1jRf,qt$.,{ez/Bu,0*6^c/cGj$%?3 eKv:d{fcH6l pO?0/OL#L^i[z');
define('NONCE_KEY',        '>0&/~bH6{Mk2+hT{@`0VIjD=1eunI5Dgq:bpaJKyXynMP@Sp7lI[r|M)ShmDhLyO');
define('AUTH_SALT',        '??50HFYBF_|{N{GNgX6?{rgiDZehR$pl&qc9/Uo&l>f:wp#F!1v6:S`h10+sF;,#');
define('SECURE_AUTH_SALT', '-cZF.;WpS;*@My[<w)*RTZ#kE#D:_jtq0Nz5{s+#9s7qC$9zZ+D)=cw0_CEB1Fi>');
define('LOGGED_IN_SALT',   'a~Q#cD4j%z,eOfp?$ZTbxuP=LfSFIk/>gq$B!}5uQt/>C-ZNn6p[Eu9u7[p*pzYY');
define('NONCE_SALT',       'e(Lcilb|KL,O#.{hUNi/#3nyGyq~+f3seT*)Ehl13 ]_!L %fN/FrM(*?]f$?XIP');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = '_sc_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
