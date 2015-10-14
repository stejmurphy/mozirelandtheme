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
define('DB_NAME', 'wordpress');


/** MySQL database username */
define('DB_USER', 'root');


/** MySQL database password */
define('DB_PASSWORD', 'root');


/** MySQL hostname */
define('DB_HOST', 'localhost:3306');


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
define('AUTH_KEY',         '+I-~sTn>3*{m1jb|(@m:t^(l>9j>8SHZ&j|8$s5v4$VJizZeny.7`PhbNI9d+{B/');

define('SECURE_AUTH_KEY',  '4?Yol1d[A9v|G+YuZBXXL##OojFKAu&a*~BQ9+Cl~Ktj38G$*|2Vm8L3wq!&+8Rh');

define('LOGGED_IN_KEY',    '};tiYi)9uQeEDaM|<I{Cfz|QSEtnsSl-LT!C<=S[_RlPXz;I}_|{x|l7X4 j8KU.');

define('NONCE_KEY',        'Tti}h`HFwTt~yUC|5--,k1@xd*P,|$rFS^MCm hr>N5c.t2n?bAI0{OHo`tA*-- ');

define('AUTH_SALT',        '/Q+t]mrzH4o}3Ska`vdN)/D8)KLxwU@[nI&-j--;l<sHPKKb6/l*4pd3#?f|b|AC');

define('SECURE_AUTH_SALT', '!U}~}*f1f]6</s%=S@sFc*9R~UV<rjQhye [+l%-0dip?n`6%Kb#2huK&7U}K+9>');

define('LOGGED_IN_SALT',   'nr|.o`46d{&]8R>-r.9+OO2do=ZnA0sp9+.cFyll7zrY[~o<igGI@$3M^+{Id3nZ');

define('NONCE_SALT',       'v&o xCj.!7+)boYhOEf~dFmC(H1uLUe6!,t<7]|eR5Ts UK~tAbM;u^@/ u8s=aB');


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';


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
