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
define( 'DB_NAME', 'prudencecollege' );

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
define( 'AUTH_KEY',         'uYHNKT)IZGAi(9_9>Hcg1aX]#ge7>d});Af-j-<q1+<X4qf(qiA2<?n7]^NYEL6F' );
define( 'SECURE_AUTH_KEY',  'bS9{8bN#E0UFTO&DT_~jvl6K$={H/76Y*8]g2_<U#8ExPl&CoHtZLK[j-~ZLRfFA' );
define( 'LOGGED_IN_KEY',    '^*FagmA/ x!V>aHgx-z8{A8Kjo>8r(tK|NyyyqECD&Bd&VDAarj6o*6F^ML^gEM/' );
define( 'NONCE_KEY',        'Tm8H07BL)$P{<@/1zc.(d7H;p&=,(WK0$$<re:.cy0[OQ5w%~+AwF-L=r.E FZ+1' );
define( 'AUTH_SALT',        '9XAL3u;f=|r45VCG$a@zkS AFGI@xPrk/kfVWfpMmSG;!O(:A?[reJ*8b6( H}jc' );
define( 'SECURE_AUTH_SALT', 'l%RRXp5)w>8^lOFA#YG7CL6!5,x<@0+9Ilb!8@.}XXkA~Q7og$<i>oHq~%qn|]c8' );
define( 'LOGGED_IN_SALT',   'Rr)K=.Kd#;sIY5*J$C FT713P:TEl,XtA|} OIlF0{RBwhGE/ :)kk`I~`:aCXk-' );
define( 'NONCE_SALT',       ';8W:uKCl~2g`_#$GkfhLC)O1=G*76&o6I-v.&)O-OAF~e~,W3WdDZ~2kqQU`CW r' );

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
