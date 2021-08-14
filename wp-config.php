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
define( 'DB_NAME', 'koopmanbrandpreventie' );

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
define( 'AUTH_KEY',         'cWWQJg-Q%g9y[/FrKQ&CmOoK1,t*4zX%*rs>B/X9Mpx;,@*L$[8V+Va%;0>gQz7)' );
define( 'SECURE_AUTH_KEY',  '?K#AC6;[)E >R&T s8#3O-OM3<P%:zX2QT>$Pw07?44]cfLnh4Z)?HO~)-K;21!#' );
define( 'LOGGED_IN_KEY',    'gqtX~#x]/;:H26+7YFm^w&L2U2PPkuz=A8#T6_WC57-@UyWL}5rB9.gg42mnTBpa' );
define( 'NONCE_KEY',        '6LDdAQSvOyVO.+Pj4cl|1FGX3eA{9oI-=}d&Fxj&MQ]h Qv/^2g*&#1-&dP6[BXf' );
define( 'AUTH_SALT',        '?a+hjHCZjh#J?*ec=-L5|gVcQMa#ri9e|b[1}K@ls,7VD>}X^N~i9p7=w-Q$Zmd)' );
define( 'SECURE_AUTH_SALT', 'P!H_|,|?&f0(l69S76)ekel}Sy3o`6 00!?iL8~B-@0)JR%^n@yU|C*,DAlgcS0 ' );
define( 'LOGGED_IN_SALT',   'wQYI%E|bZZJ kJt{$.J0TeIDVFWGi|!-XoDu;{4?UEKophuJ2Ty[clVbJ}Q*Q&D@' );
define( 'NONCE_SALT',       ']bT ^l4jYy9o(?pZ>{?2*Gf4o(zsy57nH^cF)sv*#Oj A(^KvcBeUOYyOgKJb5<j' );

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
