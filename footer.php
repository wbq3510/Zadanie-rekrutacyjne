<footer class='container relative mx-auto'>
    <div class='flex flex-wrap lg:-mx-0'>
        <div class='w-full lg:w-3/12 lg:px-0'>
            <img src="<?php echo get_field('logo', 'options')  ?>" />
        </div>
        <div class='w-full lg:w-3/12 lg:px-0'>
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
        <div class='w-full lg:w-3/12 lg:px-0'>
            Dane
        </div>
    </div>
  <div class='flex flex-wrap justify-between'>
          <div><?php echo date('Y');  ?></div>
          <div>Realizacja</div>
  </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>