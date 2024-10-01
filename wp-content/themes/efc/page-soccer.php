<?php
/**
 * Template Name: soccer
 *
 */

get_header();
?>
<main id="soccer" class="soccer" tabindex="-1" role="main">
   <div class="container">
       <h1 class="title"><?php the_title(); ?></h1>
    </div>
    <nav>
        <div class="container">
            <a href="#" class="smallText underline" id="btn-elenco" onClick="handleTab('elenco')">elenco</a>
            <a href="#" class="smallText" id="btn-comissao" onClick="handleTab('comissao')">comissão técnica</a>
            <a href="#" class="smallText" id="btn-calendario" onClick="handleTab('calendario')">calendário</a>
        </div>
    </nav>
    <section class="container" id="elenco">
        <?php $elenco = get_field('elenco');
            if ($elenco) {
                if (isset($elenco['time']) && is_array($elenco['time'])) {
                    foreach ($elenco['time'] as $item) {
                        $nome = $item['nome_completo'];
                        $posicao = $item['posicao'];
                        $idade = $item['idade'];
                        $foto = $item['imagem_do_jogador']; 
                        echo '<div class="default-card">';
                        if ($foto) {
                            echo '<figure>'. wp_get_attachment_image($foto, 'full') . '</figure>';
                        }
                        if ($nome) {
                            echo '<span><h2 class="paragraph">' . esc_html($nome) . '</h2>';
                            echo '<p class="paragraph"><b>Posição:</b> ' . esc_html($posicao) . '</p>';
                            echo '<p class="paragraph"><b>Idade:</b> ' . esc_html($idade) . '</p></span>';
                        }
                        echo '</div>';
                    }
                }
            }
        ?>
    </section>
    <section class="container" id="comissao">
        <?php $comissao_tecnica = get_field('comissao_tecnica');
            if ($comissao_tecnica) {
                if (isset($comissao_tecnica['comissao']) && is_array($comissao_tecnica['comissao'])) {
                    foreach ($comissao_tecnica['comissao'] as $item) {
                        $nome = $item['nome'];
                        $cargo = $item['cargo'];
                        $foto = $item['foto']; 
                        echo '<div class="default-card">';
                        if ($foto) {
                            echo '<figure>'. wp_get_attachment_image($foto, 'full') . '</figure>';
                        }
                        if ($nome) {
                            echo '<span><h2 class="paragraph">' . esc_html($nome) . '</h2>';
                            echo '<p class="paragraph">' . esc_html($cargo) . '</p></span>';
                        }
                        echo '</div>';
                    }
                }
            }
        ?>
    </section>
    <section class="calendar" id="calendario">
        <div class="group">
            <div class="first-column swiper-container swiper-calendar">
                <h2 class="title">últimos resultados</h2>
                <div class="swiper-wrapper">
                    <?php $calendar = get_field('calendar');
                        if (isset($calendar['ultimos_resultados']) && is_array($calendar['ultimos_resultados'])) {
                            foreach ($calendar['ultimos_resultados'] as $item) {
                                $dia = $item['dia'];
                                $mes = $item['mes'];
                                $tipo = $item['tipo'];
                                $primeiroTime = $item['primeiro_time'];
                                $golsPrimeiroTime = $item['gols_primeiro_time'];
                                $segundoTime = $item['segundo_time'];
                                $golsSegundoTime = $item['gols_segundo_time'];
                                echo '<div class="swiper-slide">';
                                    echo '<span><p>' . esc_html($dia) . '</p>';
                                    echo '<p>' . esc_html($mes) . '</p></span>';
                                    echo '<div><p>' . esc_html($tipo) . '</p>';
                                    echo '<p>' . esc_html($primeiroTime) . '<b>' . esc_html($golsPrimeiroTime) . '</b></p>';
                                    echo '<p>' . esc_html($segundoTime) .'<b>'. esc_html($golsSegundoTime) . '</b></p></div>';
                                echo '</div>';
                            }
                        }
                    ?>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
        <div class="group">
            <div class="second-column swiper-container swiper-calendar">
                <h2 class="title">próximos jogos</h2>
                <div class="swiper-wrapper">
                    <?php $calendar = get_field('calendar');
                        if (isset($calendar['proximos_jogos']) && is_array($calendar['proximos_jogos'])) {
                            foreach (array_reverse($calendar['proximos_jogos']) as $item) {
                                $dia = $item['dia'];
                                $mes = $item['mes'];
                                $tipo = $item['tipo'];
                                $primeiroTime = $item['primeiro_time'];
                                $segundoTime = $item['segundo_time'];
                                echo '<div class="swiper-slide">';
                                    echo '<span><p>' . esc_html($dia) . '</p>';
                                    echo '<p>' . esc_html($mes) . '</p></span>';
                                    echo '<div><p>' . esc_html($tipo) . '</p>';
                                    echo '<p>' . esc_html($primeiroTime) . '</p>';
                                    echo '<p>' . esc_html($segundoTime) . '</p></div>';
                                echo '</div>';
                            }
                        }
                    ?>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </section>
</main>
<?php
get_footer();
?>
