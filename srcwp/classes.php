<?php

/* -------------------------------------------------------------------------- */
/*                                 Hero Swiper                                */
/* -------------------------------------------------------------------------- */
function heroSlider(){ ?>
<div class="swiper-wrapper">
    <?php if ( have_rows( 'hero' ) ) : ?>
    <?php while ( have_rows( 'hero' ) ) : the_row(); ?>
    <div class="swiper-slide">
        <div class="flex flex-col lg:flex-row">
            <!-- left col -->
            <div class="container mx-auto lg:min-h-[734px] py-20 lg:py-0">
                <div
                    class="w-full lg:max-w-[513px] lg:w-1/2 h-full flex flex-col justify-center animation-hero-left-col">
                    <h2 class="text-6xl mb-11">
                        <?php the_sub_field( 'naglowek' ); ?>
                    </h2>
                    <div class="mb-14 sm:mb-72px lg:max-w-[441px]"><?php the_sub_field( 'opis' ); ?></div>
                    <div class="flex flex-wrap sm:gap-x-9 gap-x-4 gap-y-4 sm:gap-y-4">
                        <a class="btn-one"
                            href=" <?php the_sub_field( 'link_do_przycisku_nr1' ); ?>"><?php the_sub_field( 'tekst_przycisku_nr1' ); ?></a>
                        <a class="btn-two" href="<?php the_sub_field( 'link_do_przycisku_nr2' ); ?>">
                            <?php the_sub_field( 'tekst_przycisku_nr2' ); ?> <svg class="w-4 ml-2" width="16"
                                height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16 8.49529L15.1043 7.59959L8.63642 14.0769L8.63642 0.5L7.36358 0.5L7.36358 14.0675L0.895699 7.59959L9.54553e-08 8.49529L8.00471 16.5L16 8.49529Z"
                                    fill="#1B5B31" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <!-- right col -->
            <div class="lg:absolute lg:left-1/2 w-full lg:w-[50vw] min-h-[300px] sm:min-h-[360px] lg:min-h-[300px] lg:h-full bg-cover lg:-z-20"
                style="background-image: url(<?php the_sub_field('obraz'); ?>);">
            </div>
        </div>
    </div>
    <?php endwhile; ?>
    <?php else : ?>
    <?php endif; ?>
</div>
<?php }

/* -------------------------------------------------------------------------- */
/*                             Section one (bloks)                            */
/* -------------------------------------------------------------------------- */
function sectionOneBlocks(){ ?>
<div class="flex flex-col lg:flex-row gap-4 lg:gap-6 xl:gap-16" data-aos="fade-up">
    <?php if ( have_rows( 'kafle' ) ) : ?>
    <?php while ( have_rows( 'kafle' ) ) : the_row(); ?>
    <div class="flex flex-col bg-white rounded-[28px] box-hover transition-all">
        <a class="px-10 py-12" href="<?php the_sub_field( 'link' ); ?>">
            <?php if ( get_sub_field( 'ikona' ) ) : ?>
            <img class="w-11 mb-34px" src="<?php the_sub_field( 'ikona' ); ?>" />
            <?php endif ?>

            <h3 class="mb-3"><?php the_sub_field( 'naglowek' ); ?></h3>
            <?php the_sub_field( 'opis' ); ?>
            <div>
                <span class="flex items-center text-primary-200 pt-16 relative w-fit transition-all link-hover">Dowiedz
                    się więcej <span>
                        <svg class="ml-10px transition-all" width="16" height="16" viewBox="0 0 16 16" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7.99528 -1.20755e-06L7.09959 0.895696L13.5769 7.36358L-7.5502e-07 7.36358L-6.43745e-07 8.63642L13.5675 8.63642L7.09959 15.1043L7.99529 16L16 7.99529L7.99528 -1.20755e-06Z"
                                fill="#1B5B31" />
                        </svg>
                    </span>
                </span>
            </div>
        </a>
    </div>
    <?php endwhile; ?>
    <?php else : ?>
    <?php endif; ?>
</div>
<?php }

/* -------------------------------------------------------------------------- */
/*                                 Section Two                                */
/* -------------------------------------------------------------------------- */
function sectionTwo($obraz="", $nad_naglowkiem="", $naglowek="", $opis="", $link="") { ?>
<div class="flex relative bg-no-repeat overflow-hidden">
    <div class="animationSection s2Content container mx-auto flex-col md:flex-row flex justify-end">
        <div style="background-image: url(<?php the_field($obraz); ?>);"
            class="z-0 order-2 md:order-1 h-96 md:h-full top-0 bg-no-repeat w-full md:w-1/2 bg-cover md:absolute left-0">
        </div>
        <div class="relative md:pl-12 lg:pl-20 xl:pl-40 w-full md:w-1/2 pt-20 pb-12 md:py-20 2xl:py-24">
            <div class="z-10 relative text-primary-white">
                <div class="mb-4"> <?php the_field( $nad_naglowkiem ); ?></div>
                <h2 class="mb-10 max-w-[250px]"><?php the_field( $naglowek ); ?></h2>
                <?php the_field( $opis ); ?>
                <a class="btn-two border-white text-primary-white mt-72px hover:bg-primary-white hover:text-primary-black"
                    href="<?php the_field( $link ); ?>">Poznaj
                    nas
                    bliżej</a>
            </div>
        </div>
    </div>
</div>
<?php }


/* -------------------------------------------------------------------------- */
/*                                   Gallery                                  */
/* -------------------------------------------------------------------------- */
function gallery($naglowek="", $obrazki=""){ ?>
<div class="container mx-auto">
    <div class="lg:ml-24">
        <div class=" text-primary-200 text-xs font-medium mb-3 block">
            <?php the_field( 'tekst_nad_naglowkiem-s3' ); ?></div>
        <h2 class=" mb-24"><?php the_field( $naglowek ); ?></h2>
    </div>
</div>
<div id="macy-container" class="gallery masonyOverlay" data-aos="fade-up">
    <?php $obrazki_urls = get_field( $obrazki ); ?>
    <?php if ( $obrazki_urls ) :  ?>
    <?php foreach ( $obrazki_urls as $obrazki_url ): ?>
    <img class="glightbox cursor-pointer" data-gallery="gallery1" src="<?php echo esc_url( $obrazki_url ); ?>" />
    <?php endforeach; ?>
    <?php endif; ?>
</div>
<div class="w-full flex justify-center items-center absolute"> <button id="showMoreButton"
        class="btn-two border-black text-black -mt-72 relative hover:bg-primary-200 hover:border-primary-200 hover:text-primary-white">Rozwiń
        <svg class="ml-2" width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M16 8.49529L15.1043 7.59959L8.63642 14.0769L8.63642 0.5L7.36358 0.5L7.36358 14.0675L0.895699 7.59959L9.54553e-08 8.49529L8.00471 16.5L16 8.49529Z"
                fill="#111111" />
        </svg>
    </button>
</div>
<?php }



/* -------------------------------------------------------------------------- */
/*                                     CTA                                    */
/* -------------------------------------------------------------------------- */
function cta($naglowek="", $topBtnText="", $ctaLink=""){ ?>
<section class="mt-60px">
    <div class="bg-primary-200 justify-between max-w-[1040px] container mx-auto flex items-center px-110px py-120px">
        <div class="max-w-[600px] w-full">
            <h2 class="text-primary-white text-40px font-normal">
                <?php the_field( $naglowek ); ?>
            </h2>
        </div>
        <div>
            <div class=" text-primary-white"><?php the_field( $topBtnText ); ?>
                <a class="btn-one px-6 py-10px mt-6 text-primary-200 bg-white hover:bg-primary-black hover:border-primary-black hover:text-primary-white"
                    href="<?php the_field( $ctaLink ); ?>">Instagram</a>
            </div>
        </div>
    </div>
</section>
<?php }

add_filter( 'body_class', function( $classes ) {
	if ( is_singular( ['post', 'page'] ) ) {
		$classes[] = 'singular';
	}
	if ( is_front_page() ) {
		$classes[] = 'front-page';
	}
	return $classes;
});