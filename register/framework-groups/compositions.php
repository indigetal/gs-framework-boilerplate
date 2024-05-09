<?php 
/**
 * Register "compositions" framework group (styles are located in assets/css/dist/compositions/)
 * 
 * See: https://greenshiftwp.com/documentation/for-developers/how-to-register-own-css-framework-or-enable-core-framework-addon-with-greenshift/
 */

add_filter('greenshift_framework_classes', 'compositions_level_cube_group');
function compositions_level_cube_group($options){
return array(
	array(
	   'label' => esc_html__('Compositions Level (CUBE)', 'textdomain'),
	      'options' => array(
                array(
                    'value'=> 'cluster',
                    'label'=> "Cluster",
                    'type' => "framework",
                ),
                array(
                    'value'=> 'flow',
                    'label'=> "Flow",
                    'type' => "framework",
                ),
                array(
                    'value'=> 'grid',
                    'label'=> "Grid",
                    'type' => "framework",
                ),
                array(
                    'value'=> 'grid[data-layout=\'halves\']',
                    'label'=> "Split 50/50 Grid",
                    'type' => "framework",
                ),
                array(
                    'value'=> 'grid[data-layout=\'thirds\']',
                    'attribute'=> 'data-layout',
                    'attribute_value'=> 'halves',
                    'label'=> "Three column grid",
                    'type' => "framework",
                ),
                array(
                    'value'=> 'repel',
                    'label'=> "Repel",
                    'type' => "framework",
                ),
                array(
                    'value'=> 'repel[data-nowrap]',
                    'label'=> "Repel data-nowrap",
                    'type' => "framework",
                ),
                array(
                    'value'=> 'switcher',
                    'label'=> "Switcher",
                    'type' => "framework",
                ),
                array(
                    'value'=> 'switcher > *',
                    'label'=> "Switcher Direct Children",
                    'type' => "framework",
                ),
                array(
                    'value'=> 'switcher > :nth-child(n + 3)',
                    'label'=> "Third Child Onward of Switcher",
                    'type' => "framework",
                ),
                array(
                    'value'=> 'wrapper',
                    'label'=> "Wrapper",
                    'type' => "framework",
                )
            )
        )
	);
}