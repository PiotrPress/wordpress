<?php declare( strict_types = 1 );

! is_file( '.config' ) or exit;

require __DIR__ . '/vendor/autoload.php';

copy( 'vendor/piotrpress/wordpress-htaccess/res/.htaccess', '.htaccess' );
copy( 'vendor/piotrpress/wordpress-htaccess/res/wp-core/.htaccess', 'wp-core/.htaccess' );
copy( 'vendor/piotrpress/wordpress-config/res/wp-config.php', 'wp-config.php' );

PiotrPress\WordPress\Config::setup( '.config', [
    'WP_CONTENT_DIR' => __DIR__ . '/wp-content'
] );
PiotrPress\WordPress\Config::salt( '.config' );