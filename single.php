<?php get_header(); ?>

<section id="single-page" class="section-background section-distance">
    <div class="container" style="margin-bottom: 15px;">
        <div class="row">
            <div class="col-md-8 col-sm-12 left-section">
            <?php get_template_part( "/components/single-page/single") ?>

            </div>

            <div class="col-md-4 col-sm-12">
            <div>
                <?php get_template_part( "/components/home-list/notices", $name = "list" ) ?>
                <!-- <div class=""><?php //get_template_part( "/components/popular-post", $name = "list" ) ?></div> -->
            </div>
        </div>
    </div>
</section>

<?php get_footer("no-sidebar"); ?> 