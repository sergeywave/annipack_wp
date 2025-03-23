<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <!-- <link rel="stylesheet" href="./css/style.css" /> -->

    <?php wp_head(); ?>

    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/svg+xml" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.svg">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/img/apple-touch-icon.png">
    <meta name="apple-mobile-web-app-title" content="ЭННИПАК">
    <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/assets/img/site.webmanifest">

  </head>

  <body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    
    <div class="wrapper">

      <header class="header">

        <div class="header__block-inner container">

          <a href="/" class="header__logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/logo.svg" alt="Logo" />
          </a>

          <ul class="header__nav-list">
            <li>
              <a href="#why-we">почему выбирают нас?</a>
            </li>
            <li>
              <a href="#work">как мы работаем?</a>
            </li>
            <li>
              <a href="#delivery-pay">доставка и оплата</a>
            </li>
            <li>
              <a href="#about-us">о нас</a>
            </li>
          </ul>

          <div class="header__feedback">

            <div class="header__feedback-call">

              <a class="header-tel" href="tel: <?php echo get_field('ssydka_na_telefon_v_hedere', 'option'); ?> "><?php echo get_field('telefon_v_hedere', 'option'); ?></a>

              <a class="call-icon" href="<?php echo esc_url( get_field('ssylka_na_telegram', 'option') ); ?>" target="_blank" rel="noopener noreferrer">
                <img
                  src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/telegram-icon.svg"
                  alt="телеграм"
                />
              </a>

              <a class="call-icon" href="<?php echo esc_url( get_field('ssylka_na_whatsapp', 'option') ); ?>" target="_blank" rel="noopener noreferrer">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/whatsApp-icon.svg" alt="ватсап" />
              </a>

              <button class="header__popup-btn btn popup-btn" type="button">
                Заказать обратный звонок
              </button>

            </div>

            <button class="header__burger" type="button" aria-label="Мобильное меню">
              <span></span>
            </button>

          </div>

        </div>

        <div class="mobile-menu">

          <ul class="header__nav-list">
            <li>
              <a href="#why-we">почему выбирают нас?</a>
            </li>
            <li>
              <a href="#work">как мы работаем?</a>
            </li>
            <li>
              <a href="#delivery-pay">доставка и оплата</a>
            </li>
            <li>
              <a href="#about-us">о нас</a>
            </li>
            <button class="btn mobile-menu-gh-btn popup-btn" type="button">
              Заказать <br> обратный звонок
            </button>
          </ul>

        </div>

      </header>    
