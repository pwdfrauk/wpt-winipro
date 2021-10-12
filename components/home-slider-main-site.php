<?php
    global $uni_pro;
    $notice_category = $uni_pro['opt-select-notice-category'];
    $notice_category_link = get_category_link( $notice_category );
    
     $is_child = $uni_pro['opt-switch-dept'];
 ?>
   <?php if($is_child): $pullLeft='pull-left'; $pullRight='pull-right';?>
    <?php else:?>
     <?php  endif; ?>
<style type="text/css">
  /* hero section with slider */
        #myCarousel {
            border: 6px solid #fff;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            border-radius: 4px;
            box-shadow: 0 5px 10px rgb(16 17 21 / 10%);
            height: 440px;
        }
        #myCarousel .item,
        #myCarousel .active,
        #myCarousel .carousel-inner {
            height: 100%;
        }
        .fill {
            width: 100%;
            height: 100%;
            background-position: center;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            background-size: cover;
            -o-background-size: cover;
        }
        .hero-section {
            background-image: url('<?php echo get_template_directory_uri();?>/assets/images/slidersection-bg-img.png');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            position: relative;
            height: 100%;
            margin-bottom: 70px;
        }
        .hero-section::before {
            content: '';
            width: 43%;
            height: 10%;
            top: 0px;
            border-bottom: 477px solid #26c976;
            border-right: 482px solid transparent;
            position: absolute;

        }
        .hero-section-area {
            padding: 12px 15px;
        }
        .hero-leftside img,
        .hero-rightside img {
            width: 100%;
        }

        .hero-leftside img {
            border: 6px solid #fff;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            border-radius: 4px;
            box-shadow: 0 5px 10px rgba(16, 17, 21, 0.1);
            height: 440px;
        }
        .hero-leftside {
            padding-right: 4px;
        }
        .hero-rightside {
            padding-left: 4px;
        }

        .carousel-control .glyphicon {
            background: #757575;
            width: 40px;
            height: 40px;
            font-size: 25px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%
        }
        .carousel-control {
            background-image: none !important;
        }

        /*  carousel info box */
        .myitem {
            position: relative;
        }
        .carousel-info-box {
            position: absolute;
            right: 10px;
            bottom: 15px;
            background: rgba(255, 255, 255, 0.9);
            padding: 15px;
            border-radius: 4px;
            box-shadow: 0px 0px 5px 2px #e9e9e9;
            max-width: 75%;
        }
        .carousel-info-box h2 {
            font-size: 20px;
            line-height: 1.3;
            color: #2e2e2e;
            margin-bottom: 0px;
            margin-top: 0px;
        }

        /* hero image overflow card */
        .heroimage-overflow-card {
            background: rgba(255, 255, 255, 0.9);
            border-radius: 4px;
            padding: 25px;
            box-shadow: 0px 0px 6px 1px #d1d1d1;
            position: absolute;
            left: 40px;
            top: 30%;
            max-width: 350px;

        }
        .heroimage-overflow-card::after {
            content: '';
            display: table;
            width: 3px;
            height: 80px;
            background:
                /*#dc3545;*/
                #f9a134;
            position: absolute;
            left: 0;
            top: 23px;
        }
        .heroimage-overflow-card h2 {
            font-size: 34px;
            font-family: Raleway;
            text-transform: capitalize;
            font-weight: 300;
            margin-top: 0px;
            color: rgb(47, 47, 50);
            line-height: 1.3;
        }
        .heroimage-overflow-card p {
            font-family: Raleway;
            line-height: 30px;
            letter-spacing: 0px;
            font-weight: 400;
            font-size: 17px;
            color:
                /*rgb(125, 126, 127);*/
                rgb(133 133 133);
            line-height: 1.5;
        }
        @media only screen and (max-width:768px) {
            .hero-section {
                padding-bottom: 40px;
            }
            .hero-leftside {
                margin-bottom: 25px;
            }
            .hero-rightside {
                padding-left: 15px;
            }
            #myCarousel {
                height: 360px;
            }
            .hero-leftside img {
                height: 360px;
            }
        }
        @media only screen and (max-width:576px) {
            .hero-section::before {
                content: '';
                width: 43%;
                height: 10%;
                top: 0px;
                border-bottom: 588px solid #26c976;
                border-right: 245px solid transparent;
                position: absolute;
            }
            #myCarousel {
                height: 260px;
            }
            .hero-leftside img {
                height: 260px;
            }
        }

</style>
<!--++++++++++++++++ start main page slider ++++++++++++++++++++++++-->
 <div class="hero-section">
        <div class="hero-section-area">
            <div class="row">
                <!-- hero leftside -->
                <div class="hero-leftside col-md-6">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/hero-leftside-img.jpg">
                    <div class="heroimage-overflow-card">
                        <h2>self education resources and infos</h2>
                        <p>We are long past the online coursework and training that involves video lectures, unit plans
                            and quizes! </p>
                    </div>
                </div>
                <!-- hero rightside  -->
                <div class="hero-rightside col-md-6">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                     <div class="loading" style="display:none"> <i class="fa fa-circle-o-notch fa-spin"></i>
                            downloading... images!</div>
                        <div class="carousel-inner ">
                            <?php
                              $active="active";
                              wp_reset_postdata();
                              $tempVar = " active";
                              // $slider_category = $uni_pro['opt-select-slider-category'];
                              // $myposts = new WP_Query(array(
                              //     'cat'               => $slider_category,
                              //  'posts_per_page'    => -1,
                              //  'meta_key'          => 'slider_order',
                              //  'orderby'           => 'meta_value_num',
                              //  'order'             => 'DESC'
                              // ));
                              // WP_Query arguments
                              $args = array (
                              'post_type'              => 'home_slider',
                              'posts_per_page'         => 8,
                              'order'                  => 'ASC',
                              'orderby'                => 'menu_order',
                              'cache_results'          => true,
                              );

                              // The Query
                              $myposts = new WP_Query( $args );
                              while ($myposts->have_posts()){
                              $myposts->the_post();
                              ?>
                            <div class="item <?php echo $active ?>">
                            <?php
                        //$image = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'thumbnail' ); 
                              $noImg= get_template_directory_uri()."/assets/images/no-slider-img.jpg";
                              
                                if ( has_post_thumbnail(get_the_id()) ) : 
                                    $thumb=wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium' ); 
                                    $url = $thumb['0'];
                                else:   $url= $noImg; endif;//continue;
                                $title= limitWordsByChar(get_the_title(),150);
                                $excerpt= limitWordsByChar(get_the_excerpt(),200);
                                  ?>
                                <!-- Set the third background image using inline CSS below. -->
                                <!-- <img src="<?php echo bloginfo('template_directory'); ?>/images/slider/slider11.jpg" alt="Los Angeles" style="width:100%; max-height:385px;" class="bg-img-responsive"> -->
                                <div class="fill animate__animated animate__zoomIn "
                                    data-src="images/hero-leftside-img.jpg"
                                    style="background-image:url('<?php echo $url; ?>')"></div>
                                <div class="carousel-info-box animate__animated animate__fadeInUp animate__slow 2s">
                                    <h2><a class='carousel-title' href="<?php echo get_permalink(); ?>"
                                                    title="<?php echo get_the_title(); ?>">
                                                    <?php echo $title; ?> </a></h2>
                                </div>
                                <div class="fill" data-src="<?php echo  $url; ?>"
                                    style="background-image:url('<?php echo $url; ?>')"></div>
                                <?php  $active=""; ?>
                            </div>
                            <?php } ?>
                        </div>
                </div>
            </div>
        </div>
    </div>
  </div>
<!-- +++++++++++++ end main page slider  ++++++++++++++++++++-->

 <?php if(!$is_child): ?>
   </br>
 <!-- icon box area  -->
    <style>
        .eXzlnr {
            margin-bottom: -66px;
        }
        .eXzlnr .icon-box-area .full-icon-box {
            position: relative;
        }
        .eXzlnr .icon-box-area .full-icon-box .icon-box {
            position: relative;
            width: 100%;
            background: rgb(255, 255, 255);
            padding-top: 35px;
            padding-bottom: 35px;
            padding-left: 20px;
            padding-right: 20px;
            z-index: 9;
            box-shadow: rgb(0 0 0 / 7%) 0px 1px 8px 2px;
            border-radius: 5px;
            padding-bottom: 15px;
            display: flex;
            justify-content: center;
            padding-bottom: 36px;
        }
        .eXzlnr .icon-box-area .full-icon-box .icon-box .box-icon.box1 {
            background: rgb(219, 61, 61);
        }
        .eXzlnr .icon-box-area .full-icon-box .icon-box .box-icon {
            background: #032159;
            height: 36px;
            text-align: center;
            margin-right: 20px;
            position: relative;
        }
        .eXzlnr .icon-box-area .full-icon-box .icon-box .box-icon.box1::after {
            border-top-color: rgb(219, 61, 61);
        }

        .eXzlnr .icon-box-area .full-icon-box .icon-box .box-icon.box1::before {
            border-bottom-color: rgb(219, 61, 61);
        }

        .eXzlnr .icon-box-area .full-icon-box .icon-box .box-icon::before {
            content: "";
            position: absolute;
            border-width: 15px 30px;
            border-style: solid;
            border-color: transparent transparent #032159;
            top: -30px;
            left: 0px;
            z-index: 1;
        }

        .eXzlnr .icon-box-area .full-icon-box .icon-box .box-icon i {
            font-size: 30px;
            color: rgb(255, 255, 255);
            width: 60px;
            display: inline-block;
            position: relative;
            z-index: 111;
        }

        .eXzlnr .icon-box-area .full-icon-box .icon-box .box-icon::after {
            content: "";
            position: absolute;
            border-width: 15px 30px;
            border-style: solid;
            border-color: #032159 transparent transparent;
            bottom: -30px;
            left: 0px;
            z-index: 1;
        }

        .eXzlnr .icon-box-area .full-icon-box .icon-box .box-title {
            margin-top: -15px;
        }

        .eXzlnr .icon-box-area .full-icon-box .icon-box .box-title {
            margin-top: -15px;
        }

        .eXzlnr .icon-box-area .full-icon-box .icon-box .box-title h6 {
            color: rgb(24, 43, 73);
            text-transform: uppercase;
            font-weight: 600;
            margin-bottom: 4px;
        }

        .title {
            font-size: 16px;
        }

        .eXzlnr .icon-box-area .full-icon-box .icon-box .box-title p {
            font-size: 14px;
            color: rgb(150, 150, 150);
            line-height: 1.3;
        }

        .box-title p {
            font-size: 13px;
            font-family: Roboto, sans-serif;
            margin: 0px;
            letter-spacing: 0.3px;
        }

        @media only screen and (max-width: 768px) {
            .eXzlnr .icon-box-area .container .col-xs-12 {
                margin-bottom: 20px;
            }

            .eXzlnr {
                margin-bottom: 20px;
            }

            .eXzlnr .icon-box-area .full-icon-box .icon-box .box-title h6 {
                font-size: 15px;
            }
        }

        @media only screen and (max-width: 576px) {
            .eXzlnr {
                margin-top: -20px;
            }

            .eXzlnr .icon-box-area .full-icon-box .icon-box .box-title p {
                font-size: 13px;
            }
        }
    </style>
    <section class="sc-AxheI eXzlnr">
        <div class="icon-box-area">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-4">
                        <div class="full-icon-box">
                            <div class="icon-box d-flex" style="display:flex;align-items: center;">
                                <div class="box-icon box2"><i class="fa fa-thumbs-up"></i></div>
                                <div class="box-title">
                                    <h6 class="title">Popular Courses</h6>
                                    <p>Lorem ipsum dolor sit, amet consectetur elit.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4">
                        <div class="full-icon-box">
                            <div class="icon-box d-flex" style="display:flex;align-items: center;">
                                <div class="box-icon box1"><i class="fa fa-book"></i></div>
                                <div class="box-title">
                                    <h6 class="title">Modern Library</h6>
                                    <p>Lorem ipsum dolor sit, amet consectetur elit.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4">
                        <div class="full-icon-box">
                            <div class="icon-box d-flex" style="display:flex;align-items: center;">
                                <div class="box-icon box3"><i class="fa fa-users"></i></div>
                                <div class="box-title">
                                    <h6 class="title">Qualified Teacher</h6>
                                    <p>Lorem ipsum dolor sit, amet consectetur elit.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </section>

    <!-- after slider End -->
<!--+++++++++++++++++++++++++  before icon box +++++++++++++++++++++++++++++++-->
  <!-- <style type="text/css">
    .design-box1 .divStyle{}
    .design-box1 a:hover .divStyle
    {
           opacity:0.8;
    }
    
    .design-box1  .divStyle h5{color: white;padding-top: 8px;font-family: Arial, Helvetica, sans-serif;}
    .design-box1  .divStyle .boxTitle{ font-weight: 600;font-size: 18px;padding-top: 4px;
    padding-bottom: 5px;
    line-height: 1.3;}
    .design-box1 .fa {color: white; font-size: 42px;}
</style>
  <div> 
  <div class="container design-box1">
    <div class="row1" style="border-radius: 9px;overflow: hidden;box-shadow: 13px 15px 15px 0 rgb(105 105 105 / 49%);">
        <a href="<?php echo get_site_url(); ?>/academic/faculty-department-offered-programs/">
         <div class="col-md-3 col-sm-12 divStyle" style="background-color: #A11053">
             <div class="row">
                <div style="" class="col-md-9 col-sm-9 col-xs-9"><h5 class="boxTitle">PROGRAMS  <br> OFFERED</h2></div>
                <div style="" class="col-md-3 col-sm-3 col-xs-3"><h5 style="text-align: right;"><i class="fa fa-book" style=""></i></i></h2></div>
             </div>
          </div>
         </a>
          
           <a href="<?php echo get_site_url(); ?>/admission/tuition-fees/">
          <div class="col-md-3 col-sm-12 divStyle" style="background-color: #4F8201">
             <div class="row">
                <div style="" class="col-md-9 col-sm-9 col-xs-9"><h5 class="boxTitle">TUTION & <br> FEES</h2></div>
                <div style="" class="col-md-3 col-sm-3 col-xs-3"><h5 style="text-align: right;"><i class="fa fa-money" style=""></i></i></h2></div>
             </div>
          </div>
          
           <a href="<?php echo get_site_url(); ?>/facilities/hall-male-female/">
          <div class="col-md-3 col-sm-12 divStyle" style="background-color: #804693">
             <div class="row">
                <div style="" class="col-md-9 col-sm-9 col-xs-9"><h5 class="boxTitle">HOSTEL <br> FACILITY</h2></div>
                <div style="" class="col-md-3 col-sm-3 col-xs-3"><h5 style="text-align: right;"><i class="fa fa-home" style=""></i></i></h2></div>
             </div>
          </div>
            </a>
           <a href="<?php echo get_site_url(); ?>/admission/admission-information/">
          <div class="col-md-3 col-sm-12 divStyle" style="background-color: #0077CB">
             <div class="row">
                <div style="" class="col-md-9 col-sm-9 col-xs-9"><h5 class="boxTitle">ADMISSION <br> DETAILS</h2></div>
                <div style="" class="col-md-3 col-sm-3 col-xs-3"><h5 style="text-align: right;"><i class="fa fa-graduation-cap" style=""></i></i></h2></div>
             </div>
          </div>
            </a>
          

                    </div>

                  </br>
                
                </div>
</div> -->
<?php  endif; ?>