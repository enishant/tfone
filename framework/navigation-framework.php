<?php
class WPS_Navigation_Framewrok
{
    function __construct()
    {
        $this->register_navigation_menus();
    }

	function register_navigation_menus()
	{
		register_nav_menus( 
		    array(
		        'primary-menu' => 'Primary Menu',
		        'secondary-menu' => 'Secondary Menu',
		        'footer-menu' => 'Footer Menu',
		    )
		);
	}    
}
?>