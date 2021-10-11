

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
<style>
   .img-scale {
    background-color: white;
    box-shadow: 13px 15px 15px 0 rgb(105 105 105 / 22%);
}
.img-scale .news-innerbox-title a {
    color: #0c0ba3;
}
</style>
<section id="news&event" class="section-background section-distance news-event">
        <div class="container">
        <div class="section-title-style"> 
          <h2 class=""> <?php echo get_cat_name( $ne_category );?> </h2> 
                  <p class="section-title-small">
                        Glorious  Campus Life & Events
                    </p> 
                    <!--<div class="section-bar-small"></div>-->
          </div>
            
        </div>
        <div class="container ">
            <div class="row ">
            <?php
                
            ?>

            <?php
               
                if(have_posts()) :
                foreach ( $news_events_posts as $post ) : setup_postdata( $post );
            ?>
                <div class="col-md-3 col-sm-6 margin-top25">
                    <a href="<?php echo get_permalink(); ?>" target="_self" title="" class=""> 
                    <div class="img-scale">
                        <figure style=" height: 150px;">
                        <?php
                        //$image = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'thumbnail' ); no-slider-img post-thumbnails-200// 'large' meduim
						      $noImg= get_template_directory_uri()."/assets/images/no-post-img.jpg";
                        if ( has_post_thumbnail(get_the_id()) ) : 
                            $thumb=wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' ); 
                            $url = $thumb['0'];
                        else: $url= $noImg; endif;
                        ?>
                            <img class="img-responsive" src="<?php echo $url; ?>" 
                            onerror="this.onerror=null;this.src='<?php echo $noImg; ?>';"
                            alt="<?php echo get_the_title() ?>">
                        </figure>
                        <div class="latest__block-post">
                            <div class="event-date">
                            <?php the_time('d')  ?>, <?php the_time('M Y')  ?>
                            </div>

                            <h4 class="news-innerbox-title">
                                <a href="<?php echo get_permalink(); ?>" title="<?php echo get_the_title() ?>">
                                <?php echo get_the_title() ?>
                                </a>
                            </h4>
                            <!--<div class="section-bar-small"></div>-->
                            <!--<p class="details-text-style">-->
                            <!--<!--?php echo limitWordsByChar(get_the_excerpt(),150); ?>-->
                            <!--</p>-->
                            <!--<div class="text-center ">-->
                                <!--<a href="<!--?php echo get_permalink(); ?>" class="  btn btn-danger read-more-btn read-more-btn ">Read More</a>-->
                                
                            <!--    <a href="<!--?php echo get_permalink(); ?>" target="_self" title="" class="dt-sc-button"> Read More <span style="padding-top: 10px;" class="fa fa-arrow-right"> </span></a>-->
                            <!--</div>-->
                        </div>
                    </div></a>
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
