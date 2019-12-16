<article class="index-posts">

	<div class="position-index">

		<div class="img-index">
			
			<?php the_post_thumbnail( 'large', array( 'class' => '' ) )?>

	    </div>
			 <div class="date-post-index">

	    		<h6><?php the_time('F j, Y'); ?></h6>
	    			   	 
	    	</div>

	</div>

	<div class="title-index">

			 <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h2>
    	     <p><?php the_excerpt(); ?>  </p>

	</div>

	<div class="btn-index d-inline">

		<a href="<?php the_permalink(); ?> "> <button> Saber mas</button> </a>

	</div>

	<div class="data-post-home d-inline">

    			   	  <div class="d-inline-block ">
    			   	  	<i class="d-inline fas fa-user-circle"></i><p class="d-inline"> <?php the_author(); ?> </p>
    			   	  </div>
    			   	  <div class="d-inline-block ">
    			   	  	<i class=" d-inline  fas fa-comments"></i><p class="d-inline"> <?php comments_number(); ?> </p>
    			   	  </div>

    </div>


</article><!--- each post index -->