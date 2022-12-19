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
define( 'DB_NAME', 'noel_blanc_2022' );

/** Database username */
define( 'DB_USER', 'LeCorbeau' );

/** Database password */
define( 'DB_PASSWORD', '1hnfplpH' );

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
define( 'AUTH_KEY',         '`KqrT:;]it9BiX<T)wsv}^nd3)j>Cs,<A!!O?KzZpb7e`$g7[o!JS@wegw:wO/18' );
define( 'SECURE_AUTH_KEY',  '?7rG_h{8kXz|gy!P!,qY8>bf%Pln%1C1gDM6.q_ EKr}0a0Y&Qq @tC&BKQvoW?h' );
define( 'LOGGED_IN_KEY',    ';-.Myoe;o&esYLX|Ab_-,GLvY1{tW$ty`1Z[ii^d{GiI_oN#=bSEd#-G/D$~Y}T*' );
define( 'NONCE_KEY',        '97`D5Y#;&aIvd9Dmob/-!{v<&1D~[bGi]xnS.?!CK,@P(gS@:pm>MuP=c}p52c3$' );
define( 'AUTH_SALT',        'KmG&DqqX3u8+d2c6so>A??Or*W ,je#U[lpO,Pj87ISl7g5kXMvl2|B-1R3nc;g:' );
define( 'SECURE_AUTH_SALT', '7,~}h~Bzd?.K;B<|6ns.<Q*MpJ}$(:{:O(bJ0OA24&AG)XT^*5lF@A!Cx#&XWPA$' );
define( 'LOGGED_IN_SALT',   '%vO6.BaPDCv{bVkjFP)GHY5D4#M[0adW`ot:xG0D&`u2Sa&XkCU8tX]FK^qh34s0' );
define( 'NONCE_SALT',       'y~@UOxY73ja,ZT&?8/`1:r#G-{wE,e>q_=]PC@eDFzE{5N(,MXosq`Jr<r5PSlF|' );

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
