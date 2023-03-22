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
define( 'DB_NAME', 'wordpress_db' );

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
define( 'AUTH_KEY',         'D {H.:gm9?$7nB1X4eOrdOC>-g-!7AG{AZ5>o9POJMOLO8]ttC#&A{{z{XxCE(H]' );
define( 'SECURE_AUTH_KEY',  '7$vS||ADXWV,FJ}%/6^w<%B.RS[ }i^zxF[+S[A`vVIWm`2l17l*VRj,tJ<p@e0:' );
define( 'LOGGED_IN_KEY',    '!ll:)AAs*1?PQB3mj>$Ab9U7,Y,*yQ)Vtkp~n G5}q_pFW%}s.lhInb;)Q8!/qov' );
define( 'NONCE_KEY',        'ZA5.0AEG$~:</OgK+e{eIMmy[^c=k%EW*3ki<_]GzhI_Q~R0o3H^Kr,q^%m+h2;d' );
define( 'AUTH_SALT',        ':Ba})wPd9!r{u^>7RK+gDLPm>t]tMIGx>7#/@(qZp Dk;_1CdjO+M9k8nR96R2!]' );
define( 'SECURE_AUTH_SALT', 'o7hiQ+#*FG[rL7F{-ngpjm2(a;XSXyK@vX6/s{P@m@YW4dG:/,yIpmW/XUF~}F;@' );
define( 'LOGGED_IN_SALT',   'RP)?c}s#ZRxU{&vxjpe|{dpm5t%K_%{~x^JO1Knc_F<zFIN&< /KB?j_-LpSax>:' );
define( 'NONCE_SALT',       '@$czYqJ9H7tLzg5M1<AG1a$x8}Ay27.^1w^Y_`vk3Xw.K(&$dJY5{SQsABtT:_vV' );

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
