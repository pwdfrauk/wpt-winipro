<?php  global $uni_pro;
            $is_child = $uni_pro['opt-switch-dept'];
            $tempVar = " active"; 

            wp_reset_postdata(); 
            $myposts = new WP_Query(array(
               'post_type' => array("mist_employee"),
               'posts_per_page'    => 4,
               // 'meta_key'          => 'person_order_number',
               // 'orderby'           => 'meta_value_num',
               'orderby'                => 'menu_order',
               'order'             => 'DESC',
               'post_status'      => 'publish'
               ));            
               if($myposts->have_posts()):
?>


<section id="bot" class="section-background section-distance ">
    <div class="container">
        <div class="row">

            <div class="col-md-12 ">
                <h2 class="section-title-style">
					 <?php if(!$is_child): ?>
						Board of Trustees
						<?php else:?>Our Professionals
        				<?php  endif; ?>
                </h2>
                <p class="section-title-small">
                    Education for Individual and Social Responsibility.
                    <!-- Invest For Knowledge -->
                </p>
            </div>
        </div>
    </div>
    <div class="section-bar-small"></div>
    <div class="container ">

        <div class="row text-right media-text-center">
            <div class="btn-group">
                <button class="btn btn-simple btn-icon prev">
                    <i class="fa fa-angle-left"></i>
                </button>
                <div class="btn-seperator"></div>
                <button class="btn btn-simple btn-icon next">
                    <i class="fa fa-angle-right"></i>
                </button>
            </div>
        </div>

        <div class="row margin-top25 autoplay ">
		            <?php
                     while ($myposts->have_posts()){
                     $myposts->the_post(); 
                  ?>
            <div class="col-md-3 col-sm-6 media-margin-top25 ">
                <div class="bot-box-section ">
                    <div class="bot-box-section-style">
                        <div class="author-header">
                            <h5 class="bot-name"><?php echo limitWordsByChar(get_the_title(),40); ?></h5>
                        </div>
                        <div class="author-avatar">
						<?php
						//$thumb = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID()), 'medium' );
						$noPerson= get_template_directory_uri()."/assets/images/no-profile-pic.jpg";
                        if ( has_post_thumbnail(get_the_id()) ) : 
                            $thumb=wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' ); 
                            $url = $thumb['0'];
                        else: $url= $noPerson; endif;
                        ?>
							<img onerror="this.onerror=null;this.src='<?php echo $noPerson; ?>';" 
							class="img-responsive bg-img-responsive" style="width:140px;height:140px" 
							src="<?php echo $url; ?>" alt="<?php echo get_the_title(); ?>">
                        </div>
                        <div style="margin-bottom:20px;" title="<?php echo get_field( 'designation', get_the_ID()); ?>">
                            <p class="author-content"><?php echo limitWordsByChar(get_field( 'designation', get_the_ID()),35); ?></p>
                            <a data-toggle="modal" data-target="#empModal<?php echo get_the_ID(); ?>" href="#" title="View Profile" class=" btn btn-danger read-more-btn">View Profile</a>
                        </div>
                    </div>
				</div>
        <!-- ==========  modal start  =========== -->
        <div class="modal fade in" id="empModal<?php echo get_the_ID(); ?>" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">×</button>
                        <h4 class="modal-title text-center">Profile of <span style="font-weight: 600px;"><?php echo get_the_title(); ?></span></h4>
                    </div>
                    <div class="modal-body content-body" style="background-color: #f8f8f8;">
                        <div>
							<img style="width:150px;height:150px" class="img-thumbnail" 
							onerror="this.onerror=null;this.src='<?php echo $noPerson; ?>';"
							src="<?php echo $url; ?>" alt="<?php echo get_the_title(); ?>">
                            <span style="font-size: 18px; font-weight: 600;"><?php echo get_the_title(); ?>
                            </span>
                            <br>
                            <span style="font-size: 15px; font-style: italic; color: lightslategray;"> <?php echo get_field( 'designation', get_the_ID()); ?>
                            </span>
                            <br>
							<span style="font-size: 15px; text-align: justify;">
							<?php echo get_field( 'sub_title', get_the_ID()); ?>
							</span>

                        </div>
                        <br>
						<br>
						<div class="thumbnail">
                        <span style="font-size: 15px; text-align: justify;">
						<?php the_content(); ?>
                        </span>
						</div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button></div>
                </div>
            </div>
        </div>
  		<!-- ==========  modal end  =========== -->
            </div>
			<?php } ?>
        </div>
        <div class="text-center margin-top25"> <a href="<?php echo esc_url( home_url( '/' ) ); ?>/employees" title="View Profile" class=" btn btn-danger view-all">View
                All</a> 
        </div>
    </div>
</section>
<?php else:?>
    <!-- No Employee To Show in home -->
<?php  endif; ?>

