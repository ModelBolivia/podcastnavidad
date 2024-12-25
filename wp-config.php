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
define( 'DB_NAME', 'navidadpodcast' );

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
define( 'AUTH_KEY',         'T_~q +BF][!KnpX5W#Djd(*$nk?pz3w>t:?|pGd4,n7i2m-dcd~/-YVGZ^byj5nm' );
define( 'SECURE_AUTH_KEY',  '.l>^eb*I*94Oe_ARsp5B*r1@Hw*.J?H]D@0Dg&q~JY0nBoA2tyS/VrQq>FE,?=?`' );
define( 'LOGGED_IN_KEY',    '8~[aq%R[chLM%)ZU9HC4TjmR@CDA&jJL}:e;KBsI1/EZ RH|aIu]]NaD~^QJcl`_' );
define( 'NONCE_KEY',        'zLEIWYsZMw8n:8jP /U6z]r l.TrVLl#Bcp1(I@&(gjk)D3D93V=iN!8!Y)EyI2a' );
define( 'AUTH_SALT',        'Eb1lU{z_PBtq3rRmx*@9}~/EAI`^k-[!Ex73lY;EmY=gt{1[MbDgB&:]t^X]$p}{' );
define( 'SECURE_AUTH_SALT', 'eGY_Bn@5fbMkO|G9MAgKkw/pv[SH!uX$W!^3Hgxnv{Xv~?u?-G~B3^kKl+kG#an^' );
define( 'LOGGED_IN_SALT',   'yBNx-*KJ[2OHeyb#a#+uoT,>(rJuzc]beWw~,n;W5e81y+rcQw?HUZts~v-=*`N#' );
define( 'NONCE_SALT',       '6,Z<]bbxlMVavJ]vxzKGOm=Dd@5Q6?n{L#5=-6eWsrgCniriZ)nR6iUbYQmZ$<(%' );

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
