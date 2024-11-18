<?php
/**
 * Template Name: identity
 *
 */

get_header();
?>
<main id="identity" class="identity" tabindex="-1" role="main">
    <div class="container">
        <h1 class="title"><?php the_title()?></h1>
        <div class="content">
            <h2 class="title"><?= get_field('escudo') ?></h2>
            <img src="<?= get_field('logo_do_escudo')?>" class="escudo" alt="imagem do escudo">
            <span class="paragraph"><?= get_field('texto_do_escudo') ?></span>
            <h2 class="title"><?= get_field('uniformes') ?></h2>
            <figure>
                <?php
                    $fotos_dos_uniformes = get_field('fotos_dos_uniformes');
                    if( $fotos_dos_uniformes ): ?>
                            <?php foreach( $fotos_dos_uniformes as $image ): ?>
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endforeach; ?>
                <?php endif; ?>
            </figure>
            <span class="paragraph"><?= get_field('texto_do_uniforme') ?></span>

            <h2 class="title"><?= get_field('mascote') ?></h2>
            <img src="<?= get_field('imagem_do_mascote')?>" class="mascote" alt="imagem do escudo">
            <span class="paragraph"><?= get_field('texto_do_mascote') ?></span>
        </div>
   </div>
</main>
<?php
get_footer();
?>
