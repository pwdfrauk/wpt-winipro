 <!-- start image gallary  -->
    <style>
        .section-title {
            font-size: 34px;
            text-transform: capitalize;
            text-align: center;
            font-weight: 700;
            margin-bottom: 50px;
            margin-top: 0px;
            color: #6861BC;
        }

        .image-gallary .campus-tour {
            background: rgb(246, 249, 255);
            padding: 70px 0px;
        }

        .image-gallary .campus-tour .tour-box {
            border-radius: 5px;
            overflow: hidden;
            position: relative;
            margin-bottom: 30px;
        }

        .image-gallary .campus-tour .tour-box img {
            border-radius: 5px;
            transition: all 0.3s ease 0s;
            width: 100%;
        }

        .image-gallary .campus-tour .tour-box img:hover {
            transform: scale(1.2);
        }

        audio,
        canvas,
        iframe,
        img,
        svg,
        video {
            vertical-align: middle;
        }

        @media only screen and (max-width:576px) {
            .image-gallary .campus-tour {
                padding: 40px 0px;
            }

            .section-title {
                font-size: 25px;
                margin-bottom: 25px;
            }
        }
    </style>
    <div class="image-gallary" >
        <section class="campus-tour" style="background: url('<?php echo get_template_directory_uri(); ?>/assets/images/bbgg.jpg');background-repeat: no-repeat;background-size: cover;background-position: center;">
            <div class="container">
                <h2 class="section-title HeadingTitleAll">University Highlights</h2>
                <div class="row">
                    <div class="col-xs-12 col-sm-2 col-lg-2 col-md-2">
                        <div class="tour-box">
                            <div><img src="<?php echo get_template_directory_uri();?>/assets/images/tour-1.jpg" alt=""
                                    style="cursor: pointer; max-width: 100%; max-height: 100%;"></div>
                        </div>
                        <div class="tour-box">
                            <div><img src="<?php echo get_template_directory_uri();?>/assets/images/tour-2.jpg" alt=""
                                    style="cursor: pointer; max-width: 100%; max-height: 100%;"></div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-lg-4 col-md-4">
                        <div class="row">
                            <div class="col-sm-6 col-lg-6 col-md-6">
                                <div class="tour-box">
                                    <div><img src="<?php echo get_template_directory_uri();?>/assets/images/tour-3.jpg" alt=""
                                            style="cursor: pointer; max-width: 100%; max-height: 100%;"></div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-6 col-md-6">
                                <div class="tour-box">
                                    <div><img src="<?php echo get_template_directory_uri();?>/assets/images/tour-4.jpg" alt=""
                                            style="cursor: pointer; max-width: 100%; max-height: 100%;"></div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-12 col-md-12">
                                <div class="tour-box">
                                    <div><img src="<?php echo get_template_directory_uri();?>/assets/images/tour-wt1.jpg" alt=""
                                            style="cursor: pointer; max-width: 100%; max-height: 100%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-2 col-lg-2 col-md-2">
                        <div class="tour-box">
                            <div><img src="<?php echo get_template_directory_uri();?>/assets/images/tour-ht.jpg" alt=""
                                    style="cursor: pointer; max-width: 100%; max-height: 100%;"></div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-lg-4 col-md-4">
                        <div class="row">
                            <div class="col-sm-12 col-lg-12 col-md-12">
                                <div class="tour-box">
                                    <div><img src="<?php echo get_template_directory_uri();?>/assets/images/tour-wt2.jpg" alt=""
                                            style="cursor: pointer; max-width: 100%; max-height: 100%;"></div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-6 col-md-6">
                                <div class="tour-box">
                                    <div><img src="<?php echo get_template_directory_uri();?>/assets/images/tour-5.jpg" alt=""
                                            style="cursor: pointer; max-width: 100%; max-height: 100%;"></div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-6 col-md-6">
                                <div class="tour-box">
                                    <div><img src="<?php echo get_template_directory_uri();?>/assets/images/tour-6.jpg" alt=""
                                            style="cursor: pointer; max-width: 100%; max-height: 100%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- end image gallay  -->