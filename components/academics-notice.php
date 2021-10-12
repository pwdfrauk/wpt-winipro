 <!-- notice board and department list start -->
    <style>
        .section-padding {
            padding: 70px 0px;
        }

        .NoticeAndFacultySection {
            padding-bottom: 60px;
            padding-top: 75px;
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
    <section class="NoticeAndFacultySection NoticeAndFacultyLight" style="background: url('<?php echo get_template_directory_uri(); ?>/assets/images/bbgg.jpg');background-repeat: no-repeat;background-size: cover;background-position: center;">
        <div class="container NoticeAndFacultySection-container">
            <div class="row">
                <div class="col-xs-12 col-md-7 facultyCard">
                    <div class="facultyTitle">
                        <h3 class="TitleCOlor">Academics</h3>
                        <hr class="divider">
                    </div>
                    <div class="facultyCardSingle col-xs-12">
                        <div class="facultyCardimg"
                            style="background: url('<?php echo get_template_directory_uri(); ?>/assets/images/eee.jpg');background-repeat: no-repeat;background-size: cover;background-position: center;">
                        </div>
                        <div class="FacultyCardTitleAndDis">
                            <h5 class="">FACULTY OF ELECTRICAL AND COMPUTER ENGINEERING (ECE)</h5>
                            <a href="#">
                                <p><i class="fas fa-dot-circle"></i> Computer Science and Engineering (CSE)</p>
                            </a>
                            <a href="#">
                                <p><i class="fas fa-dot-circle"></i> Computer Science and Engineering (CSE)</p>
                            </a>
                            <a href="#">
                                <p><i class="fas fa-dot-circle"></i> Information and Communication Technology</p>
                            </a>
                        </div>
                    </div>
                    <div class="facultyCardSingle col-xs-12">
                        <div class="facultyCardimg"
                            style="background: url('<?php echo get_template_directory_uri(); ?>/assets/images/NoticeFacultyImg.jpg');background-repeat: no-repeat;background-size: cover;background-position: center;">
                        </div>
                        <div class="FacultyCardTitleAndDis">
                            <h5>FACULTY OF BUSINESS STUDIES (BS)</h5>
                            <a href="#">
                                <p><i class="fas fa-dot-circle"></i> Department of Business Administration</p>
                            </a>
                            <a href="#">
                                <p><i class="fas fa-dot-circle"></i> Department of Accounting and Information Systems
                                </p>
                            </a>
                            <a href="#">
                                <p><i class="fas fa-dot-circle"></i> Master of Business Administration (MBA) Program</p>
                            </a>

                        </div>
                    </div>
                    <div class="facultyCardSingle col-xs-12">
                        <div class="facultyCardimg"
                            style="background: url('<?php echo get_template_directory_uri(); ?>/assets/images/me.jfif');background-repeat: no-repeat;background-size: cover;background-position: center;">
                        </div>
                        <div class="FacultyCardTitleAndDis">
                            <h5>FACULTY OF MECHANICAL ENGINEERING (ME)</h5>
                            <a href="#">
                                <p><i class="fas fa-dot-circle"></i> Mechanical Engineering (ME)</p>
                            </a>
                            <a href="#">
                                <p><i class="fas fa-dot-circle"></i> Industrial and Production Engineering (IPE)</p>
                            </a>
                        </div>
                    </div>
                    <div class="facultyCardSingle col-xs-12">
                        <div class="facultyCardimg"
                            style="background: url('<?php echo get_template_directory_uri(); ?>/assets/images/ce.jpg');background-repeat: no-repeat;background-size: cover;background-position: center;">
                        </div>
                        <div class="FacultyCardTitleAndDis">
                            <h5>FACULTY OF CIVIL ENGINEERING</h5>
                            <a href="#">
                                <p><i class="fas fa-dot-circle"></i> Department of Civil Engineering</p>
                            </a>
                        </div>
                    </div>
                    <div class="facultyCardSingle col-xs-12">
                        <div class="facultyCardimg"
                            style="background: url('<?php echo get_template_directory_uri(); ?>/assets/images/NoticeFacultyImg.jpg');background-repeat: no-repeat;background-size: cover;background-position: center;">
                        </div>
                        <div class="FacultyCardTitleAndDis">
                            <h5>FACULTY OF SCIENCE AND HUMANITIES (SH)</h5>
                            <a href="#">
                                <p><i class="fas fa-dot-circle"></i> English</p>
                            </a>
                            <a href="#">
                                <p><i class="fas fa-dot-circle"></i> Arts and Sciences</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 notice-container">
                    <?php get_template_part( "/components/home-list/notices", $name = "list" ) ?>
                </div>
            </div>
            <div class="faculty-overley">
                <img src="<?php echo get_template_directory_uri();?>/assets/images/back.png">
            </div>
        </div>
    </section>

    <!-- notice board and department list end -->