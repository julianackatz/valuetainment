<?php 
/** 
 * Plugin Name: Swiper Slide
 * Description: Custom slider for Valuetainment
 */

function swiper_slider_function()
{
    return '<!-- Slider main container -->
                                <div class="swiper">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper">
                                    <!-- Slides -->
                                    <div class="swiper-slide"><img src="/valuetainment/wp-content/uploads/2022/09/2-1.png"></div>
                                    <div class="swiper-slide"><img src="/valuetainment/wp-content/uploads/2022/09/black-sweater.jpg"></div>
                                    <div class="swiper-slide"><img src="/valuetainment/wp-content/uploads/2022/09/red-shirt.jpg"></div>
                                    ...
                                </div>
                                <!-- If we need pagination -->
                                <div class="swiper-pagination"></div>

                                <!-- If we need navigation buttons -->
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>

                                <!-- If we need scrollbar -->
                                <div class="swiper-scrollbar"></div>
                                </div>';
}

add_shortcode('swiper_slider', 'swiper_slider_function');

?>


