<?php 
// Register variables, see https://greenshiftwp.com/documentation/for-developers/how-to-register-own-variable-set-programmatically/
add_filter('greenshift_global_variables', 'my_custom_variable_for_gs');
function my_custom_variable_for_gs($variables){
    if(empty($variables)){
        $variables = array();
    }
    $variables[] = array(
       'label'=> 'XS Size',
       'value'=> "var(--gs-size-xs)",
       'variable' => "--gs-size-xs",
       'variable_value' => "0.85rem",
       'group' => 'size'
    );
    return $variables;
}