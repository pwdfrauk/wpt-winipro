<?php get_header(); ?>

<div class="container" style="padding-top: 30px; margin-bottom: 70px;">
    <div class="row">
        <div class="col-md-12">
            <div class="error-template">
                    <img class="img-responsive img-thumbnail" style="max-width: 400px;" src="<?php echo bloginfo('template_directory');?>/assets/images/404.gif" alt="" srcset=""> 
            </div>
            <div class="error-template" style="margin-top: 15px;">
                <a class="btn btn-info" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo( 'name' ); ?>">Go Home</a>
            </div>
        </div>
    </div>
</div>

<style>
    .error-template {
        text-align: center;
        
    }
</style>
<?php get_footer("no-sidebar"); ?>
