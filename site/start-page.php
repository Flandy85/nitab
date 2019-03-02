<?php
/*
	Template Name: Start page
*/
?> <?php get_header(); ?> <main> <?php
		if(have_posts()) {
			while(have_posts()) {
				
				the_post();
				?> <h1>This is the main page</h1> <?php
				
			}	
		}	
	?> </main>