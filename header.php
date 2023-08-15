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
                <div class='flex flex-nowrap py-6 lg:py-0 items-center'>
                    <div class='mr-auto'><a href="/">
                            <?php if ( get_field( 'logo', 'option' ) ) : ?>
                            <img src="<?php the_field( 'logo', 'option' ); ?>" />
                            <?php endif ?>
                        </a></div>
                    <nav id="site-navigation" class="w-auto lg:w-full">
                        <button class="menu-toggle lg:hidden relative" aria-controls="primary-menu"
                            aria-expanded="false">
                            <div
                                class="open-menu w-14 h-14 sm:w-70px sm:h-70px bg-primary-200 rounded-full flex justify-center items-center hover:bg-primary-100 transition-all">
                                <svg class="open-menu-svg opacity-100 transition-all" width="29" height="13"
                                    viewBox="0 0 29 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <line y1="0.5" x2="29" y2="0.5" stroke="white" />
                                    <line y1="0.5" x2="29" y2="0.5" stroke="white" />
                                    <line y1="0.5" x2="29" y2="0.5" stroke="white" />
                                    <line y1="6.5" x2="23" y2="6.5" stroke="white" />
                                    <line y1="6.5" x2="23" y2="6.5" stroke="white" />
                                    <line y1="6.5" x2="23" y2="6.5" stroke="white" />
                                    <line y1="12.5" x2="15" y2="12.5" stroke="white" />
                                    <line y1="12.5" x2="15" y2="12.5" stroke="white" />
                                    <line y1="12.5" x2="15" y2="12.5" stroke="white" />
                                </svg>
                            </div>
                        </button>

                        <ul
                            class=" gap-4 lg:gap-12 items-center flex-col transition-all lg:flex-row content-start justify-start lg:justify-end flex lg:flex-wrap primary-menu reset-list-style px-6 lg:px-0 fixed bg-primary-100 max-w-xl lg:max-w-full lg:bg-transparent text-black -right-full lg:right-0 top-0 lg:relative py-16 lg:py-0 w-10/12 lg:w-auto z-30 lg:z-auto h-screen lg:h-auto overflow-y-auto lg:overflow-y-visible lg:min-h-0">
                            <div
                                class="close-menu lg:hidden flex font-medium cursor-pointer uppercase right-42px top-42px absolute z-50 text-white items-center text-lg">
                                zamknij
                                <svg class="ml-18px" width="17" height="17" viewBox="0 0 17 17" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M2.00004 2.00006L8.49997 8.49998M8.49997 8.49998L15 15M8.49997 8.49998L15 2M8.49997 8.49998L2 14.9999"
                                        stroke="white" stroke-width="3" stroke-linecap="round" />
                                </svg>
                            </div>

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
                            <div class="search-wrap w-full lg:w-auto relative px-6 lg:px-0 my-2 lg:my-0 py-3 lg:py-0"><?php
                    if ( is_active_sidebar( 'header-search' ) ) : ?>
                                <div id="search-input" class="hidden absolute left-6 lg:-left-44 top-14 lg:top-11 z-40"
                                    role="complementary">
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