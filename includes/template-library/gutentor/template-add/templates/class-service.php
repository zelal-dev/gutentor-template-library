<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( ! class_exists( 'Gutentor_Template_Library_Service' ) ) {

    /**
     * Functions related to Service Block
     * @package Gutentor
     * @since 1.1.5
     *
     */

    class Gutentor_Template_Library_Service extends Gutentor_Template_Library_Base{
        
        /**
         * Gets an instance of this object.
         * Prevents duplicate instances which avoid artefacts and improves performance.
         *
         * @static
         * @access public
         * @since 1.1.5
         * @return object
         */
        public static function get_instance() {

            // Store the instance locally to avoid private static replication
            static $instance = null;

            // Only run these methods if they haven't been ran previously
            if ( null === $instance ) {
                $instance = new self();
            }

            // Always return the instance
            return $instance;

        }

        /**
         * Load block library
         * Used for blog template loading
         *
         * @since      1.1.5
         * @package    Gutentor
         * @author     Gutentor <info@gutentor.com>
         *
         * @param $templates_list array
         * @return array
         */
        public function add_block_template_library( $templates_list ){

            $block_library_list = array(

                // array(
                //     'title'             => __( 'Service', 'gutentor' ),
                //     'type'              => 'template',
                //     'author'            => __( 'CosmosWP', 'gutentor' ),
                //     'keywords'          => array( 'service', 'service 3' ),
                //     'categories'        => array( 'service' ),
                //     'template_url'      => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/templates/services-page/service-3/template.json',
                //     'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/templates/services-page/service-3/service.jpg',
                //     'demo_url'    => 'https://www.demo.cosmoswp.com/demo-3/services/',
                // ),
                // array(
                //     'title'             => __( 'Service', 'gutentor' ),
                //     'type'              => 'template',
                //     'author'            => __( 'CosmosWP', 'gutentor' ),
                //     'keywords'          => array( 'service', 'service 4' ),
                //     'categories'        => array( 'service' ),
                //     'template_url'      => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/templates/services-page/service-4/template.json',
                //     'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/templates/services-page/service-4/service.jpg',
                //     'demo_url'    => 'https://www.demo.cosmoswp.com/demo-5/services/',
                // ),

                // array(
                //     'title'             => __( 'Service', 'gutentor' ),
                //     'type'              => 'template',
                //     'author'            => __( 'CosmosWP', 'gutentor' ),
                //     'keywords'          => array( 'service', 'service 5' ),
                //     'categories'        => array( 'service' ),
                //     'template_url'      => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/templates/services-page/service-5/template.json',
                //     'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/templates/services-page/service-5/service.jpg',
                //     'demo_url'    => 'https://www.demo.cosmoswp.com/demo-9/services/',
                // ),
                
            );

            return array_merge_recursive( $templates_list, $block_library_list );
        }
    }
}
Gutentor_Template_Library_Service::get_instance()->run();