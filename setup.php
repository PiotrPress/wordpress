<?php

copy( 'vendor/piotrpress/wordpress-htaccess/res/.htaccess', '.htaccess' );
copy( 'vendor/piotrpress/wordpress-config/res/wp-config.php', 'wp-config.php' );
copy( 'vendor/piotrpress/wordpress-config/res/.config', '.config' );

$config = require_once( $file = '.config' );
$config[ 'WP_CONTENT_DIR' ] = __DIR__ . '/wp-content';
file_put_contents( $file, sprintf( '<?php return %s;', var_export( $config, true ) ) );