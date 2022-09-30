<?php /* Template Name: Test template*/ ?>

 <?php  get_header(); ?> 

                <main>
                        <section id="top">
                             <img id="top-logo" src="/valuetainment/wp-content/uploads/2022/09/VT_600_w.png">
                        </section>


                        <section id="slider">

                                <?php echo do_shortcode('[swiper_slider]'); ?>

                                <p>The best merch now available</p>

                        </section>
                    
                </main>
                


<?php // get_footer(); ?>

<style>
    body {
        background-color:#ea2127;
        margin:0;
    }
    section {
        padding:0;
    }
    .container {
        max-width:1200px;
        margin:0 auto;
    }
    img {
        width:100%;
    }
    #top {
        margin: 0 auto;
        text-align: center;
        background-color:#242525;
    }
    #top-logo {
        max-width: 230px;
        padding: 15px;
        margin: 0 auto;
    }
    #slider {
        padding: 20px 10px;
    }
    p {
        font-family: 'Barlow', sans-serif;
        color: #ffffff;
        font-weight: 600;
        text-transform: uppercase;
        text-align: center;
        font-size: 26px;
        margin-top: 15px;
    }
    .swiper {
        width: 600px;
        height: 600px;
    }
    .swiper-button-prev:after, .swiper-rtl .swiper-button-next:after,
    .swiper-button-next:after, .swiper-rtl .swiper-button-prev:after {
        color:#000000;
    }
    .swiper-pagination-bullet-active {
        background:#ea2127;
    }

    /** Mobile styles **/
    @media only screen and (max-width:768px) {
        .swiper {
            width: auto;
            height: auto;
        }
    }
</style>

<script>
    const swiper = new Swiper('.swiper', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  // And if we need scrollbar
  scrollbar: {
    el: '.swiper-scrollbar',
  },
});
</script>