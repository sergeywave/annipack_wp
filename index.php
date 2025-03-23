<?php
/**
 * Template Name: Главная страница
 *
 * Шаблон для отображения главной страницы
 */

get_header(); ?>

    <main class="main">
        <section class="section-main-screen container">

          <div class="section-main-screen__description">
            <h1 class="main-title">
              <?php echo wp_kses_post( get_field( 'zagolovok_straniczy' ) ); ?>
            </h1>

            <p class="section-main-screen__text">
              <?php echo wp_kses_post( get_field( 'tekst_pod_zagolovkom' ) ); ?>
            </p>

            <ul class="section-main-screen__advantages-list">
              <li>
                <img
                  src="<?php echo esc_url( get_field( 'ikonka_preimushhestva_1' ) );  ?>"
                  alt="Преимущество 1"
                />
                <p>
                <?php echo wp_kses_post( get_field( 'tekst_preimushhestvo_1' ) ); ?>  
                </p>
              </li>

              <li>
                <img
                  src="<?php echo esc_url( get_field( 'ikonka_preimushhestva_2' ) );  ?>"
                  alt="Преимущество 2"
                />
                <p>
                  <?php echo wp_kses_post( get_field( 'tekst_preimushhestvo_2' ) ); ?>
                </p>
              </li>

              <li>
                <img
                  src="<?php echo esc_url( get_field( 'ikonka_preimushhestva_3' ) );  ?>"
                  alt="Преимущество 3"
                />
                <p><?php echo wp_kses_post( get_field( 'tekst_preimushhestvo_3' ) ); ?></p>
              </li>
            </ul>

            <button class="btn section-main-screen__btn popup-btn" type="button">
              Заказать обратный звонок
            </button>
          </div>

          <a class="section-main-screen__img" href="#">
            <div class="circle">
              <span></span>
              <span></span>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/main-banner.png" alt="Баннер"/>
          </a>

        </section>

        <section class="section-products container">

          <div id="production" class="anchor"></div>

          <h2 class="section-title">Наша продукция</h2>

          <div class="tab">
            <div class="tab__list">
              <input
                checked
                id="tab-btn-1"
                name="tab-btn"
                type="radio"
                value=""
              />
              <label class="tab-btn" for="tab-btn-1">пакеты</label>
              <input id="tab-btn-2" name="tab-btn" type="radio" value="" />
              <label class="tab-btn" for="tab-btn-2">пленка</label>
            </div>

            <div class="tab-content" id="content-1">

              <div class="swiper mySwiper">

                <?php if ( have_rows( 'slajder_pakety' ) ) : ?>
                  <div class="swiper-wrapper">
                      <?php while ( have_rows( 'slajder_pakety' ) ) : the_row(); ?>
                          <div class="swiper-slide tab-content__item">
                              <img
                                  class="image"
                                  src="<?php echo esc_url( get_sub_field( 'ikonka' ) ); ?>"
                                  alt="<?php echo esc_attr( get_sub_field( 'nazvanie_slajda' ) ); ?>"
                              />
                              <h2 class="title">
                                  <?php echo wp_kses_post( get_sub_field( 'nazvanie_slajda' ) ); ?>
                              </h2>
                              <p class="text">
                                  <?php echo wp_kses_post( get_sub_field( 'opisanie_slajda' ) ); ?>
                              </p>
                              <span class="price">
                                  <?php echo esc_html( get_sub_field( 'czena' ) ); ?>
                              </span>
                          </div>
                      <?php endwhile; ?>
                  </div>
                <?php endif; ?>

              </div>

            </div>

            <div class="tab-content" id="content-2">

              <div class="swiper mySwiper-2">

                  <?php if ( have_rows( 'slajder_plenka' ) ) : ?>
                      <div class="swiper-wrapper">
                          <?php while ( have_rows( 'slajder_plenka' ) ) : the_row(); ?>
                              <div class="swiper-slide tab-content__item">
                                  <img
                                      class="image"
                                      src="<?php echo esc_url( get_sub_field( 'ikonka' ) ); ?>"
                                      alt="<?php echo esc_attr( get_sub_field( 'nazvanie_slajda' ) ); ?>"
                                  />
                                  <h2 class="title">
                                      <?php echo wp_kses_post( get_sub_field( 'nazvanie_slajda' ) ); ?>
                                  </h2>
                                  <p class="text">
                                      <?php echo wp_kses_post( get_sub_field( 'opisanie_slajda' ) ); ?>
                                  </p>
                                  <span class="price">
                                      <?php echo esc_html( get_sub_field( 'czena' ) ); ?>
                                  </span>
                              </div>
                          <?php endwhile; ?>
                      </div>
                    <?php endif; ?>
                
              </div>

            </div>

          </div>
        </section>

        <section  class="section-why-we container">

          <div id="why-we" class="anchor"></div>

          <h2 class="section-title">Почему выбирают нас?</h2>

          <div class="section-why-we__list">

            <div class="list-item">
              <img class="list-item__image good-price-icon" src="./img/icons/why-we-1.svg" alt="Почему мы 1"/>

              <div class="list-item__description">
                <h2 class="list-item__title">
                  <?php echo wp_kses_post( get_field( 'zagolovok_preimushhestva_1' ) ); ?>  
                </h2>
                <p class="list-item__text">
                  <?php echo wp_kses_post( get_field( 'tekst_perimushhestva_1' ) ); ?>  
                </p>
              </div>
            </div>

            <div class="list-item">
              <img
                class="list-item__image help-icon"
                src="./img/icons/why-we-2.svg"
                alt="Почему мы 2"
              />

              <div class="list-item__description">
                <h2 class="list-item__title">
                  <?php echo wp_kses_post( get_field( 'zagolovok_preimushhestva_2' ) ); ?>  
                </h2>
                <p class="list-item__text">
                  <?php echo wp_kses_post( get_field( 'tekst_perimushhestva_2' ) ); ?>  
                </p>
              </div>
            </div>

            <div class="list-item">
              <img
                class="list-item__image exchange-icon"
                src="./img/icons/why-we-3.svg"
                alt="Почему мы 3"
              />

              <div class="list-item__description">
                <h2 class="list-item__title">
                  <?php echo wp_kses_post( get_field( 'zagolovok_preimushhestva_3' ) ); ?>
                  
                </h2>
                <p class="list-item__text">
                  <?php echo wp_kses_post( get_field( 'tekst_perimushhestva_3' ) ); ?>
                </p>
              </div>
            </div>

            <div class="list-item">
              <img
                class="list-item__image box-icon"
                src="./img/icons/why-we-4.svg"
                alt="Почему мы 4"
              />

              <div class="list-item__description">
                <h2 class="list-item__title">
                  <?php echo wp_kses_post( get_field( 'zagolovok_preimushhestva_4' ) ); ?>
                </h2>
                <p class="list-item__text">
                  <?php echo wp_kses_post( get_field( 'tekst_perimushhestva_4' ) ); ?>
                </p>
              </div>
            </div>

            <div class="list-item">
              <img
                class="list-item__image quality-icon"
                src="./img/icons/why-we-5.svg"
                alt="Почему мы 5"
              />

              <div class="list-item__description">
                <h2 class="list-item__title">
                  <?php echo wp_kses_post( get_field( 'zagolovok_preimushhestva_5' ) ); ?>  
                  </h2>
                <p class="list-item__text">
                  <?php echo wp_kses_post( get_field( 'tekst_perimushhestva_5' ) ); ?>
                </p>
              </div>
            </div>

            <div class="list-item">
              <img
                class="list-item__image time-icon"
                src="./img/icons/why-we-6.svg"
                alt="Почему мы 1"
              />

              <div class="list-item__description">
                <h2 class="list-item__title">
                 <?php echo wp_kses_post( get_field( 'zagolovok_preimushhestva_6' ) ); ?> 
                </h2>
                <p class="list-item__text">
                  <?php echo wp_kses_post( get_field( 'tekst_perimushhestva_6' ) ); ?>
                </p>
              </div>
            </div>
          </div>

        </section>

        <section class="section-call section-call_hidden container">

          <p>
            Закажите обратный звонок, <br />
            и мы свяжемся с вами для уточнения <br />
            деталей заказа.
          </p>

          <button class="btn section-main-screen__btn popup-btn" type="button">
            Заказать обратный звонок
          </button>
        </section>

        <section class="section-work container">
          <div id="work" class="anchor"></div>

          <h2 class="section-title">
            <?php echo wp_kses_post( get_field( 'zagolovok_sekczii_kmr' ) ); ?>
          </h2>

          <div class="section-work__list">
            <div class="section-work__list-item">
              <img src="<?php echo esc_url( get_field( 'izobr_elementa_1' ) ); ?>" alt="Как работаем" />

              <div class="description">
                <h3 class="title"><?php echo wp_kses_post( get_field( 'zagolovok_elementa_1' ) ); ?></h3>  
                <p class="text"><?php echo wp_kses_post( get_field( 'tekst_zagolovka_1' ) ); ?></p>
              </div>
            </div>

            <div class="section-work__list-item">
              <img src="<?php echo esc_url( get_field( 'izobr_elementa_2' ) ); ?>" alt="Как работаем 2" />

              <div class="description">
                <h3 class="title"><?php echo wp_kses_post( get_field( 'zagolovok_elementa_2' ) ); ?></h3>
                <p class="text"><?php echo wp_kses_post( get_field( 'tekst_zagolovka_2' ) ); ?></p>
              </div>
            </div>

            <div class="section-work__list-item">
              <img src="<?php echo esc_url( get_field( 'izobr_elementa_3' ) ); ?>" alt="Как работаем 3" />
              <div class="description">
                <h3 class="title"><?php echo wp_kses_post( get_field( 'zagolovok_elementa_3' ) ); ?></h3>
                <p class="text"><?php echo wp_kses_post( get_field( 'tekst_zagolovka_3' ) ); ?></p>
              </div>
            </div>

            <div class="section-work__list-item">
              <img src="<?php echo esc_url( get_field( 'izobr_elementa_4' ) ); ?>" alt="Как работаем 4" />
              <div class="description">
                <h3 class="title"><?php echo wp_kses_post( get_field( 'zagolovok_elementa_4' ) ); ?></h3>
                <p class="text"><?php echo wp_kses_post( get_field( 'tekst_zagolovka_4' ) ); ?></p>
              </div>
            </div>
          </div>
        </section>

        <section class="section-delivery container">
          <div id="delivery-pay" class="anchor"></div>

          <h2 class="section-title">Доставка и оплата</h2>

          <div class="section-delivery__inner">
            <div class="delivery-terms">
              <p>
                Доставляем продукцию по всей России, как собственным
                автотранспортом, <br />
                так и с помощью транспортных компаний. Возможен самовывоз.
              </p>

              <p>
                Оплата осуществляется удобным для вас способом. Возможна оплата
                наличными <br/> и безналичным платежом. При безналичном расчёте предоплата 50%.
              </p>

              <div class="list-payment-options">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/option-pay-1.svg" alt="Оплата CDEK" />
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/option-pay-2.svg" alt="Оплата ITECO" />
                <img
                  src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/option-pay-3.svg"
                  alt="Оплата ДеловыеЛинии"
                />
              </div>
            </div>

            <img
              class="map-russia"
              src="<?php echo get_template_directory_uri(); ?>/assets/img/map-russia.webp"
              alt="Карта россии"
            />
          </div>
        </section>

        <section class="section-call container">
          <p>
            Закажите обратный звонок, <br />
            и мы свяжемся с вами для уточнения <br />
            деталей заказа.
          </p>

          <button class="btn section-main-screen__btn popup-btn" type="button">
            Заказать обратный звонок
          </button>
        </section>

        <section class="section-about-us container">
          <div id="about-us" class="anchor"></div>

          <h2 class="section-title">
            <?php echo wp_kses_post( get_field( 'zagolovok_o_nas' ) ); ?>  
          </h2>

          <div class="section-about-us__inner">

            <div class="section-about-us__description">

              <?php echo wp_kses_post( get_field( 'tekst_o_nas' ) ); ?>  

            </div>

            <img class="about-us-image" src="<?php echo esc_url( get_field( 'izobrazhenie_o_nas' ) ); ?> " alt="О нас" />   
          </div>
        </section>

        <div class="popup__wrapper">

          <div class="popup-request">
            <button class='btn__close-popup popup-request__btn' type='button'></button>
            <div class="popup__wrap">
        
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/popup-image.webp" alt="Фото всплывающего окна">

              <div class="form-container">

                <div class="popup-h1">Оставьте свои контактные данные, и мы свяжемся с вами в ближайшее время!</div>

                <?php echo do_shortcode('[contact-form-7 id="490e42a" title="Контактная форма"]'); ?>

              </div>
        
            </div>
          </div>

          <div class="popup-success-message">
            <button class='btn__close-popup close-success-message' type='button'></button>
            <div class="popup-h1">Ваше сообщение успешно отправлено!</div>
          </div>
        
        </div>

      </main>

<?php get_footer(); ?>