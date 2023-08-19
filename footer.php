<section class="bg-[#111111] pt-20 mt-60px">
    <footer class='container relative mx-auto'>
        <div
            class='flex flex-wrap justify-between lg:-mx-0 pb-16 border-b border-solid border-primary-white items-center'>
            <div class='w-full lg:w-3/12 lg:px-0 mb-4 md:mb-0'>
                <?php if ( get_field( 'logo_white', 'option' ) ) : ?>
                <a href="/"><img src="<?php the_field( 'logo_white', 'option' ); ?>" /></a>
                <?php endif ?>
            </div>
            <div class="text-primary-white flex items-center flex-wrap gap-4 md:gap-6">Daj znać, co możemy dla Ciebie
                zrobić! <a class="btn-one hover:no-underline" href="#">Skontaktuj się z nami</a></div>
        </div>
        <div class=" pt-16 flex justify-between flex-wrap gap-4">
            <div class='w-full lg:w-3/12 lg:px-0 text-primary-white flex list-none gap-4 md:gap-12'>
                <?php 
                if ( has_nav_menu( 'footer' ) ) {
                        wp_nav_menu(
                                array(
                                        'container'  => '',
                                        'items_wrap' => '%3$s',
                                        'theme_location' => 'footer',
                                )
                        );
                } 
                ?>
            </div>
            <div class="gap-12 text-primary-white">
                <span>000-000-000</span>
                <a href="mailto:giarddesign@kontakt.pl">giarddesign@kontakt.pl</a>
            </div>
        </div>
        <div class=" text-primary-white flex justify-between pt-120px pb-20 flex-wrap gap-4">
            <div>Prawa zastrzeżone © 2022</div>
            <div class="flex">made by <img class="ml-4" src="/wp-content/uploads/2023/08/logo-full-light.svg" alt="">
            </div>

        </div>
    </footer>
</section>
<?php wp_footer(); ?>

</body>

</html>