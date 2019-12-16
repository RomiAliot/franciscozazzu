<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package franciscozazzu
 */

?>



<article  id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header text-center container">

        <div class="img-post">
        	
        	<?php franciscozazzu_post_thumbnail(); ?>

        </div><!--end entry thumnaild-->


		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title text-center">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title text-center"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;
        ?>
		
	</header><!-- .entry-header -->

	

	<div class="entry-content ">

		<div class="content-post">
			<?php
			the_content( sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'franciscozazzu' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'franciscozazzu' ),
				'after'  => '</div>',
			) );
			?>
	    </div>


	</div><!-- .entry-content -->

	<div class="more-post">


		<h2> Mas entradas</h2>

	
    		<div class="container">
    			<div class="row">

    				

    			</div>
    		</div>
		

	</div>
	
	

	<footer class="entry-footer">
		
	</footer><!-- .entry-footer -->
</article>


