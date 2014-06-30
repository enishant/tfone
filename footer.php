    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/bootstrap.min.js"></script> 
	<div class="container">
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="row">
					<div class="col-md-4">
						<?php if (!dynamic_sidebar('wps-footer-one') ) { ?>
							<h3>Footer Widget One</h3>
							Go to wordpress dashboard<br>
							Appearance > Widgets<br>
							Activate Widget Footer Widget One
						<?php } ?>						
					</div>
					<div class="col-md-4">
						<?php if (!dynamic_sidebar('wps-footer-two') ) { ?>
							<h3>Footer Widget Two</h3>
							Go to wordpress dashboard<br>
							Appearance > Widgets<br>
							Activate Widget Footer Widget Two
						<?php } ?>
					</div>
					<div class="col-md-4">
						<?php if (!dynamic_sidebar('wps-footer-three') ) { ?>
							<h3>Footer Widget Three</h3>
							Go to wordpress dashboard<br>
							Appearance > Widgets<br>
							Activate Widget Footer Widget Three
						<?php } ?>
					</div>
				</div>	
			</div>
		</div>
	</div>
	<div class="container">
		<div class="panel panel-default">
			<div class="panel-footer">&copy; <?php bloginfo('name'); ?></div>
		</div>
	</div>
	<?php wp_footer(); ?>	
  </body>
</html>