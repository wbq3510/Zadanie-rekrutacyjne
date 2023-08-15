<?php
/*
Template name: Home
*/
get_header(); ?>
<div class="vue-app">
    <index id="<?php echo get_option('page_on_front');?>"></index>


    <!-- HERO -->
    <section>
        <div class="swiper heroSwiper">
            <?php heroSlider() ?>
            <div class="flex absolute bottom-0 right-0">
                <div class="swiper-button-prev bg-white p-12 left-auto right-auto relative">
                    <svg class="absolute" width="27" height="24" viewBox="0 0 27 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M0.795114 10.9393C0.209327 11.5251 0.209327 12.4749 0.795114 13.0607L10.3411 22.6066C10.9268 23.1924 11.8766 23.1924 12.4624 22.6066C13.0482 22.0208 13.0482 21.0711 12.4624 20.4853L3.97709 12L12.4624 3.51472C13.0482 2.92893 13.0482 1.97918 12.4624 1.3934C11.8766 0.807611 10.9268 0.807611 10.3411 1.3934L0.795114 10.9393ZM26.1442 10.5L1.85577 10.5L1.85577 13.5L26.1442 13.5L26.1442 10.5Z"
                            fill="black" />
                    </svg>
                </div>
                <div class="swiper-button-next bg-white p-12 left-auto right-auto relative">
                    <svg class="absolute" width="27" height="24" viewBox="0 0 27 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M26.2049 13.0607C26.7907 12.4749 26.7907 11.5251 26.2049 10.9393L16.6589 1.3934C16.0732 0.807612 15.1234 0.807612 14.5376 1.3934C13.9518 1.97918 13.9518 2.92893 14.5376 3.51472L23.0229 12L14.5376 20.4853C13.9518 21.0711 13.9518 22.0208 14.5376 22.6066C15.1234 23.1924 16.0732 23.1924 16.6589 22.6066L26.2049 13.0607ZM0.855774 13.5H25.1442V10.5H0.855774V13.5Z"
                            fill="black" />
                    </svg>
                </div>
            </div>
        </div>
    </section>

    <!-- S1 -->
    <section class="pb-40 pt-120px bg-primary-300">
        <div class="container mx-auto">
            <span
                class=" text-primary-200 text-xs font-medium mb-3 block"><?php the_field( 'tekst_nad_naglowkiem-s1' ); ?></span>
            <h2 class="pb-8"><?php the_field( 'naglowek-s1' ); ?></h2>
            <div class="pb-24"><?php the_field( 'opis-s1' ); ?></div>
            <?php sectionOneBlocks() ?>
        </div>
    </section>

    <!-- s2 -->
    <?php sectionTwo() ?>

    <!-- s3 -->

    <section>
        <div class="container mx-auto">
            <div><?php the_field( 'tekst_nad_naglowkiem-s3' ); ?></div>
            <h2><?php the_field( 'naglowek-s3' ); ?></h2>
        </div>

        <div id="macy-container" class="container mx-auto">
            <?php $obrazki_urls = get_field( 'obrazki' ); ?>
            <?php if ( $obrazki_urls ) :  ?>
            <?php foreach ( $obrazki_urls as $obrazki_url ): ?>
            <img src="<?php echo esc_url( $obrazki_url ); ?>" />
            <?php endforeach; ?>
            <?php endif; ?>
        </div>

        <!-- Dodaj bibliotekę macy.js -->
        <script src="https://cdn.jsdelivr.net/npm/macy@2"></script>

        <script>
        document.addEventListener("DOMContentLoaded", function() {
            var container = document.getElementById("macy-container");
            var macy = Macy({
                container: container,
                trueOrder: true,
                waitForImages: false,
                margin: {
                    x: 10,
                    y: 16
                },
                columns: 3,
            });
        });
        windows.do
        </script>
    </section>

</div>

<?php get_footer();