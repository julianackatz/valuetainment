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