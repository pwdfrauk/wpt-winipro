<?php
    global $uni_pro;
    $notice_category = $uni_pro['opt-select-notice-category'];
    $notice_category_link = get_category_link( $notice_category );


    $exam_notice_category = $uni_pro['opt-select-exam-notice-category'];
    $exam_notice_category_link = get_category_link( $exam_notice_category );

    $job_notice_category = $uni_pro['opt-select-tender-notice-category'];  //opt-select-job-notice-category
    $job_notice_category_link = get_category_link( $job_notice_category);


?>
  <style>
        .section-padding {
            padding: 70px 0px;
        }

        .NoticeAndFacultySection {  
            padding-bottom: 60px;
            padding-top: 120px;
            position: relative;
            
        }

        .NoticeAndFacultySection-container {
            position: relative;
        }

        .NoticeAndFacultyDark {
            background-color: #051d4a;
        }

        .NoticeAndFacultyLight {
            /* background-color: #ecf0f5; */
        }

        .TitleCOlor {
            color: #b80924 !important;
        }

        .facultyCardSingle {
            display: flex;
            flex-direction: row;
            background-color: white;
            margin: 0px 0px 21px 0px;
            border-radius: 5px;
            overflow: hidden;
            box-shadow: 0 5px 11px 0px rgb(69 90 100 / 30%);
            padding-left: 0px;
        }

        .facultyCardimg {
            width: 150px;
            height: 125px
        }

        .facultyCardSingle img {
            border: .5px solid white;
        }

        .facultyCard {}

        .facultyTitle {
            color: white;
            margin-bottom: 21px;
        }

        .divider {
            width: 100px;
            height: 3px;
            padding: 0;
            margin: 21px 0px 21px 0px;
            background: #b1b1b1;
            border: none;
            transition: width 0.5s;
        }

        .Noticedivider {
            width: 60px;
            height: 3px;
            padding: 0;
            margin: 21px 0px 21px 0px;
            background: #b1b1b1;
            border: none;
            transition: width 0.5s;
        }

        .semoreDivider {
            width: 10px;
            height: 3px;
            padding: 0;
            margin: 21px 0px 21px 0px;
            background: #b1b1b1;
            border: none;
            transition: width 0.5s;
        }

        .NoticeTitles {
            color: white;

        }

        .FacultyCardTitleAndDis {
            margin-left: 25px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding-bottom: 5px;
            padding-right: 2px;
        }

        .FacultyCardTitleAndDis h5 {
            font-weight: 600;
        }

        .FacultyCardTitleAndDis p {
            margin: 0px;
        }

        .FacultyCardTitleAndDis p i {
            font-size: 12px;
        }

        .facultyCardSingle p {
            color: #024c02;
        }

        .facultyCardSingle a {
            text-decoration: none;
        }

        .facultyCardSingle p:hover {
            color: #b80924;
        }

        .facultyCardSingle h5 a:hover {
            color: #0d2d62;
        }

        .facultyCardSingle h5 a {
            font-weight: bold;
            color: #b80924;
            font-size: 17px;
        }

        .facultyTitle:hover,
        .NoticeTitles:hover {}

        /* notice */
        .studiare-event-item {
            margin-bottom: 21px;
        }

        .studiare-event-item-holder {
            background-color: #fff;
            border: 1px solid #e5e5e5;
            padding: 0.75rem;
            overflow: hidden;
            transition: all .3s ease;
            border-radius: 5px;
            box-shadow: 0 5px 11px 0px rgb(69 90 100 / 30%);
        }

        .event-inner-content {
            display: flex;
            align-items: center;
            padding: 8px;
        }

        .top-part {
            display: flex;
            flex-grow: 1;
            align-items: center;
        }

        .date-holder {
            margin-right: 24px;
        }

        .date {
            border-color: #f9a134;
        }

        .date {
            position: relative;
            width: 69px;
            height: 63px;
            border: 2px solid #06D6A0;
            border-radius: 4px;
            color: #495057;
            line-height: 1.2;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .date-day {
            font-size: 30px !important;
        }

        .date-month {
            font-size: 14px !important;
            color: #808080;
            line-height: 22px;
        }

        .date span,
        .eventHeader span {
            border: 0;
            font-family: inherit;
            font-size: 100%;
            font-style: inherit;
            font-weight: inherit;
            margin: 0;
            outline: 0;
            padding: 0;
            vertical-align: baseline;
            box-sizing: border-box;
        }

        .event-meta {
            margin-bottom: 8px;
        }

        .event-meta-piece {
            font-size: 14px;
            padding-right: 15px;
            color: #8f8f8f;
        }

        .event-meta-piece i {
            color: #f9a134;
        }

        .event-meta-piece i {
            font-size: 18px;
            margin-right: 8px;
            color: #f9a134;
        }

        .event-meta-piece {
            font-size: 14px;
            padding-right: 15px;
            color: #8f8f8f;
        }

        .NoticeTitle {
            margin-bottom: 0;
        }

        .NoticeTitle,
        .h4 {
            font-family: Raleway;
            font-weight: 500;
            font-style: normal;
            color: #464749;
            font-size: 18px;
            font-display: swap;
        }

        .NoticeTitle {
            font-size: 13px;
            line-height: 1.4;
            clear: both;
            margin: 0 0 2px;
        }

        .date:before {
            left: 12px;
            content: "";
            position: absolute;
            top: -7px;
            width: 2px;
            height: 14px;
            border-radius: 2px;
            background-color: #06D6A0;
        }

        .date:after {
            right: 12px;
            content: "";
            position: absolute;
            top: -7px;
            width: 2px;
            height: 14px;
            border-radius: 2px;
            background-color: #06D6A0;
        }

        .eventHeader {
            margin-bottom: 40px !important;

        }

        .section-subtitle {
            color: #1e83f0;
        }

        .studiare-event-item-holder:hover {
            box-shadow: 0 3px 6px rgb(155, 155, 155);
            cursor: pointer;
            border-radius: 5px;
        }

        .NoticeTitle a:focus,
        .NoticeTitle a:active,
        .NoticeTitle a:visited {
            text-decoration: none;
            outline: none;
            color: #0d2d62;
        }

        .NoticeTitle a:hover {
            text-decoration: none;
            outline: none;
            color: #b80924
        }

        .notice {
            padding-top: 50px;
        }

        .NoticeTitle {
            font-family: 'Montserrat', sans-serif;
            font-size: 18px;
            font-weight: bold;
        }

        .afterHoverTiltles {
            width: 400px;
            color: #b80924;

        }

        .backgroundsomething img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .notice-title-area {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: end;
            -ms-flex-align: end;
            align-items: flex-end;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
        }

        .seeMore {
            text-align: right;
            padding-right: 23px;
        }

        .semoreDivider {
            margin-left: auto;
        }

        .facultyTitle hr,
        .NoticeTitles hr,
        .seeMore hr {
            margin-top: 0px;
        }

        .notice-container {
            position: relative;
        }

        .faculty-overley {
            width: 400px;
            position: absolute;
            right: 0;
            bottom: -59px;
        }

        .faculty-overley img {
            width: 100%;
        }
        .notice_card_area {
            height: 640px;
            overflow: auto;
        }
        /* width */
        .notice_card_area::-webkit-scrollbar {
          width: 8px !important;
        }
        /* Track */
        .notice_card_area::-webkit-scrollbar-track {
          box-shadow: inset 0 0 5px grey !important; 
          border-radius: 10px !important;
        }
         
        /* Handle */
        .notice_card_area::-webkit-scrollbar-thumb {
          background: #032159;
          border-radius: 10px !important;
        }

        /* Handle on hover */
        .notice_card_area::-webkit-scrollbar-thumb:hover {
          background: #031d4e !important; 
        }
        /* start  pipilika slider */
        @media only screen and (max-width:768px) {
            .notice-title-area {
                display: block;
            }

            .seeMore {
                margin-top: 20px;
                text-align: right;
            }

            .faculty-overley {
                width: 300px;
                position: absolute;
                right: 0;
                bottom: -104px;
            }

            .NoticeAndFacultySection {
                padding-bottom: 105px;
            }

            .NoticeAndFacultySection {
                padding-top: 60px;
            }

        }

        @media only screen and (max-width: 567px) {
            .NoticeAndFacultySection {
                padding: 30px 0px;
            }

            .facultyCardSingle {
                flex-direction: column;
                align-items: center;
                padding: 10px;
            }

            .facultyCardimg {
                width: 100%;
                height: 140px;
            }

            .FacultyCardTitleAndDis {
                margin-left: 0px;
                align-items: flex-start;
                width: 100%;
                margin-top: 10px;
            }

            .NoticeTitle,
            .h4 {
                font-size: 14px;
            }

            .seeMore {
                margin-top: 20px;
                text-align: right;
            }

            .semoreDivider {
                width: 10px;
                height: 3px;
                padding: 0;
                margin: 21px 0px 21px 0px;
                background: #b1b1b1;
                border: none;
                transition: width 0.5s;
                text-align: right;
                margin-left: auto;
            }

            .faculty-overley {
                width: 200px;
                position: absolute;
                right: 0;
                bottom: -74px;
            }

            .NoticeAndFacultySection {
                padding-bottom: 75px;
            }
        }
    </style>
                    <div class="row notice-title-area ">
                        <div class="NoticeTitles col-xs-6 col-sm-6">
                            <h3 class="TitleCOlor">Notice</h3>
                            <hr class="Noticedivider">
                        </div>
                        <div class="seeMore col-xs-6 col-sm-6">
                            <h5 class="TitleCOlor">View All</h5>
                            <hr class="semoreDivider">
                        </div>
                    </div>
                    <!-- start notice card area  -->
                    <div class="notice_card_area col-md-12">
                <?php
                 
                    $notice_args = array(
                          'posts_per_page'   => -1,
                          'offset'           => 0,
                          'cat'    => $notice_category,
                          'meta_query' => array(
                              array(
                                  'key' => 'notice_expire_date',
                                  'value' => date('Ymd'),
                                  'type' => 'DATE',
                                  'compare' => '>='
                              )
                          ),
                          'orderby'          => 'date',//'meta_value_num',
                          //'meta_key'         => 'notice_priority',
                          //'order'            => 'DSC',
                          'post_type'        => 'post',
                          'post_status'      => 'publish',
                          'suppress_filters' => true
                    );
                ?>
                <?php
                     $notice_posts = get_posts( $notice_args );
                     if(count($notice_posts)>0) : 
                        foreach ( $notice_posts as $post ) : setup_postdata( $post );
                ?>

                    <div class="row">
                        <div id="event-326" class="studiare-event-item col-xs-12">
                            <div class="studiare-event-item-holder">
                                <div class="event-inner-content">
                                    <div class="top-part">
                                        <div class="date-holder">
                                            <div class="date">
                                                <span class="date-day"><?php echo get_the_date('d'); ?> </span>
                                                <span class="date-month"><?php echo get_the_date('M'); ?></span>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <h4 class="NoticeTitle"><a
                                                    href="<?php the_permalink();?>">
                                                        <?php echo get_the_title();?>
                                                    </a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php 
                        endforeach;
                    endif;
                    wp_reset_postdata();
                                ?>
                    </div>
                    <!-- end notice card area  -->
<!-- <div class="notice-section">

    <ul class="nav nav-tabs nav-justified notice-tab-style" id="myTabJust" role="tablist">
        <li class="nav-item active">
            <a class="nav-link active tab1" id="noticeTab" data-toggle="tab" href="#notice" role="tab"
                aria-controls="notice" aria-selected="true"><i class="fa fa-bullhorn"></i> -->
                <?php 
                // echo get_cat_name($notice_category);
                ?>
                <!-- </a>
        </li>
        <li class="nav-item">
            <a class="nav-link tab2" id="examTab" data-toggle="tab" href="#exam" role="tab" aria-controls="exam"
                aria-selected="false"><i class="fa fa-book"></i> Exam</a>
        </li>
        <li class="nav-item">
            <a class="nav-link tab3" id="jobTab" data-toggle="tab" href="#job" role="tab" aria-controls="contact-just"
                aria-selected="false"><i class="fa fa-briefcase"></i>
                Tender</a>
        </li>
    </ul>
    <div class="tab-content card pt-5" id="myTabContentJust">
        <div class="tab-pane active" id="notice" role="tabpanel" aria-labelledby="notice"> -->
        <?php
                // $notice_args = array(
                //       'posts_per_page'   => -1,
                //       'offset'           => 0,
                //       'cat'    => $notice_category,
                //       'meta_query' => array(
                //           array(
                //               'key' => 'notice_expire_date',
                //               'value' => date('Ymd'),
                //               'type' => 'DATE',
                //               'compare' => '>='
                //           )
                //       ),
                //       'orderby'          => 'date',//'meta_value_num',
                //       //'meta_key'         => 'notice_priority',
                //       //'order'            => 'DSC',
                //       'post_type'        => 'post',
                //       'post_status'      => 'publish',
                //       'suppress_filters' => true
                // );
            ?>
            <?php
                //  $notice_posts = get_posts( $notice_args );
                //  if(count($notice_posts)>0) : 
                //     foreach ( $notice_posts as $post ) : setup_postdata( $post );
            ?>
                <!-- <div class="notice-post-list">
                    <table>
                        <tr>
                            <td class="notice-date">
                                <p class="line1" style=" "> -->
                                <?php
                                //  the_time('d')  
                                 ?>
                            <!-- </p>
                                <p class="line2" style="">
                                    <span class="notice-month-year"> -->
                                        <?php 
                                        // the_time('M')  
                                        ?>
                                        <!-- </span> 
                                    <span class="notice-month-year"> -->
                                        <?php 
                                        // the_time('Y')
                                         ?>
                                         <!-- </span>
                                </p>
                            </td>
                            <td style="width: 100%;">
                                <div>
                                    <h4 class="notice-post-list-title"> -->
                                        <!-- <a href="<--?php echo get_permalink(); ?>" title="<--?php echo get_the_title() ?>"> -->
                                        <?php 
                                        // echo get_the_title()
                                         ?>
                                        <!-- </a>
                                    </h4>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div> -->
            <?php
        //  endforeach;  else:
         ?>
                    <!-- <div class="alert alert-warning alert-dismissible fade in" role="alert">
                        There in no recent Notice.
                        <br><a class="" href="<--?php echo esc_url($notice_category_link); ?>"><i class="fa fa-archive"></i> View
                            Archive </a>
                    </div> -->
            <?php
        //  endif; wp_reset_query(); wp_reset_postdata(); 
         ?>
            <!-- <div class="text-center" style="">    
            <a href="<--?php echo esc_url($notice_category_link); ?>" target="_self" title="" class="dt-sc-button"> View All <span style="padding-top: 10px;" class="fa fa-arrow-right"> </span></a> 
            </div>
         
            <br>
            <div class="archive-link1"> -->
            <!-- <a class="see-all-notice-btn" href="#" target="_self">
            View All <i class="fa fa-angle-right"></i>
            </a> -->
            <!--<a class="see-all-notice-btn" href="<--?php echo esc_url($notice_category_link); ?>"><i class="fa fa-archive"></i>-->
            <!--    View All <i class="fa fa-angle-right"></i></a>-->
                  <!--<a href="<--?php echo esc_url($notice_category_link); ?>" target="_self" title="" class="dt-sc-button"> View All <span style="padding-top: 10px;" class="fa fa-arrow-right"> </span></a>-->
                
            <!-- </div>

        </div>

        <div class="tab-pane " id="exam" role="tabpanel" aria-labelledby="exam"> -->
        <?php
                // $notice_args = array(
                //       'posts_per_page'   => -1,
                //       'offset'           => 0,
                //       'cat'    => $exam_notice_category,
                //       'meta_query' => array(
                //           array(
                //               'key' => 'notice_expire_date',
                //               'value' => date('Ymd'),
                //               'type' => 'DATE',
                //               'compare' => '>='
                //           )
                //       ),
                //       'orderby'          => 'date',//'meta_value_num',
                //       //'meta_key'         => 'notice_priority',
                //       //'order'            => 'DSC',
                //       'post_type'        => 'post',
                //       'post_status'      => 'publish',
                //       'suppress_filters' => true
                // );
            ?>

            <?php
                //  $notice_posts = get_posts( $notice_args );
                //  if(count($notice_posts)>0) : 
                //     foreach ( $notice_posts as $post ) : setup_postdata( $post );
            ?>
                <!-- <div class="notice-post-list">
                    <table>
                        <tr>
                             <td class="notice-date">
                                <p class="line1" style=" "> -->
                                <?php 
                                // the_time('d') 
                                 ?>
                                 <!-- </p>
                                <p class="line2" style="">
                                    <span class="notice-month-year"> -->
                                        <?php
                                        //  the_time('M')  
                                         ?>
                                         <!-- </span> 
                                    <span class="notice-month-year"> -->
                                        <?php
                                        //  the_time('Y')
                                           ?>
                                           <!-- </span>
                                </p>
                            </td>
                            <td style="width: 100%;">
                                <div>
                                    <h4 class="notice-post-list-title"> -->
                                        <!-- <a href="<--?php echo get_permalink(); ?>" title="<--?php echo get_the_title() ?>"> -->
                                        <?php
                                        //  echo get_the_title() 
                                         ?>
                                        <!-- </a>
                                    </h4>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div> -->
            <?php
        //  endforeach;
        //   else: 
          ?>
                    <!-- <div class="alert alert-warning alert-dismissible fade in" role="alert">
                        There in no recent Exam Notice.
                        <br><a class="" href="<--?php echo esc_url($exam_notice_category_link); ?>"><i class="fa fa-archive"></i> View
                            Archive </a>
                    </div> -->
            <?php 
        // endif; wp_reset_query(); wp_reset_postdata(); 
        ?>
             <!-- <div class="text-center" style="">    
             <a href="<--?php echo esc_url($exam_notice_category_link); ?>" target="_self" title="" class="dt-sc-button"> View All <span style="padding-top: 10px;" class="fa fa-arrow-right"> </span></a> 
             </div>
            <br> -->
            
            <!--<div class="archive-link">-->
            <!-- <a class="see-all-notice-btn" href="#" target="_self">-->
            <!--View All <i class="fa fa-angle-right"></i>-->
            <!--</a>-->
            <!--<a class="see-all-notice-btn" href="<--?php echo esc_url($exam_notice_category_link); ?>"><i class="fa fa-archive"></i>-->
            <!--    View All <i class="fa fa-angle-right"></i></a>-->
            <!--</div>-->
        <!-- </div> -->

        <!-- <div class="tab-pane " id="job" role="tabpanel" aria-labelledby="job"> -->
        <?php
                // $notice_args = array(
                //       'posts_per_page'   => -1,
                //       'offset'           => 0,
                //       'cat'    => $job_notice_category,
                //       'meta_query' => array(
                //           array(
                //               'key' => 'notice_expire_date',
                //               'value' => date('Ymd'),
                //               'type' => 'DATE',
                //               'compare' => '>='
                //           )
                //       ),
                //       'orderby'          => 'date',//'meta_value_num',
                //       //'meta_key'         => 'notice_priority',
                //       //'order'            => 'DSC',
                //       'post_type'        => 'post',
                //       'post_status'      => 'publish',
                //       'suppress_filters' => true
                // );
            ?>

            <?php
                //  $notice_posts = get_posts( $notice_args );
                //  if(count($notice_posts)>0) : 
                //     foreach ( $notice_posts as $post ) : setup_postdata( $post );
            ?>
                <!-- <div class="notice-post-list">
                    <table>
                        <tr>
                               <td class="notice-date">
                                <p class="line1" style=" "> -->
                                <?php 
                                // the_time('d') 
                                 ?>
                                 <!-- </p>
                                <p class="line2" style="">
                                    <span class="notice-month-year"> -->
                                        <?php
                                        //  the_time('M')
                                           ?>
                                           <!-- </span> 
                                    <span class="notice-month-year"> -->
                                        <?php
                                        //  the_time('Y')  
                                         ?>
                                         <!-- </span>
                                </p>
                            </td>
                            <td style="width: 100%;">
                                <div>
                                    <h4 class="notice-post-list-title"> -->
                                        <!-- <a href="<--?php echo get_permalink(); ?>" title="<--?php echo get_the_title() ?>"> -->
                                        <?php
                                        //  echo get_the_title()
                                          ?>
                                        <!-- </a>
                                    </h4>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div> -->
            <?php
        //      endforeach;
        //  else: 
         ?>
                    <!-- <div class="alert alert-warning alert-dismissible fade in" role="alert">
                        There in no recent Exam Notice.
                        <br><a class="" href="<--?php echo esc_url($job_notice_category_link); ?>"><i class="fa fa-archive"></i> View
                            Archive </a>
                    </div> -->
            <?php
        //  endif; wp_reset_query(); wp_reset_postdata();
          ?>
               <!-- <div class="text-center" style="">    
             <a href="<--?php echo esc_url($job_notice_category_link); ?>" target="_self" title="" class="dt-sc-button"> View All <span style="padding-top: 10px;" class="fa fa-arrow-right"> </span></a> 
             </div>
            <br> -->
            <!--<div class="archive-link">-->
            <!-- <a class="see-all-notice-btn" href="#" target="_self">
            <!--View All <i class="fa fa-angle-right"></i>-->
            <!--</a> -->
            <!--<a class="see-all-notice-btn" href="<--?php echo esc_url($job_notice_category_link); ?>"><i class="fa fa-archive"></i>-->
            <!--    View All <i class="fa fa-angle-right"></i></a>-->
            <!--</div>-->
        <!-- </div>
    </div>
</div> -->




