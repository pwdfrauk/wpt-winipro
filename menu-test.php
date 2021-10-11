<?php 
/*
Template Name:Menu Test Template
*/
?>

<?php get_header(); ?>

<style>
    /*.navbar-default{*/
    /*    display: none;*/
    /*}*/
    
    
    .jsnav-header .jsnav-header-wrapper .jsnav-menu > ul > li > a{
        color: #fff;
        font-weight: normal;
        text-decoration: none;
        border-color: #fff;
        font-size: 14px; 
    }
    
    .jsnav-header .jsnav-header-wrapper .jsnav-menu > ul > li > a:focus,
    .jsnav-header .jsnav-header-wrapper .jsnav-menu > ul > li > a:hover{
         background: linear-gradient(to bottom, #0f5f04, #127e43);
    }
   
    
    .jsnav-header .jsnav-header-wrapper .jsnav-menu ul li{
    border-left: 1px solid #050070;
    border-left-width: 1px;
    border-left-style: solid;
    border-left-color: rgb(5, 0, 112);
    box-shadow: inset 1px 0 0 0 rgba(255, 255, 255, 0.1);
    }
    
    .jsnav-header .jsnav-header-wrapper .jsnav-menu ul li >ul li{
        border: none;
    }
    
    
    .jsnav-header .jsnav-header-wrapper .jsnav-menu > ul > li > a {
        height: 42px;
        padding: 0 14px;
        line-height: 42px;
    }
    
    .jsnav-header .jsnav-header-wrapper .jsnav-menu ul ul li > a{
        color: #fff;
        font-size: 14px;
    }
    
    .jsnav-header .jsnav-header-wrapper .jsnav-menu{
           float: left !important;
    }
    
    
    .hamburger-inner, .hamburger-inner:after, .hamburger-inner:before{
        background-color: #FFF;
    }
    .burger-menu{
        position: revert;
        display: inline-block;
        background: #071d63;
    }
   
    .jsnav-header .jsnav-header-wrapper .jsnav-menu li > ul{
        padding-inline-start: 22px;
    }
    
  .jsnav-header .jsnav-header-wrapper .jsnav-menu ul ul li > a{
            padding: 5px 15px 5px 10px;
            border-bottom: 1px solid gray;
        }
    
    @media (min-width: 1200px){
    
        .jsnav-header .jsnav-header-wrapper .jsnav-menu li:hover > ul {
            z-index: 1000;
        }
        .jsnav-header .jsnav-header-wrapper .jsnav-menu > ul > li > a{
            padding: 0 13px;
        }
        
        .jsnav-header .jsnav-header-wrapper .logo{
            padding: 7px 40px 7px 0;
        }
        
        .jsnav-header .jsnav-header-wrapper{
                height: 42px;
        }

        
        .jsnav-header .jsnav-header-wrapper .jsnav-menu > ul > .dropdown_menu::after{
            
            border-width: 0 2px 2px 0;
            padding: 2px;
            content: '';
            margin-bottom: 3px;
            text-align: right;
            position: absolute;
            right: 3px;
            top: 18px;
        }

        .jsnav-header .jsnav-header-wrapper .jsnav-menu ul ul li > a{
            
                display: block;
                background: #217246;
                background: linear-gradient(to bottom, #127e43, #217246);
                filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#FF127E43', endColorstr='#FF217246');
                color: #fff;
                font-family: inherit;
                font-size: 14px;
                font-weight: normal;
                padding: 0px 10px 0px 10px !important;
                line-height: 27px;
                text-decoration: none;
                text-transform: none;
                vertical-align: baseline;
        }
        
        .jsnav-header .jsnav-header-wrapper .jsnav-menu li > ul{
            padding: 0px 0;
        }
        
        .jsnav-header .jsnav-header-wrapper .jsnav-menu li > ul > .dropdown_menu::after{
            transform: rotate(-45deg);
            -webkit-transform: rotate(-45deg);
            border: solid #fff;
            border-width: 0 3px 3px 0;
            padding: 2px;
            content: '';
            margin-bottom: 3px;
            text-align: right;
            position: absolute;
            right: 27px;
            top: 10px;


        }
        
        
        .jsnav-header .jsnav-header-wrapper .jsnav-menu li > ul ul{
            top: 0px;
        }
        
          
        
    }

</style>


<section class="sticky" style="background: #071d63;">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="jsnav-header bg-light sticky-top">
                <div class="jsnav-header-wrapper container">
                    
                    <!--<div class="logo font-weight-bold">-->
                    <!--    <a href="#">DEMO</a>-->
                    <!--</div> <!-- .logo -->
                    
                    <!--<div class="burger-menu">-->
                    <!--    <div class="hamburger-inner"></div>-->
                    <!--</div>-->
                    
                    <!-- .burger-menu -->
                    
                    
                    <nav class="jsnav-menu">
                        
                        <?php 
                                             $menu_args = array(
                                              'menu'    => 'my-menu',
                                              'theme_location' => 'my-menu',
                                              'depth'    => 4,
                                              'container'   => false,
                                              'menu_class'   => '',
                                              'fallback_cb'       => 'wp_navwalker::fallback',
                                              'walker'    => new wp_navwalker()
                                             );
                                             wp_nav_menu($menu_args);
                                            ?>
                        
                    </nav> <!-- nav -->
                </div> <!-- .jsnav-header-wrapper -->
            </div> <!-- .jsnav-header -->
            
            
            
        </div>   
    </div>
</section>

<section>
    <div class="row">
        <div class="col-md-8 col-sm-12 left-section">
            <?php get_template_part( "/components/single-page/single") ?>
        </div>
    </div>
</section>




		


<?php get_footer("no-sidebar"); ?>