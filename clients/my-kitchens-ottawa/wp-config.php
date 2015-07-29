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
define('AUTH_KEY',         '{)nw/=TXrGH}}XI<*5-_-x,+`F%$EVw)+ny`sFD2m=yM-1O >s4BARXA!nqN-Cs,');
define('SECURE_AUTH_KEY',  'Dv _wck@,+|<S1OvS=tOHJC:P#L8;H2R;M1FeQFP^?cNu25ly:kHC?3v_+.b/Pzr');
define('LOGGED_IN_KEY',    '}-pMtr36[f||U)s]|`iHSsw0SSZ5Q?*ac,03+Bl&+!DE)O*@G++zW8gfg:![Wta(');
define('NONCE_KEY',        '},j]3YL+^~gz{HU&|z0lVIf[j1LR>3Mz^%vE_,7N6zD?&Mb}-UurO-2W_i=^(SQp');
define('AUTH_SALT',        'NuQ0+_EV(NF~|PeNvWzR%5Q@73+;.P^jkdr X-Z]aw=[&,@m_C|,NAk_hbv$uu`8');
define('SECURE_AUTH_SALT', '>}5:FZz655y_dH%5drwA`ZI+DU<]r6Xb|%&CD<VZE z+^se}(6Q|?fq#-dj+QPFK');
define('LOGGED_IN_SALT',   '}pr}R dX[0nod WZm-p)SQcAajdK4u*!VA`d<{iO94]!-H/ ~%LH,7VA-NI8+%&R');
define('NONCE_SALT',       '70G/t+w%J ZUe|~l:Z$qIC?46gn=RGN3fHTXx;(_h_Tg=TW;TUFtj|[?[>_]QJQC');

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
