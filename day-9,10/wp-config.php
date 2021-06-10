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
define( 'DB_NAME', 'wp' );

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
define( 'AUTH_KEY',         'c8T{%Z&*bD7M0@0LgkolcY8K/=5z<8(K~dvTpl.>DBiOw)c^5]~kP;&G,gO?mCa:' );
define( 'SECURE_AUTH_KEY',  '=xjh]5bX^f`;iK+8!90&<+2)k@g>Z8G 6ZT2IOZPZ*=.} Jef:n0sSXD]kwj?6}3' );
define( 'LOGGED_IN_KEY',    'ARj,-pT0XpX1H<PMn5PM;x&@Gb_HKU1uKV@vN`mnl;A|j+F;tNNb6#+<]P~;nG&;' );
define( 'NONCE_KEY',        'uNH?/dA7]S8v`LAd,you_<b37rWw]-)rS4HJdTE**9gBA8eRl>wZ6Y2vB 1jn}_2' );
define( 'AUTH_SALT',        'hA$`@;QJAV1FrP1LG$HF5OQLT5|zg*0akFi`)~Vjbdr3^LPt[W[g)w7(_cE-$;<S' );
define( 'SECURE_AUTH_SALT', 'ts.ZYEui9@5r!SgVmSABqTGk>@F$FhElfu(eB>GncoNY-~0$l4 ExZSP$s`;]a]K' );
define( 'LOGGED_IN_SALT',   'f~--<T]f]dZ3=z{(7(*PsJO*r4NL??y6GK2 %A. J1k|BoPCcr]0vC`2!ARHC6NF' );
define( 'NONCE_SALT',       '~j%|4=>V~T~A^#hwGZ0Q}]fJOABeYpo3pes!S/i<?F@XQGQk,Tf7mO.G0<1wPk43' );

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
