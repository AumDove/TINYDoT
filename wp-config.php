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
define('DB_NAME', 'tinydotlDBkk6bh');

/** MySQL database username */
define('DB_USER', 'tinydotlDBkk6bh');

/** MySQL database password */
define('DB_PASSWORD', 'eBySYKpvhB');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'TXm.A2Leyq.6{EXjXr>${FYrfy7{EXQf$,Bngz}F7QJczn>7Q,7}J4[FZNg@sJkv');
define('SECURE_AUTH_KEY',  '0GZs|-GZSl~1[CWKd!w[C5Oh-o_5:9Slax]~5OHa-p_9:GdSl_x]6;Hati*2#AXLl');
define('LOGGED_IN_KEY',    'jy}F$r,I7Qnbu{^3QFYkcv>B0JgUo|z3NFYvj@4>BYNZs|z0J8R}FYNk@s[C0NZO|');
define('NONCE_KEY',        '~;Hat#GaSldx]_5Ohamex].6PHaxm*D2LiWt#+2LDWibu<*2MEXPj*u;HATqex;IU');
define('AUTH_SALT',        'q*3<EXMfUJcznFcQj>$MBUrfy>BNFYRk!v>F4NkY@0,BUNgzr,80CVNgZs[dVvo');
define('SECURE_AUTH_SALT', '1Kdxl_5]HaOs#9Wpdw:_Olat]*2PDatm#91KDWth+1#9PDXui*2]EXPi_+Tmexq.6');
define('LOGGED_IN_SALT',   ']9SHexl~5]+2<by{*6WPi+t#A2LDXuiu{*3QEbun^3{LfXqi+<EXMjujBYMj$v>^');
define('NONCE_SALT',       'JYr!z:d-:!8YNk@v[C4NGZwkw:_8SGdwl_5:NhZsk~1[CZOlxp_5]HaS]KCWOh-t#');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


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
