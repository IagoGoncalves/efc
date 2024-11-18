<?php
/**
 * Template Name: director
 *
 */

get_header();
?>
<main id="director" class="director" tabindex="-1" role="main">
    <div class="container">
        <h1 class="title"><?php the_title(); ?></h1>
        <div class="default-card">
            <figure><img src="<?= get_field('honra_imagem_honra')?>" alt=""></figure>
            <span><h3 class="paragraph"><?= get_field('honra_nome')?></h3>
            <p class="paragraph"><?= get_field('honra_cargo')?></p></span>
        </div>
    </div>
    <section class="president">
        <div class="container">
            <figure>
                <img src="<?= get_field('president_imagem_do_president')?>" alt="imagem do presidente">
            </figure>
            <div>
                <h2 class="title"><?= get_field('president_nome_e_sobrenome')?></h2>
                <h3>Presidente</h3>
                <p class="paragraph"><?= get_field('president_texto_sobre')?></p>
            </div>
        </div>
    </section>
    <section class="members">
        <div class="container">
            <?php $outros_cargos = get_field('outros_cargos');
                if ($outros_cargos) {
                    if (isset($outros_cargos['repetidor']) && is_array($outros_cargos['repetidor'])) {
                        foreach ($outros_cargos['repetidor'] as $item) {
                            $nome = $item['nome'];
                            $cargo = $item['cargo'];
                            $foto = $item['foto']; 
                            echo '<div class="cargo-item">';
                            if ($foto) {
                                echo wp_get_attachment_image($foto, 'full');
                            }
                            if ($nome) {
                                echo '<span><h3 class="paragraph">' . esc_html($nome) . '</h3>';
                                echo '<p class="paragraph">' . esc_html($cargo) . '</p></span>';
                            }
                            echo '</div>';
                        }
                    }
                }
            ?>
        </div>
    </section>
</main>
<?php
get_footer();
?>
