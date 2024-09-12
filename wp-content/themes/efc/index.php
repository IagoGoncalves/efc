<?php 
/**
 * Template Name: Home
 *
 */
get_header(); ?>
   	<main class="home" id="home">
		<?php 
		 for ($i=1; $i <= 50; $i++) {
		 	echo '<h1>Teste</h1>';
		 }
		 ?>
   	</main>
<?php get_footer(); ?>