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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'woocommerce_wp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'cCQv9+j2OQ.dxfP^|#YHFA0Jj@WMCLBIuxH4C1/`*EXnthv9Cn^{5G(?}{LRkW+^' );
define( 'SECURE_AUTH_KEY',  'z5?en=c-X;.x#.x77iP!R;+ay4DnN}&KJ/Zo2ZWv>Ea.*=zRw5L`6cZH>|>Az?Mx' );
define( 'LOGGED_IN_KEY',    '_CE@YMiMNOL{IL:0LLUb1~Zyxksryw#P~Y4I|9/!VzKItiNavX-@vLj_5!2v*/&U' );
define( 'NONCE_KEY',        '-Je`B|%TmtT-kSbrK)<2qD@jWDn-w5Em84>@oAa:,J5T@8P=w*X`hsKSXq(,D-Kh' );
define( 'AUTH_SALT',        '  t sE~jT3,guXsOe[C~n#v@_01Llm`W2v]w2 ,L/Kp8?1P*Ji7AoGE;k}wgLM;;' );
define( 'SECURE_AUTH_SALT', 'RXc^08vTOD;S{,5,=6; oxV6V0DB*H>>tYcnCQew.Si;V{ey`ODp<ai=mUv+c:1T' );
define( 'LOGGED_IN_SALT',   ' ^J&]GT}sT};(5B7=Owfb)s_{(zdn^X+!3nIg!TRr|xEp,|xm2rvh#`L(h!o|IjC' );
define( 'NONCE_SALT',       'd 19V+3|FLMpC`M-:2IUG~(z7-ztkn2NGcza_c)==6Hvsv:|Pz]hg;<y]#fz>LF-' );

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
