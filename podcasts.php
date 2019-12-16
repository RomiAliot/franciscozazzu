<?php
 /* 

Template name: Podcasts

*/

get_header();
?>

    <div class="header-single">

	<h2> PAGINA DE NOTAS</h2>
	
   </div>

    
	<div id="primary" class="content-area container content-posts">
     <div class="row">


		<div id="main" class="site-main col-12 col-sm-9 col-md-9 col-lg-9 col-xl-9 ">


		
			
			<?php $args= array(
    			'order'     => 'DESC',
    			'post_type' => 'archivos',
    			'posts_per_page' => -1,

    		);

    		$posts= new WP_Query($args);
    		while($posts->have_posts()): $posts->the_post();
    		?>

    		<div class="entry-content">
				<?php the_content(); ?> 
			</div>

    		<h4 class="h4-podcast"><?php the_title(); ?></h4>
    	    



    		<?php endwhile; wp_reset_postdata(); ?>

		</div><!-- #main -->

		<div class="sidebar col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
			<?php get_sidebar(); ?>

		</div>


 </div>
</div><!-- #primary end cntainer -->

<?php

get_footer();
