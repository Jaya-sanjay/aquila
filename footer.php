<?php
/**
 * Footer template
 *
 * @package Aquila
 */
?>

<footer class="new_footer_area bg_color">
            <div class="new_footer_top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="f_widget company_widget wow fadeInLeft" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;">
                                <h3 class="f-title f_600 t_color f_size_18">Get in Touch</h3>
                                <p>Don’t miss any updates of our new templates and extensions.!</p>
                                 <?php echo do_shortcode('[contact-form-7 id="f75cb09" title="Subscription Form"]'); ?>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">
                                <h3 class="f-title f_600 t_color f_size_18">Quick Links</h3>
                                <ul class="list-unstyled f_list">
								<?php
                if ( has_nav_menu( 'quick-link' ) ) {
                    wp_nav_menu( array(
                        'theme_location' => 'quick-link',
                        'menu_class'     => 'footer-menu-class',
                    ) );
                }
                ?>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInLeft;">
                                <h3 class="f-title f_600 t_color f_size_18">Help</h3>
                                <ul class="list-unstyled f_list">
								<?php
                if ( has_nav_menu( 'legal' ) ) {
                    wp_nav_menu( array(
                        'theme_location' => 'legal',
                        'menu_class'     => 'footer-menu-class',
                    ) );
                }
                ?>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6">
                            <div class="f_widget social-widget pl_70 wow fadeInLeft" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInLeft;">
                                <h3 class="f-title f_600 t_color f_size_18">Social Media</h3>
                                <div class="f_social_icon">
								<a href="#" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/51/Facebook_f_logo_%282019%29.svg/240px-Facebook_f_logo_%282019%29.svg.png" alt="Facebook"></a>
<a href="#" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Instagram_icon.png/240px-Instagram_icon.png" alt="Instagram"></a>
<a href="#" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/ca/LinkedIn_logo_initials.png/220px-LinkedIn_logo_initials.png" alt="LinkedIn"></a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer_bg">
                    <div class="footer_bg_one"></div>
                    <div class="footer_bg_two"></div>
                </div>
            </div>
            <div class="footer_bottom">
                <div class="legal">
                            <p>© VictorFlow Inc.. 2024 All rights reserved.</p>
                        <div class="legal__links">
                            <p>Made with ❤️ in <a href="http://victorflow.com" target="_blank">VictorFlow</a></p>
                        </div>
                    </div>
                </div>
        </footer>
		
</body>
</html>

