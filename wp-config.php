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

define( 'DB_NAME', 'db_test' );
// define( 'DB_NAME', 'db_nand' );

/** Database username */
// define( 'DB_USER', 'root' );
define( 'DB_USER', 'nand' );

/** Database password */
// define( 'DB_PASSWORD', '' );
define( 'DB_PASSWORD', '3Y#8nY@kW' );

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
define( 'AUTH_KEY',         '{V-J1h/&nf*p19Of>1DeJ22(xb Wz[K~G1ktFT,3NF@r.|rfrb$r+g<qk 3$&X*%' );
define( 'SECURE_AUTH_KEY',  '3<nHeuNrgNP9~R)Y$d3j%f2?hvmsl?pFrU1H@1Y pCQLsY*mC8RXimr#XVOR4Pr$' );
define( 'LOGGED_IN_KEY',    '~(z$!s#M9gn+`1@*BzU-%#Pfrv^>nV:p67d$7aPF*W*:I$S_]QVEplkTay:`yQx4' );
define( 'NONCE_KEY',        '#c(|=~eD4HSAW=Zhp|NsyY%KsCoT|U]NNWt5W2do2)Ciud}HqN&hH6JGUG-:TyF ' );
define( 'AUTH_SALT',        'EWpQ@cx3]j(u?UD}L|>h}>T}#iYf)rRNdtO,+9-jfvvS=vuT.Q8_U+>2*-bT2R}F' );
define( 'SECURE_AUTH_SALT', 'BL}zMo`#7uaM;yUf4@m%0H`5<?}ez1&3r85-dLs7eVrO0r4q-Vw?Lf%F:SW7n+Hz' );
define( 'LOGGED_IN_SALT',   ']cz?NH9+bp`I1R_y[gtBe:vxP(%9k bII}.G KS3kx$Ziyt2Dn]`t<=SuUt+}#{j' );
define( 'NONCE_SALT',       'R3)7U1RX8u/$9=E;VM|]VGbmi6c@X!sEw=V*&_86u+XL&V<@;vI.M,x#oPg+h1]<' );

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
$table_prefix = 'wp_ngt_';

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
