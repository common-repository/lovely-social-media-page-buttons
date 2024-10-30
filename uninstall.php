<?php

// If uninstall is not called from WordPress, exit
if ( !defined( 'WP_UNINSTALL_PLUGIN' ) ) {
    exit();
}

$option_name = 'lovely_social_page_buttons_settings';

delete_option( $option_name );

// For site options in Multisite
delete_site_option( $option_name );

?>
