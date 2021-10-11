


  <style type="text/css">
      * {
      box-sizing: border-box;
      color: #1c1f22;
    }

    
    .messages-box, .single .post-navigation {
      box-shadow: 0px 0px 60px -20px rgba(10,10,10,.2);
    }
    .messages-box {
      background-color: #fff;
      padding: 30px 15px;
      transition: .3s;
      border-radius: 3px;
      height: 365px;
    }
    .text-center {
      text-align: center;
    }
    .messages-box .member-thumb {
      margin: 0 auto 15px;
      width: 216px;
      height: 145px;
      position: relative;
      border-radius: 50%;
    }
    *{
      box-sizing: border-box;
      color: #1c1f22;
    }
    .text-center {
      text-align: center;
    }
    .messages-box .member-thumb img {
      border-radius: 50%;
      border: 5px solid #fff;
      box-shadow: 0 4px 6px rgba(0,0,0,.1);
    }
    .bg-img-responsive {
      width: 100%;
      height: 100%;
      opacity: 1;
      visibility: inherit;
      z-index: 20;
      background-position: center center;
      background-repeat: no-repeat;
      background-size: cover;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-color: #d3dee3;
    }
    .carousel-inner>.item>a>img, .carousel-inner>.item>img, .img-responsive, .thumbnail a>img, .thumbnail>img {
      display: block;
      max-width: 100%;
      height: auto;
    }


    .messages-box .member-desc {
      padding-top: 20px;
    }

    .text-center {
      text-align: center;
    }
    .messages-box .member-desc h3 {
      font-weight: 600;
      font-size: 20px;
      margin-top: 0;
    }
   
    .messages-box .member-desc span {
      color: #777;
      font-size: 15px;
      letter-spacing: 1px;
      line-height: normal;
      padding-bottom: 10px;
      display: block;
    }

  </style>


  <!-- Message VC Start -->
<div class="section-border-top" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/about-parallax.jpg'); background-repeat: no-repeat; padding-top: 25px !important;
    padding-bottom: 25px !important;">
          <div class="container" style="padding-bottom: 25px;">
           

<div class="row">
            <div class="col-md-4">
               <h2 style="color: #463839;font-family: Roboto Slab, sans-serif;font-size: 28px; font-weight: 600;">Welcome Message</h2>
            <div style="border:1px solid #463839;width: 80px"></div>
            
             <?php
            global $uni_pro; 
             $featured_video = $uni_pro['featured_video'];
                wp_reset_postdata();
          
             $tempVar = " active";   
                
             $myposts = new WP_Query(array(
                'post_type' => array("mist_message"),
                'posts_per_page'    => 1,
                // 'meta_key'          => 'person_order_number',
                // 'orderby'           => 'meta_value_num',
                'orderby'                => 'menu_order',
                'order'             => 'DESC',
                'post_status'      => 'publish'
                ));
             while ($myposts->have_posts()){
             $myposts->the_post(); 
          ?>
              <div class="media-margin-top25">
                <div class="messages-box text-center media-mrgn-btm-15" style="margin-top: 140px;">
                  <div class="member-thumb" style="">
                    <?php
                    //$image = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'thumbnail' );
					      $noImg= get_template_directory_uri()."/assets/images/no-profile-pic.jpg";
                    if ( has_post_thumbnail(get_the_id()) ) : 
                        $thumb=wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' ); 
                        $url = $thumb['0'];
                    else: $url= $noImg; endif;
                    ?>
                   <img style="margin-top: -140px;max-width: 216px; height: 216px;" 
                   class="img-responsive bg-img-responsive" src="<?php echo $url; ?>" 
                   onerror="this.onerror=null;this.src='<?php echo $noImg; ?>';"  alt="<?php echo get_the_title(); ?>">

                 </div>
                 <div class="member-desc" style="border-radius: 0;margin-top: 70px;">
                  <h3 style="font-family: inherit"><?php echo get_the_title(); ?></h3>
                  <span style="color: #292929;font-family: sans-serif !important"><?php the_field('person_designation', get_the_ID()); ?></span>
                  <div style="text-align: center;
                  margin: 0 auto;
                  left: 0;
                  right: 0;
                  position: relative;
                  width: 60px;
                  max-width: 60px;
                  height: 4px !important;
                  background-color: #463839;margin-bottom: 15px;"></div>
                  <span style="color: #959595;font-size: 13px;font-family: sans-serif !important">
                     <?php echo limitWordsByChar(get_the_excerpt(),200); ?>
                  </span>
                  <div class="section-bar-small" style="color: white">
                  
                 </div> 
                 <a href="<?php echo get_permalink(); ?>" target="_self" title="" class="dt-sc-button"> Read More <span style="padding-top: 10px;" class="fa fa-arrow-right"> </span></a>
               </div>
             </div>
           </div>
          <?php } ?>
           
         </div>

         <div class="col-md-8" style="padding-left: 40px;">
             <h2 style="color: #463839;font-family: Roboto Slab, sans-serif;font-size: 28px; font-weight: 600;">BAUET Video Gallery</h2>
            <div style="border:1px solid #463839;width: 80px"></div>
      <div style="text-align: center;padding-top: 40px;"> 
        <?php echo $featured_video; ?>
        <!--<iframe class="img-thumbnail" style="width: 90%;min-height: 462px;box-shadow: 0 4px 6px rgba(0,0,0,.1);" src="https://www.youtube.com/embed/vbgHvaHF4mQ?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>-->
      </div>
        </div>
 </div>
      </div>
    </div>
     <!-- Message VC end -->



