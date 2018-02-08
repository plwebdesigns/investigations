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
define('DB_NAME', 'investigations');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Kraker00**');

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
define('AUTH_KEY',         'AP-+$JBrsR$7e9+(n<S<h}_RD2zrzmvT#Oj%)_Mtd|H3Gni9{qU0f<tmOtNf`^s3');
define('SECURE_AUTH_KEY',  'YcF$x*Q&RqHE~C;BIS?Tf|~3;_340Ng7n<l+KQ](La4gV2J&mCKc~)gQ$~_O$t+!');
define('LOGGED_IN_KEY',    'Ge9w%WS{zZx}a>T.@% f+mDx,dNgO2Jw2t#0,]@#vbB:(=M5.sCGJ/K k#Q3u2/<');
define('NONCE_KEY',        'e-od+Zlv4P)3A6]Y+HLS))ipXJ~O<8)K</tj|2aW|L4g]=$Ey(=/.g~h T25pgX$');
define('AUTH_SALT',        '<UBqHG?W|Az0%2!Ih>;V@_k.))lAhCjHXq;B>sHZ?AJfOY^jL)pm*hYa`N9=+V60');
define('SECURE_AUTH_SALT', '(vN*7udXxFW;;N`qRB] 9%G-A .S7DlNq8oCqCwzc~QtDzB=vIRmg!r)Y;IfP%/[');
define('LOGGED_IN_SALT',   ':bnh@Qp:)hHWpdkMqwym$FA,w2+OVM00@lrMe_HX23W$tpEYq`T:OpLo*iL(-6`1');
define('NONCE_SALT',       '.YgEwvG/mGz{{mxaz?76vAs`r.b<|g7kR:Q3c#8c.Oep/>3M$J}R1{jn;AEEaG*6');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
