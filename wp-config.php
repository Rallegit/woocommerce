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
define( 'DB_NAME', 'wooone' );

/** MySQL database username */
define( 'DB_USER', 'Rasmus' );

/** MySQL database password */
define( 'DB_PASSWORD', 'hello123' );

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
define( 'AUTH_KEY',         '.EsPB>)f46MX8M%WU/9r]B UG9PP_<j,(|OncEkIb-c&v<&F2bghVGp7q?Y,BkI=' );
define( 'SECURE_AUTH_KEY',  'ELY.y6OQ|-6y^/Sn#)r+~~$D_8td&=}@@:*FA`vu%S?6V}NG;:2!7&X^J[Oc;@@!' );
define( 'LOGGED_IN_KEY',    'r%+KlMWdAg=i)U|`#*&B*1k>0x]@]BpM.]is++wTK:jN.|Pf):%BBXt2Vns:cxmW' );
define( 'NONCE_KEY',        '8%o[hop:)L:kBhJJ.>UaH`W>Y~60Yh 1*g-7+o+4y@3vl{o<[_ BP}!O2g@g,bV)' );
define( 'AUTH_SALT',        'JR~%~iWI5,bgQZrgbzQ<EwdU)KFaB!]TU-#K/c3GAULo99)WFtER>u||wmqzO/=w' );
define( 'SECURE_AUTH_SALT', ')]>TS~+g ]?IOh>.+JX&jIDa4x*+</9,6R,K}Tsjg8;lh!#l&@!?$nJ}&ncz80zM' );
define( 'LOGGED_IN_SALT',   '|gmbku4sM,e[WoIDNmOZ_9-1Crn7 No@:;gD<ie<~g!<^lyu0`JR+0*Dg(lJe @R' );
define( 'NONCE_SALT',       '.7]G?, S<o6lyVO.cX4hV26~&2@vXH7FS6&wsVIG[/4mkS>@Yq,|9.P68<l6)<;H' );

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
