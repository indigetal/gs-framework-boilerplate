<?php 
/**
 * Register "compositions" framework group (styles are located in assets/css/dist/compositions/)
 * 
 * See: https://greenshiftwp.com/documentation/for-developers/how-to-register-own-css-framework-or-enable-core-framework-addon-with-greenshift/
 */

add_filter('greenshift_framework_classes', 'utilities_level_cube_group');
function utilities_level_cube_group($options){
return array(
	array(
	   'label' => esc_html__('Utilities (CUBE)', 'textdomain'),
	      'options' => array(
                array(
                    'value'=> 'region',
                    'label'=> "Region",
                    'type' => "framework",
                ),
                array(
                    'value'=> 'visually-hidden',
                    'label'=> "Visually Hidden",
                    'type' => "framework",
                )
            )
        )
	);
}