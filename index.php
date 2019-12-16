<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package franciscozazzu
 */

get_header();
?>

    <div class="header-single">

	<h2 class="h2-white" > PAGINA DE NOTAS</h2>
	
   </div>

    
	<div id="primary" class="content-area container content-posts">
     <div class="row">


		<div id="main" class="site-main col-12 col-sm-9 col-md-9 col-lg-9 col-xl-9 ">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content-posts', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
		</div><!-- #main -->

		<div class="sidebar col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
			<?php get_sidebar(); ?>

		</div>


 </div>
</div><!-- #primary end cntainer -->

<?php

get_footer();
