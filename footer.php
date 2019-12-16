<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package franciscozazzu
 */

?>
</div><!-- #content -->


    <footer id="first-footer">
    	<div class="container">
    		<div class="row">


    			<div class="footer-description col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">

    				<h1> Francisco Zazzu</h1>
    				<p><?php the_field('footer_descripcion'); ?> </p>

    				<div class="social-footer-blue">

    					<ul class="d-inline">

							    <li><a href="<?php the_field('linked'); ?>"><i class="fab fa-linkedin fa-1x"></i></a></li>
							    <li><a href="<?php the_field('google'); ?>"><i class="fab fa-google-plus-square fa-1x"></i></a></li>
							    <li><a href="<?php the_field('instagram'); ?>"><i class="fab fa-instagram fa-1x"></i></a></li>
							    <li><a href="<?php the_field('twitter'); ?>"><i class="fab fa-twitter-square fa-1x "></i></a></li>
							    <li><a href="<?php the_field('facebook'); ?>"><i class="fab fa-facebook-square  fa-1x"></i></a></li>

						</ul>
    					
    				</div>
    				
    			</div>



    			<div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">

    				<h5 class="footer-title"> <?php _e('Contacto' , 'franciscozazzu'); ?> </h5>
    				<div class="footer-item">

    					<?php dynamic_sidebar( 'footer-information' ); ?>
    					
    				</div>
    				
    				<div class="footer-item">

    					
    					
    				</div>


    			</div>

    			<div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">

    				<h5 class="footer-title"> <?php _e('Ultimas Notas' , 'franciscozazzu'); ?> </h5>
    				
    				<?php $args= array(
		    			'order'     => 'DESC',
		    			'post_type' => 'post',
		    			'posts_per_page' => 3,

		    		);

		    		$posts= new WP_Query($args);
		    		while($posts->have_posts()): $posts->the_post();
		    		?>

		    		<div>
		    			<h4 class="last-notes"><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h4>
		    		</div>

		    		  <?php endwhile; wp_reset_postdata(); ?>


    			</div>

    			<div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">

    				<h5 class="footer-title"> <?php _e('Social' , 'franciscozazzu'); ?> </h5>
    				


    			</div>
    		

            </div>
    	</div>
    </footer>



	<footer id="colophon" class="site-footer">
		<div class="site-info text-center">
			<a href="<?php echo esc_url( __( '#', 'franciscozazzu' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Francisco Zazzu. All rights reserved.', 'franciscozazzu' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'franciscozazzu' ), 'franciscozazzu', '<a href="https://www.workana.com/freelancer/20bd71549fa14e18d066cc10a48ca919">Romina Aliotta</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
