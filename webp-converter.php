<?php
/*
Plugin Name: Webp Converter
Plugin URI: #
Description: Speed up your website by serving images in WebP format. This plugin will replace files in standard JPEG, PNG and GIF formats with WebP format.
Version: 1.0.0
Text Domain: webp-converter
Domain Path: /languages
Author: aviplugins.com
Author URI: https://www.aviplugins.com/
*/

/*
	  |||||   
	<(`0_0`)> 	
	()(afo)()
	  ()-()
*/

namespace WEBP\Init;

use WEBP\Init as Init;
use WEBP\Scripts as Scripts;
use WEBP\Settings as Settings;

define('APWEBP_NAME', 'Webp Converter');
define('APWEBP_DIRECTORY_NAME', 'webp-converter');
define('APWEBP_DIRECTORY_PATH', dirname(__FILE__));
if (!defined('AP_SITE')) {
    define('AP_SITE', 'https://www.aviplugins.com/');
    // define('AP_SITE', 'http://aviplugins.local/');
}
if (!defined('AP_API_BASE')) {
    define('AP_API_BASE', AP_SITE . 'api/');
}

function plug_install_apwebp_converter() {
    include_once ABSPATH . 'wp-admin/includes/plugin.php';
    if (is_plugin_active('webp-converter-pro/webp-converter.php')) {
        wp_die('It seems you have <strong>Webp Converter PRO</strong> plugin activated. Please deactivate that to continue.');
        exit;
    }

    include_once APWEBP_DIRECTORY_PATH . '/config/config.php';
    include_once APWEBP_DIRECTORY_PATH . '/includes/class-settings.php';
    include_once APWEBP_DIRECTORY_PATH . '/includes/class-scripts.php';
    include_once APWEBP_DIRECTORY_PATH . '/functions.php';

    new Settings\APWEBP_Converter_Settings;
    new Scripts\APWEBP_Converter_Scripts;
}

class APWEBP_Converter_Pre_Checking {
    function __construct() {
        plug_install_apwebp_converter();
    }
}

new Init\APWEBP_Converter_Pre_Checking;

add_filter('wp_get_attachment_image_src', 'apwebp_ap_convert_url_for_images', 10, 4);
add_filter('wp_get_attachment_url', 'apwebp_ap_convert_url_for_attachments');
add_action('plugins_loaded', 'apwebp_text_domain');