<?php
/**
 * Template Name: socialarea
 *
 */

get_header();
?>
<main id="socialarea" class="socialarea" tabindex="-1" role="main">
   <div class="container container-interno">
    <h1 class="title"><?php the_title(); ?></h1>
   </div>
   <figure><?php the_post_thumbnail(); ?></figure>
   <div class="container container-interno">
      <h2 class="title"><?= get_field('titulo') ?></h2>
      <p class="paragraph"><?= get_field('descritivo') ?></p>
   </div>
   <?php set_query_var('field', 'galeria'); get_template_part('parts/gallery');?>
</main>
<?php
get_footer();
?>
