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
define( 'DB_NAME', 'fight_site_db' );

/** Database username */
define( 'DB_USER', 'homestead' );

/** Database password */
define( 'DB_PASSWORD', 'secret' );

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
define( 'AUTH_KEY',         'y^Q,`z2REkMhL4y4%$`GQm[~-9Q%SIX^I.oo8UU;D0&?=k>!XKmU>O{T@Q8h(HxV' );
define( 'SECURE_AUTH_KEY',  'z6H?S}?wg${X>3+,`:Ss7j>%y/7_4,gy/flcw}9cPGYpD3/R}U>Ijrq5HZ-j`ro}' );
define( 'LOGGED_IN_KEY',    '|}SE)W!:taZx^xz2W#k_@CSf^5 ,?{7!z}3hCD4KtJF`O`h?--Q+HG*UYo&;{cUz' );
define( 'NONCE_KEY',        'xON4Pmds*$>1mJB<KH}8sa01.`amCbqMZK[DXfXZ.bftez1m/cBcb)Rr<--WlmXA' );
define( 'AUTH_SALT',        '}L}I8JCp<H1BV7+*YkUW%k=tB}msiD_q%gEYm(ecL;3Q])#EyS,@wGqq2@TTX+FU' );
define( 'SECURE_AUTH_SALT', 'o?Lz):7hzX-N`2~1r}>]fJN!r:RDeLo.wxVGR-gG%If-Gy (Y^=3cKPJB<y4WE)a' );
define( 'LOGGED_IN_SALT',   '>=#1F t;:2lf;@8[Wb-UG#{#0ObcE@Ts.<,_y&-M,&B/N^{V/U5(9vtD-A%ArNCx' );
define( 'NONCE_SALT',       'KbQzDk..H=8s6Q,z6@{yte.D~uR%KG]X%ikYOmKr1aKcVU-iSyDn0VNNa@&a. M ' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
