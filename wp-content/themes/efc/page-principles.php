<?php
/**
 * Template Name: principles
 *
 */

get_header();
?>
<main id="principles" class="principles" tabindex="-1" role="main">
   <div class="container">
       <h1 class="title"><?php the_title(); ?></h1>
       <section class="align">
            <div class="card">
                <h2 class="title">Missão</h2>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mission.png" alt="">
                <p class="paragraph"><?= get_field('texto_missao') ?></p>
            </div>
            <div class="card">
                <h2 class="title">Visão</h2>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/vision.png" alt="">
                <p class="paragraph"><?= get_field('texto_visao') ?></p>
            </div>
            <div class="card">
                <h2 class="title">Valores</h2>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/values.png" alt="">
                <p class="paragraph"><?= get_field('texto_valores') ?></p>
            </div>
       </section>
   </div>
</main>
<?php
get_footer();
?>
