<?php
/**
 * BP SVG
 *
 * @package       BPSVG
 * @author        Ondřej Hlaváč
 * @version       1.0.1
 *
 * @wordpress-plugin
 * Plugin Name:   BP SVG
 * Plugin URI:    https://bluepro.cz
 * Description:   Add SVG support
 * Version:       1.0.1
 * Author:        Ondřej Hlaváč
 * Author URI:    https://bluepro.cz
 * Text Domain:   bp-svg
 * Domain Path:   /languages
 */

if (!defined('ABSPATH')) exit;

function bp_svg_support($fileTypes) {
  return array_merge($fileTypes, ['svg' => 'image/svg+xml']);
}

add_filter('upload_mimes', 'bp_svg_support');
