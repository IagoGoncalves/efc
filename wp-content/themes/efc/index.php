<?php 
/**
 * Template Name: Home
 *
 */
get_header(); ?>
   	<main class="home" id="home">
	   <section class="swiper-container presentation">
			<div class="swiper-wrapper">
				<?php $args = array('post_type' => 'banners', 'posts_per_page' => 3); $var = new WP_Query($args); if($var->have_posts()): while($var->have_posts()): $var->the_post();?>																	 
					<div class="swiper-slide">
						<div class="content container">
							<h2><?php the_title() ?></h2>
							<?php the_content() ?>
							<a href="<?= get_field('url_do_botao')?>" class="btn-secondary"><?= get_field('nome_do_botao')?></a>
						</div>
						<?= get_the_post_thumbnail(get_the_ID());?>
						<img src="<?= get_field('banner_mobile') ?>" alt="" class="bannerMobile">
					</div>
				<?php endwhile; endif; wp_reset_postdata(); ?>
			</div>
			<div class="swiper-pagination"></div>
		</section>
		<div class="container">
			<section class="about">
				<img src="<?= get_field('primeira_secao_imagem_da_primeira_secao')?>" alt="foto do time">
				<div>
					<h2 class="title"><?= get_field('primeira_secao_titulo_da_primeira_secao')?></h2>
					<p class="paragraph"><?= get_field('primeira_secao_descritivo_da_primeira_secao')?></p>
				</div>
			</section>
			<section class="news">
				<h2 class="title">Notícias</h2>
				<div>
					<?php $args = array('post_type' => 'noticias', 'posts_per_page' => 3); $var = new WP_Query($args); if($var->have_posts()): while($var->have_posts()): $var->the_post();
						get_template_part('parts/card-notice');
					endwhile; endif; wp_reset_postdata(); ?>
				</div>
				<a href="#" class="btn-default">Todas as notícias</a>
			</section>
			<div class="cta">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/home-cta.png">
				<span>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/tocadolobo.png">
					<a href="#" class="btn-secondary">Compre aqui</a>
				</span>
			</div>
		</div>
		<section class="sponsors">
			<div class="container">
				<div class="first-line">
					<h3 class="title">Patrocinadores e Parceiros</h3>
					<?php
						$ultima_secao = get_field('ultima_secao');
						$galeria_de_logos = $ultima_secao['galeria_de_logos_patrocinadores'];
						echo '<div class="galeria-logos align">';
						foreach( $galeria_de_logos as $imagem ):
							echo '<img src="' . esc_url( $imagem['url'] ) . '" alt="' . esc_attr( $imagem['alt'] ) . '" />';
						endforeach;
						echo '</div>';
					?>
				</div>
			</div>
		</section>
	</main>
<?php get_footer(); ?>