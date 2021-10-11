<?php
    global $uni_pro;
    $hot_notice_category = $uni_pro['opt-select-hot-notice-category'];
    //$hot_notice_category_link = get_category_link( $hot_notice_category );
?>

<style>
  .marqueetext {
    color:#ffffff;
  }
  .marqueetext .marque-icon i {
    color:#ffffff !Important;
  }
    /*#top-bar-notice .color {
    color: #e50505;
    color: #05154d;
   
}
#top-bar-notice a 
{
    padding: 0px 15px;
    font-size: 13px;
    font-weight: bold;
}*/
</style>
  <marquee id="top-bar-notice" class=" marquee float-left"  behavior="scroll" direction="left" height="29" scrolldelay="100" 
  scrollamount="5" onmouseover="this.stop()" onmouseout="this.start()">
        <?php
                $notice_args = array(
                      'posts_per_page'   => -1,
                      'offset'           => 0,
                      //'category_name' => $hot_notice_category,
                      'cat'    => $hot_notice_category,
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
              <a class="marqueetext" href="#" title="Important Notice" target="_blank" rel="noopener noreferrer">
                                                            <span class="marque-icon"><i class="fa fa-bullhorn colo"></i></span> <?php echo get_the_title() ?></a>
            <?php endforeach; ?>
                <?php else: ?>
                        <!-- There in no Top Notice. -->
                      
            <?php endif; wp_reset_query(); wp_reset_postdata(); ?>
            </marquee>




