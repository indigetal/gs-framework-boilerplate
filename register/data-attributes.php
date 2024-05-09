<?php

add_filter('greenshift_data_preset_classes', 'cube_data_attributes');
function cube_data_attributes($options){
   $options[] = 
   [
      'attribute'=> 'data-state',
      'label'=> "Reversed Data Attribute",
      'type' => "preset",
      'attribute_value'=> 'reversed'
   ];
   return $options;
}