<?php if ( have_posts() ) while ( have_posts() ) : the_post(); 
 //$imgSize= get_post_type( get_the_ID());
if ( get_post_type( get_the_ID() ) == 'mist_message' ) {
   $imgSize='width: 191px;';
}
?>

                <div class="common-box-shadow content-box" id="post-<?php the_ID();?>">
                    <?php edit_post_link( __( 'Edit', 'UniPro' ), '<span class="edit-link pull-right"><span class="fa fa-1x fa-edit"></span> ', '</span>' ); ?>
                    <h3 class=" single-post-title " style="margin-top: 25px;">
                        <?php the_title(); ?>
                    </h3>
                    <hr style="margin: 0px 0px 5px;">

                    <!-- <div class=" single-post-time-date">
                        <span>
                            <i class="fa fa-calendar media-font12"></i>
                            <a href="#" rel="">
                                <time class="entry-date ">
                                    <?php the_modified_date('l, F d, Y'); ?>
                                </time>
                            </a>
                        </span>
                        <span>
                            <i class="fa fa-user media-font12"></i>
                        </span>
                    </div> -->

                    <!-- ======= image section ====== -->
                    <div class="main-image" style="text-align: center; margin-top: 15px;">
                                    <?php
                                    if ( has_post_thumbnail() ) : 
                                        $thumb=wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' ); 
                                        $url = $thumb['0'];
                                        $border="";
                                    else: //$url= bloginfo('template_directory')."/assets/images/no-img.jpg"; 
                                        $url="";
                                    $border='<hr style="margin: 0px 0px 5px;">';
                                
                                endif;
                                ?>
                                <?php  if ( has_post_thumbnail() ) : ?>
                                <div class="img-thumbnail">
                                    <img class="img-responsive" style="<?php echo $imgSize; ?> " src="<?php echo $url; ?>" alt="">
                                </div>  
                                <?php  endif ?>  

                    </div>

                    <?php //echo $border ?>

                    <div class="post-content the-content">
                        <p class="media-font15">
                            <?php the_content(); ?>
                        </p>
                    </div>

                    <?php
                         //global $post;
                         //$current_page_parent = ( $post->post_parent ? $post->post_parent : $post->ID );
                        
                        $output= wp_list_pages( array(
                                'echo'=>'0',
                              'title_li' => '',
                              'child_of' => $post->ID,
                              'exclude'      => $post->ID,
                              'depth' => '1',
                              'sort_column'=>'menu_order',
                              'link_before'=>'<i class="fa fa-arrow-right" aria-hidden="true"></i>' 
                              )
                         );
                        
                         if ($output) {
                    ?>
                    <hr>
                    <div class="see-also">
                        <h4 class="title">See Also</h4>
                        <ul class="" style="list-style-type: circle;">
                            <?php  echo $output; ?>
                        </ul>
                    </div>
                    <?php } ?>

                    <!-- Start Post Footer  -->
                    <hr style="margin: 0px 0px 5px;">
                <div>
                    <?php get_template_part( "/components/single-page/single-footer") ?>
                </div>
                <!-- End Post Footer  -->
                </div>
                <?php endwhile; // end of the loop. ?>

<style>
    .content-box {
        padding: 10px 15px;
        /* margin-bottom: 15px; */
    }
    .see-also ul li{
        list-style-type: none;
    }
    .see-also ul li i{
        color: #777;
        margin-right: 10px;
    }
</style>