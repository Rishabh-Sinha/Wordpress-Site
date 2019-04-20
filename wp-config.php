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
define('AUTH_KEY',         'a`}_(T93/&7/)uaCyZil4qe%Dzz7=i 8s+0FL@1!u;=@Rz6E@tkE!AX/4&9eZ6RR');
define('SECURE_AUTH_KEY',  '~&6=s]:V2L1iQu9wLm~,)YpAr$|V5s+8N8$kjv2QqoVe63Y+({5#S@~Of!RjXc7l');
define('LOGGED_IN_KEY',    'I+hq#4U,lSi)hAx371-|0;rln%f#s|yB|^=DfwU(.AP(tG&*|e~5>!(u5WJ)XQe6');
define('NONCE_KEY',        'ldQLHZBpN8~zwpP/!Yri_0WdV?~6:hTY.ImJm}b(-iG36S3$m:}1YC2i)uQ?~2q}');
define('AUTH_SALT',        '.ZB!30iDpLG#$828Xq0g06_Fg9;rRXlzu1ffS3;7d6&8XO6BWHSqb50=xx7GPrr=');
define('SECURE_AUTH_SALT', '&ZM.ws04V9~v$b4!<9&Q&>O7!4QMha@ok29CAQ)s7T{k+|L}.Iko94A*E9(=hTr5');
define('LOGGED_IN_SALT',   ' !$C9h{66`2Z(>K/ocH&D WH_wK&I)!R[f~LX jzEjCOBR^tQB-)W?*1i<$pI#U#');
define('NONCE_SALT',       ' ThuZD-V_tH~k(+m|tO.tbq:[Dh%tN:eoA72inTg.%g#)AFVrvXkhVpwq,d!ZyGI');

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
