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
.notice-post-list {
    padding: 5px 5px 0px 5px;
}
    .notice-section .tab-content {
    height: 351px;
    overflow-y: auto;
    border-bottom: 6px solid #dddddd;
}
.archive-link
{
    text-align: right;
    padding-bottom: 4px;
    line-height: normal;
    position: absolute;
    bottom: 0px;
    right: 24px;
    background-color: #e9e9e9;
    border-radius: 15px;
}
.notice-section .nav-tabs.nav-justified>.active>a, .notice-section .nav-tabs.nav-justified>.active>a:focus, .notice-section .nav-tabs.nav-justified>.active>a:hover {
    color: white;
    font-size: 15px;
    background-color: #273a6a;
}
@media (max-width: 600px){
.notice-section .nav>li {

    display: inline-block;
    /* border-left: 1px solid #050070; */
    /*border-left-width: 1px;*/
    /*border-left-style: solid;*/
    /*border-left-color: rgb(5, 0, 112);*/
    /*box-shadow: inset 1px 0 0 0 rgba(255, 255, 255, 0.1);*/
    width: 31%;
}
}
</style>
<div class="notice-section">

    <ul class="nav nav-tabs nav-justified notice-tab-style" id="myTabJust" role="tablist">
        <li class="nav-item active">
            <a class="nav-link active tab1" id="noticeTab" data-toggle="tab" href="#notice" role="tab"
                aria-controls="notice" aria-selected="true"><i class="fa fa-bullhorn"></i>
                <?php echo get_cat_name($notice_category);?></a>
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
        <div class="tab-pane active" id="notice" role="tabpanel" aria-labelledby="notice">
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
                <div class="notice-post-list">
                    <table>
                        <tr>
                            <td class="notice-date">
                                <p class="line1" style=" "><?php the_time('d')  ?></p>
                                <p class="line2" style="">
                                    <span class="notice-month-year"><?php the_time('M')  ?></span> 
                                    <span class="notice-month-year"><?php the_time('Y')  ?></span>
                                </p>
                            </td>
                            <td style="width: 100%;">
                                <div>
                                    <h4 class="notice-post-list-title">
                                        <a href="<?php echo get_permalink(); ?>" title="<?php echo get_the_title() ?>">
                                        <?php echo get_the_title() ?>
                                        </a>
                                    </h4>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            <?php endforeach; ?>
                <?php else: ?>
                    <div class="alert alert-warning alert-dismissible fade in" role="alert">
                        There in no recent Notice.
                        <br><a class="" href="<?php echo esc_url($notice_category_link); ?>"><i class="fa fa-archive"></i> View
                            Archive </a>
                    </div>
            <?php endif; wp_reset_query(); wp_reset_postdata(); ?>
            <div class="text-center" style="">    
            <a href="<?php echo esc_url($notice_category_link); ?>" target="_self" title="" class="dt-sc-button"> View All <span style="padding-top: 10px;" class="fa fa-arrow-right"> </span></a> 
            </div>
         
            <br>
            <div class="archive-link1">
            <!-- <a class="see-all-notice-btn" href="#" target="_self">
            View All <i class="fa fa-angle-right"></i>
            </a> -->
            <!--<a class="see-all-notice-btn" href="<?php echo esc_url($notice_category_link); ?>"><i class="fa fa-archive"></i>-->
            <!--    View All <i class="fa fa-angle-right"></i></a>-->
                  <!--<a href="<?php echo esc_url($notice_category_link); ?>" target="_self" title="" class="dt-sc-button"> View All <span style="padding-top: 10px;" class="fa fa-arrow-right"> </span></a>-->
                
            </div>

        </div>

        <div class="tab-pane " id="exam" role="tabpanel" aria-labelledby="exam">
        <?php
                $notice_args = array(
                      'posts_per_page'   => -1,
                      'offset'           => 0,
                      'cat'    => $exam_notice_category,
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
                <div class="notice-post-list">
                    <table>
                        <tr>
                             <td class="notice-date">
                                <p class="line1" style=" "><?php the_time('d')  ?></p>
                                <p class="line2" style="">
                                    <span class="notice-month-year"><?php the_time('M')  ?></span> 
                                    <span class="notice-month-year"><?php the_time('Y')  ?></span>
                                </p>
                            </td>
                            <td style="width: 100%;">
                                <div>
                                    <h4 class="notice-post-list-title">
                                        <a href="<?php echo get_permalink(); ?>" title="<?php echo get_the_title() ?>">
                                        <?php echo get_the_title() ?>
                                        </a>
                                    </h4>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            <?php endforeach; ?>
                <?php else: ?>
                    <div class="alert alert-warning alert-dismissible fade in" role="alert">
                        There in no recent Exam Notice.
                        <br><a class="" href="<?php echo esc_url($exam_notice_category_link); ?>"><i class="fa fa-archive"></i> View
                            Archive </a>
                    </div>
            <?php endif; wp_reset_query(); wp_reset_postdata(); ?>
             <div class="text-center" style="">    
             <a href="<?php echo esc_url($exam_notice_category_link); ?>" target="_self" title="" class="dt-sc-button"> View All <span style="padding-top: 10px;" class="fa fa-arrow-right"> </span></a> 
             </div>
            <br>
            
            <!--<div class="archive-link">-->
            <!-- <a class="see-all-notice-btn" href="#" target="_self">-->
            <!--View All <i class="fa fa-angle-right"></i>-->
            <!--</a>-->
            <!--<a class="see-all-notice-btn" href="<?php echo esc_url($exam_notice_category_link); ?>"><i class="fa fa-archive"></i>-->
            <!--    View All <i class="fa fa-angle-right"></i></a>-->
            <!--</div>-->
        </div>

        <div class="tab-pane " id="job" role="tabpanel" aria-labelledby="job">
        <?php
                $notice_args = array(
                      'posts_per_page'   => -1,
                      'offset'           => 0,
                      'cat'    => $job_notice_category,
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
                <div class="notice-post-list">
                    <table>
                        <tr>
                               <td class="notice-date">
                                <p class="line1" style=" "><?php the_time('d')  ?></p>
                                <p class="line2" style="">
                                    <span class="notice-month-year"><?php the_time('M')  ?></span> 
                                    <span class="notice-month-year"><?php the_time('Y')  ?></span>
                                </p>
                            </td>
                            <td style="width: 100%;">
                                <div>
                                    <h4 class="notice-post-list-title">
                                        <a href="<?php echo get_permalink(); ?>" title="<?php echo get_the_title() ?>">
                                        <?php echo get_the_title() ?>
                                        </a>
                                    </h4>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            <?php endforeach; ?>
                <?php else: ?>
                    <div class="alert alert-warning alert-dismissible fade in" role="alert">
                        There in no recent Exam Notice.
                        <br><a class="" href="<?php echo esc_url($job_notice_category_link); ?>"><i class="fa fa-archive"></i> View
                            Archive </a>
                    </div>
            <?php endif; wp_reset_query(); wp_reset_postdata(); ?>
               <div class="text-center" style="">    
             <a href="<?php echo esc_url($job_notice_category_link); ?>" target="_self" title="" class="dt-sc-button"> View All <span style="padding-top: 10px;" class="fa fa-arrow-right"> </span></a> 
             </div>
            <br>
            <!--<div class="archive-link">-->
            <!-- <a class="see-all-notice-btn" href="#" target="_self">
            <!--View All <i class="fa fa-angle-right"></i>-->
            <!--</a> -->
            <!--<a class="see-all-notice-btn" href="<?php echo esc_url($job_notice_category_link); ?>"><i class="fa fa-archive"></i>-->
            <!--    View All <i class="fa fa-angle-right"></i></a>-->
            <!--</div>-->
        </div>
    </div>
</div>




