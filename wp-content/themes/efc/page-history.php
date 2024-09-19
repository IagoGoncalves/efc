<?php
/**
 * Template Name: história
 *
 */

get_header(); ?>
<main id="historia" class="historia" tabindex="-1" role="main">
   <div class="container">
        <h1 class="title"><?php the_title()?></h1>
        <figure><?= get_the_post_thumbnail(get_the_ID());?></figure>
        <h2 class="title"><?= get_field('titulo_do_paragrafo') ?></h2>
        <div class="paragraph"><?php the_content()?></div>
   </div>
   <?php set_query_var('field', 'galeria_de_fotos'); get_template_part('parts/gallery');?>
</main>
<?php get_footer(); ?>
