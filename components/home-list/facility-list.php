
<?php
    global $uni_pro;
    $news_events_category = $uni_pro['opt-select-facilities-category'];//'facilities';//15;//
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


<!--fecilitice section-->
<style type="text/css">

.itemBox
{
  /*background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/chicago-river-cruise-554x674.jpg');*/
  background-repeat: no-repeat; 
  min-height: 250px;
      min-height: 218px;
  /*width: 300px;position: relative;*/
  background-position: center;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    background-size: cover;
    -o-background-size: cover;
    position: relative;
    margin-bottom: 30px;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 10px 10px 10px 0 rgb(73 73 73 / 38%);
    
}
.dateDiv{
    text-align: center;
    background: rgba(0,0,0,.5);
    color: rgba(255,255,255,.75);
    position: absolute;
    top: 15px;
    right: 15px;
    padding: 15px 10px;
    font-size: 14px;
    line-height: 18px;
    min-width: 66px;
  }
.contentBox
{
  position: absolute;
  bottom: -1px;
  left: 0;
  right: 0;
  background: rgba(0,0,0,.5);
}


.footerTitleDiv{
  display: block;
    padding: 15px 28px 13px 20px;
    border-bottom: solid 1px rgba(255,255,255,.2);
    position: relative;
  }

.footerBodyDiv{
  font-size: 13px;
    line-height: 1;
  height: 0px;
  padding: 0 20px;
    color: rgba(255,255,255,.75);
    transition: all .25s ease-out .2s;
  }

.footerBodyDiv p{
  padding: 1px;margin: 1px;color: rgba(255,255,255,.75); font-size: 14px;
  opacity: 0;
    transform: translateY(25px);
    -webkit-transform: translateY(25px);
    transition: all .25s ease-out .2s;
}

.itemBox:hover .footerBodyDiv {
    height: 66px;
    padding: 10px 20px 19px;
    transition: all .25s ease-out;
}
.itemBox:hover .footerBodyDiv *{
    opacity: 1;
    transform: translateY(0px);
    -webkit-transform: translateY(0px);
}


.dark-div .btn-default, .dark-div button, .dark-div input[type=button], .dark-div input[type=submit] {
    color: #fff;
    border-color: #fff;
}
.dark-div, .dark-div a {
    color: rgba(255,255,255,.75);
}
.facilities button, input[type=button], .facilities input[type=submit], .facilities .btn,.facilities .un-button-1,.facilities .un-button-2,.facilities .un-button-1-lg,.facilities .un-button-2-lg {
    padding: 9px 20px;
    transition: all .2s;
    border-radius: 3px;
    border: solid 2px #666;
}
.facilities .btn-default {
    color: #666;
    background-color: rgba(255,255,255,0);
    border-color: rgba(52,52,52,0.1);
}
.facilities .btn {
    display: inline-block;
    margin-bottom: 0;
    font-weight: normal;
    text-align: center;
    vertical-align: middle;
    cursor: pointer;
    background-image: none;
    border: 1px solid transparent;
    white-space: nowrap;
    padding: 6px 12px;
    font-size: 13px;
    line-height: 1.42857143;
    border-radius: 0;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}
.facilities a {
    color: #343434;
    transition: color .2s;
}
</style>
<div class="section-border-top" style="background: linear-gradient(45deg,#f00,#3aad0b); background: linear-gradient(45deg,#11e10f,#0053b9);"> 
<div class="container">
    <div class="section-title-style"> 
     <h2 class="" style="color:white"> <?php echo get_cat_name( $news_events_category );?> </h2> </div>
    <div class="row facilities">
      <!--
    <div class="col-md-3">
        <div style="height: 378px;width: 300px;background-color: #179BD7">
  <div style="padding: 10px">
        <h1 style="color: white;padding-top: 50px;padding: 10px;font-size: 48px;
    line-height: 1.1;
    margin-bottom: 13px;font-family: Bitter, Times, serif;">BAUET Facilities</h1>

   <p style="color: rgba(255,255,255,.75);margin-bottom: 26px; font-family: Open Sans ,sans-serif;    font-size: 12px;
    line-height: 1.5;
    text-align: left;">Facilities given to the Students at BAUET.</p>


    <a class="btn btn-default" href="#" style="color: white; border: 1px solid white;">Find More <i class="fa fa-angle-right" style="color:white"></i></a>
  </div>
        </div>
    </div>
    -->
    
   <?php if(have_posts()) :
            foreach ( $news_events_posts as $post ) : setup_postdata( $post );
   ?>
       <?php
            //$image = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'thumbnail' ); no-slider-img //meduim'
			      $noImg= get_template_directory_uri()."/assets/images/no-post-img.jpg";
            if ( has_post_thumbnail(get_the_id()) ) : 
                $thumb=wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' ); 
                $url = $thumb['0'];
            else: $url= $noImg; endif;
            ?>
            
    <div class="col-md-3">
      
       <div class="itemBox" style="background-image: url('<?php echo $url; ?>');">
          <!--<div class="dateDiv">-->
          <!--  <div style="">MAR </div> -->
          <!--  <div> 30</div>-->
          <!--</div>-->
          <div class="contentBox">
          <a href="<?php echo get_permalink(); ?>" class="footerTitleDiv"> 
            <h4 style="color: white;margin-bottom: 0px;margin-top: 0px;"><?php echo get_the_title() ?> </h4>
            <span style="margin-top: 14px; font-size: 18px;color: #fcff00;">Read More</span>
          </a>
          <div class="footerBodyDiv">
            <p style=""><?php echo limitWordsByChar(get_the_excerpt(),150); ?></p>
           
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
           <div class="text-center margin-top15"> 
        <!--<a href="<!--?php echo esc_url($ne_category_link); ?>" title="View All" class=" btn btn-danger view-all">View All</a> -->
            <a href="<?php echo esc_url($news_events_category_link); ?>" target="_self" title="" class="dt-sc-button"> View All <span style="padding-top: 10px;" class="fa fa-arrow-right"> </span></a>
         </div><br><br>
</div>
</div>
    <?php else:?>
    <!-- No News/Events To Show in home -->
<?php  endif; ?>