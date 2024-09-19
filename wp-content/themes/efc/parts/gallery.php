<section class="swiper-container swiper-gallery container">
    <div class="swiper-wrapper">
    <?php $galeria = get_field(get_query_var('field')); 
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