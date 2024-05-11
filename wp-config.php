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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '/KZ#NSxy+Gozv<,LKJMw;^JTQHa:lf W4+G5o-_M8J}.R<CTbvp1LfREh98[s8BN' );
define( 'SECURE_AUTH_KEY',  'O7Ex!N=].m)$S&J}=82a;wm+ VT~w$:wi!>$;Eq)z!@oCq?4.3G(,tZ9@@8B@1H)' );
define( 'LOGGED_IN_KEY',    '0QF2;:KI!YcyV06]<%$Jd(V<JV<h6vyGp]x7z]Qr&OGldCt4q4>z;{hK%PEF,vpE' );
define( 'NONCE_KEY',        '/%ZL`V7^so~V?2x9S?2mxbz2S_R|akOX.4EK~J3V4V`$E@vmuI8Zbp^;JCzJ^Jxn' );
define( 'AUTH_SALT',        'V)VR?-C41JM.c2S#4r_=p~0Eek @xX*M,/Mg>LF53@$c!Bx?8f>yHma7YXgoUGeR' );
define( 'SECURE_AUTH_SALT', 'eZqQJkc/ZJFeCabUS9u`T5u(ofq?!UzfouRj?1tG>N@Eu,T&owKG60EJCfEB%6+f' );
define( 'LOGGED_IN_SALT',   'fi0y[Bm:1{ZT+sTdJ>&Qr:![nNj0rzx|vO0k]_uJy==jW>rt 4o6fF4OI6jT@v~]' );
define( 'NONCE_SALT',       '704v-!O?_,U97>*8sG_>)V?|C*P,Y-(;NDY9HINtM|^.vflcErXf:YT1eXRO%ZW9' );

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
