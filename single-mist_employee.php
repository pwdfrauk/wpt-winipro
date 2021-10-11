<?php get_header(); ?>
<!--R tab start-->
<link rel="stylesheet" href="<?php echo bloginfo('template_directory'); ?>/assets/Rtab/css/responsive-tabs.css" />
<link rel="stylesheet" href="<?php echo bloginfo('template_directory'); ?>/assets/Rtab/css/style.css" />
<link rel="stylesheet" href="<?php echo bloginfo('template_directory'); ?>/assets/Rtab/css/custom.css" />
<!--R tab end-->
<style>
.page-title
{
    font-size: 42px;
}
  .profile-img {
    min-height: 263.5px;
  }
  .content-box, .r-tabs-panel{
      overflow:auto;
  }
  .r-tabs .r-tabs-nav .r-tabs-anchor
  {
      padding: 10px 6px;
      border-right: 1px solid gray;
  }
  .inner-bg {
    /*background: url(assets/images/archive-page-header.jpg) no-repeat center top / cover;*/
    min-height: 165px;
    padding-top: 4px;
    /*display: block;*/
    /*visibility: visible;*/
    border-radius: 10px;
}
</style>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<section class="section-background" style="margin-bottom: 40px;" id="post-<?php the_ID();?>">
  <div id="profile-section">
    <div class="container">
      <div class="row">
        <!--         === page-header === -->
        <div class="section-distance">
          <div class="col-sm-12">
            <div class="inner-bg">
              <h1 class="page-title" style="text-transform: none; text-align: center;">
                <?php the_title(); ?>
              </h1>
              <p style="text-align: center;text-align: center;font-size: 24px;font-weight: bold;color: darkslategray;"><?php echo get_field( 'designation', get_the_ID()); ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ==== page content === -->
  <div style="margin-top: 30px; margin-bottom: 70px;">
    <div class="container">
      <div class="row row-centered">
        <?php 
        $isShowTheContent=true;
        $colDivClass="";//"col-centered";
        
        function hasResearchArea() {
          $terms = get_the_terms( get_the_ID(), 'research_area' );
          if ($terms && ! is_wp_error($terms)){
             return true;
          }else{
            return false;
          }
       }
         if(strlen (get_post()->post_content )>5 || hasResearchArea()){
           $isShowTheContent=true;
          $colDivClass="";
         }

        ?>


        <!-- ------ left side start ------ -->
        <div class=" col-md-3 profile-panel col-sm-12 <?php echo $colDivClass; ?>">
          <div class="bot-box-section common-box-shadow">
            <div class="bot-box-section-style">
              <div class="author-header">
                <h5 class="bot-name" title="<?php echo get_the_title(); ?>">
                  <?php echo limitWordsByChar(get_the_title(),40); ?></h5>
              </div>
              <div class="author-avatar popup-img1" style="width: 158px;height:158px; background-color: #c4ccdf;">
                

                <?php
						    //$thumb = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID()), 'medium' );
					        $noPerson= get_template_directory_uri()."/assets/images/no-profile-pic.jpg";
                  if ( has_post_thumbnail(get_the_id()) ) : 
                      $thumb=wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'meduim' ); 
                      $url = $thumb['0'];
                  else: $url= $noPerson; endif;
                ?>

                <img class="popup-img" src="<?php echo $url; ?>" alt="<?php echo get_the_title(); ?>" style=""
                                        onerror="this.onerror=null;this.src='<?php echo $noPerson; ?>';" >

              </div>
              <div style="margin-bottom:20px;">
               
                <p class="author-content" style="font-size:14px">
                  <?php echo limitWordsByChar(get_field( 'designation', get_the_ID()),50); ?>
                </p>
                <p class="profile-dept" title="<?php echo get_field( 'faculty', get_the_ID()); ?>">
                  <?php echo get_field( 'faculty', get_the_ID()); ?>
                </p>
                 <?php if(strlen(get_field( 'e-mail', get_the_ID()))>5): ?>
                <p class="email" title="<?php echo get_field( 'e-mail', get_the_ID()); ?>" class="white">
                  <i class="fa fa-envelope-o"></i>
                  <?php echo get_field( 'e-mail', get_the_ID()); ?>
                </p>
                <?php endif;?>
                
                
 <?php if(strlen(get_field( 'mobile_no', get_the_ID()))>5): ?>
                <p class="email" title="<?php echo get_field( 'mobile_no', get_the_ID()); ?>" class="white">
                  <i class="fa fa-phone"></i>
                  <?php echo get_field( 'mobile_no', get_the_ID()); ?>
                </p>
                <?php endif;?>
              </div>
            </div>
          </div>
        </div>
        <!-- ------ right side end ------ -->
        <?php if($isShowTheContent) { ?>
        <div class="col-md-9  col-sm-12">
          <div class="common-box-shadow" style="text-align: justify; padding: 15px;">
            <?php edit_post_link( __( 'Edit', 'UniPro' ), '<span class="edit-link pull-right"><span class="fa fa-1x fa-edit"></span> ', '</span>' ); ?>
            <div class="my-details-title">
              <h3 style="text-align: center; margin-top: 0px;">Profile Details</h3>
            </div>
            <hr style="margin: 0px 0px 5px;">
            <div class="research_areas" style="text-align:left; margin-bottom: 15px;">
              <?php
                              $terms = get_the_terms( get_the_ID(), 'research_area' );

                              if ($terms && ! is_wp_error($terms)): ?>


              <h4>Interest Areas</h4>
              <?php foreach($terms as $term): ?>
              <a href="<?php echo get_term_link( $term->slug, 'research_area'); ?>" rel="tag"
                class="<?php echo $term->slug; ?>">
                <div style="font-size:12px" class="label label-primary"><?php echo $term->name; ?>
                </div> &nbsp
              </a>
              <?php endforeach; ?>
              <?php endif; ?>
            </div>
            
            <div class="the-content content-box">
                 <?php  the_content(); ?>
                  <div>
     <!--R-tab Start-->           
<div id="horizontalTab">
<ul>
 	<li><a href="#tab-1">Education</a></li>
 	<li><a href="#tab-2">Experience</a></li>
 	<li><a href="#tab-3">Publications</a></li>
 	<li><a href="#tab-4">Resesch Interests</a></li>
 	<li><a href="#tab-5">Achievement, Awards and Grants</a></li>
 	<li><a href="#tab-6">Seminar & Workshop</a></li>
 	<li><a href="#tab-7">Training</a></li>
 	<li><a href="#tab-8">Others</a></li>
</ul>
<div id="tab-1">
 <?php echo get_field( 'education', get_the_ID()); ?>
</div>
<div id="tab-2">
 <?php echo get_field( 'experience', get_the_ID()); ?>
</div>
<div id="tab-3">
 <?php echo get_field( 'publications', get_the_ID()); ?>
</div>
<div id="tab-4">
 <?php echo get_field( 'resesch_interests', get_the_ID()); ?>
</div>
<div id="tab-5">
 <?php echo get_field( 'achievement', get_the_ID()); ?>
</div>
<div id="tab-6">
 <?php echo get_field( 'seminar_workshop', get_the_ID()); ?>
</div>
<div id="tab-7">
 <?php echo get_field( 'training', get_the_ID()); ?>
</div>

<div id="tab-8">
 <?php echo get_field( 'others', get_the_ID()); ?>
</div>
</div>
<!--R-tab End-->       
                  </div>
                
           
            </div>
            <!-- Start Post Footer  -->
            <hr style="margin: 0px 0px 5px;">
            <div>
              <?php get_template_part( "/components/single-page/single-footer") ?>
            </div>
            <!-- End Post Footer  -->
          </div>
        </div>
        <?php } ?>
        <!-- ------------ -->
      </div>
    </div>
  </div>
</section>
<?php endwhile; // end of the loop. ?>

<style>
  .email {
    color: black;
    margin: 0px;
  }

  .author-content {
    color: #1c1f22;
    font-size: 12px;
    padding: 6px;
    margin: 0px;
  }

  .profile-dept {
    font-size: 12px;
  }
/* centered columns styles */
.row-centered {
    text-align:center;
}
.col-centered {
    display:inline-block;
    float:none;
    /* reset the text-align */
    text-align:left;
    text-align: center;
}

</style>

<?php get_footer("no-sidebar"); ?>