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
define( 'DB_NAME', 'monito' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'HqTHt8K-k3h}GWlt&FKb:a(62!wl]Xy 7Y0ze7Rs7=Q{#IU?=y>Ef~sp jd0V(c3' );
define( 'SECURE_AUTH_KEY',  '9<J+9V!dnkS{5D]W{9M>v4F6haa9gU:*&J`t0Fp*rxZ8KzveRK4!2Ws_x}w>vaZ%' );
define( 'LOGGED_IN_KEY',    'AIHJr2*+nafwS5a6dJ1}JfytY70)Zfl.iy;@AzH^5@cD8_!sEP?Z.nR$OAlHG@;=' );
define( 'NONCE_KEY',        'iZ#1V#Xdv/pRG.JdO%/If4wF,9uu7+w@ON*[1ToiafSf9|=N@>L)ELb`UV<q0]K^' );
define( 'AUTH_SALT',        'sqwsSJ#*{GRWis|>G*C=-HQi hfu|k=9C=Pr`wb];>d`uxKNK-%X]nj$2mxm6^Uc' );
define( 'SECURE_AUTH_SALT', 'ymT4EA[Ms}]irP)5@&(I-X6FI*S}*GuzBc)Vvk+NwP],J>RMNL/X#iJ:t@+UoE2O' );
define( 'LOGGED_IN_SALT',   '}x$YrT+-|F.>OJIzoAJ>3$~D6*/>SC-Mu#+_zJLM##KCD,B:8:-Yyj,$`ElWqQp;' );
define( 'NONCE_SALT',       '!oAD4GvDQVw`e3&if?>xB/CYXd`,#H~G:%1|Isu7;8=uN>p%fe@q^)~0]xRt>Ldy' );

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
