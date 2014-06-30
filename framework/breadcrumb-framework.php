<?php
class WPS_Breadcrumb_Framewrok
{
    function __construct()
    {
        
    }

	function the_breadcrumb() 
	{
	    global $post;
	    echo '<ul id="breadcrumbs">';
	    if (!is_home()) {
	        echo '<li><a href="';
	        echo home_url();
	        echo '">';
	        echo 'Home';
	        echo '</a></li><li class="separator"> / </li>';
	        if (is_category() || is_single()) {
	            echo '<li>';
	            the_category(' </li><li class="separator"> / </li><li> ');
	            if (is_single()) {
	                echo '</li><li class="separator"> / </li><li>';
	                the_title();
	                echo '</li>';
	            }
	        } elseif (is_page()) {
	            if($post->post_parent){
	                $anc = get_post_ancestors( $post->ID );
	                $title = get_the_title();
	                foreach ( $anc as $ancestor ) {
	                    $output = '<li><a href="'.get_permalink($ancestor).'" title="'.get_the_title($ancestor).'">'.get_the_title($ancestor).'</a></li> <li class="separator">/</li>';
	                }
	                echo $output;
	                echo '<strong title="'.$title.'"> '.$title.'</strong>';
	            } else {
	                echo '<li><strong> '.get_the_title().'</strong></li>';
	            }
	        }
	    }
	    elseif (is_tag()) {single_tag_title();}
	    elseif (is_day()) {echo"<li>Archive for "; the_time('F jS, Y'); echo'</li>';}
	    elseif (is_month()) {echo"<li>Archive for "; the_time('F, Y'); echo'</li>';}
	    elseif (is_year()) {echo"<li>Archive for "; the_time('Y'); echo'</li>';}
	    elseif (is_author()) {echo"<li>Author Archive"; echo'</li>';}
	    elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {echo "<li>Blog Archives"; echo'</li>';}
	    elseif (is_search()) {echo"<li>Search Results"; echo'</li>';}
	    echo '</ul>';
	}

	function the_breadcrumb_css()
	{
	    ?>
	    <style type="text/css">
	        #breadcrumbs
	        {
	            list-style:none;
	            margin:10px 0;
	            overflow:hidden;
	        }
	         
	        #breadcrumbs li 
	        {
	            float:left;
	            margin-right:15px;
	        }
	         
	        #breadcrumbs .separator
	        {
	            font-weight:700;
	            font-size:20px;
	            color:#999;
	        }
	    </style>
	    <?php
	}
}
?>