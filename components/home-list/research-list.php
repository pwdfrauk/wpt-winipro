<?php
    global $uni_pro;
    $news_events_category =$uni_pro['opt-select-research-category'];//'facilities';//16;// 
    $news_events_category_link = get_category_link( $news_events_category );


    $notice_args = array(
        'posts_per_page'   => 8,
        'offset'           => 0,
        'cat'    => $news_events_category,
        // 'meta_query' => array(
        //     array(
        //         'key' => 'notice_expire_date',
        //         'value' => date('Ymd'),
        //         'type' => 'DATE',
        //         'compare' => '>='
        //     )
        // ),
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

<!--<div class="container">-->

<!--   <h2 class="section-title-style">Offered Programs</h2>-->
<!--    <p class="section-title-small">Your Future, Our Mission.</p>-->
<!--<div class="section-bar-small"></div>-->
<!--</div>-->

<div class="section-border-top"> 

<div class="container" style="padding-bottom: 22px;">
     <div class="section-title-style"> 
    <h2 class=""> <?php echo get_cat_name( $news_events_category );?>  </h2> 
    <p class="section-title-small">“Research is to see what everybody else has seen, and to think what nobody else has thought.”</p>
 </div>
  <div class="row1">
    <!--<div class="col-md-4">-->
    <!--    <div>-->
    <!--        <div style="padding-bottom: 8px;">-->
    <!--          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog8.jpg" style="" class="img-thumbnail img-responsive">-->
    <!--        </div>-->

    <!--  <div style="padding-left: 5px;padding-right: 5px;font-family: Roboto Slab, sans-serif;">-->
    <!--        <div style="font-size: 13px;color: #E3CFB8">-->
    <!--          Posted on 18 Jun 2015-->
    <!--        </div>-->
    <!--         <div style="color: #000000;font-size: 22px;">-->
    <!--          <a href="#" style="text-decoration: none;">Posted on 18 Jun 2015</a>-->
    <!--        </div>-->
    <!--         <div style="color: #000000;">-->
    <!--          <p style="font-size: 13px!important;line-height: 19px">Primality Agile mind set it increasing individual and interaction over process and tools. So, write from the beginning your agile team have a very.</p>-->
    <!--        </div>-->
    <!--        <div>-->
    <!--        <a href="#" target="_self" title="" class="dt-sc-button"> View All <span style="padding-top: 10px;" class="fa fa-arrow-right"> </span></a>-->
    <!--        </div>-->
    <!--  </div>-->
    <!--    </div>-->
    <!--</div>-->

    <div class="col-md-81">
         <div class="row" >
             
             
        <?php if(have_posts()) :
        foreach ( $news_events_posts as $post ) : setup_postdata( $post );
        ?>
        <?php
        //$image = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'thumbnail' ); no-slider-img
              $noImg= get_template_directory_uri()."/assets/images/no-post-img.jpg";
        if ( has_post_thumbnail(get_the_id()) ) : 
            $thumb=wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'meduim' ); 
            $url = $thumb['0'];
        else: $url= $noImg; endif;
        ?>
             
            <div class="col-md-4">
               <div style="padding-bottom: 8px;">
                        <?php
                        //$image = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'thumbnail' ); no-slider-img
						      $noImg= get_template_directory_uri()."/assets/images/no-post-img.jpg";
                        if ( has_post_thumbnail(get_the_id()) ) : 
                            $thumb=wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' ); 
                            $url = $thumb['0'];
                        else: $url= $noImg; endif;
                        ?>
                            <img class="img-thumbnail img-responsive" src="<?php echo $url; ?>" 
                            onerror="this.onerror=null;this.src='<?php echo $noImg; ?>';"
                            alt="<?php echo get_the_title() ?>" style="height: 200px;"
                            >
              </div>
              <div style="padding-left: 5px">
                  <div style="font-size: 13px;color: #E3CFB8">
                  Posted on  <?php the_time('d')  ?>, <?php the_time('M Y')  ?>
                </div>
                 <div style="color: #000000;font-size: 16px;padding-top: 5px; height: 90px;overflow: hidden;">
                    <a href="<?php echo get_permalink(); ?>"> <?php echo limitWordsByChar(get_the_title(),200); ?> </a>
                </div>
              </div>
          </div>
          
    <?php endforeach; ?>
    <?php else: ?>
    <div class="alert alert-warning alert-dismissible fade in" role="alert">
        
        <strong>There in no recent News & Events.</strong>
    </div>
    <?php endif; wp_reset_query(); wp_reset_postdata(); ?>          
          
          
          
          
        
          </div>
         <div class="text-center margin-top15"> 
        <!--<a href="<!--?php echo esc_url($ne_category_link); ?>" title="View All" class=" btn btn-danger view-all">View All</a> -->
            <a href="<?php echo esc_url($news_events_category_link); ?>" target="_self" title="" class="dt-sc-button"> View All <span style="padding-top: 10px;" class="fa fa-arrow-right"> </span></a>
         </div><br>

     </div>

    </div>
  </div>
 </div>  
  
<?php else:?>
    <!-- No News/Events To Show in home -->
<?php  endif; ?>