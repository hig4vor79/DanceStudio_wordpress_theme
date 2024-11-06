<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <?php wp_head() ?>
  </head>
  <body>
    <header class="header">
      <div class="container header__inner">
        <a href="/" class="logo">
          <img src="<?php bloginfo('template_url'); ?>/assets/images/logo.svg" alt="" />

        </a>
        <nav>
          <ul class="nav">
            <li class="nav__item">
              <a href="#services" class="nav__link closeBurger">ПОслуги</a>
            </li>
            <li class="nav__item">
              <a href="#about" class="nav__link closeBurger">про нас</a>
            </li>
            <li class="nav__item">
              <a href="#contact" class="nav__link closeBurger">контакти</a>
            </li>
            <li class="nav__item">
              <a href="#gallery" class="nav__link closeBurger">галерея</a>
            </li>
          </ul>
          <div class="lang__mob"><?php echo do_shortcode('[language-switcher]'); ?></div>
        </nav>

        <div class="lang"><?php echo do_shortcode('[language-switcher]'); ?></div>

        <button class="menu">
          <svg width="40" height="40" viewBox="0 0 100 100">
            <path
              class="line line1"
              d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058"
            ></path>
            <path class="line line2" d="M 20,50 H 80"></path>
            <path
              class="line line3"
              d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942"
            ></path>
          </svg>
        </button>
      </div>
    </header>