<?php
class WPS_Sidebar_Framewrok
{
    function __construct()
    {
		add_action( 'widgets_init', array( $this , 'wps_sidebar_init' ) );    	    
    }

	function wps_sidebar_init()
	{
		$sidebarsarray = array(
		  array(
			'name' => 'Sidebar Right',
			'id' => 'wps-sidebar-right',
		  ),
		  array(
			'name' => 'Footer One',
			'id' => 'wps-footer-one',
		  ),
		  array(
			'name' => 'Footer Two',
			'id' => 'wps-footer-two',
		  ),
		  array(
			'name' => 'Footer Three',
			'id' => 'wps-footer-three',
		  )
		);
	      
		foreach($sidebarsarray as $val)
		{  
		   register_sidebar( array(
			'name' => $val['name'],
			'id' => $val['id'],
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
			) 
		   );
		}  
	}    
}
?>