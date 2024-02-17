<footer class="footer full-width" id="footer">
    <section class="section section--footer">
        <div class="utility-container">
            <div class="logo-container">
                <a href="/"><img src="/wp-content/themes/cptheme/assets/cp-white.png"  alt="Cosolidated Planning Logo" class="logo"></a>
            </div>
            <div class="menu-container">
                <?php wp_nav_menu(array(
                    'theme_location' => 'footer-nav-1',
                    'container' => '',
                    'items_wrap' => '
                                    <ul class="footer-nav footer-nav-1">
                                        %3$s
                                    </ul>
                                    ',
                    'menu_id' => ''
                ));
                ?>
                <?php wp_nav_menu(array(
                    'theme_location' => 'footer-nav-2',
                    'container' => '',
                    'items_wrap' => '
                                    <ul class="footer-nav footer-nav-2">
                                        %3$s
                                    </ul>
                                    ',
                    'menu_id' => ''
                ));
                ?>
            </div>
        </div>
        <div class="info-container">
            <div class="info-block">
                <p>&copy; 2022 Consolidated Planning. All rights reserved.
                    <br>Website Design & Development by <a
                        href="https://www.cardinaldigitalmarketing.com/">Cardinal Digital Marketing</a>
                </p>
				<br> <p style="text-align:left"> This website is intended for general public use. By providing this content, Park Avenue Securities LLC is not undertaking to provide investment advice or a recommendation for any specific individual or situation, or to otherwise act in a fiduciary capacity. Please contact a financial representative for guidance and information that is specific to your individual situation.
<br><br>
Securities products and services and advisory services offered through Park Avenue Securities, LLC (PAS), member FINRA, SIPC. OSJ: 6115 Park South Drive Suite 200 Charlotte, NC 28210, (704)-552-8507. PAS is a wholly owned subsidiary of The Guardian Life Insurance Company of America® (Guardian), New York, NY. Consolidated Planning is not an affiliate or subsidiary of PAS or Guardian.
				
				</p>
            </div>
        </div>
    </section>
</footer>
<?php wp_footer(); ?>
</body>
<?php the_field('insert_in_footer', 'option'); ?>
</html>