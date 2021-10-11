<?php 
    get_header();
    $search_query = get_search_query();
?>
<section class="section-background" style="margin-bottom: 40px;">
     <div id="search-section">
          <div class="container">
               <div class="row">
                    <!-- === page-header === -->
                    <div class="section-distance">
                         <div class="col-sm-12">
                              <div class="inner-bg">
                                   <h1 class="page-title" style="text-align: center;">Search Result</h1>
                                   <p style="text-align: center;">
                                        <span style="font-weight: 700;">
                                             <?php
                                                  $allsearch = new WP_Query("s=$s&showposts=0"); 
                                                  echo $allsearch ->found_posts;
                                             ?>
                                        </span>
                                        <span style="font-weight: 700;">
                                             <?php printf( __( 'search results for : %s', 'naabssmartdesign' ), '<span>' . $search_query . '</span>' ); ?>
                                        </span>
                                   </p>
                              </div>

                         </div>
                    </div>
               </div>
          </div>
     </div>
     <!-- ==== page content === -->
     <div>

          <div class="container">
               <div class="row media-margin-top0">
                    <div class="col-md-12">
                         <?php
                         if ( have_posts() ) :
                         while ( have_posts() ) : the_post();
                     ?>
                         <div class="page-content-row common-box-shadow">
                              <div class="search-page-content">

                                   <div class=" search-details page-event-details-side">
                                        <h4 class="page-event-title">
                                             <i class="fa fa-angle-double-right"></i>

                                             <a href="<?php the_permalink(); ?>">
                                                  <?php the_title(); ?></h4>
                                             </a>
                                        </h4>
                                        <!-- <h5 class="page-details-link">
                                       <i class="fa fa-link"></i> 
                                        <a href="<?php //the_permalink(); ?>">
                                             <?php //the_permalink(); ?>
                                        </a> 
                                   </h5> -->
                                        <h5 class="page-content-details">
                                             <span>
                                                  <i class="fa fa-align-justify"></i>
                                                  <?php
                                             $search_query_index=strpos(get_the_content(), "$search_query");
                                             $search_query_indexStart=0;
                                             if($search_query_indexStart >= 100){$search_query_indexStrat = $search_query_index - 50;}
                                             $search_query_indexEnd=$search_query_indexStart + 400;
                                             echo getTrimHtml(get_the_content(), $search_query_indexStart, $search_query_indexEnd);
                                         ?>

                                                  
                                             </span>
                                        </h5>
                                      
                                                  <a class="" href="<?php the_permalink(); ?>">
                                                       <i class="fa fa-external-link"></i>
                                                       Read More
                                                  </a>
                                   </div>
                              </div>
                         </div>
                         <?php endwhile; else : ?>
                         <div style="font-size: 30px;text-align: center;margin-top: 35px">
                              <!-- here's where we'll put a search form if there're no posts -->
                              <h1>
                                   <i class="fa fa-exclamation-triangle fa-fw color-red"> </i>
                                   NOT Found! Try to search another keyword!
                              </h1>
                         </div>
                         <?php endif; ?>
                    </div>
                    <!-- ==== pageing design === -->
                    <div class="col-md-12">
                         <div class="page-pageing">
                              <div class="page-navigation" style="margin: 0px;">
                                   <?php wpbeginner_numeric_posts_nav(); ?>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</section>

<?php get_footer('no-sidebar'); // will include footer-no-sidebar.php; ?>