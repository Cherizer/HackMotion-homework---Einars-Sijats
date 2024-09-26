<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <title>HackMotion</title>
    
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="site-header m-[40px] mb-[64px] hidden md:flex justify-center">
        <div class="w-full max-w-[1440px]">
            <div class="logo">
                <a href="<?php echo home_url(); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Logo (2).png" alt="HackMotion Logo">
                </a>
            </div>
            <nav class="main-nav">
                <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
            </nav>
        </div>
    </header>
