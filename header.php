<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no"/>
    <meta name="theme-color" content="#505050"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="#505050"/>
    <?php wp_head(); ?>
</head>

<body class="page bg--white">

    <!-- Modal -->
    <div class="modal hystmodal" id="modal" aria-hidden="true">
        <div class="hystmodal__wrap">
            <div class="modal__body hystmodal__window" role="modal window contact" aria-modal="true">
                <div class="modal__close" data-hystclose>
                    <svg class="modal__close-svg" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1L12 12M12 1L1 12" stroke-width="1.5" stroke-linecap="round" />
                    </svg>
                </div>
                <h3 class="modal__title modal__field--anim title title--big title--black title--w-medium center">
                    Обратная связь
                </h3>
                <?php echo do_shortcode( '[contact-form-7 title="Обратная связь" html_class="modal__form"]' ); ?>
            </div>
        </div>
    </div>
    <!-- /. Modal -->
    <!-- Header -->
    <header class="header">
        <div class="header__body container">
            <a href="./" class="header__logo logo">
                <img src="<?php echo STANDART_DIR; ?>img/logo.svg" alt="" class="header__logo-img logo__img">
            </a>
            <div class="header__inner">
                <nav class="header__menu menu">
                    <ul class="header__menu-list menu__list">
                        <li class="header__menu-item menu__item">
                            <a href="#about-us" class="menu__link js-anchor-link">
                                О нас
                            </a>
                        </li>
                        <li class="header__menu-item menu__item">
                            <a href="#products" class="menu__link js-anchor-link">
                                Продукты
                            </a>
                        </li>
                        <li class="header__menu-item menu__item">
                            <a href="#documentation" class="menu__link js-anchor-link">
                            Документация
                            </a>
                        </li>
                        <li class="header__menu-item menu__item">
                            <a href="#contact-us" class="menu__link js-anchor-link">
                                Связаться с нами
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="header__action">
                    <a href="javascript:;" class="header__button button button--primary button--small" data-modal="#modal">
                        Запросить демо
                    </a>
                </div>
            </div>
        </div>
    </header>
    <!-- /. Header -->

    <!-- MAIN -->
    <main class="main page__container">