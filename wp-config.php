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
define('DB_NAME', 'skarma');

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
define('AUTH_KEY',         'Td;W,PPD!8h=>SchG((V(|Uo}u[-$)Nerk=B<,!~{[XbhhwRrwPibsM.g^&XRX(n');
define('SECURE_AUTH_KEY',  'Z}rlAcdHOj!PhP:94kT`F6l&y#1o--%IHHsk$Um-dDHdz{osd,%kmsMB6%pj5;`S');
define('LOGGED_IN_KEY',    'ubV<XOohuJ4HGpeP%(Wr@K^fvA^Ro?Ptqps9$=*Le:<gTAh*hj6SRF5&@6XP,^;c');
define('NONCE_KEY',        '%!n2h{;o]opA>T:Nr_ 5s<lPc%SnO;s=uOoHq%7q>;SiN=M5jyf*L2s69 yhg90?');
define('AUTH_SALT',        '0,JP`%QqY=5&SrkrN)k1ULol30!3XorsI:6Fl=?LteCy|U/Z5}jkpc|vxuEn2m`x');
define('SECURE_AUTH_SALT', 'y5C5Bu[z_Sg@cZ:HAxcWQU-IIe~HZS-ASFP7i ImQ F_6S|o<NnGAh!2c?E1$k~-');
define('LOGGED_IN_SALT',   '2@rvF:i-MoCR8H2Vet-7W9jVy8e$/ngB%|Fx]iKw3isscppn=d#Wh8JGtEkV%*UC');
define('NONCE_SALT',       ';UfO`}<C1^}LfSG-~yt%stZLGQd)u.XsrohI8/s3$/2r5OjUvq]V+Z_/Em^cH$b?');
/**#@-*/
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'sk_';

define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'localhost');
define('PATH_CURRENT_SITE', '/wordpress/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

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
define('WP_ALLOW_MULTISITE', true );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
