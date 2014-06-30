<?php get_header(); ?>
    <div class="container">
		<?php if(!is_home() || !is_front_page())
		{
		?>
	    	<div class="panel panel-default">
	        <?php
	        	$wpsbreadcrumb = new WPS_Breadcrumb_Framewrok; 
	        	$wpsbreadcrumb->the_breadcrumb();
	        ?>
	    	</div> 
	    <?php 
		}
		else
		{	
			$header_image = get_header_image();
			if ( ! empty( $header_image ) )
			{
		?>
			<div class="panel panel-default">
			  <img src="<?php header_image(); ?>" width="100%" alt="" />
			 </div> 
		<?php
			}
		}
		?>
		<div class="panel panel-default">
	      <div class="panel-body">
	      	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		      	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		      	<h1><?php the_title(); ?></h1>
		    	 <?php the_content(); ?>
		    	 <?php comment_form(); ?>
		  		<?php endwhile; endif; ?>
	  		</div>
	      </div>
      	</div>
    </div>
<?php get_footer(); ?>