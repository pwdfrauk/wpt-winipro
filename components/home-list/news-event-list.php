
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

        .ElementOne .home-blog-area .sec-titleEvents h4 {
            color: rgb(24, 43, 73);
            line-height: 35px;
            font-weight: 600;
            max-width: 550px;
            margin: auto auto 48px;
        }


        .sec-titleEvents h4,
        .sec-titleEvents h4 a,

        .blog-title h6,
        .blog-title h6 a {
            font-family: Poppins, sans-serif;
            margin: 0px;
        }

        .img-fluid,
        .img-thumbnail {
            max-width: 100%;
            height: auto;
        }

        .blog-post-img {
            width: 280px;
            height: 260px;

        }

        .ElementOne .home-blog-area .blog-post .blog-img a .blog-post-img:hover {
            transform: scale(1.1);
            transition: ease-out .5s;

        }

        .ElementOne .home-blog-area .blog-post .blog-img {
            overflow: hidden;
            border-radius: 5px;
            /* transition: transform 2s ease; */
        }

        .ElementOne .home-blog-area .blog-post .blog-img:hover {
            border-radius: 5px;
            /* transition: transform 2s ease; */
        }

        .ElementOne .home-blog-area .blog-post {
            margin-bottom: 30px;
        }

        .ElementOne .home-blog-area {
            padding: 70px 0px;
        }

        .ElementOne .home-blog-area .blog-post .blog-content {
            position: relative;
        }

        .ElementOne .home-blog-area .blog-post .blog-content .content-box .top-content {
            margin-bottom: 12px;
        }

        .ElementOne .home-blog-area .blog-post .blog-content .content-box {
            box-shadow: rgb(0 0 0 / 8%) 0px 0px 20px;
            padding: 18px;
            background: rgb(255, 255, 255);
            border-radius: 5px;
            position: absolute;
            top: 20px;
            left: -22%;
            z-index: 1;
        }

        .ElementOne .home-blog-area .blog-post .blog-content .content-box .top-content .blog-date p {
            font-size: 16px;
            color: rgb(255, 255, 255);
            background: linear-gradient(90deg, rgb(17, 182, 122) 0%, rgb(0, 148, 68) 100%);
            padding: 8px 10px;
            line-height: 20px;
            border-radius: 5px;
            font-weight: 500;
            margin-right: 10px;
        }

        .ElementOne .home-blog-area .blog-post .blog-content .content-box .top-content .blog-title h6 a {
            color: rgb(24, 43, 73);
            font-weight: 600;
            display: inline-block;
            line-height: 23px;
            padding-top: 5px;
        }

        .ElementOne .home-blog-area .blog-post .blog-content .content-box .top-content .blog-title h6 a:hover {
            color: rgb(17, 182, 122);
        }

        .blog-desk a,
        .blog-img a,
        .blog-title a,
        .list-unstyled li,
        .blog-desk p,
        .blog-date p {
            font-size: 13px;
            font-family: Roboto, sans-serif;
            margin: 0px;
            letter-spacing: 0.3px;
        }

        .content-box .top-content {
            display: flex;
        }

        .blog-desk a,
        .blog-img a,
        .blog-title a,
        .blog-desk a:active,
        .blog-img a:active,
        .blog-title a:active,
        .blog-desk a:focus,
        .blog-img a:focus,
        .blog-title a:focus,
        .blog-desk a:hover,
        .blog-img a:hover,
        .blog-title a:hover {
            text-decoration: none;
            outline: none;
        }

        .blog-desk a,
        .blog-img a,
        .blog-title a {
            transition: all 0.2s ease 0s;
        }

        .blog-title h6,
        .blog-title h6 a {
            font-size: 16px;
            max-height: 50px;
            overflow: hidden;
        }

        .ElementOne .home-blog-area .blog-post .blog-content .content-box .blog-desk p {
            font-size: 14px;
            color: rgb(150, 150, 150);
            border-bottom: 1px solid rgb(238, 238, 238);
            padding-bottom: 10px;
            margin-bottom: 10px;
        }
        .ElementOne .home-blog-area .blog-post .blog-content .content-box .blog-desk p:first-child {
            border-bottom:none !important;
        }

        .ElementOne .home-blog-area .blog-post .blog-content .content-box .blog-desk ul li {
            margin-right: 15px;
        }

        .ElementOne .home-blog-area .blog-post .blog-content .content-box .blog-desk ul li a {
            font-size: 12px;
            color: rgb(150, 150, 150);
        }

        .ElementOne .home-blog-area .blog-post .blog-content .content-box .blog-desk ul li a:hover {
            color: rgb(17, 182, 122);
        }

        .blog-desk ul {
            padding: 0px;
            margin: 0px;
        }

        @media (max-width: 991px) {
            .ElementOne .home-blog-area .blog-post .blog-content .content-box {
                position: unset;
                border-radius: 0px 0px 5px 5px;
            }
        }

        @media (max-width: 1199px) {
            .ElementOne .home-blog-area .blog-post .blog-content .content-box {
                top: 9px;
                left: -70%;
            }
        }

        @media only screen and (max-width:768px) {
            .blog-post-img {
                width: 100%;
                height: 250px;
                padding: 5px;
            }

            .ElementOne .home-blog-area {
                padding: 40px 0px;
            }

            .ElementOne .home-blog-area .blog-post .blog-img {
                border-radius: 5px 5px 0px 0px;
            }
        }

        @media only screen and (max-width: 576px) {
            .blog-post-img blog-post-img {
                width: 100%;
                height: 220px;
            }

            .section-title {
                font-size: 25px;
                padding-bottom: 25px;
            }

            .ElementOne .home-blog-area .blog-post .blog-content .content-box {
                padding: 10px;
            }

            .blog-date p {
                margin-right: 5px;
                padding: 7px 14px;
            }


        }



        /* global */
        *,
        :after,
        :before {
            box-sizing: border-box;
        }

        .read-more-btn {
            margin-right: 10px;
        }

        .spot {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
        }

        .svg-wrapper {
            margin-top: 0;
            position: relative;
            width: 100px;
            height: 40px;
            display: inline-block;
            border-radius: 13px;
            margin-left: 5px;
            margin-right: 5px;
            transform: scale(0.9);
        }

        #shape {
            stroke-width: 6px;
            fill: transparent;
            stroke: #009FFD;
            stroke-dasharray: 65 358;
            stroke-dashoffset: -172;
            transition: 1s all ease;
        }


        #text {
            margin-top: -44px;
            text-align: center;
            margin-right: 19px;
        }

        #text a {
            color: rgb(24, 43, 73);;
            text-decoration: none;
            font-weight: 100;
            transition: 1.5s ease;
        }

        #text a:hover {
            color: #06D6A0;
        }


        .svg-wrapper:hover #shape {
            stroke-dasharray: 50 0;
            stroke-width: 3px;
            stroke-dashoffset: 0;
            stroke: #06D6A0;
        }
    </style>

<?php
    global $uni_pro;
    $news_events_category = $uni_pro['opt-select-news-events-category'];
    $news_events_category_link = get_category_link( $news_events_category );

    $ne_category = $uni_pro['opt-select-news-events-category'];
    $cw_category = $uni_pro['opt-select-conferences-workshops-category'];
    $ne_category_link = get_category_link( $ne_category );
    $cw_category_link = get_category_link( $cw_category );


    $notice_args = array(
        'posts_per_page'   => 4,
        'offset'           => 0,
        'cat'    => $news_events_category,
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
    $news_events_posts = get_posts( $notice_args );
    if(count($news_events_posts)>0)://off section if no post
?>
   






<div class="ElementOne">
        <section id="news&event" class="home-blog-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="sec-titleEvents text-center">
                            <h2 class="section-title HeadingTitleAll"><?php echo get_cat_name( $ne_category );?> </h2>
                        </div>
                    </div>
                        <?php
                    
                        ?>
    
                        <?php
                        
                            if(have_posts()) :
                            foreach ( $news_events_posts as $post ) : setup_postdata( $post );
                        ?>
                    <div class="col-md-6">
                        <div class="blog-post">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="blog-img"><a href="#">
                                    <?php
                                        //$image = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'thumbnail' ); no-slider-img
                                            $noImg= get_template_directory_uri()."/assets/images/no-post-img.jpg";
                                        if ( has_post_thumbnail(get_the_id()) ) : 
                                            $thumb=wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' ); 
                                            $url = get_the_post_thumbnail_url(get_the_ID(), 'thumbnail');
                                        else: $url= $noImg; endif;
                                        ?>
                                            <div class="blog-post-img"
                                                style="background: url(<?php echo $url; ?>);background-position: center;background-repeat: no-repeat;background-size: cover;">
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="blog-content">
                                        <div class="content-box">
                                            <div class="top-content d-flex">
                                                <div class="blog-date text-center">
                                                    <p><?php the_time('d')  ?><br><?php the_time('M')  ?></p>
                                                </div>
                                                <div class="blog-title">
                                                    <h6>
                                                        <a href="<?php echo get_permalink(); ?>" title="<?php echo get_the_title() ?>">
                                                        <?php echo get_the_title() ?>
                                                        </a>
                                                    </h6>
                                                </div>
                                            </div>
                                            <div class="blog-desk">
                                                <p><?php echo limitWordsByChar(get_the_excerpt(),70); ?></p>
                                                <ul class="list-unstyled list-inline">
                                                    <li class="list-inline-item">
                                                        <div class="svg-wrapper">
                                                            <svg height="40" width="111"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                style="margin-left: -15px;">
                                                                <rect id="shape" height="40" width="111" />
                                                                <div id="text">
                                                                    <a href="<?php the_permalink(); ?>"><span class="spot"></span> <i
                                                                            class="fa fa-eye"></i> <b> Read more
                                                                        </b></a>
                                                                </div>
                                                            </svg>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="alert alert-warning alert-dismissible fade in" role="alert">
                    
                    <strong>There in no recently News & Events.</strong>
                </div>
                <?php endif; wp_reset_query(); wp_reset_postdata(); ?>
                </div>
            </div>
            <div class="text-center margin-top25"> 
        <!--<a href="<!--?php echo esc_url($ne_category_link); ?>" title="View All" class=" btn btn-danger view-all">View All</a> -->
            <a href="<?php echo esc_url($ne_category_link); ?>" target="_self" title="" class="dt-sc-button"> View All <span style="padding-top: 10px;" class="fa fa-arrow-right"> </span></a>
            </div>
        </section>
        <?php else:?>
    <!-- No News/Events To Show in home -->
<?php  endif; ?>
    </div>
