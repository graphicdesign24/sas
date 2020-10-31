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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sas' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '.$!]C:R8<*%iH~]udIoCx!#ZCN!#Y8.YkwCpHgZh{2i=zrE9wEGN=_EC3D(rq9f+' );
define( 'SECURE_AUTH_KEY',  'I zJ,IiVRA1(.CJ[v<cmO) Eza}J#pOh`q|#2n11j8qMlJQ@IF}gpG.6dc.;2W&W' );
define( 'LOGGED_IN_KEY',    '::yCL?T}VSF>V^sPH5FS~2jWC&F{=:0Ngms~[lkCQ1l`-V&q;a*](ZrZ.Bi&]36Z' );
define( 'NONCE_KEY',        '45zc@@7tmJ4eH<(z7a*mcYRAbU,02Ln0h2d:}[(4PH%KE(d[R(DxDj,T52oy_OZ?' );
define( 'AUTH_SALT',        'dws^;~H)xF@VO;f.Db=+XeZ?@-{gJjsI`/g,|*I-1H:Ost1jZNc{T fq#^[h.71c' );
define( 'SECURE_AUTH_SALT', 'jt5StO1dm7V8dBNt])~c,3ow;U wOp:/G6AJH=1w-x&{uWJ-mb:x]{5(IEzM`cw`' );
define( 'LOGGED_IN_SALT',   'F~(<bf4I34#Wt3L>d_$Hpw4Is|E0VezkclmQ*{+C-[;;iO7VqG5H3jn_^dLq[$^,' );
define( 'NONCE_SALT',       'eT;UP9wPG~y3G{?%(V%?:-Z)e:1aM+Y}qT7M0JYK%]ca9nKGL=k[_hB^Qz3BbLNg' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
