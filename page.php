<?php get_header(); ?>

<section id="single-page" class="section-background section-distance">
    <div class="container" style="margin-bottom: 15px;">
        <div class="row">
            <div class="col-md-8 col-sm-12 left-section">
            <?php get_template_part( "/components/single-page/single") ?>
            </div>

            <div class="col-md-4 col-sm-12 ">

                <?php
                 global $post;
                 $current_page_parent = ( $post->post_parent ? $post->post_parent : $post->ID );
                
                $output= wp_list_pages( array(
                        'echo'=>'0',
                        'title_li' => '',
                        'child_of' => $current_page_parent,
                        'exclude'      => '',
                        'depth' => '1',
                        'sort_column'=>'menu_order',
                        'link_before'=>'<i class="fa fa-arrow-right" aria-hidden="true"></i>' )
                 );
                
                 if ($output) {
            ?>
                <div class="common-box-shadow links" style="margin-bottom: 15px;">
                    <h4 class="link-title">Links</h4>
                    <ul>
                        <?php  echo $output; ?>
                    </ul>
                </div>

                <?php } ?>


                <div >
                   
                     <?php get_template_part( "/components/home-list/notices", $name = "list" ) ?>
                </div>

                <!-- <div class=""><?php //get_template_part( "/components/popular-post", $name = "list" ) ?></div> -->


            </div>


        </div>
    </div>
</section>

<style>
    .links ul li{
        list-style-type: none;
    }
    .links ul{
        padding-left: 15px;
    }
    .link-title{
        padding: 10px 0px;
        border-bottom: 2px solid #777;
        margin: 0px 15px 15px;
    }
    .links ul li i{
        color: #777;
        margin-right: 10px;
    }
    .links {
        padding-bottom: 5px;
    }
    
</style>


<?php get_footer("no-sidebar"); ?>