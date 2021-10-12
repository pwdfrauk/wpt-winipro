<?php
    global $uni_pro;
    $social_facebook = $uni_pro['opt-social-text-facebook'];
    $social_youtube = $uni_pro['opt-social-text-youtube'];
    $social_twitter = $uni_pro['opt-social-text-twitter'];
    // $social_gplus = $uni_pro['opt-social-text-gplus'];
    // $social_skype = $uni_pro['opt-social-text-skype'];
    // $social_flickr = $uni_pro['opt-social-text-flickr'];
    $social_linkedin = $uni_pro['opt-social-text-linkedin'];
    // $social_wordpress = $uni_pro['opt-social-text-wordpress'];
    // $social_vimeo = $uni_pro['opt-social-text-vimeo'];

    $footer_text_section1_title = $uni_pro['opt-footer-text-section1-title'];
    $footer_text_section1_desc = $uni_pro['opt-footer-text-section1-desc'];
    $footer_text_section2_title = $uni_pro['opt-footer-text-section2-title'];
    $footer_text_section2_desc = $uni_pro['opt-footer-text-section2-desc'];
    $footer_text_section3_title = $uni_pro['opt-footer-text-section3-title'];
    $footer_text_section3_desc = $uni_pro['opt-footer-text-section3-desc'];
    $footer_text = $uni_pro['opt-footer-text'];
?>
   
<!-- satrt footer start  -->
<footer class="main-footer" style="margin-top: 40px;">
        <div class="footer-top">
            <div class="parallax-scene parallax-scene-2 parallax-icon">
                <span style=" background: url('<?php echo get_template_directory_uri(); ?>/assets/images/parallax-icon-1.png');" data-depth="0.40" data-speed="-5" class="parallax-layer layer icon icon-1"></span>
                <span style=" background: url('<?php echo get_template_directory_uri(); ?>/assets/images/parallax-icon-2.png');" data-depth="0.50" data-speed="-2" class="parallax-layer layer icon icon-2"></span>
                <span style=" background: url('<?php echo get_template_directory_uri(); ?>/assets/images/parallax-icon-3.png');" data-depth="0.30" data-speed="5" class="parallax-layer layer icon icon-3"></span>
                <span style=" background: url('<?php echo get_template_directory_uri(); ?>/assets/images/parallax-icon-4.png');" data-depth="0.40" data-speed="-9" class="parallax-layer layer icon icon-4"></span>
                <span style=" background: url('<?php echo get_template_directory_uri(); ?>/assets/images/parallax-icon-5.png');" data-depth="0.50" data-speed="4" class="parallax-layer layer icon icon-5"></span>
                <span style=" background: url('<?php echo get_template_directory_uri(); ?>/assets/images/parallax-icon-6.png');" data-depth="0.30" data-speed="10" class="parallax-layer layer icon icon-6"></span>
                <span style=" background: url('<?php echo get_template_directory_uri(); ?>/assets/images/parallax-icon-7.png');"data-depth="0.40" data-speed="2" class="parallax-layer layer icon icon-7"></span>
            </div>
            <div class="container">
                <div class="footer-links-area">
                    <div class="row">
                    <div class="col-lg-12 col-md-6 col-sm-12 footer-column">
                            <div class="subscribe-widget footer-widget">
                                <div class="widget-content">
                                    <div class="subscribe-inner">
                                        <form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="post" class="subscribe-form" style="display:flex; flex-direction:row; justify-content: end;">
                                            <div class="form-group" style="    margin-right: 37px;">
                                                <input type="text" name="s" placeholder="Search  here" id="search_data">
                                            </div>
                                            <div>
                                                <button type="submit" class="theme-btn">Search</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                            <div class="about-widget footer-widget">
                                <h3 class="widget-title"><?php echo $footer_text_section1_title; ?></h3>
                                <div class="widget-content">
                                    <div class="text">
                                        <p><?php echo $footer_text_section1_desc; ?></p>
                                    </div>
                                    <div class="footerIMG">
                                        <a href="<?php echo home_url(); ?>">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo1.png" alt="uaust footer logo ">
                                         </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- footer column 1 -->
                        <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                            <div class="link-widget footer-widget">
                                <h3 class="widget-title"><?php echo $footer_text_section2_title; ?></h3>
                                <div class="widget-content">
                                    <?php echo $footer_text_section2_desc; ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                            <div class="contact-widget footer-widget">
                                <h3 class="widget-title">
                                    <?php echo $footer_text_section3_title; ?></h3>
                                <div class="widget-content">
                                    <?php echo $footer_text_section3_desc; ?>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="footer-overly-img-top">
                <img src="<?php echo get_template_directory_uri();?>/assets/images/back.png">
            </div>
            <div class="footer-overly-img-bottom">
                <img src="<?php echo get_template_directory_uri();?>/assets/images/back.png">
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="inner-container clearfix" style="display: flex;justify-content: center; margin-top: -26px;">
                    <div class="left-content" style="margin-top: 30px;">
                        <div class="copyright">
                          <p>Copyright &copy;<a href="#">BAUST</a><?php echo date("Y"); ?>, <span title="Bangladesh Army University of Engineering and Technology"></span> All Rights Reserved. Developed by <a href="#">Pipilika Soft</a></p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </footer>


