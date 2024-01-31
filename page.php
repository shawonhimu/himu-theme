<?php get_header(); ?>
	
	<!-- Left sidebar start -->
	
	<div id="gutter"></div>
	<div id="col1">
	  <div id="navcontainer">
		<?php 
		
			dynamic_sidebar('left_sidebar'); 
		
		?>
	  </div>
		
	</div>
	
	<!-- Left sidebar end -->
	
	
	<!-- Main content start -->
	
	<div id="col2">
	  
	  <?php while( have_posts()) : the_post(); ?>
	  
	  
	  
	  <h2><?php the_title(); ?></h2>
	  
	  <blockquote>
		<?php 
			the_post_thumbnail(array(300,300)); // 'medium', array( 'class' => 'aligncenter' ) 
		?>
		<?php 
			the_content();

		?>
	  </blockquote>
	  
	    <?php endwhile; ?>
	  
	  
	</div>
	
	<!-- Right sidebar start -->
	
	<div id="col3">
		<?php 
		
			dynamic_sidebar('right_sidebar'); 
		
		?>
	</div>
	
	<!-- Right sidebar end -->


<?php get_footer(); ?>