<?php 
/**
 * Register "blocks" framework group (styles are located in assets/css/dist/blocks/)
 * 
 * See: https://greenshiftwp.com/documentation/for-developers/how-to-register-own-css-framework-or-enable-core-framework-addon-with-greenshift/
 */

add_filter('greenshift_framework_classes', 'blocks_level_cube_group');
function blocks_level_cube_group($options){
return array(
	array(
	   'label' => esc_html__('Blocks Level (CUBE)', 'textdomain'),
	      'options' => array(
                array(
                    'value'=> 'testing',
                    'label'=> "Testing",
                    'type' => "framework",
                )
            )
        )
	);
}