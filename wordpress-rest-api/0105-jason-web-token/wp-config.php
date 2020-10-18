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

// ** MySQL settings ** //
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
define('AUTH_KEY',         '+SuYhiZqkR/6tNFI6GMFpZklFhpnthSGGp3jJwNeGv/w/ihLy82waTXLCydHu+0ISfkrgolDt8LcnSTzt7++dg==');
define('SECURE_AUTH_KEY',  'ahqjHTzAizoQ6w9tyZMuMeHt31gXnQ5puwffbI03rSAlTwTZl56zQ+4GonrkSVP1T/QR2szI8KXAsMB2rh0rDw==');
define('LOGGED_IN_KEY',    'dLcjbRwSBE+pJ8YGXqYYd6sBIUoXV/6F3mw9GmwFnbtRFRuwyEcVjhdxBjp8k1NfIBHNctF8doEynLLY/JSMYg==');
define('NONCE_KEY',        'POpmBVrPbsDS9amg7oDIReGYhKQptlf9AIax+KeUNFPqof3jWB4unc+i3jHap3ODzAjDacEB/Nk8OasPECpgrA==');
define('AUTH_SALT',        'EvjT2A0LGsJqoic1lRRWjrsYkRiKqguLZFniL8Do4GgcSTlggWw78DtFm+bFOZKj5kMdrTODfxK6TY+HtBkNVA==');
define('SECURE_AUTH_SALT', '2g9iseP79YC7qtYUo3LMFxkhMT3co4Yw3iRHPvxzdlSJb8p+RGTX1Ln9aGJyg+anxHH789laU4lAHmz9xZ5oJA==');
define('LOGGED_IN_SALT',   'skdW0uOktQZc93HRRxGHXoYA8LpX2ea0KTzc3RcjOaCYvqAS4gcQLS9kau0k+yWl5qL67Hd0jP4IV5JGM8C3cg==');
define('NONCE_SALT',       'm/zvBcM6B3f/bGG4P1umAORvME5NbeQZGjotVpjgQyHfmZ9rWxDrJ2IbkB7nQDpgufR7g4WQWhsntU2YNnBWKA==');
define('JWT_AUTH_SECRET_KEY', '6{hG=KPl j#OS&Z? #k2ijw*XI4Qw%)K&-UkH9`EJO[cRsx7BrB#4IX|EM0!;H,e');

define('JWT_AUTH_CORS_ENABLE', true);

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
