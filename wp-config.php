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
define('DB_NAME', 'accelerate');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '5ZCZGRE?mYU;g]~Q+7S6b+D6*<A*N~A]h]P~3.j]Kl8UoFy7s?2_|Xw?KXtfD{l6');
define('SECURE_AUTH_KEY',  '|a3|BUt,-KtYs#Bqsc%+J),cXpy4ur;_Hd UXjbT[~>]Ik^bc5MwdO@i9j%Ji}TV');
define('LOGGED_IN_KEY',    'Yn%LW>|.To*F=yD-Tjl-q1PMBDf(W!HU=[O+</m6w4MF5}g*5XX;S<Br:#-VTV(9');
define('NONCE_KEY',        'k+&b9+]k%?Ml gK.DGVnD%6Txvcfyh!G|>hlY|dh)@+voXYPr--5I5PNJeS>?.Cw');
define('AUTH_SALT',        ')~Rw7J)g/E@h|6kS:G-G2RDzE?p-%4>klI|yLD8(|z7psCAw1|u]]F )jAI?0VKo');
define('SECURE_AUTH_SALT', '|5jK&.P1BxjDf]>H2AEE2NB_uz*@t-g,:rZUluS|C=*S94OQ?@S..Q +Ayn[F30$');
define('LOGGED_IN_SALT',   'ps{U:+NU&[NpBd-#(`+{YdZKq>cyV@Djy}ag)x)g&g!AKtv;CL*5A8$PadAw= $#');
define('NONCE_SALT',       'gp [_h6~|(9^w7h8ZHTc{UUu%t!;8#oz.fsKGl2|XxkPjXM1!0dbVyP%!Ddcl;Z>');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
