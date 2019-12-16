<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package franciscozazzu
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'franciscozazzu' ); ?></a>


	<div id="sub-header">

		<div class="container-fluid">
			<div class="row">

				        <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

				        	<div class="float-right ">

								<div class="nav-phone d-inline-block header-widget-area ">

									<?php dynamic_sidebar( 'header-information' ); ?>
									
								</div>

								

								

								</div>

						    </div>

					</div>

				 

			</div>		
		</div>
		

	</div>

	<header id="masthead" class="site-header">

	<nav id="menu" class="navbar navbar-expand-md navbar-light " role="navigation">

		<div class="site-branding navbar-brand">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title text-right"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"></a></p>
				<?php
			endif;
			$franciscozazzu_description = get_bloginfo( 'description', 'display' );
			if ( $franciscozazzu_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $franciscozazzu_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		
			<button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#bs4navbar" aria-controls="bs4navbar" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>

			
			<?php
			wp_nav_menu( array(
				'menu'           => 'primary',
				'theme_location' => 'primary',
				'menu_id'        => 'main-menu',
				'container'      => 'div',
				'container_id'   => 'bs4navbar',
				'container_class'=> 'collapse navbar-collapse',
				'menu_class'     => 'navbar-nav ml-auto',
				'depth'          => 2,


			) );
			?>
	</nav>

	   
	</header><!-- #masthead -->

<div class="main-site">
