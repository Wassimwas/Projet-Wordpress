<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'agencia' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'fF_BQ~$TkE=#QFo}U5NSSn?bK8g>zM#nzmzSk!huBS7>-HWIv`,ORMHc3$e#e)@:' );
define( 'SECURE_AUTH_KEY',  '{JR;.<4my&{Gh6QmG#HFEa[s@?$i-5d<=m$9x+CS>HcA|SWfE(GQp7EAIJxXq!Qu' );
define( 'LOGGED_IN_KEY',    '&v/h!LMs[^Qqn (:rWYV8e?<hHa^O)+rHy=ypY@tW%FMx5oHShPxq.+a>5Yvm3@4' );
define( 'NONCE_KEY',        'JNpcp-oB;fcF/FX;)p4xAf0aP-U%xV,kohs<q3*#bu_XNY[!iy0J(u4y)4|&fo%R' );
define( 'AUTH_SALT',        'V)}NFqCsUe6pfCo`G#YU:x+J4{reUy&y.qIa^GPiDzB~ vysSbR~<de*_/uCt&=M' );
define( 'SECURE_AUTH_SALT', '}w~`33hm|fBn4=Hr+Sm^}BC?R+qR(kad$1IJo9T@tpUEMp{Ch35$n.<^{)7%_0&E' );
define( 'LOGGED_IN_SALT',   'wDDocF^g*m=_{W4a4w-^3v}]rdf272@Mh4-@A3+:mNu|XjI8*>fRO;U#9Fm3v|z>' );
define( 'NONCE_SALT',       'Nw:hm;Y}4[o>0MH)Ly>keTbva*Y|BJ;{|[un?cq((!K!5}ck^?umI/[w&`gOPXj!' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
