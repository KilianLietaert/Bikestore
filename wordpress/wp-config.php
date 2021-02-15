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
define( 'DB_NAME', 'bikestore' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         ':|lR.1{2CC!)&y<!Uxj{zW]1uEOL.)l+D<R-Ewmw77sP19D^*J%+x<3NS#q/Z>d>' );
define( 'SECURE_AUTH_KEY',  '%syozRRskzjL5L5$^89a$x5:<BD0;^Ei?`_h@<R5e:CmO4D^{F|6OjvG#fKbgNvg' );
define( 'LOGGED_IN_KEY',    'E*FoVo`Hn8Z01ff8]o)WLY75Mg%Ql4HgcN~ov%VSWSf)U?7p0A5yy6=7GDD=+]Qm' );
define( 'NONCE_KEY',        '%>:$ !>[86b0?n8M4in-I1A%vXTl7nz@CeI[9_:Uqu<n) ro`mlHO*OaAE<z$;DW' );
define( 'AUTH_SALT',        'Lhr$6,/M7n3Y}Pm+9cXf$?q%H>y7 1[yqcB)I3xkDF/[~rr`YM;7jU]e.]mU#1:y' );
define( 'SECURE_AUTH_SALT', '&{96S/UekQq0 8q!Mr8,z4A!g7ucW]b@nSg[x|<d?ui`@@1mYnA(~hFKHU ,}ToN' );
define( 'LOGGED_IN_SALT',   'K&+({W+*KKVBV?UQW]cFv]fixPIgvP94iO/*9jcrBp/ 1R{fn;$3$cD 4&M|i~AH' );
define( 'NONCE_SALT',       ' bczknH^Mqj8BXJ+)9z|c#v3~!*gO8g-GS]-)}FD/;rL{r9wh(Y`Ep^Eg]-w-97d' );

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
