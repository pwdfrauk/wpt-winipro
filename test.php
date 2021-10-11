<?php
/*
Template Name: Test Template
*/
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	  
   <?php wp_head(); ?>
</head>
<body>
<div>
    <!-- === top menu start=== -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php
                    wp_nav_menu( array(
                        // 'menu'              => 'primary',
                        'theme_location'    => 'Top',
                        'depth'             => 10,
                        'container'         => false,
                        'container_class'   => 'collapse navbar-collapse',
                        'container_id'      => 'bs-example-navbar-collapse-1',
                        'menu_class'        => 'nav navbar-nav menuzord-menu navbar-left',
                        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'            => new WP_Bootstrap_Navwalker()
                        )
                    );
                ?> 
                </div>
            </div>
        </div>
    </section>
    <!-- === top menu end=== -->
</div>

 <?php wp_footer(); ?>
</body>
</html>
