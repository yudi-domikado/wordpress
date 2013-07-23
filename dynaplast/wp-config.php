<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'dynaplast');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         ' QnI#-c,l: _i%N];C0tbAW^K/2rWw EJne!3a[]|I*W&}zd>5v`dBq+Rq{X|5ZT');
define('SECURE_AUTH_KEY',  '/rc@rl*(+72%w#:7Y(0[,NDYMxG52qTygz).oO4^W46;7G(3ZASkacQ=wXNC0=Th');
define('LOGGED_IN_KEY',    'MRwa@3!I@IuQ}P`b_5I)@H+Dr.h{I$(@UN|=p/d; k3mD`BOM|Q,;aLLFF-!x1ep');
define('NONCE_KEY',        'GcnL$?Ws_^aea+j~Oif=`EJ45-}7,5KSLbmnMpEFjZ^xd1^e6xHvg.GwC@GV8ipo');
define('AUTH_SALT',        'kF+$V9D`$kqp}Ibghn6lNrSckha.TV+gx7eWN7@(pmB/hJx2U>WW1q #xrD,/uEk');
define('SECURE_AUTH_SALT', 'W<S}#*dSRvPhgaVAafX+@^NRhDOzkY}-uHeFW3[>)`=}9P.=7(&Ly=g<gzU4(83j');
define('LOGGED_IN_SALT',   'DX#D3w#Ppt)LJgzR*>JMN|a CBwF?P-j5]>.katXuRuzu}Z0}A^wE$felz[*FDeh');
define('NONCE_SALT',       'K=Y8XM7qz*=kT[./Wlbr0)[+/VZ|{F7mj:6DIul} ]hbiQf@G)0@leYM8wT>aDzU');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
