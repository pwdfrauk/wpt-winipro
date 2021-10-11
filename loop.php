<?php ?>
<section class="section-background">
    <?php $firstClass = 'first-post'; ?>
    <?php /* If there are no posts to display, such as an empty archive page */ ?>
    <?php if ( ! have_posts() ) : ?>
        
    <article role="main" class="the-content">
        <h1><?php _e( '404 - I&#39;m sorry but the page can&#39;t be found' ); ?></h1>
        <p>Please try searching again or head back to the homepage.</p>
    </article>
    <?php endif; ?>
    <?php ?>

    <div id="archive-section">
        <div class="container">
            <div class="row">
                <!-- === page-header === -->
                <div class="section-distance">
                    <div class="col-md-12 col-sm-12">
                        <div class="inner-bg">
                            <h1 style="text-align: center;" class="page-title">
                                <?php if ( is_day() ) : ?><?php printf( __( '<span>Daily Archive</span> %s' ), get_the_date() ); ?>
                                <?php elseif ( is_month() ) : ?><?php printf( __( '<span>Monthly Archive</span> %s' ), get_the_date('F Y') ); ?>
                                <?php elseif ( is_year() ) : ?><?php printf( __( '<span>Yearly Archive</span> %s' ), get_the_date('Y') ); ?>
                                <?php elseif ( is_category() ) : ?><?php echo single_cat_title(); ?>
                                <?php elseif ( is_search() ) : ?><?php printf( __( 'Search Results for: %s' ), '<span>' . get_search_query() . '</span>' ); ?>
                                <?php elseif ( is_home() ) : ?>Latest Posts<?php else : ?>
                                <?php endif; ?>
                            </h1>
                            <!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p> -->
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
                <?php while ( have_posts() ) : the_post(); ?>
                <?php /* How to display standard posts and search results */ ?>
                <div class="page-content-row common-box-shadow" id="post-<?php the_ID(); ?>" style="margin-left: 15px; margin-right: 15px;">
                    <div class="page-content-div">
                        <div class="page-event-date col-md-1 col-sm-12">
                            <span class="page-event-day" style="color: #0a51a1;"><?php the_time('d') ?></span>
                            <span class="page-event-month" style="color: #811786;"><?php the_time('M') ?></span>
                            <span class="page-event-year" style="color: #fff; background-color: #2dadcb;"><?php the_time('Y') ?></span>
                        </div>

                        <?php
                            if ( has_post_thumbnail() ) : 
                                $thumb=wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' ); 
                                $url = $thumb['0'];
                                $colClass="col-md-8";
                            else: $url="";
                            $colClass="col-md-10";

                        endif;
                        ?>
                        <?php  if ( has_post_thumbnail() ) : ?>
                            <div class="page-event-details col-md-2 col-sm-12">
                                <img class="img-style img-thumbnail img-responsive bg-img-responsive" src="<?php echo $url; ?>" alt=""> 
                            </div>
                        <?php  endif ?> 
                        
                        <div class=" page-event-details page-event-details-side <?php echo $colClass; ?> col-sm-12">
                            <h4 class="page-event-title">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?></h4>
                                </a>
                                

                            <!-- <h5 class="page-event-venue"> <i class="fa fa-link"></i>
                                <a href="<?php //the_permalink();?>"
                                    title="<?php //printf( esc_attr__( '%s' ), the_title_attribute( 'echo=0' ) ); ?>"
                                    rel="bookmark"><?php //the_permalink(); ?>
                                </a>
                            </h5> -->

                            <h5 class="page-content-details">
                                <span> 
                                <?php echo getTrimHtml(get_the_content(), 0, 200); ?>
                                <?php //echo limitWordsByChar(the_content(),110); ?>
                                <?php //the_excerpt(); ?>
                                <br>
                                    <a class="" href="<?php the_permalink(); ?>">
                                        <i class="fa fa-external-link"></i> Read More
                                    </a>
                                </span>
                            </h5>
                        </div>

                        <div class=" page-social-icon col-md-1 col-sm-12">

                            <ul style="text-align: right; margin-right: 15px;">
                                <li>
                                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>"
                                    onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"
                                    title="Click to share on Facebook">
                                    <i style="color: #4267b2;" class="fa fa-facebook-square"></i>
                                </a>
                                </li>
                                <li>
                                <a
                        href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>/&text=<?php the_title(); ?> - <?php bloginfo('name'); ?>"
                        onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"
                        title="Click to share on Twitter">
                        <i style="color: #1da1f2;" class="fa fa-twitter-square"></i>
                    </a>
                                </li>
                                <li>

                                <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>&source=<?php bloginfo('name'); ?>"
                        onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"
                        title="Click to share on LinkedIn">
                        <i style="color: #046fa7;" class="fa fa-linkedin-square"></i>
                    </a>
                                    
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>

                <?php comments_template( '', true ); ?>
                <?php endwhile; // End the loop. Whew. ?>

                
            </div>
        </div>
        <!-- ==== pageing design === -->

        <div class="container">
            <div class="row page-pageing">
                <div class="col-md-12">
                    <div class="page-navigation" style="margin-top: 0px; margin-bottom: 40px;">
                        <?php wpbeginner_numeric_posts_nav(); ?>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
    
</style>
