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
define('DB_NAME', 'burgerschap');

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
define('AUTH_KEY',         '}PwK7%( 6HbV+uib8F!S0L`~q+,&yo?(Uk<JbsNqwq(Y<,.%@Z{UzqXZJiV=Db~c');
define('SECURE_AUTH_KEY',  '=,8hePB(wBR9:5z#~6wyv)V[d52)8l4cu{U7vT^ufvTieg=x%1|&AuJ@#<O7z]7J');
define('LOGGED_IN_KEY',    '6qa1-]w,@o[fhS `}Dv.531|Xf9Z# m(Y2bfRe]0tx=C4*KwfewgM_x%r*kzubH$');
define('NONCE_KEY',        'QIX_^Y?kX@;`!29WhYtXE=qaeQuPB~-SBREAtNoMbo}YcU,z$`[e@zTO~uoy%2B0');
define('AUTH_SALT',        ';8xhHv%0tpd$<:n05*_*%IA5fT{=}gWC-kYZBpZMfw29_BF@6f,zg)l^?]gEz^iT');
define('SECURE_AUTH_SALT', 'uZKt8!Sj**6Lh:BSa2>md?gd/1l=Xs4cA!D{z&D Mi2A!R-&hWiE4Mde^s>F$<n$');
define('LOGGED_IN_SALT',   '6-$hIMm&gR`0kaA;)Qu<DPF_c(a<brW5E${`/y2;sU1m~[3ckF:>k+JIG8*;c^;G');
define('NONCE_SALT',       'Tcwujt95atZh%bM8[mk(gTxm(_OP)hN/,6TL||5B.n]rSL/ 4vuFa$hVijkeXfR%');

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
