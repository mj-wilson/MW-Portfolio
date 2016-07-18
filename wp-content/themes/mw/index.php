<?php get_header(); ?>

 	<div class="page">
    		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
	  	<h1><?php the_title(); ?></h1>
	  	<?php the_content(); ?>
	  	
	    <?php endwhile; ?>
	    <?php endif; ?>
	        
    </div> <!-- end page -->


<?php get_footer(); ?>
