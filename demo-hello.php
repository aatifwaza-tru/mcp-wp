<?php
/**
 * Plugin Name: Demo Hello
 * Plugin URI:  https://github.com/aatifwaza-tru/mcp-wp
 * Description: A starter demo plugin for the mcp-wp WordPress project.
 * Version:     1.0.0
 * Author:      aatifwaza-tru
 * License:     GPL-2.0+
 * Text Domain: demo-hello
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

/**
 * Display a hello message in the admin dashboard.
 */
function demo_hello_admin_notice() {
    echo '<div class="notice notice-success"><p>'
        . esc_html__( 'Hello from the Demo Hello plugin! CI/CD is live.', 'demo-hello' )
        . '</p></div>';
}
add_action( 'admin_notices', 'demo_hello_admin_notice' );
