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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'koukaki' );

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
define( 'AUTH_KEY',         '}W5-L8K8CXK-.Au=W|xwfYZtDu,sxK7FmkI<YG=!QO,o1W(Nv.O/DQ-d8Acw8)bB' );
define( 'SECURE_AUTH_KEY',  'PibVvj{5&0kC=X${:8xO#;TMSU^jdE2>vr9B8NhX4D(&+XaH?? L>gDP&w*W$>A2' );
define( 'LOGGED_IN_KEY',    ':LcAV!Iddb#rb_H{6PtA?@u|p ;NY+HTDBX^Q#TxC;%<dF~b.k5qsq}8G93UUuj0' );
define( 'NONCE_KEY',        'K?=prVdjxZ@TVb:hP8zKiJQx56`gv?gh])a;j VSO$!hG*L4Ke1i-,?-8Rg^@T&M' );
define( 'AUTH_SALT',        'MU{/CO1Y,Vxe{u1);C+{he.T=j`|Z%Cqd^te!l!IKb>Cg[,B `^msGvY<(3HS|=M' );
define( 'SECURE_AUTH_SALT', '/tKF7_xg=N*z$`-w@*4S?zGeyOtsQ_}Pvbhi*a#A&`xvUQ#C$[;m--mC8t(D`]9@' );
define( 'LOGGED_IN_SALT',   '4hsY*Ub?*KafZ&u@L7&nmk;?l}!-[P&%y[!G~]Aq,]dEICE8fU$Wj@#|O3TralSj' );
define( 'NONCE_SALT',       'Y*D{*Cu{ts{KDs+^7Vk?nt$(_(NR]ceU(Y^ID`{<Pal;0<x{Dik, zH#2. td l9' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
