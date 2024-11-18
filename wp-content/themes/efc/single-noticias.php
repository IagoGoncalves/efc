<?php get_header(); ?>
    <main id="single-notice" class="single-notice" tabindex="-1" role="main">
        <div class="content container">
            <section>
                <div class="header">
                    <h2 class="title"><?php the_title(); ?></h2>
                    <h3 class="subtitle"><?= get_field('subtitulo')?></h3>
                    <span class="align">
                        <p class="paragraph"><?= get_the_date('d \d\e F \d\e Y'); ?></p>
                        <div>
                            <p class="paragraph align">
                                Compartilhar
                                <a href="https://www.facebook.com/sharer/sharer.php?u=<?= urlencode(get_permalink()) ?>" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none"><g clip-path="url(#clip0_145_748)"><path d="M32 16C32 7.1625 24.8375 0 16 0C7.1625 0 0 7.1625 0 16C0 24.8375 7.1625 32 16 32C16.0938 32 16.1875 32 16.2812 31.9937V19.5438H12.8438V15.5375H16.2812V12.5875C16.2812 9.16875 18.3688 7.30625 21.4188 7.30625C22.8813 7.30625 24.1375 7.4125 24.5 7.4625V11.0375H22.4C20.7437 11.0375 20.4188 11.825 20.4188 12.9812V15.5312H24.3875L23.8687 19.5375H20.4188V31.3813C27.1063 29.4625 32 23.3062 32 16Z" fill="#1E1E1E"/></g><defs><clipPath id="clip0_145_748">     <rect width="32" height="32" fill="white"/></clipPath></defs></svg>
                                </a>
                                <a href="whatsapp://send?text=<?php the_permalink(); ?>" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none"><g clip-path="url(#clip0_145_754)"><path d="M16 0C7.16479 0 0 7.16479 0 16C0 24.8352 7.16479 32 16 32C24.8352 32 32 24.8352 32 16C32 7.16479 24.8352 0 16 0ZM16.3391 25.3157C16.3389 25.3157 16.3394 25.3157 16.3391 25.3157H16.3352C14.7324 25.3149 13.1575 24.9131 11.7588 24.1504L6.68237 25.4817L8.04102 20.5208C7.20288 19.0691 6.76196 17.4221 6.7627 15.7349C6.76489 10.4565 11.0608 6.16235 16.3391 6.16235C18.9006 6.16333 21.3052 7.1604 23.113 8.96973C24.9211 10.7793 25.9163 13.1846 25.9153 15.7424C25.9131 21.021 21.6167 25.3157 16.3391 25.3157Z" fill="#1E1E1E"/><path d="M16.3418 7.7793C11.9514 7.7793 8.38086 11.3484 8.37891 15.7356C8.37842 17.239 8.79932 18.7031 9.59595 19.97L9.78516 20.271L8.98096 23.2073L11.9934 22.4172L12.2842 22.5896C13.5061 23.3147 14.907 23.6982 16.3352 23.6987H16.3384C20.7253 23.6987 24.2959 20.1294 24.2979 15.7419C24.2986 13.6157 23.4714 11.6167 21.9688 10.1128C20.4661 8.60889 18.4675 7.78003 16.3418 7.7793ZM21.0234 19.1565C20.824 19.7151 19.8682 20.2251 19.4084 20.2939C18.9961 20.3555 18.4746 20.3811 17.9014 20.1992C17.5537 20.0889 17.1082 19.9417 16.5371 19.6953C14.137 18.6592 12.5693 16.2432 12.4497 16.0835C12.3301 15.9238 11.4727 14.7864 11.4727 13.6089C11.4727 12.4316 12.0908 11.8528 12.3101 11.6135C12.5295 11.374 12.7888 11.3142 12.9482 11.3142C13.1077 11.3142 13.2673 11.3157 13.4067 11.3225C13.5537 11.3298 13.751 11.2666 13.9451 11.7332C14.1445 12.2122 14.623 13.3894 14.6829 13.509C14.7427 13.6289 14.7825 13.7686 14.7029 13.9282C14.623 14.0879 14.3579 14.4324 14.1047 14.7463C13.9985 14.8779 13.8601 14.9951 13.9998 15.2346C14.1392 15.4739 14.6196 16.2573 15.3308 16.8916C16.2449 17.7065 17.0159 17.959 17.2551 18.0789C17.4941 18.1985 17.6338 18.1785 17.7734 18.019C17.9128 17.8594 18.3716 17.3206 18.531 17.0811C18.6904 16.8416 18.8501 16.8816 19.0693 16.9614C19.2888 17.041 20.4651 17.6199 20.7043 17.7395C20.9436 17.8594 21.103 17.9192 21.1628 18.019C21.2229 18.1189 21.2229 18.5977 21.0234 19.1565Z" fill="#1E1E1E"/></g><defs><clipPath id="clip0_145_754"><rect width="32" height="32" fill="white"/></clipPath></defs></svg>
                                </a>
                            </p>
                        </div>
                    </span>
                </div>
                <figure><?= get_the_post_thumbnail();?></figure>
                <div class="paragraph"><?php the_content(); ?></div>
            </section>
            <aside>
                <div class="card1">
                    <h2 class="title">Vista a paixão e orgulho do Extrema F.C.</h2>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tocadolobo.png" alt="">
                    <a href="https://tocadolobostory.com.br/?fbclid=PAZXh0bgNhZW0CMTEAAaavHtO0b3woCtA2oCVt3wKn-NF_e-RgqDfuS99oy8dNjEludBdXtPRHvbs_aem_2mIXkswi_8bsNVST_4EMPA" target="_blank" class="btn-secondary">Compre aqui</a>
                </div>
                <div class="card2">
                    <h2 class="title">Escolinha de futebol</h2>
                    <a href="#" class="btn-secondary">Saiba mais</a>
                </div>
                <!-- <span class="card3">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bg-card-3.png" alt="">
                    <h2 class="title">Anúncio restaurante</h2>
                </span> -->
            </aside>
        </div>
        <!-- <?php set_query_var('field', 'galeria'); get_template_part('parts/gallery');?> -->
        <div class="container see-more">
            <h2 class="title">veja também</h2>
            <div>
                <?php $args = array('post_type' => 'noticias', 'posts_per_page' => 3); $var = new WP_Query($args); if($var->have_posts()): while($var->have_posts()): $var->the_post();
                    get_template_part('parts/card-notice');
                endwhile; endif; wp_reset_postdata(); ?>
            </div>
        </div>
    </main>
<?php get_footer();?>
