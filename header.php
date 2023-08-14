<?php
 require_once __DIR__ . '/helpers.php';
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head data-teleport>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="icon" type="image/png" href="<?= get_stylesheet_directory_uri() . '/assets/images/favicon.png'; ?>">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <?php wp_head(); ?>
	<?php include("dist/head.html"); ?>
</head>

<body <?php body_class(); ?> itemscope itemtype="https://schema.org/WebPage">
    <div class=''>
        <header id="site-header">
            <div class='container relative mx-auto'>
                <div class='flex flex-wrap items-center py-6'>
                    <div class=''><a href="/"><img src="<?php echo get_field('logo', 'options');?>" /></a></div>
                    <nav id="site-navigation" class="ml-auto ">
					<button class="menu-toggle lg:hidden" aria-controls="primary-menu" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">  <path fill-rule="evenodd" d="M0 7.897C0 7.402.402 7 .897 7h22.206a.897.897 0 010 1.794H.897A.897.897 0 010 7.897zM0 16.196c0-.495.402-.897.897-.897h14.58a.897.897 0 010 1.794H.897A.897.897 0 010 16.197z" clip-rule="evenodd"/></svg></button>

                        <ul class="lg:flex flex-wrap primary-menu reset-list-style px-6 lg:px-0 hidden  absolute bg-primary-100 lg:bg-transparent text-black left-0 top-0 lg:relative py-16 lg:py-0 w-10/12 lg:w-auto z-30 lg:z-auto min-h-screen lg:min-h-0">

                            <?php
								if ( has_nav_menu( 'primary' ) ) {

									wp_nav_menu(
										array(
											'container'  => '',
											'items_wrap' => '%3$s',
											'theme_location' => 'primary',
										)
									);
 
								} elseif ( ! has_nav_menu( 'expanded' ) ) {

									wp_list_pages(
										array(
											'match_menu_classes' => true,
											'show_sub_menu_icons' => true,
											'title_li' => false,
										)
									);

								}
								?>
 
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
    </div>
    <div class="vue-app">
        <headerwp user="<?php echo get_current_user_id();?>"></headerwp>
    </div>