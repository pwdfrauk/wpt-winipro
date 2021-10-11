<?php
    global $uni_pro;
    $notice_category = $uni_pro['opt-select-notice-category'];
    $notice_category_link = get_category_link( $notice_category );
    
     $is_child = $uni_pro['opt-switch-dept'];
 ?>
   <?php if($is_child): $pullLeft='pull-left'; $pullRight='pull-right';?>
    <?php else:?>
     <?php  endif; ?>
<style type="text/css">
    #myCarousel {
        -webkit-box-shadow: 0px 7px 7px rgba(0, 0, 0, .3);
        -moz-box-shadow: 0px 7px 7px rgba(0, 0, 0, .3);
        box-shadow: 0px 7px 7px rgba(0, 0, 0, .3);
        height: 385px;
    }
    #main-slider div #myCarousel {
    /*box-shadow: 0px 3px 20px 2px rgba(70, 71, 72, 0.30);*/
    box-shadow: 0px 10px 15px -5px rgb(70 71 72 / 58%);
}

    .fill {
        width: 100%;
        height: 100%;
        background-position: center;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        background-size: cover;
        -o-background-size: cover;
    }

    #myCarousel .carousel-caption {
        text-shadow: none;
        opacity: 1 !important;
    }

    #myCarousel .item,
    #myCarousel .active,
    #myCarousel .carousel-inner {
        height: 100%;
    }

    #myCarousel .carousel-caption {
        max-width: 100%;
        min-width: 200px;
        left: 14px;
        right: auto;
         padding-right: 14px;
        bottom: -15px;
        text-align: left;
    }
    #myCarousel .panel-default {
     border-color: #ddd;
     background-color: #0303037d!important;
     background-color: #030303bd!important;
    }

    #myCarousel .panel-body {
    padding: 5px 10px;
    }
    #myCarousel .carousel-caption .panel-body h4 {
        margin: 0;
       
    }
    .panel
    {
        margin:0;
    }
#myCarousel .carousel-title
{
    color: #ffffff;
    font-size: 13px;
    font-size: 20px;
    font-weight: 600;
}

.next {
    background-color: #c4ccdf !important;
}

.prev {
    background-color: #c4ccdf !important;
}

</style>
<div style="padding-top: 0px;">
    <section id="main-slider" class="child-site-slider">
        <div class="container">
            <div class="row" style="margin-top: 10px; margin-bottom: 0px;">
                <div class="col-md-8 col-sm-12 col-xs-12 <?php echo $pullRight ; ?>">

                    <div id="myCarousel" class="carousel slide thumbnail" data-ride="carousel">
                        <!-- Indicators -->
                        <!-- <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                            </ol> -->

                        <!-- Wrapper for slides -->
                        <div class="loading" style="display:none"> <i class="fa fa-circle-o-notch fa-spin"></i>
                            downloading... images!</div>
                        <div class="carousel-inner ">
                            <?php
                              $active="active";
                              wp_reset_postdata();
                              $tempVar = " active";
                              // $slider_category = $uni_pro['opt-select-slider-category'];
                              // $myposts = new WP_Query(array(
                              //     'cat'               => $slider_category,
                              //  'posts_per_page'    => -1,
                              //  'meta_key'          => 'slider_order',
                              //  'orderby'           => 'meta_value_num',
                              //  'order'             => 'DESC'
                              // ));
                              // WP_Query arguments
                              $args = array (
                              'post_type'              => 'home_slider',
                              'posts_per_page'         => 8,
                              'order'                  => 'ASC',
                              'orderby'                => 'menu_order',
                              'cache_results'          => true,
                              );

                              // The Query
                              $myposts = new WP_Query( $args );
                              while ($myposts->have_posts()){
                              $myposts->the_post();
                              ?>
                            <div class="item <?php echo $active ?>">
                            <?php
                        //$image = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'thumbnail' ); 
                              $noImg= get_template_directory_uri()."/assets/images/no-slider-img.jpg";
                              
                                if ( has_post_thumbnail(get_the_id()) ) : 
                                    $thumb=wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium' ); 
                                    $url = $thumb['0'];
                                else:   $url= $noImg; endif;//continue;
                                $title= limitWordsByChar(get_the_title(),150);
                                $excerpt= limitWordsByChar(get_the_excerpt(),200);
                                  ?>
                                <!-- Set the third background image using inline CSS below. -->
                                <!-- <img src="<?php echo bloginfo('template_directory'); ?>/images/slider/slider11.jpg" alt="Los Angeles" style="width:100%; max-height:385px;" class="bg-img-responsive"> -->
                                <div class="fill" data-src="<?php echo  $url; ?>"
                                    style="background-image:url('<?php echo $url; ?>')"></div>
                                <div class="carousel-caption">
                                    <div class="panel panel-default">
                                        <div class="panel-body">

                                            <div>
                                                <a class='carousel-title' href="<?php echo get_permalink(); ?>"
                                                    title="<?php echo get_the_title(); ?>">
                                                    <?php echo $title; ?> </a>
                                            </div>
                                            <!-- <p>
                                                <!-- ?php echo $excerpt; ?
                                            </p> -->
                                        </div>
                                    </div>
                                </div>
                                <?php  $active=""; ?>
                            </div>
                            <?php } ?>


                            <!-- <div class="item active">
                                    <img src="<?php echo bloginfo('template_directory'); ?>/images/slider/slider11.jpg" alt="Los Angeles" style="width:100%; max-height:385px;" class="bg-img-responsive">
                                    <div class="carousel-caption">
                                        <h3 class="slider-caption">Invest In knowledge</h3>
                                    </div>
                                </div> -->

                        </div>

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <span class="fa fa-chevron-left myslider-carousel"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                            <span class="fa fa-chevron-right myslider-carousel"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    


                </div>


                <div class="col-md-4 col-sm-12 col-xs-12 media-text-center   ">
                <?php get_template_part( "/components/home-list/notices", $name = "list" ) ?>
                </div>

            </div>
        </div>
    </section>
</div>

 <?php if(!$is_child): ?>
   
   </br>
  <style type="text/css">
    .design-box1 .divStyle{}
    .design-box1 a:hover .divStyle
    {
           opacity:0.8;
    }
    
    .design-box1  .divStyle h5{color: white;padding-top: 8px;font-family: Arial, Helvetica, sans-serif;}
    .design-box1  .divStyle .boxTitle{ font-weight: 600;font-size: 18px;padding-top: 4px;
    padding-bottom: 5px;
    line-height: 1.3;}
    .design-box1 .fa {color: white; font-size: 42px;}
</style>
  <div> 
  <div class="container design-box1">
    <div class="row1" style="border-radius: 9px;overflow: hidden;box-shadow: 13px 15px 15px 0 rgb(105 105 105 / 49%);">
        <a href="<?php echo get_site_url(); ?>/academic/faculty-department-offered-programs/">
         <div class="col-md-3 col-sm-12 divStyle" style="background-color: #A11053">
             <div class="row">
                <div style="" class="col-md-9 col-sm-9 col-xs-9"><h5 class="boxTitle">PROGRAMS  <br> OFFERED</h2></div>
                <div style="" class="col-md-3 col-sm-3 col-xs-3"><h5 style="text-align: right;"><i class="fa fa-book" style=""></i></i></h2></div>
             </div>
          </div>
         </a>
          
           <a href="<?php echo get_site_url(); ?>/admission/tuition-fees/">
          <div class="col-md-3 col-sm-12 divStyle" style="background-color: #4F8201">
             <div class="row">
                <div style="" class="col-md-9 col-sm-9 col-xs-9"><h5 class="boxTitle">TUTION & <br> FEES</h2></div>
                <div style="" class="col-md-3 col-sm-3 col-xs-3"><h5 style="text-align: right;"><i class="fa fa-money" style=""></i></i></h2></div>
             </div>
          </div>
          
           <a href="<?php echo get_site_url(); ?>/facilities/hall-male-female/">
          <div class="col-md-3 col-sm-12 divStyle" style="background-color: #804693">
             <div class="row">
                <div style="" class="col-md-9 col-sm-9 col-xs-9"><h5 class="boxTitle">HOSTEL <br> FACILITY</h2></div>
                <div style="" class="col-md-3 col-sm-3 col-xs-3"><h5 style="text-align: right;"><i class="fa fa-home" style=""></i></i></h2></div>
             </div>
          </div>
            </a>
           <a href="<?php echo get_site_url(); ?>/admission/admission-information/">
          <div class="col-md-3 col-sm-12 divStyle" style="background-color: #0077CB">
             <div class="row">
                <div style="" class="col-md-9 col-sm-9 col-xs-9"><h5 class="boxTitle">ADMISSION <br> DETAILS</h2></div>
                <div style="" class="col-md-3 col-sm-3 col-xs-3"><h5 style="text-align: right;"><i class="fa fa-graduation-cap" style=""></i></i></h2></div>
             </div>
          </div>
            </a>
          

                    </div>

                  </br>
                
                </div>
</div>
<?php  endif; ?>