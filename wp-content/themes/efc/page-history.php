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

   <section class="swiper-container swiper-gallery container">
        <div class="swiper-wrapper">
        <?php $galeria = get_field('galeria_de_fotos'); 
            if( $galeria ): ?>
                <?php foreach( $galeria as $imagem ): ?>
                    <figure class="swiper-slide">
                        <img src="<?php echo esc_url($imagem['url']); ?>" />
                    </figure>
                <?php endforeach; ?>
        <?php endif; ?>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </section>

</main>
<?php get_footer(); ?>
