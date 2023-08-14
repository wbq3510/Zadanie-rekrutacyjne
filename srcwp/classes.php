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
            <div class="container mx-auto lg:min-h-[734px]">
                <div
                    class="w-full lg:max-w-[513px] lg:w-1/2 h-full flex flex-col justify-center animation-hero-left-col">
                    <h2 class="text-6xl mb-11">
                        <?php the_sub_field( 'naglowek' ); ?>
                    </h2>
                    <div class="mb-72px lg:max-w-[441px]"><?php the_sub_field( 'opis' ); ?></div>
                    <div class="flex flex-wrap gap-x-9 gap-y-4">
                        <a class="btn-one"
                            href=" <?php the_sub_field( 'link_do_przycisku_nr1' ); ?>"><?php the_sub_field( 'tekst_przycisku_nr1' ); ?></a>
                        <a class="btn-two" href="<?php the_sub_field( 'link_do_przycisku_nr2' ); ?>">
                            <?php the_sub_field( 'tekst_przycisku_nr2' ); ?> <svg class=" ml-2" width="16" height="17"
                                viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16 8.49529L15.1043 7.59959L8.63642 14.0769L8.63642 0.5L7.36358 0.5L7.36358 14.0675L0.895699 7.59959L9.54553e-08 8.49529L8.00471 16.5L16 8.49529Z"
                                    fill="#1B5B31" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <!-- right col -->
            <div class="lg:absolute lg:left-1/2 w-full lg:w-[50vw] min-h-[300px] lg:h-full bg-cover lg:-z-20"
                style="background-image: url(<?php the_sub_field('obraz'); ?>);">
            </div>
        </div>
    </div>
    <?php endwhile; ?>
    <?php else : ?>
    <?php // Nie znaleziono wierszy ?>
    <?php endif; ?>
</div>
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