<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'proactivephdb');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '10.0.1.3');

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
define('AUTH_KEY',         'XqV~E$6miUG*A:LS0W ln7[M8oRqfrT|0AT+HLh 7z,ihM[M|[-TGsL>c_uWY3Ob');
define('SECURE_AUTH_KEY',  'KGM/C_0<Sty@%<]6u|`_s#~hwdv6V@0]4H}L)pd+XhEtNia6JBo9&;q1h-S *OJu');
define('LOGGED_IN_KEY',    'IZLM:#m8wHA4Vb|SP2Z LXB5+O/gQ+=_,Yaf[FHIS-qrM4IT_:gDX46;ENtZbq D');
define('NONCE_KEY',        'k#XLDWPz>+R&[-FU/~8QJ+ieE;4y`LfI.KzXmhF)7z-I-`.|mU7[E]mpezdsbZM!');
define('AUTH_SALT',        'n/6D##XNxxai]2zfhv=jAg?;7+,gA[6Wg;QFv}1craL#p=F*@tb`?ou]mUAObo?/');
define('SECURE_AUTH_SALT', '?9w!Px$q6fD7MWYJ+F?/|_9Y[qyE=|3p8C!-_?G+Pl`-Qu5ZK lNbMn$4d3C-cOA');
define('LOGGED_IN_SALT',   ',ZShn+ekWGJULB`Ey%Q|b9b)F22]rjRvWn $g*-@l~a%tJ?|vP6&r:<`OgN/&?^5');
define('NONCE_SALT',       'oZL=omM?I7I@m7XWt#9^W8zx*7<:-N_{BfE^o/]8u*AHn-=Ik-.[V)`.(Zok~@hT');

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
