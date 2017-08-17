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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'jennifer');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '.lO<6R`/9xPTk aIW__Kof9;5Hl#2<99ZZ#u39rO~EmM g1:}<u.K0tf1Qh4QI^t');
define('SECURE_AUTH_KEY',  '%G]BTAu]cCoKFc>A12 yCh.SyR%7s;TCRC@P_7tS%>r(8&so`i=gQu7CZDiiwZw*');
define('LOGGED_IN_KEY',    '#FahA{TINSq4`/VXtpgrtEn0J&Q}Eu<I}L]=_(DMRBM_Vme-0SxBl0L yko,GH;^');
define('NONCE_KEY',        '80k`pbMm-U^h2[zuRgkevu+aFf:T=29(>1Wy gb)7EZsrwN*b)Cgz[h.,lF4mXqJ');
define('AUTH_SALT',        'N/70K{2)!/Ksx:mE6@vG}H@=?*DOBC$B!W,&|j*?d`=yL8w)<*|<s;n)~`RBh1#M');
define('SECURE_AUTH_SALT', 'b#{uILmigFPV{h(|JCg,|QV;y7wc6<2 EcP=Ay>;RUtnNa4|}3R*6%Cnk;OtfoA9');
define('LOGGED_IN_SALT',   '=%g?1{r&A2lY^8=+FZ45ebRgjh%Z%[)=OE+EO8in)Zy%LG6&d47KBz/I#LYrTyaJ');
define('NONCE_SALT',       '}qgu%Bj~{5f}l+B:cXf=HZ8y. %_$NhOfNpbgydFs4`yHC:nVczX:H$zcq`JpFbi');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
