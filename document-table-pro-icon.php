<?php 
/**
 * Plugin Name: Document Table Pro Icon
 * Plugin URI: https://github.com/DevWael/document-table-pro-icon
 * Description: Update PDF icon to the document table pro
 * Version: 1.0.0
 * Author: Ahmad Wael
 * Author URI: https://www.bbioon.com/
 * License: GPL2
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
} 

class DW_Download_icon {
    public function __construct() {
        add_action('wp_enqueue_scripts', array($this, 'enqueue_scripts'));
        add_filter('document_library_pro_icon_svg', array($this, 'document_library_pro_icon_svg'));
    }

    public function enqueue_scripts(){
        // add inline css
        wp_register_style( 'dw-document-library-pro', false );
        wp_enqueue_style( 'dw-document-library-pro' );
        wp_add_inline_style('dw-document-library-pro', '.dlp-table-document-link-wrap .dlp-file-icon{ width: 30px; height: 30px; }');
    }

    public function document_library_pro_icon_svg($svg_array) {
        $svg_array['pdf'] = '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Layer_1" x="0px" y="0px" viewBox="0 0 504 636" style="enable-background:new 0 0 504 636;" xml:space="preserve"><style type="text/css">	.st0{fill:#D70A0A;}	.st1{fill:#FFFFFF;}</style><path class="st0" d="M404.4,343.02h-249.9c-6.27,0-11.36,4.73-11.36,11c0,6.27,5.09,11,11.36,11h249.9c6.27,0,11.36-4.73,11.36-11 C415.76,347.75,410.68,343.02,404.4,343.02z"></path><path class="st0" d="M404.4,279.02h-249.9c-6.27,0-11.36,5.23-11.36,11.5c0,6.27,5.09,11.5,11.36,11.5h249.9 c6.27,0,11.36-5.23,11.36-11.5C415.76,284.25,410.68,279.02,404.4,279.02z"></path><path class="st0" d="M302.33,18.05v-0.03H102.79c-15.43,0-27.46,12.88-27.46,28.31v27.69h23V59.65c0-10.24,7.54-18.63,17.78-18.63 h186.22v131.04c0,15.32,12.4,27.96,27.71,27.96h131.29v322.35c0,10.24-8.57,18.65-18.8,18.65h-83.29c-0.59,1-1.29,1.96-2.11,3.03 l-14.8,18.97h113.53c15.43,0,28.48-11.9,28.48-27.33V199.96L302.33,18.05z"></path><path class="st0" d="M199.92,541.02h-83.81c-10.24,0-17.78-8.41-17.78-18.65V237.02h-23v298.67c0,15.43,12.03,27.33,27.46,27.33 h114.06l-14.8-18.93C201.21,543.01,200.51,542.02,199.92,541.02z"></path><path class="st0" d="M340.45,524.02h-30.12V422.23c0-6.84-5.31-13.21-12.15-13.21h-37.17c-6.84,0-12.67,6.37-12.67,13.21v101.79 h-29.6c-5.96,0-9.4,7.08-5.87,11.67l60.86,79.38c2.91,3.78,8.83,3.94,11.74,0.16l60.86-79.62 C349.85,531.03,346.42,524.02,340.45,524.02z"></path><g>	<path class="st0" d="M278.67,113.53c0-15.36-12.45-27.8-27.8-27.8H52.47c-15.36,0-27.8,12.45-27.8,27.8v80.39  c0,15.36,12.45,27.8,27.8,27.8h198.39c15.36,0,27.8-12.45,27.8-27.8V113.53z"></path>	<g>		<path class="st1" d="M56.06,191.33v-75.22c0-1.13,0.68-1.8,1.8-1.8h32.32c16.44,0,23.31,9.68,23.31,23.54v12.5   c0,13.85-6.87,23.54-23.31,23.54H72.95v17.45c0,1.13-0.68,1.8-1.8,1.8H57.86C56.73,193.14,56.06,192.46,56.06,191.33z    M88.71,158.79c4.5,0,7.88-1.91,7.88-8.9v-11.6c0-6.76-3.38-8.9-7.88-8.9H72.95v29.39H88.71z"></path>		<path class="st1" d="M126.44,191.33v-75.22c0-1.13,0.68-1.8,1.8-1.8h33.22c16.55,0,22.97,9.35,22.97,23.31v32.21   c0,13.96-6.42,23.31-22.97,23.31h-33.22C127.12,193.14,126.44,192.46,126.44,191.33z M160,178.05c4.5,0,7.54-1.69,7.54-8.67   v-31.31c0-6.87-3.04-8.67-7.54-8.67h-16.67v48.65H160z"></path>		<path class="st1" d="M198.52,191.33v-75.22c0-1.13,0.68-1.8,1.8-1.8h45.27c1.13,0,1.69,0.68,1.69,1.8v11.49   c0,1.13-0.56,1.8-1.69,1.8h-30.18v17h27.93c1.13,0,1.8,0.68,1.8,1.8v11.04c0,1.13-0.68,1.8-1.8,1.8h-27.93v30.29   c0,1.13-0.68,1.8-1.8,1.8h-13.29C199.19,193.14,198.52,192.46,198.52,191.33z"></path>	</g></g></svg>';
        
        return $svg_array;
    }
}

$dw_download_icon = new DW_Download_icon();