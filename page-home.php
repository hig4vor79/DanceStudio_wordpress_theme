<?php 
/* 
Template Name: Home
*/
get_header();
?>
    <main class="main page-main">
      <section class="hero">
        <div class="container hero__inner">
          <div class="hero__content">
            <h1 class="hero__title">
              Студія танцю та художньої гімнастики
              <span class="pink">Dance</span>
              Studio
            </h1>
            <h4 class="hero__text">
              Наш досвід у постанові та навчанні допоможе вашій дитині розкрити
              себе.
            </h4>
            <div class="btn__heroWrapp">
              <p class="openModal btn hero__btn">Записатись</p>
            </div>
          </div>
          <img src="<?php bloginfo('template_url'); ?>/assets/images/hero-image.png" alt="" class="hero__img" />
        </div>
      </section>
      <section class="about section-padding" id="about">
        <div class="container about__inner">
          <h2 class="title">
            <span class="pink">про</span>
            нас
          </h2>
          <div class="about__item">
            <div class="about__left">
              <p class="about__number">15</p>
              <p class="about__text">
                років художньої <br />
                гімнастики
              </p>
            </div>
            <ul class="about__right">
              <li>Майстер спорту з гімнастики</li>
              <li>Призер Етапів Кубку світу</li>
              <li>Призер Чемпіонатів України</li>
            </ul>
          </div>
          <div class="about__item">
            <div class="about__left">
              <p class="about__number">8</p>
              <p class="about__text">
                років хореографії <br />
                та акробатики
              </p>
            </div>
            <ul class="about__right">
              <li>Суддя всеукраїнських змагань</li>
              <li>Хореограф-постановник</li>
              <li>Тренер з багаторічним досвідом</li>
            </ul>
          </div>
        </div>
      </section>
      <section class="services services-left section-padding" id="services">
        <div class="container services__inner">
          <div class="services__left services__item">
            <h2 class="title">
              КЛасична
              <span class="pink">хореографія</span>
            </h2>
            <div class="price__wrapper">
              <span class="price"> 1800 </span>
              <p>грн.</p>
              <span class="old__price"> 2200 грн </span>
            </div>
            <div class="services__content">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel
              luctus ligula. Sed lacus lectus, molestie a euismod at, posuere
              quis augue. Cras consectetur ullamcorper molestie. Nullam et
              commodo leo, commodo porta sapien. Praesent dapibus mattis ante.
              <br /><br /><br />
              Duis eu elit erat. Suspendisse potenti. <br />
              Nunc fringilla nisi tortor, ut aliquam dolor congue quis. <br />
              Morbi ullamcorper elit vel dui rutrum, iaculis ultrices libero
              viverra. <br />
              Donec condimentum blandit est et aliquam. In at porta tellus, eget
              volutpat quam.
            </div>
            <p class="openModal btn hero__btn">Записатись</p>
          </div>
          <div class="services__right services__item">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/services-1.png" alt="" />
          </div>
        </div>
      </section>
      <section class="services services-right section-padding">
        <div class="container services__inner">
          <div class="services__left services__item">
            <h2 class="title">
              <span class="pink">Гімнастика</span>
            </h2>
            <div class="price__wrapper">
              <span class="price"> 1800 </span>
              <p>грн.</p>
              <span class="old__price"> 2200 грн </span>
            </div>
            <div class="services__content">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel
              luctus ligula. Sed lacus lectus, molestie a euismod at, posuere
              quis augue. Cras consectetur ullamcorper molestie. Nullam et
              commodo leo, commodo porta sapien. Praesent dapibus mattis ante.
              <br /><br /><br />
              Duis eu elit erat. Suspendisse potenti. <br />
              Nunc fringilla nisi tortor, ut aliquam dolor congue quis. <br />
              Morbi ullamcorper elit vel dui rutrum, iaculis ultrices libero
              viverra. <br />
              Donec condimentum blandit est et aliquam. In at porta tellus, eget
              volutpat quam.
            </div>
            <p class="openModal btn hero__btn">Записатись</p>
          </div>
          <div class="services__right services__item">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/services-1.png" alt="" />
          </div>
        </div>
      </section>
      <?php if (have_rows('gallery')) : ?>
        <section class="gallery section-padding" id="gallery">
          <div class="container">
            <h2 class="title">наші <span class="pink">досягнення</span></h2>
          </div>
          <div class="swiper gallerySlider">
            <div class="swiper-wrapper">
              <?php while (have_rows('gallery')) : the_row(); ?>
                <div class="swiper-slide">
                  <img src="<?php the_sub_field('gallery-image'); ?>" alt="" />
                </div>
              <?php endwhile; ?>           
            </div>
          </div>
          <div class="pagination"></div>
        </section>
      <?php endif; ?>
      <?php if (have_rows('faq')) : ?>
        <section class="faq section-padding">
          <div class="container faq__inner">
            <div class="faq__left faqq">
              <h2 class="title"><span class="pink">поширені </span>запитання</h2>
              <img src="<?php bloginfo('template_url'); ?>/assets/images/faq.png" alt="" class="faq__image" />
            </div>
            <div class="faq__right faqq">
              <?php while (have_rows('faq')) : the_row(); ?>
                <div class="faq__item">
                  <div class="faq__btn">
                    <p><?php the_sub_field('faq-title'); ?></p>
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/arr.svg" alt="" />
                  </div>
                  <div class="faq__content">
                    <p>
                    <?php the_sub_field('faq-text'); ?>
                    </p>
                  </div>
                </div>
              <?php endwhile; ?>                
            </div>
          </div>
        </section>
      <?php endif; ?>
      <?php if (have_rows('review')) : ?>
        <section class="review section-padding">
          <div class="container review__inner">
            <h2 class="title">відгуги <span class="pink">клієнтів</span></h2>
            <p class="openModal btn hero__btn btn-small">Записатись</p>
          </div>
          <div class="container review__inner2">
            <div class="swiper reviewSlider">
              <div class="swiper-wrapper">
                <?php while (have_rows('review')) : the_row(); ?>
                  <div class="swiper-slide">
                    <img src="<?php the_sub_field('review-image'); ?>" alt="" />
                  </div>
                <?php endwhile; ?>
              </div>
            </div>
            <div class="arrow__wrapper">
              <div class="prewBtn arrow">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/slider-arr.svg" alt="" />
              </div>
              <div class="nextBtn arrow">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/slider-arr.svg" alt="" />
              </div>
            </div>
          </div>
        </section>
      <?php endif; ?>

      <section class="contact section-padding" id="contact">
        <div class="container">
          <h2 class="title"><span class="pink">Контакти</span></h2>
          <div class="contact__inner">
            <div class="contact__image">
              <img src="<?php bloginfo('template_url'); ?>/assets/images/contact.png" alt="" />
            </div>
            <div class="contact__content">
              <div class="social__item">
                <p>контактний номер</p>
                <a href="tel:<?php the_field("phone", 8) ?>" class="hover"> <?php the_field("phone", 8) ?> </a>
              </div>
              <div class="social__item">
                <p>Пошта</p>
                <a href="mailto:<?php the_field("email", 8) ?>" class="hover"> <?php the_field("email", 8) ?> </a>
              </div>
              <div class="social__item">
                <p>адреса</p>
                <a href="<?php the_field("address-link", 8) ?>" class="hover">
                  <?php the_field("address", 8) ?>
                </a>
              </div>
              <div class="form__wrapper">
                <?php echo do_shortcode('[contact-form-7 id="95bd5b2" title="Main form"]'); ?>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php get_footer() ?>