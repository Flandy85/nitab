<?php
/*
	Template Name: Start page
*/
?> <?php get_header(); ?> <main> <?php
		if(have_posts()) {
			while(have_posts()) {
				
				the_post();
				?> <div class="first-container-parallax"><img src="<?php echo get_template_directory_uri(); ?>/src/images/comp-white.png" class="first-img"></div><div class="first-container" id="start"><div class="first-text-block"><h2>Norrsidans installation & Teknik AB</h2><p>Lorem Ipsum är en utfyllnadstext från tryck- och förlagsindustrin. Lorem ipsum har varit standard ända sedan 1500-talet, när en okänd boksättare tog att antal bokstäver och blandade dem för att göra ett provexemplar av en bok. Lorem ipsum har inte bara överlevt fem århundraden, utan även övergången till elektronisk typografi utan större förändringar. Det blev allmänt känt på 1960-talet i samband med lanseringen av Letraset-ark med avsnitt av Lorem Ipsum, och senare med mjukvaror som Aldus PageMaker.</p></div></div><div class="second-container-parallax" id="about"><h2>Företaget</h2></div><div class="second-container" id="about"></div><div class="third-container-parallax" id="about"><h2>Kontaka oss</h2></div><div class="third-container" id="contact"></div><!-- <div class="first-container">
					<img src="<?php //echo get_template_directory_uri(); ?>/src/images/comp-white.png"" class="first-img">
				</div> --> <?php
				
			}	
		}	
	?> </main>