<div class="topbar desktop-only">
    <div class="content">
        <?php $phone = get_field('phone_number', 'options'); ?>
        <div class="phone"><a class="link" href="tel:<?php echo $phone ?>"><?php echo $phone ?></a></div>
        <div class="links">
            <?php $link1label = get_field('link1_label', 'options' ); ?>
            <?php $link1url = get_field('link1_url', 'options'); ?>
            <?php $link2label = get_field('link2_label', 'options' ); ?>
            <?php $link2url = get_field('link2_url', 'options'); ?>
            <a class="link" target="_blank" href="<?php echo $link1url ?>"><?php echo $link1label ?></a>  
            <a class="link" href="<?php echo $link2url ?>"><?php echo $link2label ?></a>    
        </div>
    </div>
</div>
<nav class="main-nav with-subnav full-width" id="mainNav">
    <div class="sticky-wrapper">
        <div class="main-nav__wrapper">

            <div class="main-nav__logo">
                <a href="/">
                    <img src="/wp-content/themes/cptheme/assets/cp-color.png" alt="Consolidated Planning Logo" class="logo">
                </a>
            </div>

            <div class="main-nav__bar mobile-only">
                <button class="hamburger-button" id="hamburgerButton" aria-label="mobile-nav">
                    <div class="hamburger-button__bar--top"></div>
                    <div class="hamburger-button__bar--middle"></div>
                    <div class="hamburger-button__bar--bottom"></div>
                </button>
            </div>

            <div class="main-nav__drawer">

                <?php wp_nav_menu(array(
                    'theme_location' => 'primary-nav',
                    'container' => '',
                    'items_wrap' => '
                        <div class="primary-nav__container">
                        <ul class="primary-nav">
                            %3$s
                        </ul></div>',
                    'menu_id' => 'primaryNav'
                ));
                ?>

            </div>

        </div>
        <div class="sub-nav">
            <div class="sub-nav__drawer">

            <?php wp_nav_menu(array(
                'theme_location' => 'business-nav',
                'container' => '',
                'items_wrap' => '
                    <div class="secondary-nav__container">
                    <ul class="secondary-nav">
                        %3$s
                    </ul></div>',
                'menu_id' => 'secondaryNav'
            ));
            ?>

            </div>
        </div>
    </div>
</nav>
