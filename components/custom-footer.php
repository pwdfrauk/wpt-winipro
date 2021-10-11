<?php
    global $uni_pro;
    $social_facebook = $uni_pro['opt-social-text-facebook'];
    $social_youtube = $uni_pro['opt-social-text-youtube'];
    $social_twitter = $uni_pro['opt-social-text-twitter'];
    $social_gplus = $uni_pro['opt-social-text-gplus'];
    $social_skype = $uni_pro['opt-social-text-skype'];
    $social_flickr = $uni_pro['opt-social-text-flickr'];
    $social_linkedin = $uni_pro['opt-social-text-linkedin'];
    $social_wordpress = $uni_pro['opt-social-text-wordpress'];
    $social_vimeo = $uni_pro['opt-social-text-vimeo'];

    $footer_text_section1_title = $uni_pro['opt-footer-text-section1-title'];
    $footer_text_section1_desc = $uni_pro['opt-footer-text-section1-desc'];
    $footer_text_section2_title = $uni_pro['opt-footer-text-section2-title'];
    $footer_text_section2_desc = $uni_pro['opt-footer-text-section2-desc'];
    $footer_text_section3_title = $uni_pro['opt-footer-text-section3-title'];
    $footer_text_section3_desc = $uni_pro['opt-footer-text-section3-desc'];
    $footer_text = $uni_pro['opt-footer-text'];
?>



<div class="container" style="border-bottom: 2px solid #1e73be;">
                    <div class="row" style="margin-top: 30px; margin-bottom: 30px;">
                               <!-- row 2 -->

                        <div class="col-md-5 col-sm-5">
                            <div class="footer-box-title ">
                                <div>
                                    <h2 class="footer-title-style" style="text-align:center; border-bottom: 3px solid #fd397a;">About BAUET </h2>
                                </div>
                            </div>

                            <div class="footer-img-hover text-center">
                                <img class="img-responsive footer-logo-style" style="width: 80px;" src="<?php echo get_template_directory_uri(); ?>/assets/images/BAUET-Logo-250x244.png" alt="Logo">
                            </div>
                            <div style="padding-right: 20px;">
                                <p class="footer-about-des" style="font-size:14px">
                                   Bangladesh Army University of Engineering & Technology (BAUET) the pioneer Technical Institutes of Armed Forces, started its journey from 2015. It was the visionary leadership of the Honorable Prime Minister of People’s Republic of Bangladesh Sheikh Hasina to establish a Technical Institute of Armed Forces.  </p>
                            </div>
                        </div>
                        
                        <!-- row 1 -->

                        <div class="col-md-2 col-sm-4">
                            <div class="footer-box-title">
                                <h2 class="footer-title-style"><?php echo $footer_text_section1_title; ?></h2>
                                <span class="footer-underline"></span>
                            </div>
                            <?php echo $footer_text_section1_desc; ?>


                        </div>
                       <!-- row 2 -->

                        <div class="col-md-2 col-sm-4">
                            <div class="footer-box-title">
                                <h2 class="footer-title-style"><?php echo $footer_text_section2_title; ?></h2>
                                <span class="footer-underline"></span>
                            </div>
                            <?php echo $footer_text_section2_desc; ?>


                        </div>
                 

                        <!-- row 3 -->

                        <div class="col-md-3 col-sm-4 media-padding-left15 media-padding-right15" style=" padding-left: 10px; ">

                            <div class="footer-box-title">
                                <h2 class="footer-title-style"><?php echo $footer_text_section3_title; ?></h2>
                                <span class="footer-underline"></span>
                            </div>
                            
                            <?php echo $footer_text_section3_desc; ?>
                            <br>
                           <!-- Histats.com  (div with counter) --><div id="histats_counter"></div>
                            <!-- Histats.com  START  (aync)-->
                            <script type="text/javascript">var _Hasync= _Hasync|| [];
                            _Hasync.push(['Histats.start', '1,4495886,4,408,270,55,00011111']);
                            _Hasync.push(['Histats.fasi', '1']);
                            _Hasync.push(['Histats.track_hits', '']);
                            (function() {
                            var hs = document.createElement('script'); hs.type = 'text/javascript'; hs.async = true;
                            hs.src = ('//s10.histats.com/js15_as.js');
                            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
                            })();</script>
                            <noscript><a href="/" target="_blank"><img  src="//sstatic1.histats.com/0.gif?4495886&101" alt="web stats" border="0"></a></noscript>
                            <!-- Histats.com  END  -->
                        </div>


                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-4">
                            <p class="copyright media-text-center">Copyright &copy;<?php echo date("Y"); ?>, <span title="Bangladesh Army University of Engineering and Technology">BAUET</span> All Rights Reserved.</p>
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <div class="developer-info media-text-center">
                           <style>
                               .avc_visit_counter_front {

                                            padding: 1px;
                           </style>
                              <!--?php echo do_shortcode('[apvc_embed type="customized" border_size="0" border_radius="5" background_color="" font_size="14" font_style="" font_color="#ffffffa6" counter_label="Visits:" today_cnt_label=",Today:" global_cnt_label=",Total:" border_color="#8f8888" border_style="solid" padding="0" width="400" global="true" today="true" current="true" icon_position="" widget_template="None" ]');?-->
                         
                                
                            </div>

                        </div>
                        <div class="col-md-3 col-sm-4">
                            <div class="developer-info media-text-center">Developed By:
                                <a style="color: #c3e0ff;" href="https://pipilikasoft.com" target="" title="Developed By Pipilika Soft">Pipilika Soft</a></div>

                        </div>


                    </div>
                </div>


<!-- ===================================== -->
<!-- <div class="container">
	<div class="row">
		<div class="col-footer col-sm-12 col-md-4">
			<h3><?php echo $footer_text_section1_title; ?></h3>
			<?php echo $footer_text_section1_desc; ?>
		</div>				
		<div class="col-footer col-sm-12 col-md-4">
			<?php if ( is_active_sidebar( 'footer_1' ) ) : dynamic_sidebar( 'footer_1' ); else: ?>
			<h3><?php echo $footer_text_section2_title; ?></h3>
			<p>MIST newsletters are issued regularly to keep you up to date on the latest information, notice, news and events, results, awards, and many interesting topical issues. </p>
            <form class="form-horizontal text-center">
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon">@</span>
                  <input type="text" class="form-control" placeholder="Your Email Address" style="height: 40px;">
                  <span class="input-group-btn"><button class="btn btn-primary" type="button"><i class="fa fa-envelope-o fa-1x"></i> Subscribe!</button></span>
                </div>
              </div>
            </form>
            <?php endif; ?>
            <div class="social-links text-center">
				<a target="_blank" href="https://www.facebook.com/mist.ac.bd"><i class="fa fa-facebook-official fa-2x"></i></a>
				<a target="_blank" href="https://www.twitter.com/mistacbd"><i class="fa fa-twitter fa-2x"></i></a>
				<a target="_blank" href="https://plus.google.com/+MistAcBd"><i class="fa fa-google-plus-square fa-2x"></i></a>
				<a target="_blank" href="https://www.youtube.com/+MistAcBd"><i class="fa fa-youtube-square fa-2x"></i></a>
				<a target="_blank" href="https://bd.linkedin.com/in/military-institute-of-science-and-technology-051826117/"><i class="fa fa-linkedin-square fa-2x"></i></a>
			</div>
		</div>
		<div class="col-footer col-sm-12 col-md-4">
			<h3><?php echo $footer_text_section3_title; ?></h3>
			<?php echo $footer_text_section3_desc; ?>
		</div>

	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="footer-copyright">
				<?php echo date("Y"); ?> &copy; All rights reserved by <a class="text-muted" href="/">Military Institute of Science & Technology (MIST)</a> as per copyright law.
				<span class="pull-right">Developed, Designed & Powered By <a class="text-muted" target="_blank" href="http://ict.mist.ac.bd/">ICT Directorate, MIST</a>.</span>
			</div>
		</div>
	</div>
</div> -->