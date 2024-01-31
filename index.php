
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
	  <h2>   <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h2>
	  <blockquote>
		<?php 
			the_post_thumbnail(array(300,300)); // 'medium', array( 'class' => 'aligncenter' ) 
		?>
		<?php 
			the_content();

		?>
	  </blockquote>
	  
	  <!--
	  <blockquote><img class="myimage2" src="<?php echo esc_url(get_template_directory_uri())?> /img/box.jpg" alt="berries" title="berries" />Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nulla congue, velit tristique mattis auctor, velit elit euismod diam, a interdum tortor enim eget ante. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nulla congue, velit tristique mattis auctor, velit elit euismod diam, a interdum tortor enim eget ante. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</blockquote>   -->
	  
	  <?php endwhile; ?>
	  
	  
	</div>
	
	<!-- Main content end -->
	
	<!-- Right sidebar start -->
	
	<div id="col3">
		<?php 
		
			dynamic_sidebar('right_sidebar'); 
		
		?>
	</div>
	
	<!-- Right sidebar end -->
	
	
	<?php get_footer(); ?>
	