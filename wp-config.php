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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'O<1Ow)l%D,{:Nn.g87_[Wz|w<^29}]Rdi=8XRLrS;k,k}^lYG/jD0#Lo9:$&~&w>');
define('SECURE_AUTH_KEY',  'o=RnYU3Qiar+#u@0qT[^//u7e)*&kj6S9bEpz&R.u3{TAEj$<!9apzvaca>GSqUj');
define('LOGGED_IN_KEY',    'viyYD%d6obp.Tg{i+S3X]aS?88}l xQ@dqDQ}PBk2wijtotx<:P%j8tNnW<Ky[sU');
define('NONCE_KEY',        '6A1K/*k]jn<vx.VCPM8+aT<#-v~MN%Fg,7/gRx6=1MogB?)1&[y,EF*ji,qSFcHF');
define('AUTH_SALT',        'p/h.-Bp(Sj`qJ~ZX.nJr=DM3`NOZad(@e9:3l,.Leot4BAIdg<8-KSH@_^=P#y`#');
define('SECURE_AUTH_SALT', '5gN:<t+6,J=H/E*x|g|jV(bpu=RhrX9DYH~EbO6z#h& .K#TT)>[hmr-+Kpo$g;z');
define('LOGGED_IN_SALT',   '73],#vX.]/KSzqXfKIkh>ympWnGzS)o&C^r*A87U>!+KS?M=|X_ZzMz)fj(0PP3w');
define('NONCE_SALT',       'e^w;[4jt@n3J6#vjMC70cNkFT3W|RNeK4A!5y~ QbOiwTHGJx1r)eP>{0Ul!5[RU');

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
