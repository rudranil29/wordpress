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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'F=#rNs+b<MaXt{!;H%-eo0-fL=;E.{nKW)AY_Bw]rU<6gm]yyO-EJ4fz`[@~#YuS');
define('SECURE_AUTH_KEY',  'XT^jX&fN,ZsqB8jm!T$4P+U.y[Q$Sx3hDi}Z?cE?sh=R$i)3cX>p&1+vDCOJ<f`s');
define('LOGGED_IN_KEY',    'pmKe>-cel#/*HUVBO;Dg{f?z|A&@(lmwX6~ZJexU1K=#(CQ;*NCJ%S8^w;4LfD1R');
define('NONCE_KEY',        '2INfa(7Ype/v #Gm_:9eR_fe+9r|b}lSrBaYwLcU;$p$96;IZ*GQLuRy$.!Nx,o3');
define('AUTH_SALT',        '1W@fd)I(.1I|/Wu}o40H//0cJ4Err=j< 5!4E4OEHyDZM{TzOfo.&)bGK.dx$]nv');
define('SECURE_AUTH_SALT', '1+J=pSvH2cQ^<wN;H. VoNPJN5|Y!(``!uU6.*2RLMLmEDk(gL-f(EY5h`Jea.gM');
define('LOGGED_IN_SALT',   'E=)z)8^HG.)~<U:d5B0]p? QA/.1:cv}:k;(H>?oEbPuUXmNF]#>I~7yt,2~@d=*');
define('NONCE_SALT',       'f)(@@o%#yz16e>^gx@0GxYaS-a@`{;gH7z#($wVkA=ht9Ks%Lb%AE0e@!z23*D;^');

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
