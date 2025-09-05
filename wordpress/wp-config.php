<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'iiKj>mT1nQ1K]L,8LC0d~G*Zqegba9WDjIb}j|?Uf<2th<x,/A_Gt&]5uE<$m}Xf' );
define( 'SECURE_AUTH_KEY',  'NQw{Y?%)5xnid[A.3S4_2kRQt~;7BI^nC<AD84ug(&5/qVWT<YDnPJ]euG@TK^R<' );
define( 'LOGGED_IN_KEY',    'U}Pbc&Abv1X_H1luXC5<q&nx}SKBn1*$QN B4O5h%B/pm9wE IZZT/=7EB-(Kgtb' );
define( 'NONCE_KEY',        ')q~jA>i=2TL~*,QiP%U+4o:Qm^N*pEe/WD/@&6(%d~%6(Sz`Gp0*a-c;%l>8q.pJ' );
define( 'AUTH_SALT',        '&[4ew&=#cpLlU<z4b`Jg-aRjWU5!z;u3S~m;RUlGWS}V8~PV36O>?/2Xc-^uPMeJ' );
define( 'SECURE_AUTH_SALT', '|`wC4+6H7^2ZBno2|n} 0zN,uL{=`U6kddp!bt3/!>s4sUfUYK|-6H=YOk^`E3|^' );
define( 'LOGGED_IN_SALT',   'G=(U%xWB*o;ibdP Cf+Rvra>!%1Hk?$d.eqi7k:G2/$_e^J(_AeV,$MgL||MrRNL' );
define( 'NONCE_SALT',       'L<N]mHEnE.9Op2+^shP69y*@[o`I@31OdM;<0d~XIVhKPz$VmdE8}wm&6n`[>6||' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
