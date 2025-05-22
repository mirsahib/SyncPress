<?php
/**
 * Plugin Name: Awesome Plugin
 * Description: A brief description of what your plugin does.
 * Version: 1.0
 * Author: Mir Sahib
 */

// Example: Add a message to the admin footer
add_filter('admin_footer_text', function () {
    return 'Thank you for using My Awesome Plugin! made with ❤️ by Mir Sahib 247';
});
