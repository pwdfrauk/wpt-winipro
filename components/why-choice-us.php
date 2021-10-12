
    <!-- why choose us start  -->
    <style>
        .WhyChooseUs {
            padding: 70px 0px !important;
        }

        .WhyChooseUs h2 {
            margin-top: 0px !important;
        }

        .WhyChooseUs p {
            margin: 0px !important;
        }

        .upperDiv {

            border-left: 5px solid #0EB7E8;
        }

        #lp-pom-button-705:active {
            background-color: #12bae5;
            background: linear-gradient(#05a9e4, #05a9e4);
            box-shadow: none;
            color: #fff;
        }

        #lp-pom-button-705:hover {
            background-color: #15c7f1;
            background: linear-gradient(#15c7f1, #0498d9);
            box-shadow: none;
            color: #fff;
        }

        #lp-pom-button-705 {
            display: block;
            border-style: solid;
            border-radius: 50px;
            z-index: 81;
            width: 201px;
            height: 52px;
            background-color: #1CD9FE;
            background: linear-gradient(#1CD9FE, #05a9e4);
            box-shadow: none;
            text-shadow: none;
            color: #fff;
            border-width: 1px;
            border-color: #E4E4E4;
            font-size: 18px;
            line-height: 22px;
            font-weight: 500;
            font-family: Montserrat;
            font-style: normal;
            text-align: center;
            background-repeat: no-repeat;
            margin-top: 20px;
        }

        .whyChoseUs-leftside {
            margin-top: 50px;
        }

        .WhyChooseUs a:focus,
        .WhyChooseUs a:active,
        .WhyChooseUs a:visited {
            text-decoration: none;
            outline: none;
        }

        .WhyChooseUs a:hover {
            text-decoration: none;
            outline: none;
        }

        .WhyChooseUs-bottom-img img {
            width: 100%;
            margin-top: 50px;
        }

        @media only screen and (max-width:768px) {
            .WhyChooseUs {
                padding: 40px 0px !important;
            }
        }

        @media only screen and (max-width: 576px) {
            .WhyChooseUs-bottom-img img {
                width: 100%;
                margin-top: 50px;
            }
        }
    </style>
    <div>
        <div class="container WhyChooseUs">
            <div class="row">
                <div class="col-md-6 test whyChoseUs-leftside">
                    <div class="upperDiv">
                        <div class="WhyChooseUsTitle" id="" style="height: auto; padding-left: 20px;">
                            <p style=" line-height: 29px;"><span style="color: rgb(17, 17, 17); font-size: 18px;"><span
                                        style="font-size: 13px;font-family: Montserrat;font-weight: 400;font-style: normal;">A
                                        modern Education You Need </span></span></p>
                        </div>
                        <?php
                            $the_query = new WP_Query(
                                array( 
                                    'category_name' => 'notice', 
                                )
                            );

                            if ( $the_query->have_posts() ):
                                while ( $the_query->have_posts() ):
                                    $the_query->the_post();
                                     ?>


                        <div class="WhyChooseUsHeading" id="" style="height: auto; padding-left: 20px;">
                            <h2 style="line-height: 58px;"><span
                                    style="font-family: Playfair Display; font-weight: 900; font-style: normal; font-size: 48px; color: rgb(0, 0, 0);">Why
                                    BAUST is best</span><span
                                    style="color: rgb(28, 217, 254); font-size: 48px; font-family: Playfair Display; font-weight: 900; font-style: normal;">?</span>
                            </h2>
                        </div>
                    </div>
                    <div class="lp-element lp-pom-text nlh" id="lp-pom-text-698" style="height: auto;">
                        <h2 style="line-height: 29px;">
                            <span
                                style="font-family: Montserrat; font-weight: 400; font-style: normal; color: rgb(17, 17, 17);">
                                <span style="font-size: 18px;">content </span>
                            </span>
                        </h2>
                    </div>
                    <div style="margin-top:40px;">
                        <div class="lp-element lp-pom-text nlh" id="lp-pom-text-700"
                            style="height: auto; display:flex; flex-direction:row;align-items: center;margin-top:20px;">
                            <i style="margin-right:10px; color:#2ADCFE;font-size: 25px;"
                                class="fa fa-check-circle"></i>
                            <p style="line-height: 29px;"><span
                                    style="color: rgb(17, 17, 17); font-size: 18px; font-family: Montserrat; font-weight: 400; font-style: normal;">POPULAR COURSES</span></p>
                        </div>
                        <div class="lp-element lp-pom-text nlh" id="lp-pom-text-700"
                            style="height: auto; display:flex; flex-direction:row;align-items: center;margin-top:20px;">
                            <i style="margin-right:10px; color:#2ADCFE;font-size: 25px;"
                                class="fa fa-check-circle"></i>
                            <p style="line-height: 29px;"><span
                                    style="color: rgb(17, 17, 17); font-size: 18px; font-family: Montserrat; font-weight: 400; font-style: normal;">MODERN LIBRARY</span></p>
                        </div>
                        <div class="lp-element lp-pom-text nlh" id="lp-pom-text-700"
                            style="height: auto; display:flex; flex-direction:row;align-items: center;margin-top:20px;">
                            <i style="margin-right:10px; color:#2ADCFE;font-size: 25px;"
                                class="fa fa-check-circle"></i>
                            <p style="line-height: 29px;"><span
                                    style="color: rgb(17, 17, 17); font-size: 18px; font-family: Montserrat; font-weight: 400; font-style: normal;">QUALIFIED TEACHER</span></p>
                        </div>
                    </div>
                    <div><a class="lp-element lp-pom-button" id="lp-pom-button-705" style="margin-top: 50px;">
                            <span class="label" style="position:relative;top:11px"><strong style="margin-top: 10px;">
                                    APPLY NOW!</strong></span></a>
                    </div>
                    <?php 
                        endwhile;
                            endif;
                            wp_reset_postdata();
                                        ?>
                </div>
                <div class="col-md-6">
                    <div class="">
                        <div class="WhyChooseUs-bottom-img">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/chice.png" alt="choice us image ">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- why choose us End  -->