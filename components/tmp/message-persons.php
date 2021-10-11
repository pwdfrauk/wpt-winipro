    <section class="section-distance">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="section-title-style ">
                        Messages
                    </h2>
                    <!-- <p class="section-title-small">
                      Learn For The Future
                  </p> -->
                    <div class="section-bar-small"></div>
                </div>
            </div>
            <div class="row margin-top25">
            <?php
            global $uni_pro; 
                  wp_reset_postdata();
                  
                     $tempVar = " active";   
                        
                     $myposts = new WP_Query(array(
                        'post_type' => array("mist_message"),
                        'posts_per_page'    => 3,
                        // 'meta_key'          => 'person_order_number',
                        // 'orderby'           => 'meta_value_num',
                        'orderby'                => 'menu_order',
                        'order'             => 'DESC',
                        'post_status'      => 'publish'
                        ));
                     while ($myposts->have_posts()){
                     $myposts->the_post(); 
                  ?>
                <div class="col-md-4 col-sm-4 col-xs-12 media-margin-top25">
                    <div class="messages-box text-center media-mrgn-btm-15">
                        <div class="member-thumb">
                        <?php   ?>
                        <?php
                        //$image = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'thumbnail' );
						      $noImg= get_template_directory_uri()."/assets/images/no-profile-pic.jpg";
                        if ( has_post_thumbnail(get_the_id()) ) : 
                            $thumb=wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'meduim' ); 
                            $url = $thumb['0'];
                        else: $url= $noImg; endif;
                        ?>
                            <img class="img-responsive bg-img-responsive" src="<?php echo $url; ?>" 
                            onerror="this.onerror=null;this.src='<?php echo $noImg; ?>';" 
                            alt="<?php echo get_the_title(); ?>">
                        </div>
                        <div class="member-desc">
                            <h3><?php echo get_the_title(); ?></h3>
                            <span style="color: #0062cc;"><?php the_field('person_designation', get_the_ID()); ?></span>
                            <div class="section-bar-small"></div>
                            <span class="white"></span>

                        </div>
                        <a data-toggle="modal" data-target="#msgModal<?php echo get_the_ID(); ?>" class=" btn btn-danger read-more-btn">
                            READ Message
                        </a>
                    </div>
              <!-- modal Start -->
              <div class="modal fade in" id="msgModal<?php echo get_the_ID(); ?>" tabindex="-1" role="dialog">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">×</button>
                                <h4 class="modal-title text-center">Message from <span style="font-weight: 600px;"> <?php the_field('person_designation', get_the_ID()); ?></span></h4>
                            </div>
                            <div class="modal-body content-body" style="background-color: #f8f8f8;">

                                <img style="width:150px;height:150px" class="img-thumbnail" 
                                src="<?php echo $url; ?>" alt="<?php echo get_the_title(); ?>"
                                onerror="this.onerror=null;this.src='<?php echo $noImg; ?>';" >
                                <span style="font-size: 18px; font-weight: 600;"> <?php echo get_the_title(); ?> </span>
                                <br>
                                <span style="font-size: 15px; font-style: italic; color: lightslategray;"> 
                                <?php the_field('person_designation', get_the_ID()); ?>
                                </span>
                                <br>
                                <div class="thumbnail">
                                <span style="font-size: 15px; text-align: justify;"> <b>Message :</b>
                                    <?php the_content(); ?>
                                </span>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button></div>
                        </div>
                    </div>
                </div>
              <!-- modal end -->
                </div>
                <?php } ?>
 <!-- msgbox end -->
            </div>
        </div>
    </section>

