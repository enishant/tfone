<?php
$framework_files = array(
    'options-framework' ,
    'sidebar-framework' ,
    'navigation-framework' ,
    'breadcrumb-framework' ,
    );
foreach($framework_files as $framework_file)
{
    require_once($framework_file . '.php');
}

class WPS_Main_Framework 
{
    function __construct()
    {
        new WPS_Options_Framewrok();
        new WPS_Sidebar_Framewrok();
        new WPS_Navigation_Framewrok();
    }
}
?>