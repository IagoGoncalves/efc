<?php
get_header(); 
?>
<main id="arch-noticias" class="arch-noticias" tabindex="-1" role="main">
    <div class="container">
        <h1 class="title">Notícias</h1>
        <div>
            <?php $args = array('post_type' => 'noticias', 'posts_per_page' => -1); $var = new WP_Query($args); if($var->have_posts()): while($var->have_posts()): $var->the_post();
                get_template_part('parts/card-notice');
            endwhile; endif; wp_reset_postdata(); ?>
        </div>
    </div>
</main>
<?php
get_footer();
?>
