<?php
class WPS_Options_Framewrok
{
    function __construct()
    {
        add_action( 'admin_menu', array($this,'register_my_custom_menu_page') );
    }	
    
	function register_my_custom_menu_page()
	{
		add_theme_page( 'custom menu title', 'Theme Options', 'manage_options', 'themeoptions', array($this,'my_custom_menu_page'), '');
	}

	function my_custom_menu_page()
	{
	?>
		<div class="my-option-wrapper wrap">
			<h2>Theme Options</h2>
			<h3 class="option">General Settings</h3>
			<div class="my-option-body">
				General Settings Options
			</div>

			<h3 class="option">Navigation</h3>
			<div class="my-option-body">
				<?php 
				echo '<strong>Navigation Menu\'s locations available with this theme:</strong>';
				$wps_registered_nav_locations = get_registered_nav_menus();
				echo '<ul>';
				foreach($wps_registered_nav_locations as $wps_registered_nav_location)
				{
					echo '<li>' . $wps_registered_nav_location. '</li>';
				}
				echo '</ul>';
				
				echo '<strong>Menu\'s created for navigation within wordpress</strong>';
				$wps_created_menus = wp_get_nav_menus();
				echo '<ul>';
				foreach($wps_created_menus as $wps_created_menu)
				{
					echo '<li>' . $wps_created_menu->name . '</li>';
				}
				echo '</ul>';
				?>
			</div>
			
			<h3 class="option">Layout</h3>
			<div class="my-option-body">
				Layout Options
			</div>
				
			<h3 class="option">Ad Management</h3>
			<div class="my-option-body">
				Ad Management Options
			</div>
			
			<h3 class="option">Colorizations</h3>
			<div class="my-option-body">
				Colorizations Options
			</div>
			
			<h3 class="option">SEO Control</h3>
			<div class="my-option-body">
				SEO Control Options
			</div>
			
			<h3 class="option">Integration</h3>
			<div class="my-option-body">
				Integration Options
				<br><br>
			</div>

			<h3 class="option">Tracking Code</h3>
			<div class="my-option-body">
				Tracking Code Options
			</div>
			
			<h3 class="option">Support</h3>
			<div class="my-option-body">
				Support Options
			</div>
			
			<br>
			<div class="button-primary">Save Options</div>	 <div class="myresetbutton button-primary">Reset</div>	
		</div>
		<style type="text/css">
		div.my-option-wrapper {
			width:90%;
			
		}
		div.my-option-wrapper h3 {
			margin: 15px 0 0 0;
			padding: 15px 15px 15px 40px;
			font-size: 1.2em;
			color: #4E4C41;
			background: #F1F1F1 url('<?php echo bloginfo('template_url') . '/framework/images/toggle.gif'; ?>') no-repeat 10px 13px;
			border: 1px solid #E6E6E6;
			-moz-border-radius: 6px;
			-webkit-border-radius: 6px;
			cursor: pointer;
		}
		div.my-option-wrapper h3.open {
			-moz-border-radius: 6px 6px 0 0;
			-webkit-border-radius: 6px 6px 0 0;
			background-position: 10px -27px;
		}
		div.my-option-body {
			margin: 0;
			padding: 15px;
			background: #FBFBFA;
			border: 1px solid #E6E6E6;
			border-top: none;
			-moz-border-radius: 0 0 6px 6px;
			-webkit-border-bottom-left-radius: 6px;
			-webkit-border-bottom-right-radius: 6px;
		}
		</style>
		<script type="text/javascript">
			jQuery(document).ready(function() {
				jQuery('div.my-option-body').hide();
				jQuery('h3.option').click(function() {
					jQuery(this).toggleClass("open");
					jQuery(this).next("div").slideToggle('1000');
					return false;
				});
				jQuery('.myresetbutton').click(function() {
					return confirm('Are you sure you want to reset?');
				});
			});
		</script>	
	<?php	
	}
}
?>