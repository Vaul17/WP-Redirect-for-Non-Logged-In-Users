<?php
/*
Plugin Name: Dashboard Redirect for Non-Logged-In Users
Description: Redirects non-logged-in users to the WordPress login page when they attempt to access the /dashboard/ page.
Version: 1.2
Author: TC
License: GPL2
*/

// Prevent direct access to this file
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Redirect non-logged-in users from /dashboard/ to wp-login.php
 */
function xai_redirect_non_logged_in_dashboard() {
    if (!is_user_logged_in() && is_page('dashboard')) {
        wp_redirect(wp_login_url(get_permalink()));
        exit;
    }
}
add_action('template_redirect', 'xai_redirect_non_logged_in_dashboard');
?>