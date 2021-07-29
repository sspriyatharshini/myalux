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
define( 'DB_NAME', 'myalux' );

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
define( 'AUTH_KEY',         '-%^RsiN4L]M:[w|r3+mqsWeJ!>47}C0Y6)FFjf|#9geOh ;&./pKnGFwg8EDUYV^' );
define( 'SECURE_AUTH_KEY',  'l[<ioR^8>3]QgM7WDWMt[9IuN-AM]NK.i6~0jZ^&+q5aNWLMmNC0W<cG%QvbORI@' );
define( 'LOGGED_IN_KEY',    '!S2&fC1`#TsG|65voU5UU^!:7XhVH4$>I9ac{:H$2$ j(<7[paU`s%.H,z+{[kL}' );
define( 'NONCE_KEY',        '>ZS_GH%8x6(19vbBJRWrEZEQ<+A4Y9H?7hK;K68||Va{3e:B.`ZZ7(~&VxI*S7Q&' );
define( 'AUTH_SALT',        'Ong]@uS6Se:ln)P&g4#D1jTTyWE._$5:3J2u:wSh}UC[Uy*g>4!/OM>czqlwSmG>' );
define( 'SECURE_AUTH_SALT', 'Y+74y5@A)Y+$}@]jbv47_P{4DbS`(F6x|Q }~RKXOr|uVP,87F&%=oM. U1SgpKQ' );
define( 'LOGGED_IN_SALT',   '>~uipv4m{[6r@A_/#^Kc `#_Rb4i*A5Y5*)th@m|7WdzT?#zo^b_dC03e#I~s!$I' );
define( 'NONCE_SALT',       'aTw5Uu_&lUr0KTb^L(]kFW_*Cl^H9%;bBXuT!w{esvxY>`cb3.l*$O#2g we6MLZ' );

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
