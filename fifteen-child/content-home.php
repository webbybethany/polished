<?php
/**
 * @package Fifteen Child
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class("archive artmain col-md-4 col-sm-8 col-xs-12"); ?>>
	
	<div class="main-article curb-effect">   
		<div class="feat-thumb-holder"> 
			
		    <?php if (has_post_thumbnail()) : 	
				the_post_thumbnail('homepage-thumb');	
				else: ?>
					<img width=330 height=270 src="<?php echo get_template_directory_uri()."/images/dthumb.png" ?>">
				<?php endif;
			?>  
		</div>
	     <div class="main-content"> 
<!-- 		     <h2><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>   -->
		     <p><?php echo substr(get_the_excerpt(),0,150)."..."; ?></p>  
		         <a href="<?php the_permalink(); ?>" class="info"><?php _e('View More','fifteen'); ?></a>  
	     </div>  
	</div> 
	 <h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2> 
</article><!-- #post-## -->