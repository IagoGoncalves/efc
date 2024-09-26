<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php if ( ! get_option( 'site_icon' ) ) : ?>
		<link href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" rel="shortcut icon" />
	<?php endif; ?>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open();?>
    <header id="header-desktop">
        <section class="first-line">
            <div class="container align">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-toca-do-lobo.png" alt="">
                <a href="#" class="btn-secondary">Restaurante Taberna</a>
                <p class="none">.</p>
                <a href="" class="whatsapp align">
                    <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 27 27" fill="none"><g clip-path="url(#clip0_6_35)"><path fill-rule="evenodd" clip-rule="evenodd" d="M22.4538 4.5091C20.0857 2.13821 16.9363 0.831957 13.5811 0.830566C6.66745 0.830566 1.04073 6.45713 1.03795 13.3726C1.03702 15.5833 1.61453 17.7413 2.71222 19.6435L0.932739 26.1431L7.58206 24.3988C9.41422 25.3982 11.4769 25.9249 13.576 25.9255H13.5813C20.4942 25.9255 26.1215 20.2985 26.1241 13.3827C26.1255 10.0311 24.822 6.87983 22.4538 4.5091ZM13.5811 23.8073H13.5768C11.7062 23.8065 9.87152 23.3038 8.27065 22.3541L7.89012 22.128L3.94431 23.1632L4.99751 19.3161L4.74954 18.9216C3.70593 17.2618 3.15484 15.3432 3.15577 13.3734C3.15793 7.62542 7.83481 2.94901 13.5853 2.94901C16.3699 2.94993 18.9875 4.03572 20.9558 6.00631C22.9241 7.9769 24.0074 10.5962 24.0064 13.3819C24.004 19.1304 19.3274 23.8073 13.5811 23.8073ZM19.2996 15.9992C18.9863 15.8423 17.4453 15.0843 17.158 14.9795C16.8709 14.875 16.6617 14.8229 16.453 15.1365C16.244 15.4501 15.6435 16.1562 15.4605 16.3652C15.2776 16.5744 15.095 16.6007 14.7815 16.4437C14.4681 16.2869 13.4583 15.9558 12.2611 14.8881C11.3295 14.0571 10.7005 13.0307 10.5176 12.7171C10.335 12.4032 10.5161 12.2499 10.6551 12.0775C10.9944 11.6562 11.3341 11.2145 11.4386 11.0055C11.5432 10.7963 11.4908 10.6132 11.4123 10.4564C11.3341 10.2996 10.7073 8.75694 10.4462 8.12923C10.1916 7.51836 9.93348 7.60086 9.74098 7.59128C9.55836 7.58216 9.34933 7.58031 9.1403 7.58031C8.93142 7.58031 8.59184 7.65864 8.30448 7.97257C8.01727 8.28635 7.20772 9.04446 7.20772 10.5871C7.20772 12.1297 8.33074 13.62 8.4874 13.8292C8.64406 14.0384 10.6975 17.204 13.8413 18.5614C14.589 18.8846 15.1727 19.0772 15.628 19.2217C16.3789 19.4602 17.0619 19.4265 17.602 19.3459C18.2042 19.2558 19.4561 18.5876 19.7175 17.8556C19.9786 17.1235 19.9786 16.4961 19.9001 16.3652C19.8219 16.2345 19.6129 16.1562 19.2996 15.9992Z" fill="#F5F5F5"/></g><defs><clipPath id="clip0_6_35"><rect width="27" height="27" fill="white"/></clipPath></defs></svg>
                    (35) 90000-0000
                </a>
                <span class="align">
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none"><g clip-path="url(#clip0_7_191)"><path d="M19.0625 16C19.0625 17.6914 17.6914 19.0625 16 19.0625C14.3086 19.0625 12.9375 17.6914 12.9375 16C12.9375 14.3086 14.3086 12.9375 16 12.9375C17.6914 12.9375 19.0625 14.3086 19.0625 16Z" fill="#F5F5F5"/><path d="M23.1621 10.5815C23.0149 10.1826 22.78 9.82153 22.4749 9.52515C22.1785 9.21997 21.8176 8.98511 21.4185 8.83789C21.0947 8.71216 20.6084 8.5625 19.7126 8.52173C18.7437 8.47754 18.4531 8.46802 16 8.46802C13.5466 8.46802 13.2561 8.47729 12.2874 8.52148C11.3916 8.5625 10.905 8.71216 10.5815 8.83789C10.1824 8.98511 9.82129 9.21997 9.52515 9.52515C9.21997 9.82153 8.98511 10.1824 8.83765 10.5815C8.71191 10.9053 8.56226 11.3918 8.52148 12.2876C8.47729 13.2563 8.46777 13.5469 8.46777 16.0002C8.46777 18.4534 8.47729 18.7439 8.52148 19.7129C8.56226 20.6086 8.71191 21.095 8.83765 21.4187C8.98511 21.8179 9.21973 22.1787 9.5249 22.4751C9.82129 22.7803 10.1821 23.0151 10.5813 23.1624C10.905 23.2883 11.3916 23.438 12.2874 23.4788C13.2561 23.523 13.5464 23.5322 15.9998 23.5322C18.4534 23.5322 18.7439 23.523 19.7124 23.4788C20.6082 23.438 21.0947 23.2883 21.4185 23.1624C22.2197 22.8533 22.853 22.22 23.1621 21.4187C23.2878 21.095 23.4375 20.6086 23.4785 19.7129C23.5227 18.7439 23.532 18.4534 23.532 16.0002C23.532 13.5469 23.5227 13.2563 23.4785 12.2876C23.4377 11.3918 23.2881 10.9053 23.1621 10.5815ZM16 20.7178C13.3943 20.7178 11.282 18.6057 11.282 16C11.282 13.3943 13.3943 11.2822 16 11.2822C18.6055 11.2822 20.7178 13.3943 20.7178 16C20.7178 18.6057 18.6055 20.7178 16 20.7178ZM20.9043 12.1982C20.2954 12.1982 19.8018 11.7046 19.8018 11.0957C19.8018 10.4868 20.2954 9.99316 20.9043 9.99316C21.5132 9.99316 22.0068 10.4868 22.0068 11.0957C22.0066 11.7046 21.5132 12.1982 20.9043 12.1982Z" fill="#F5F5F5"/><path d="M16 0C7.16479 0 0 7.16479 0 16C0 24.8352 7.16479 32 16 32C24.8352 32 32 24.8352 32 16C32 7.16479 24.8352 0 16 0ZM25.1321 19.7878C25.0876 20.7659 24.9321 21.4336 24.7051 22.0181C24.2278 23.2522 23.2522 24.2278 22.0181 24.7051C21.4338 24.9321 20.7659 25.0874 19.7881 25.1321C18.8083 25.1768 18.4954 25.1875 16.0002 25.1875C13.5049 25.1875 13.1921 25.1768 12.2122 25.1321C11.2344 25.0874 10.5664 24.9321 9.98218 24.7051C9.3689 24.4744 8.81372 24.1128 8.35474 23.6453C7.88745 23.1865 7.52588 22.6311 7.29517 22.0181C7.06812 21.4338 6.9126 20.7659 6.86816 19.7881C6.823 18.8081 6.8125 18.4951 6.8125 16C6.8125 13.5049 6.823 13.1919 6.86792 12.2122C6.91235 11.2341 7.06763 10.5664 7.29468 9.98193C7.52539 9.3689 7.88721 8.81348 8.35474 8.35474C8.81348 7.88721 9.3689 7.52563 9.98193 7.29492C10.5664 7.06787 11.2341 6.9126 12.2122 6.86792C13.1919 6.82324 13.5049 6.8125 16 6.8125C18.4951 6.8125 18.8081 6.82324 19.7878 6.86816C20.7659 6.9126 21.4336 7.06787 22.0181 7.29468C22.6311 7.52539 23.1865 7.88721 23.6455 8.35474C24.1128 8.81372 24.4746 9.3689 24.7051 9.98193C24.9324 10.5664 25.0876 11.2341 25.1323 12.2122C25.177 13.1919 25.1875 13.5049 25.1875 16C25.1875 18.4951 25.177 18.8081 25.1321 19.7878Z" fill="#F5F5F5"/></g><defs><clipPath id="clip0_7_191"><rect width="32" height="32" fill="white"/></clipPath></defs></svg>
                    </a>
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none"><g clip-path="url(#clip0_7_207)"><path d="M32 16C32 7.1625 24.8375 0 16 0C7.1625 0 0 7.1625 0 16C0 24.8375 7.1625 32 16 32C16.0938 32 16.1875 32 16.2812 31.9937V19.5438H12.8438V15.5375H16.2812V12.5875C16.2812 9.16875 18.3688 7.30625 21.4188 7.30625C22.8813 7.30625 24.1375 7.4125 24.5 7.4625V11.0375H22.4C20.7437 11.0375 20.4188 11.825 20.4188 12.9812V15.5312H24.3875L23.8687 19.5375H20.4188V31.3813C27.1063 29.4625 32 23.3062 32 16Z" fill="#F5F5F5"/></g><defs><clipPath id="clip0_7_207"><rect width="32" height="32" fill="white"/></clipPath></defs></svg>
                    </a>
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none"><g clip-path="url(#clip0_7_209)"><path d="M16 0C7.16479 0 0 7.16479 0 16C0 24.8352 7.16479 32 16 32C24.8352 32 32 24.8352 32 16C32 7.16479 24.8352 0 16 0ZM11.3506 24.1875H7.45386V12.4641H11.3506V24.1875ZM9.40234 10.8633H9.37695C8.06934 10.8633 7.22363 9.96313 7.22363 8.83813C7.22363 7.68774 8.09521 6.8125 9.42822 6.8125C10.7612 6.8125 11.5815 7.68774 11.6069 8.83813C11.6069 9.96313 10.7612 10.8633 9.40234 10.8633ZM25.4014 24.1875H21.5051V17.9158C21.5051 16.3396 20.9409 15.2646 19.531 15.2646C18.4546 15.2646 17.8135 15.9897 17.5317 16.6897C17.4287 16.9402 17.4036 17.2903 17.4036 17.6406V24.1875H13.5071C13.5071 24.1875 13.5581 13.564 13.5071 12.4641H17.4036V14.124C17.9214 13.3252 18.8479 12.189 20.9153 12.189C23.479 12.189 25.4014 13.8645 25.4014 17.4653V24.1875Z" fill="#F5F5F5"/></g><defs><clipPath id="clip0_7_209"><rect width="32" height="32" fill="white"/></clipPath></defs></svg>
                    </a>
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none"><g clip-path="url(#clip0_7_211)"><path d="M14.0071 18.9976L19.2117 16L14.0071 13.0024V18.9976Z" fill="#F5F5F5"/><path d="M16 0C7.16479 0 0 7.16479 0 16C0 24.8352 7.16479 32 16 32C24.8352 32 32 24.8352 32 16C32 7.16479 24.8352 0 16 0ZM25.9976 16.0164C25.9976 16.0164 25.9976 19.2612 25.5859 20.8259C25.3552 21.6824 24.6799 22.3577 23.8235 22.5881C22.2588 23 16 23 16 23C16 23 9.75757 23 8.17651 22.5718C7.32007 22.3413 6.64478 21.6658 6.41406 20.8093C6.0022 19.2612 6.0022 16 6.0022 16C6.0022 16 6.0022 12.7554 6.41406 11.1907C6.64453 10.3342 7.33643 9.64233 8.17651 9.41187C9.74121 9 16 9 16 9C16 9 22.2588 9 23.8235 9.42822C24.6799 9.65869 25.3552 10.3342 25.5859 11.1907C26.0142 12.7554 25.9976 16.0164 25.9976 16.0164Z" fill="#F5F5F5"/></g><defs><clipPath id="clip0_7_211"><rect width="32" height="32" fill="white"/></clipPath></defs></svg>
                    </a>
                </span>
            </div>
        </section>
        <section class="second-line">
            <div class="container align">
                <a href="<?= esc_url(home_url('/')); ?>" class="smallText">Home</a>
                <div href="#" class="smallText submenu" data-menu="desktopMenu1" onClick="activeSubMenu('desktopMenu1')">Clube
                    <span>
                        <a href="<?= esc_url(home_url('/historia')); ?>">História</a>
                        <a href="<?= esc_url(home_url('/ex-presidentes')); ?>">Ex-presidentes</a>
                        <a href="<?= esc_url(home_url('/identidade')); ?>">Identidade</a>
                    </span>
                </div>
                <div href="#" class="smallText submenu" data-menu="desktopMenu2" onClick="activeSubMenu('desktopMenu2')">Institucional
                    <span>
                        <a href="#">Estatuto</a>
                        <a href="#">Regimento Interno</a>
                        <a href="<?= esc_url(home_url('/diretoria')); ?>">Diretoria</a>
                        <a href="<?= esc_url(home_url('/missao-visao-e-valores')); ?>">Missão, Visão e Valores</a>
                    </span>
                </div>
                <a href="#" class="smallText">Sócio torcedor</a>
                <p class="none">.</p>
                <a href="<?= esc_url(home_url('/')); ?>" class="logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="logo" ></a>
                <div href="#" class="smallText submenu" data-menu="desktopMenu3" onClick="activeSubMenu('desktopMenu3')">Futebol
                    <span>
                        <a href="<?= esc_url(home_url('/futebol-sub-10')); ?>">Futebol Sub-10</a>
                    </span>
                </div>
                <div href="#" class="smallText submenu" data-menu="desktopMenu4" onClick="activeSubMenu('desktopMenu4')">Área social
                    <span>
                        <a href="<?= esc_url(home_url('/quadra-poliesportiva')); ?>">Quadra</a>
                        <a href="<?= esc_url(home_url('/restaurante')); ?>">Restaurante</a>
                        <a href="<?= esc_url(home_url('/piscina')); ?>">Piscina</a>
                    </span>
                </div>
                <a href="<?= esc_url(home_url('/transparencia')); ?>" class="smallText">Transparência</a>
                <a href="<?= esc_url(home_url('/noticias')); ?>" class="smallText">Notícias</a>
            </div>
        </section>
    </header>
    <header class="mobile">
        <div>
            <p class="none">............</p>
            <a href="<?= esc_url(home_url('/')); ?>" class="logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="logo" ></a>
            <span class="hamburger" onClick="toggleMenuMobile()" id="hamburger"></span>
            <nav id="navMobile">
                <a href="<?= esc_url(home_url('/')); ?>" class="smallText">Home</a>
                <div href="#" class="smallText submenu" data-menu="mobileMenu1" onClick="activeSubMenu('mobileMenu1')">Clube
                    <span>
                        <a href="<?= esc_url(home_url('/historia')); ?>">História</a>
                        <a href="<?= esc_url(home_url('/ex-presidentes')); ?>">Ex-presidentes</a>
                        <a href="<?= esc_url(home_url('/identidade')); ?>">Identidade</a>
                    </span>
                </div>
                <div href="#" class="smallText submenu" data-menu="mobileMenu2" onClick="activeSubMenu('mobileMenu2')">Institucional
                    <span>
                        <a href="#">Estatuto</a>
                        <a href="#">Regimento Interno</a>
                        <a href="<?= esc_url(home_url('/diretoria')); ?>">Diretoria</a>
                        <a href="<?= esc_url(home_url('/missao-visao-e-valores')); ?>">Missão, Visão e Valores</a>
                    </span>
                </div>
                <a href="#" class="smallText">Sócio torcedor</a>
                <div href="#" class="smallText submenu" data-menu="mobileMenu3" onClick="activeSubMenu('mobileMenu3')">Futebol
                    <span>
                        <a href="<?= esc_url(home_url('/futebol-sub-10')); ?>">Futebol Sub-10</a>
                    </span>
                </div>
                <div href="#" class="smallText submenu" data-menu="mobileMenu4" onClick="activeSubMenu('mobileMenu4')">Área social
                    <span>
                        <a href="<?= esc_url(home_url('/quadra-poliesportiva')); ?>">Quadra</a>
                        <a href="<?= esc_url(home_url('/restaurante')); ?>">Restaurante</a>
                        <a href="<?= esc_url(home_url('/piscina')); ?>">Piscina</a>
                    </span>
                </div>
                <a href="<?= esc_url(home_url('/transparencia')); ?>" class="smallText">Transparência</a>
                <a href="<?= esc_url(home_url('/noticias')); ?>" class="smallText">Notícias</a>
            </nav>
        </div>
    </header>
    <?php 

        function formatarVariavel($variavel) {
            $variavel = str_replace(' ', '', $variavel);
            $variavel = str_replace('(', '', $variavel);
            $variavel = str_replace(')', '', $variavel);
            $variavel = str_replace('-', '', $variavel);
            return $variavel;
        }
    ?>