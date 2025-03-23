<footer class="footer">

<div class="footer-block__inner container">

  <div class="calls">

    <div class="footer-calls-block">
      <a href="tel: <?php echo wp_kses_post( get_field('ssylka_na_telefon_v_futere', 'option') ); ?> "> <?php echo wp_kses_post( get_field('telefon_v_futere', 'option') ); ?> </a>
      <a class="footer-email footer-email-tb" href="mailto:<?php echo wp_kses_post( get_field('email_v_futere', 'option') ); ?>"><?php echo wp_kses_post( get_field('email_v_futere', 'option') ); ?></a>  
    </div>

    <div class="messanges">
      <a class="call-icon" href="<?php echo esc_url( get_field('ssylka_na_telegram_v_futere', 'option') ); ?>" target="_blank">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/telegram-icon-footer.svg" alt="Иконка телеграм"/>
      </a>
      <a class="call-icon" href="<?php echo esc_url( get_field('ssylka_na_whatsapp_v_futere', 'option') ); ?>" target="_blank">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/whatsApp-icon-footer.svg" alt="Иконка ватсап" />
      </a>
    </div>

  </div>

  <nav class="header__nav">
    <ul class="header__nav-list">
      <li>
        <a href="#work">как мы работаем</a>
      </li>

      <li>
        <a href="#production">наша продукция</a>
      </li>

      <li class="item-delivery">
        <a href="#delivery-pay">доставка и оплата</a>
      </li>

      <li>
        <a href="#about-us">о нас</a>
      </li>
    </ul>
  </nav>

  <p class="address">  <?php echo wp_kses_post( get_field('adres_v_futere', 'option') ); ?> </p>

  <a class="footer-email" href="mailto:<?php echo wp_kses_post( get_field('email_v_futere', 'option') ); ?>"><?php echo wp_kses_post( get_field('email_v_futere', 'option') ); ?></a>

  <p class="time-work"> <?php echo wp_kses_post( get_field('vremya_raboty', 'option') ); ?> </p>

</div>

</footer>
</div>


<?php wp_footer(); ?>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
  var swiper = new Swiper(".mySwiper", {
    spaceBetween: 24,
    slidesPerView: "auto",
    breakpoints: {
        320: {
            spaceBetween: 20,
        },
        500: {
            spaceBetween: 20,
        },
    },
  });
  var swiper = new Swiper(".mySwiper-2", {
    spaceBetween: 24,
    slidesPerView: "auto",
    breakpoints: {
        320: {
            spaceBetween: 20,
        },
        500: {
            spaceBetween: 20,
        },
    },
  });
</script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();
   for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
   k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(99781191, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/99781191" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->


</body>
</html>