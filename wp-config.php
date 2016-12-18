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
define('DB_NAME', 'uclabandtest');

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
define('AUTH_KEY',         '8}qUzoR%keFJ)^7*`IkSq6x=A?h hoTa(xhs3qdkL-~-CyCBL-ewIOnMf2+YvfT3');
define('SECURE_AUTH_KEY',  'QXdT[b084d$U]cO2|ULesE<3syzB37mY@$khW5Kc_#R^8wCo`{iaW,F/AkV4CicA');
define('LOGGED_IN_KEY',    'js~m5fmpxdDWv8ZZlOz51FtmHG0[8cg8<y8h*_-139v]tL~Dm$OXvgcB4-cmfW*q');
define('NONCE_KEY',        '?Fb@Bzy ``!Wy-7lJ}%r<>NqAUqdFG}k5XC=?^I)IOon4ZU^+aj~p|Gcs]HTWFNE');
define('AUTH_SALT',        '? R6@KE/SRp%8ZOt?x2(?#6FF~DPG,NG-   =y6%uhm.4vRgZWkn0_pS8)Tk3 QK');
define('SECURE_AUTH_SALT', 'c`m^}8oP61hk/SY3P[F9S1JQ4NY91M10D$Ka!-QAO4#Y)jJ-mME)6%.dP9]^rP4.');
define('LOGGED_IN_SALT',   '8KG<&]PClO4W*)Cc@YkgM6ADSw5F`LHB(dX?qwnOo!pGWCx+/.}/eHoY$8M/+w2E');
define('NONCE_SALT',       '?|0<%]= /vOQ7Ro{Py#Y[[(N1^G%cH]k,^o@AD6G8u`.TyP|<}$v^xYn_@4V`$GW');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'gordon_';

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
