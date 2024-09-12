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
					</div>
				<?php endwhile; endif; wp_reset_postdata(); ?>
			</div>
			<div class="swiper-pagination"></div>
		</section>
		<section class="about container">
			<img src="<?= get_field('primeira_secao_imagem_da_primeira_secao')?>" alt="foto do time">
			<div>
				<h2 class="title"><?= get_field('primeira_secao_titulo_da_primeira_secao')?></h2>
				<p class="paragraph"><?= get_field('primeira_secao_descritivo_da_primeira_secao')?></p>
			</div>
		</section>
	</main>
<?php get_footer(); ?>