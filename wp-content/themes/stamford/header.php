<?php include( locate_template ( 'head.php' ) ); ?>

<!--<header class="header">-->
<!--    <a href="--><?php //echo get_site_url('/'); ?><!--"><img class="logo" src="https://via.placeholder.com/150x75"-->
<!--            alt="--><?php //echo get_bloginfo('name'); ?><!--"></a>-->
<!--    <nav>-->
<!--        <ul>-->
<!--            --><?php //wp_nav_menu( array( 'theme_location' => 'large_menu', 'items_wrap' => '%3$s', 'container' => '', 'depth' => 1)); ?>
<!--        </ul>-->
<!--    </nav>-->
<!--</header>-->


<!-- Stamford Header -->

<header class="header-main-nav">
    <div class="desktop-nav">
        <div class="container-nav">

            <div class="mob-title-nav">
                <nav class="short-nav-list">
                    <ul class="list-inline parent-list">
                        <?php wp_nav_menu( array( 'theme_location' => 'header_title_menu', 'items_wrap' => '%3$s', 'container' => '', 'depth' => 2)); ?>
                    </ul>
                </nav>
            </div>

            <div class="nav-flex">
                <div class="main-logo">
                    <a href="">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/main-logo.png" alt="">
                    </a>
                </div>
                <div class="main-nav">
                    <div class="desk-nav text-right">

                        <nav class="short-nav-list">
                            <ul class="list-inline parent-list">
                                <?php wp_nav_menu( array( 'theme_location' => 'header_title_menu', 'items_wrap' => '%3$s', 'container' => '', 'depth' => 2)); ?>
                            </ul>
                        </nav>

                        <nav class="main-nav-list">
                            <ul class="list-inline parent-list">
                                <?php wp_nav_menu( array( 'theme_location' => 'header_menu', 'items_wrap' => '%3$s', 'container' => '', 'depth' => 2)); ?>
                            </ul>
                        </nav>
                    </div>

                    <div class="desk-icon">
                        <div class="desk-icon-wrapper">
                            <a href="" class="search"><i class="fas fa-search"></i></a>
                            <a href="" class="mail"><i class="far fa-envelope"></i></a>
                            <a href="" class="portal">Portal</a>
                        </div>
                        <button class="burger">
                            <span></span><span></span><span></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- End Stamford -->

<main class="main">

    <div id="main-content">