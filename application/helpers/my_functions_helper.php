<?php

hooks()->add_action('admin_init', 'my_custom_menu_item_collapsible');

function my_custom_menu_item_collapsible()
{
    $CI = &get_instance();

    $CI->app_menu->add_sidebar_menu_item('custom-menu-unique-id', [
        'name'     => 'Project Management', // The name if the item
        'collapse' => true, // Indicates that this item will have submitems
        'position' => 2, // The menu position
        'icon'     => 'fa fa-list', // Font awesome icon
    ]);

    
   
   /*
    $CI->app_menu->add_sidebar_children_item('custom-menu-unique-id', [
        'name'     => _l('projects'),
        'href'     => admin_url('projects'),
        'icon'     => 'fa fa-indent',
        'position' => 1,
        
    ]);
    */

    
    $CI->app_menu->add_sidebar_children_item('custom-menu-unique-id', [
        'name'     => _l('staff_members'),
        'href'     => admin_url('staff'),
        'icon'     => 'fa fa-user',
        'position' => 1,
        
    ]);

    
     $CI->app_menu->add_sidebar_children_item('custom-menu-unique-id', [
       
        'href'     => admin_url(''),
        'name'     => 'Staff Workload', // The name if the item
        'position' => 3, // The menu position
        'icon'     => 'fa fa-user', // Font awesome icon
        
    ]);
    


  

    
    

    
}