<?php /* 

Template name: Landing Page

*/

get_header();
?>

<div class="container-fluid hero-section position-relative">

	
		

				     <div id="carouselExampleSlidesOnly" class="carousel carousel-hero slide hero-section " data-ride="carousel">

						  <div class="carousel-inner">
						    <div class="carousel-item active carousel-img-height">
						      <img class="d-block w-100" src="http://localhost:8888/wordpress/wp-content/uploads/2018/03/hero-1.png" alt="First slide">
						    </div>
						    <div class="carousel-item">
						      <img class="d-block w-100" src="http://localhost:8888/wordpress/wp-content/uploads/2018/03/hero-2.jpg" alt="Second slide">
						    </div>
						    <div class="carousel-item">
						      <img class="d-block w-100" src="http://localhost:8888/wordpress/wp-content/uploads/2018/03/hero-1.png" alt="Third slide">
						    </div>
						  </div>

				     </div>

	


	 <div class="hero-description position-absolute-hero">

	 	<div class="hero-description-text">

			        	<h1 class="">
			            <?php the_field('hero_t'); ?>
			            </h1>
			          <!-- /.slider-page__title slider-page__title--big -->

			          
			          <h6 class="">
			            <?php the_field('hero_d'); ?>
			          </h6>
			       
			          <!-- /.slider-page__title -->
			       

			          	<button class="btn-blue"> <a href="#sobre-mi"><?php _e('Saber màs' , 'franciscozazzu'); ?> </a></button>
			          	<button class="btn-black"> <a href="#contact-section"><?php _e('Contactarme' , 'franciscozazzu'); ?>  </a></button>
			          	
        </div>
			          
			       

	</div>
			       

</div><!--END CONTAINER -->


<section id="sobre-mi" class="container-fluid">


	<div class="info-personal container">

        <div class="info-title">

        	<h2 class=""><?php the_field('nosotros_t'); ?></h2>
        	<p><?php the_field('nosotros_d'); ?></p>
        	
        </div>

        <div class="info-description">
        	
        </div>

        <div class="info-images container">
        	
        	<div class="row">
                
                <div class=" text-right col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                	<h2 class="h2-special h2-blue">
                		Francisco Zazu
                	</h2>
                	<div class=" nav-social-black ">

						   <ul class="d-inline">

							    <li><a href="#"><i class="fab fa-linkedin fa-1x"></i></a></li>
							    <li><a href="#"><i class="fab fa-google-plus-square fa-1x"></i></a></li>
							    <li><a href="#"><i class="fab fa-instagram fa-1x"></i></a></li>
							    <li><a href="#"><i class="fab fa-twitter-square fa-1x "></i></a></li>
							    <li><a href="#"><i class="fab fa-facebook-square  fa-1x"></i></a></li>

						   </ul>

					</div>

					<button class="btn-black btn-cv"> <a href="#">Curriculum vitae </a></button>

                </div>

                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 ">

                	<div class="">

                	<img class="box-shadow-black img-fluid" src="http://localhost:8888/wordpress/wp-content/uploads/2018/03/10.jpg ">

                    </div>
                	
                </div>

        		

        	</div>

        </div>
		




	</div><!--+++++++cuadro informacion personal ends +++++++-->
      

</section><!--+++++++++SECTION SOBRE MI ENDS ++++++-->


<section id="services-section">

    <div class="h2-back">
       <h2 class="text-center"><?php the_field('servicios_t'); ?></h2>
    </div>

	<div class="container  servicios-container">
		<div class="row">

             <div class=" service-item col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
              	
              	<div class="img-service  position-relative" width ="800px" >

                    <div class="img-container" >
              		<img class=""  src="<?php echo get_template_directory_uri(); ?>/assets/img/servicios-1.jpg">
                    </div>

              		 <div id="carouselExampleControls" class=" position-absolute-servicios carousel slide" data-ride="carousel">

						  <div class="carousel-inner">
						    <div class="carousel-item active">
						      <p class="text-center p-white p-service "> <?php the_field('servicio_individual_1'); ?></p>
						    </div>
						    <div class="carousel-item">
						      <p class="text-center p-white p-service "> <?php the_field('servicio_individual_2'); ?> </p>
						    </div>
						    <div class="carousel-item">
						      <p class="text-center p-white p-service "> <?php the_field('servicio_individual_3'); ?></p>
						    </div>
						    <div class="carousel-item">
						      <p class="text-center p-white p-service "><?php the_field('servicio_individual_4'); ?></p>
						    </div>
						    <div class="carousel-item">
						      <p class="text-center p-white p-service "><?php the_field('servicio_individual_5'); ?></p>
						    </div>
						    <div class="carousel-item">
						      <p class="text-center p-white p-service "><?php the_field('servicio_individual_6'); ?></p>
						    </div>
						    <div class="carousel-item">
						      <p class="text-center p-white p-service "><?php the_field('servicio_individual_7'); ?></p>
						    </div>
						    <div class="carousel-item">
						      <p class="text-center p-white p-service "><?php the_field('servicio_individual_8'); ?></p>
						    </div>
						    <div class="carousel-item">
						      <p class="text-center p-white p-service "><?php the_field('servicio_individual_9'); ?></p>
						    </div>
						    <div class="carousel-item">
						      <p class="text-center p-white p-service "><?php the_field('servicio_individual_10'); ?></p>
						    </div>
						    <div class="carousel-item">
						      <p class="text-center p-white p-service "><?php the_field('servicio_individual_11'); ?>l</p>
						    </div>
						    <div class="carousel-item">
						      <p class="text-center p-white p-service "><?php the_field('servicio_individual_12'); ?></p>
						    </div>

						</div>

						  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
						    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
						    <span class="sr-only">Previous</span>
						  </a>
						  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
						    <span class="carousel-control-next-icon" aria-hidden="true"></span>
						    <span class="sr-only">Next</span>
						  </a>
					  </div>
              		
              	</div>

              	 <div class="service-description"> 
						<h3> <?php the_field('servicio_1_t'); ?> </h3>
						<p><?php the_field('servicio_1_d'); ?> </p>
				 </div>



            </div>


             <div class="service-item col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">

              	<div class="img-service  position-relative" width ="800px">

		              		<div class="img-container" >
		              		<img class="img-fluid"  src="<?php echo get_template_directory_uri(); ?>/assets/img/servicio-2.jpg">
		              	    </div>

              		    <div id="carouselExample" class=" position-absolute-servicios carousel slide" data-ride="carousel">

						  <div class="carousel-inner">
						    <div class="carousel-item active">
						      <p class="text-center p-white p-service "> <?php the_field('servicio_individual_2_1'); ?> </p>
						    </div>
						    <div class="carousel-item">
						      <p class="text-center p-white p-service "><?php the_field('servicio_individual_2_2'); ?> </p>
						    </div>
						    <div class="carousel-item">
						      <p class="text-center p-white p-service "><?php the_field('servicio_individual_2_3'); ?></p>
						    </div>
						    <div class="carousel-item">
						      <p class="text-center p-white p-service "><?php the_field('servicio_individual_2_4'); ?></p>
						    </div>
						    <div class="carousel-item">
						      <p class="text-center p-white p-service "><?php the_field('servicio_individual_2_5'); ?></p>
						    </div>
						    <div class="carousel-item">
						      <p class="text-center p-white p-service "><?php the_field('servicio_individual_2_6'); ?></p>
						    </div>
						    <div class="carousel-item">
						      <p class="text-center p-white p-service "><?php the_field('servicio_individual_2_7'); ?></p>
						    </div>
						    <div class="carousel-item">
						      <p class="text-center p-white p-service "><?php the_field('servicio_individual_2_8'); ?></p>
						    </div>
						    <div class="carousel-item">
						      <p class="text-center p-white p-service "><?php the_field('servicio_individual_2_9'); ?></p>
						    </div>
						    <div class="carousel-item">
						      <p class="text-center p-white p-service "><?php the_field('servicio_individual_2_10'); ?></p>
						    </div>
						    <div class="carousel-item">
						      <p class="text-center p-white p-service "><?php the_field('servicio_individual_2_11'); ?></p>
						    </div>
						    <div class="carousel-item">
						      <p class="text-center p-white p-service "><?php the_field('servicio_individual_2_12'); ?></p>
						    </div>
						    <div class="carousel-item">
						      <p class="text-center p-white p-service "><?php the_field('servicio_individual_2_13'); ?></p>
						    </div>
						    <div class="carousel-item">
						      <p class="text-center p-white p-service "><?php the_field('servicio_individual_2_14'); ?></p>
						    </div>
						    <div class="carousel-item">
						      <p class="text-center p-white p-service "><?php the_field('servicio_individual_2_15'); ?></p>
						    </div>
						    <div class="carousel-item">
						      <p class="text-center p-white p-service "><?php the_field('servicio_individual_2_16'); ?></p>
						    </div>
						    <div class="carousel-item">
						      <p class="text-center p-white p-service "><?php the_field('servicio_individual_2_17'); ?></p>
						    </div>
						    <div class="carousel-item">
						      <p class="text-center p-white p-service "><?php the_field('servicio_individual_2_18'); ?></p>
						    </div>
						    <div class="carousel-item">
						      <p class="text-center p-white p-service "><?php the_field('servicio_individual_2_19'); ?></p>
						    </div>
						    <div class="carousel-item">
						      <p class="text-center p-white p-service "><?php the_field('servicio_individual_2_20'); ?></p>
						    </div>
						    <div class="carousel-item">
						      <p class="text-center p-white p-service "><?php the_field('servicio_individual_2_21'); ?></p>
						    </div>
						    <div class="carousel-item">
						      <p class="text-center p-white p-service "><?php the_field('servicio_individual_2_22'); ?></p>
						    </div>
						    <div class="carousel-item">
						      <p class="text-center p-white p-service "><?php the_field('servicio_individual_2_23'); ?></p>
						    </div>
						    <div class="carousel-item">
						      <p class="text-center p-white p-service "><?php the_field('servicio_individual_2_24'); ?></p>
						    </div>

						</div>

						  <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
						    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
						    <span class="sr-only">Previous</span>
						  </a>
						  <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
						    <span class="carousel-control-next-icon" aria-hidden="true"></span>
						    <span class="sr-only">Next</span>
						  </a>

				        </div>
              		
              	</div>

              	 <div class="service-description"> 
						<h3> <?php the_field('servicio_2_t'); ?> </h3>
						<p><?php the_field('servicio_2_d'); ?></p>
				 </div>
              		
            </div>	
              	



			
		</div>
	</div><!--END CONTAINER -->
	


</section><!--+++++++++SECTION SERVICIOS ENDS ++++++-->




<section id="quote-section">

	<div class="quote-section text-center">

		<h5> <?php the_field('quote'); ?></h5>

	</div>
	



</section><!--+++++++++SECTION QUOTE ENDS ++++++-->



<section id="blog-post">


	
		
    <div class="h2-back-post">
       <h2 class="text-center"> <?php the_field('notas_titulo'); ?> </span></h2>
    </div>

    <div class="container">
    	<div class="row">

    		<?php $args= array(
    			'order'     => 'DESC',
    			'post_type' => 'post',
    			'posts_per_page' => 3,

    		);

    		$posts= new WP_Query($args);
    		while($posts->have_posts()): $posts->the_post();
    		?>

    		<div class="blog-post-home col-lg-4 col-xl-4 col-md-4 col-sm-12 col-12">
                 
                <div class="img-post-home">
                  
    			   <div class="img-post-home-each ">

    			   	 <?php the_post_thumbnail( 'medium', array( 'class' => '' ) )?>
    			   	
    			   </div>
    			

    			   <div class="date-post-home">

    			   	 <h6><?php the_time('F j, Y'); ?></h6>
    			   	 
    			   </div>


    			</div>

    			   <div class="description-post-home">

    			   	 <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h4>
    			   	 <p><?php the_excerpt(); ?>  </p>

    			   </div>

    			   <div class="data-post-home">

    			   	  <div class="d-inline-block ">
    			   	  	<i class="d-inline fas fa-user-circle"></i><p class="d-inline"> <?php the_author(); ?> </p>
    			   	  </div>
    			   	  <div class="d-inline-block ">
    			   	  	<i class=" d-inline  fas fa-comments"></i><p class="d-inline"> <?php comments_number(); ?> </p>
    			   	  </div>

    			   </div>


    		</div><!-- end post -->

            <?php endwhile; wp_reset_postdata(); ?>




    	</div>
     </div><!-- end container post -->
	
	





</section><!---END SECTION POSR HOME LANDING-->

<section id="contact-section">


	 <div class="contact-form text-center">

	 	
	 		<?php the_field('formulario_de_contacto_codigo'); ?>
	 			
	 		
	 	 
	 </div>

	 <div class="cup">
	 	<img class="img-fluid"  src="<?php echo get_template_directory_uri(); ?>/assets/img/cup.png">

	 </div>


</section>


<?php
get_footer();
?>