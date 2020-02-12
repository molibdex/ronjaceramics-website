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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'DXbez6HzQTlxIZcUndKibzvDXtzP41fcxZRCAPYDIm/P5lZXIWS3h2CJL7VguF0cpFp4dl3tuXmuxCkZs9qZow==');
define('SECURE_AUTH_KEY',  '99VbqpcxzNRcQTrmWihiWL3yKF1K4O5PcjKWJH/R7kmN5PiJnAweWJ6ee8slmZCEnyaJHNDaSdBhwXRnWrmYFA==');
define('LOGGED_IN_KEY',    'OfK86nsjhhWjL21kfjg8Z7/EdUEbj829FS6gh5rms4F58DMNp6EF62wwoGmAP4yENqtIwrrIP0kaufWFEbj5bQ==');
define('NONCE_KEY',        'bfR7iW1eSjFULNat47IEofqckucFcp1xeafGpwh75AyrxC7kqQC1LTmJpkOPaSj54ktUKPIMAotUwU58TmVzlw==');
define('AUTH_SALT',        'wvK401vWR1GSg6SRdAL/g9n3A8y82bMjo3mEPFpvwUXnZvvgbIesgzVG+0qi8jTbGOMbjYV2ypE/gmc9rVx1cA==');
define('SECURE_AUTH_SALT', 'GpLMQHRrgZU0zYFnHmlSjf9T84Fh7vAOXslitFE+ipSWH1K8hPiNndWirhbIEa6lbRc1rC/LQprjitJTdit5Sw==');
define('LOGGED_IN_SALT',   'FnYoznozDYh4pVSS5igvl9pnQFfwE9VQlayQ2FNmr0rclx60wXbeq0Ia1TlSwwZAljLzmFY9vBHM6/V2+lADMA==');
define('NONCE_SALT',       '1juKS2Lt1P8GitdNJzAxb1UcQlcOuUstFc3TkvxmRPijY7FIxmGiraNaVFwoDLNIBuP1TG4huabt8bJ9g3i+PA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
