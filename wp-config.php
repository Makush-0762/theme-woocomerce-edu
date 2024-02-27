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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'theme-woocomerce-edu' );

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
define( 'AUTH_KEY',         '>X*cs5}h1o*wg*>f{12nV%KbgT_7AUev41|u1dp$-@FY5{+MMStn(To}Egn<sBSO' );
define( 'SECURE_AUTH_KEY',  'Jws0j1$bp;2G%qFxl#&1fOYHZJ-1q5FBNemb[bofQ}*[z4Ko!A1p7R=b54j.:jER' );
define( 'LOGGED_IN_KEY',    'f;G~0S(0.UH,Y038nL4mM:N(@d9[HoTm%8kDYB9?4%G{yBlE)OVlN1oV8/]d3g@e' );
define( 'NONCE_KEY',        'JmH*G?$h#4!;:J:dM]?*s;mF`:eSpZ4;+JEekRpXuQdPo5$M%jd4}~x+Xn|22_ua' );
define( 'AUTH_SALT',        '> hY%DU adq@Q4oR,&R[fYr~yN899Eagxm$5BmD|>:Iu1D32jKu.F2lk>oH<ol>!' );
define( 'SECURE_AUTH_SALT', 'Jp~+~ssX|jyfv!wN%1hf4[VDkf(e.|?#rb}?bLQ-aM3y:-uJc*R% ;[l?[{@])3@' );
define( 'LOGGED_IN_SALT',   '<*,8Ax&+d,ci~L6.4%~VY:n<S#ljTtK/Tn(,b_p(,NWW{7HIQPIh)<I(j1#bd~}.' );
define( 'NONCE_SALT',       'L6OQJIAxH0n;m{RHuNwK?;pj9o6Sl<WtC}5-Fq%TXuy;(Xo}[} ]-Nw;nX;#.z]3' );

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
