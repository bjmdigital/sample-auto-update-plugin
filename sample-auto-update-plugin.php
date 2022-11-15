<?php
/** @noinspection PhpUnused */

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://bjmdigital.com.au/
 * @since             1.0.0
 * @package           Sample Auto Update Plugin
 *
 * @wordpress-plugin
 * Plugin Name:       Sample Auto Update Plugin 1.0.5
 * Plugin URI:        https://blokki.com/
 * Description:       Blocks functionality from BJM Team
 * Requires PHP:      7.0
 * Requires at least: 5.0
 * Tested up to:      5.9
 * Version:           1.0.5
 * Author:            BJM Team
 * Author URI:        https://bjmdigital.com.au/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       blokki
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */

if ( ! defined( 'SAMPLE_AUTO_UPDATE_PLUGIN_PLUGIN_FILE' ) ) {
	define( 'SAMPLE_AUTO_UPDATE_PLUGIN_PLUGIN_FILE', __FILE__ );
}


/**
 * Composer Auto Loader
 */
if ( ! file_exists( plugin_dir_path( __FILE__ ) . 'vendor/autoload.php' ) ) {
	include_once ABSPATH . 'wp-admin/includes/plugin.php';
	deactivate_plugins( basename( __FILE__ ) );
	wp_die( esc_html__( 'Please run composer install before activating plugin.' ) );
}
require plugin_dir_path( __FILE__ ) . 'vendor/autoload.php';


function saup_run_update_checker(){



	$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
		'https://github.com/bjmdigital/sample-auto-update-plugin',
		__FILE__,
		'sample-auto-update-plugin'
	);
//
	//Optional: If you're using a private repository, specify the access token like this:
//	$myUpdateChecker->setAuthentication('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');
	$myUpdateChecker->getVcsApi()->enableReleaseAssets();
}

saup_run_update_checker();