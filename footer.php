<footer class="footer">
      <div class="container footer__inner">
        <div class="footer__item">
          <a href="/" class="logo">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/logo.svg" alt="" />
          </a>
          <ul class="social">
            <li>
              <a href="tel:<?php the_field("phone", 8) ?>">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/phone.svg" alt="" />
              </a>
            </li>
            <li>
              <a href="<?php the_field("viber", 8) ?>">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/viber.svg" alt="" />
              </a>
            </li>
            <li>
              <a href="<?php the_field("whats", 8) ?>">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/what.svg" alt="" />
              </a>
            </li>
            <li>
              <a href="<?php the_field("telegram", 8) ?>">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/telega.svg" alt="" />
              </a>
            </li>
          </ul>
        </div>
        <div class="footer__item">
          <a href="mailto:<?php the_field("email", 8) ?>" class="footer__link align-center hover"
            ><?php the_field("email", 8) ?>
          </a>
          <a href="tel:<?php the_field("phone", 8) ?>" class="footer__link align-center hover"
            ><?php the_field("phone", 8) ?>
          </a>
        </div>
        <div class="footer__item">
          <a href="/privacy-policy" class="footer__link align-right hover"
            >Політика конфіденційності
          </a>
          <a href="#" class="footer__link align-right"
            >©2024 Всі права захищені. DanceStudio
          </a>
        </div>
      </div>
    </footer>
    <div class="popup">
      <div class="popup__inner">
        <div class="popup__top">
          <a class="logo">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/logo.svg" alt="" />
          </a>
        </div>
        <div class="close closeModal">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
          >
            <path
              d="M23.3333 2.35833L20.975 0L11.6667 9.30833L2.35833 0L0 2.35833L9.30833 11.6667L0 20.975L2.35833 23.3333L11.6667 14.025L20.975 23.3333L23.3333 20.975L14.025 11.6667L23.3333 2.35833Z"
              fill="black"
            />
          </svg>
        </div>
        <div class="form__wrapper">
        <?php echo do_shortcode('[contact-form-7 id="95bd5b2" title="Main form"]'); ?>
        </div>
      </div>
    </div>
    <?php wp_footer(); ?>
  </body>
</html>