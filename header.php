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
                <div class='flex flex-wrap items-center'>
                    <div class=''><a href="/">
                            <?php if ( get_field( 'logo', 'option' ) ) : ?>
                            <img src="<?php the_field( 'logo', 'option' ); ?>" />
                            <?php endif ?>
                        </a></div>
                    <nav id="site-navigation" class="ml-auto ">
                        <button class="menu-toggle lg:hidden" aria-controls="primary-menu" aria-expanded="false"><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M0 7.897C0 7.402.402 7 .897 7h22.206a.897.897 0 010 1.794H.897A.897.897 0 010 7.897zM0 16.196c0-.495.402-.897.897-.897h14.58a.897.897 0 010 1.794H.897A.897.897 0 010 16.197z"
                                    clip-rule="evenodd" />
                            </svg></button>

                        <ul
                            class="gap-12 items-center lg:flex flex-wrap primary-menu reset-list-style px-6 lg:px-0 hidden  absolute bg-primary-100 lg:bg-transparent text-black left-0 top-0 lg:relative py-16 lg:py-0 w-10/12 lg:w-auto z-30 lg:z-auto min-h-screen lg:min-h-0">

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
                            <?php
                    /* -------------------------------------------------------------------------- */
                    /*                                search widget                               */
                    /* -------------------------------------------------------------------------- */
                    ?>
                            <div class="search-wrap relative"><?php
                    if ( is_active_sidebar( 'header-search' ) ) : ?>
                                <div id="search-input" class="hidden" role="complementary">
                                    <?php dynamic_sidebar( 'header-search' ); ?>
                                </div>
                                <?php endif; ?>

                                <svg id="search-icon" class="cursor-pointer" width="20" height="20" viewBox="0 0 20 20"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M8 0.25C3.71979 0.25 0.25 3.71979 0.25 8C0.25 12.2802 3.71979 15.75 8 15.75C9.87001 15.75 11.5853 15.0877 12.9242 13.9848L18.4697 19.5303L18.5538 19.6029C18.8474 19.8208 19.2641 19.7966 19.5303 19.5303C19.8232 19.2374 19.8232 18.7626 19.5303 18.4697L13.9848 12.9242C15.0877 11.5853 15.75 9.87001 15.75 8C15.75 3.71979 12.2802 0.25 8 0.25ZM8 1.75C11.4518 1.75 14.25 4.54822 14.25 8C14.25 11.4518 11.4518 14.25 8 14.25C4.54822 14.25 1.75 11.4518 1.75 8C1.75 4.54822 4.54822 1.75 8 1.75Z"
                                        fill="#111111" />
                                </svg>
                            </div>
                        </ul>
                    </nav>


                </div>
            </div>
        </header>
    </div>
    <div class="vue-app">
        <headerwp user="<?php echo get_current_user_id();?>"></headerwp>
    </div>