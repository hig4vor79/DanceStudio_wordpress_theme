
<?php
/**
 * Enqueue scripts and styles.
 */
function army_styles() {
	wp_enqueue_style( 'slide', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css' );
	wp_enqueue_style( 'all', get_template_directory_uri() . '/assets/css/all.css' );
	wp_enqueue_style( 'media-style', get_template_directory_uri() . '/assets/css/media.css' );
	
}
add_action( 'wp_enqueue_scripts', 'army_styles' );


function army_scripts() {
	wp_enqueue_script( 'gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js' );
	wp_enqueue_script( 'scrollTrig', 'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js' );
	wp_enqueue_script( 'swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js' );
	wp_enqueue_script( 'smoth', get_template_directory_uri() . '/assets/js/SmoothScroll.js' );
	wp_enqueue_script( 'mainn', get_template_directory_uri() . '/assets/js/main.js' );
}
add_action( 'wp_footer', 'army_scripts' );