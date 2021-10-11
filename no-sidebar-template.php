<?php 
/*
Template Name:No Sidebar Template
*/
?>

<?php get_header(); ?>
<section id="single-page" class="section-background section-distance">
    <div class="container" style="margin-bottom: 15px;">
        <div class="row">
            <div class="col-md-12 col-sm-12 left-section">
                <?php get_template_part( "/components/single-page/single") ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer("no-sidebar"); ?>