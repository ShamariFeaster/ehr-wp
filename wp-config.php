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
define('DB_NAME', 'ehr_wordpress');

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
define('AUTH_KEY',         'P*;/1GvugGdZ/|dy[n)6ZF]Q~f5nX%V@4VDrlK5Hq7Jlg6[`k^4vI%5tdZbII(n_');
define('SECURE_AUTH_KEY',  '/<n{2/Gt~)Lv%]`2<@kSAq4/b-n19VucBKmIC2I.+tn-ALX<5IgM?*)}z9bfd7w=');
define('LOGGED_IN_KEY',    '+)y-{$1Ka/(m/[vLZS)=|ES7rG(AaS1<PC.r@xiF=oMgZKUcmTv%L!w[MC#;FB+-');
define('NONCE_KEY',        '6HA;>O^H.@ckntQ-}jaXo(dWw=<nDL2.4+?@?Ic0@i$nd[_xR^P43i}koa02OgCH');
define('AUTH_SALT',        '&;6^@B[yk_?`I_T_OzHP<>`RSCBe_WSW:WnxGb!VYJBsg)#=2&V#RVI@7q(ny5w(');
define('SECURE_AUTH_SALT', '%DriK:|<Xs:ExTo1Y4H &<yqv}[eN>=ay~l#NU8X*9_sVrY IQ/SX;uv7l6DW$Uf');
define('LOGGED_IN_SALT',   'da1P7=jt1DvYwUP?/+z,{L]`VFh9#ob4-g^qHa:b24vo&lm1w#o@R,_`Si>DlG6/');
define('NONCE_SALT',       'UCMWy~_jj+etN0;< $%@yW;pC]Zehfetg]x0fbOl}OoNOJv{_&TE8mkO6~Y4}x)}');

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
