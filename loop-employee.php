<?php  
          global $uni_pro;
      $is_child = $uni_pro['opt-switch-dept'];
 ?>

<section class="section-background">
     <div id="faculty-archive">
          <div class="container">
               <div class="row">
                         <!-- === page-header === -->
                         <div class="section-distance">
                              <div class="col-sm-12">
                                   <div class="inner-bg">
                                        <h1 class="page-title" style="text-align: center;">
                                        <?php if(!$is_child): ?>
                                             BAUET People
                                             <?php else:?>Our Professionals
                                        <?php  endif; ?>
                                        </h1>
                                   </div>
                                   <!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p> -->
                              </div>
                         </div>
               </div>
          </div>
     </div>
     <!-- ==== page content === -->
     <div class="section-distance" style="padding-bottom: 60px;">
          <div class="container">
               <div class="row "> 
                    <div >

                    <?php 
                    //https://wordpress.stackexchange.com/questions/39817/sort-results-by-name-asc-order-on-archive-php
                    //https://objectiv.co/how-to-change-custom-post-type-archive-order/
                    //query_posts('post_type=portfolio&post_status=publish&paged='.get_query_var('paged').'&posts_per_page=-1'); 

                    query_posts('post_type=mist_employee&orderby=menu_order&order=DESC&posts_per_page=-1&post_status=publish'); 
                    ?>
                    <?php if(have_posts()) ?>
                    <?php while(have_posts()) : the_post();?>
                    
                        <?php
						//$thumb = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID()), 'medium' );
					$noPerson= get_template_directory_uri()."/assets/images/no-profile-pic.jpg";
                        if ( has_post_thumbnail(get_the_id()) ) : 
                            $thumb=wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'thumbnail' ); 
                            $url = $thumb['0'];
                        else: $url= $noPerson; endif;
                        ?>
                         <div class="col-md-3" style="margin-bottom: 15px;">
                              <div class="bot-box-section common-box-shadow">
                                   <div class="bot-box-section-style popup-gallery" style="height: 371px;">
                                        <div class="author-header">
                                             <h5 class="bot-name" title="<?php echo get_the_title(); ?>"><?php echo limitWordsByChar(get_the_title(),40); ?></h5>
                                        </div>
                                        <div class="author-avatar" style="height: 158px;width: 158px; background-color: #c4ccdf;">
                                       
                                        <img src="<?php echo $url; ?>" alt="" style="width:150px;height:150px"
                                        onerror="this.onerror=null;this.src='<?php echo $noPerson; ?>';" alt="<?php echo get_the_title(); ?>" >
                                           
                                        </div>
                                        <div style="margin-bottom:20px;">
                                             <p class="author-content" title="<?php echo get_field( 'designation', get_the_ID()); ?>"><?php echo limitWordsByChar(get_field( 'designation', get_the_ID()),39); ?></p>
  
                                        <?php if(strlen(get_field( 'e-mail', get_the_ID()))>5): ?>
                                             <p class="email" title="<?php echo get_field( 'e-mail', get_the_ID()); ?>" class="white" style="font-size:12px;margin:0px;line-height: 1">
                                              <i class="fa fa-envelope-o"></i> <?php echo get_field( 'e-mail', get_the_ID()); ?></p>
                                            <?php endif;?>

                                             <?php if(strlen(get_field( 'mobile_no', get_the_ID()))>5): ?>
                                            <p class="email" title="<?php echo get_field( 'mobile_no', get_the_ID()); ?>" class="white" style="font-size:12px;">
                                              <i class="fa fa-phone"></i> <?php echo get_field( 'mobile_no', get_the_ID()); ?></p>
                                            <?php endif;?>
                                             <!-- <p class="author-dept"><?php //echo limitWordsByChar(get_field( 'faculty', get_the_ID()),44); ?></p> -->
                                             <a href="<?php echo get_permalink(); ?>" title="Full Profile" class="btn btn-danger read-more-btn">Full Profile</a>
                                        </div>
                                   </div>
                              </div>
                         </div>
                         <?php endwhile; //endif; ?>
                    </div>            
               </div>
          </div>
          <!-- ==== pageing design === -->
     </div>
</section>

