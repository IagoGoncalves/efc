<?php
/**
 * Template Name: expresident
 *
 */

get_header();
?>
<main id="expresident" class="expresident" tabindex="-1" role="main">
   <div class="container">
       <h1 class="title"><?php the_title(); ?></h1>
       <div class="content">
            <?php $args = array('post_type' => 'expresident', 'posts_per_page' => -1); $var = new WP_Query($args); if($var->have_posts()): while($var->have_posts()): $var->the_post();?>																	 
                <div class="default-card">
                    <figure><?php the_post_thumbnail(); ?></figure>
                    <span>
                        <h2 class="paragraph"><?php the_title(); ?></h2>
                        <p class="paragraph"><?= get_field('ano_de_vigencia') ?></p>
                    </span>
                </div>
            <?php endwhile; endif; wp_reset_postdata(); ?>
        </div>
   </div>
</main>
<?php
get_footer();
?>
