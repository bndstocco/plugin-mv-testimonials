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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '8B|GwZ)r0_c@+8$8|tduTKR4btbiJ=AN|0)NvNO}_T+xIuJ3vkwdG#Qs=!.$Af`0' );
define( 'SECURE_AUTH_KEY',   'D`kLp9}ox+$Wg]is.?@~7!ortmyNt~DeMp1y{c-:=W_Ri;C:4ATz+ ItpcRrT*zs' );
define( 'LOGGED_IN_KEY',     'SJJ12)KAaH>XZMbg[9d@u~?e7`;x8uNqX0s3H9Am8SFs=!Ld}M#{.FWLb2BGcW#o' );
define( 'NONCE_KEY',         '/=r*c-tsltnTGZ5vJ.xk>X;Wlm|V^b|Q!ync*0[n=f{%@BZN-=ukY.qvsx@P`DiQ' );
define( 'AUTH_SALT',         '_7&sA?LVb}6Ylz//Lx0+7]z8G:e+J78i/O=v.(TR61m(1BkEbMY@FPEtjtU$>RK=' );
define( 'SECURE_AUTH_SALT',  '>)1vEJ*i TLzGO_GGlYE})[&9ATXNLP].b`E5=xUt&@ipFM<m?r5rG$6=GTfm~h:' );
define( 'LOGGED_IN_SALT',    'xd(oD|FOEK{_=f2:_-Hi}!Xk&``.6o[M4y|C8-Lp}YjY5*_ cy;?mLF:k%EXE?w ' );
define( 'NONCE_SALT',        '%JD2rE8vI.8.wSF=3.wwVn#OSs-sA?r7W8;.AjCFqI6]o6zB:ISiXUpJmd(eNC-[' );
define( 'WP_CACHE_KEY_SALT', '*Txl( X%iE^MZbq2h$eLHeOq^S`eP}8_|Ivm!LIJuCiyfGc/gdaXaXdyZU$z0pVl' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
