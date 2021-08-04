<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'cloud9' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'v0md/)<WHQ]OP<l]qYd?D_* 4QlS%|0~){m|hzX ?GKVHSp<VCfK;vUn&^IEz_um' );
define( 'SECURE_AUTH_KEY',  '~]O(i*`) TZ*ee(Y;%ri>=3RAQK#|5!J*9sMUh(Dsic0%PE}+EztU/.Ky(r>z`QF' );
define( 'LOGGED_IN_KEY',    'K^2fz&alS1IEso]vDmho?0,&Z0b4(.G%z!ZuM1-}D|sE,y7h&zoagBPl95U&T` s' );
define( 'NONCE_KEY',        'Sm}}(gl[f6#lD{WyY#8Y}#;MMM~I?-^#~&{x,%EBV_|dkc|=d%<_?.Zj(x@04_f5' );
define( 'AUTH_SALT',        'vdel=$6jqmS*ZGbRQ~zKNnz76_$ORqc1KG@,I81wG?_xJ`cw7 ?LoDu+/< `&-O2' );
define( 'SECURE_AUTH_SALT', 'p:2m4@zcqB11:8wT;Ok=o>wR9PkQLf0=t) n-[q(G.oOE*o1_@;Md:iHD,!dO}R=' );
define( 'LOGGED_IN_SALT',   'ZyvAmgYKurwIbP/VC!+L<G_z&y,a]R@6Aw0B]WN!<vCR6d@m6[p@e:rY5,7?72>(' );
define( 'NONCE_SALT',       '|E6YVWpxMyxYcm22QwBJ:P{;#r3@wu{ickQOR)voEa=~Sl;re!+bM.TO-rq0Y_3}' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
