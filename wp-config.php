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
define('DB_NAME', 'itcite_db');

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
define('AUTH_KEY',         'c]:=l40LP6a0%rdwj)Vzy<}7r+X3E4WdY=3EZ2O1d_yBB@PEw#,ZkIbHD3X#6]#)');
define('SECURE_AUTH_KEY',  '47dwtCE pwN@fSWBVi39I^;yOc9NEn!EVnb}=2U?4^6.eGe<:ylkdTq.@YR9|KFI');
define('LOGGED_IN_KEY',    'y;%Jn1E>Iv1h[7!l1=ABzR%Z5msCFW^M]u6qRo=n-ioNZb7.Y^725Vg_bjN^oe}n');
define('NONCE_KEY',        'PB-D{.BF7#+  3vu{w^1Q?ge`UZ@gbr;vy$V)fZl_.]8*7I Q%:e:,X:Q[jG:%%C');
define('AUTH_SALT',        'j+)ln~^Q[*_Fne.Rr&O1}S`BJ$L2=3l-g[TB%p!ih-~>UM_?<IjFad6]uV7RHMSp');
define('SECURE_AUTH_SALT', '^41ScH~t!!jYCx`u-t0HV6W?3^V[RFE:-zeuhh:lNOu,P&j+5og+pvS4={k5azGM');
define('LOGGED_IN_SALT',   '(|3q$>@HvW*L<p[7UZOOKfXmL4F6RsPGQ]XLJYU6>1:#B8.#FQ(0j_-G(qfC6qhu');
define('NONCE_SALT',       'OfM9Cf%x8b-RuET(2gBbVHjke u,IbJya{73)-TqeKk_(23&;?UgU#|uv@dVyrcv');

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
