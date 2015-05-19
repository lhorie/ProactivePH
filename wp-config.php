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
define('DB_NAME', 'proactiveph');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'proactiveph');

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
define('AUTH_KEY',         'EB?j~NGs-xYLKNeKJ0Wj%JraEsm!Qw:[:_*SpS4R||HLS^:pSUi%0oKaF~Th~kZ(');
define('SECURE_AUTH_KEY',  'Z5R:o{t2M^a0LS]uF4wIbg%g^/j:*mN#m+ifb/A3tP5)X*<Sw.^l#M72&:he</P=');
define('LOGGED_IN_KEY',    'Y:1hwNx|q3[3P,yJ#oZZoE^o|gcD`3A>Y!gx-%Fl:x]betLtfx8FIoi{sN6jG0zx');
define('NONCE_KEY',        '{0P]~( Ag?(&T#Z]wnoRwB*iL%E{UGT >Gb5hvP<B8Iv!.l{:+1GQ)P=qBWCfB_e');
define('AUTH_SALT',        '<20uat-n<a7]6(||{~.cg<kjFsV&4+1Sk>ociNm~]aV[-vb8YWdZAi|6w! J}(YB');
define('SECURE_AUTH_SALT', 'kVdJ+,m?+&Wq<4:z]^&H;O$C.c4X+P_DaKk7fO4zmg<7Lwrn74[p;@m0:t Li|%_');
define('LOGGED_IN_SALT',   'Hh-i<b*?h~1xj=_P+S21oGEIcn%b<-@-[8.b#*tX.D6h/u}lhn87gTbU=gg|E0mM');
define('NONCE_SALT',       '|PEYGNDQ_yU{WdGD&!y3>&d=iR0&Tj<D_`PW67ugPx|6y|aawFX=pj5~qLi-Nh}K');

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
