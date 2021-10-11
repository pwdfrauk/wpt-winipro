<?php
    global $uni_pro;
    $is_child = $uni_pro['opt-switch-dept'];
    
    $logo = $uni_pro['media-logo']['url'];

    $favicon = $uni_pro['media-favicon']['url'];
    $social_facebook = $uni_pro['opt-social-text-facebook'];
    $social_youtube = $uni_pro['opt-social-text-youtube'];
    $social_twitter = $uni_pro['opt-social-text-twitter'];
    
    $menu_color='#071d63;';
    
    // $social_gplus = $uni_pro['opt-social-text-gplus'];
    // $social_skype = $uni_pro['opt-social-text-skype'];
    // $social_flickr = $uni_pro['opt-social-text-flickr'];
    // $social_linkedin = $uni_pro['opt-social-text-linkedin'];
    // $social_wordpress = $uni_pro['opt-social-text-wordpress'];
    // $social_vimeo = $uni_pro['opt-social-text-vimeo'];
    
?>

<!DOCTYPE html>
    <!--[if IE 7]>
        <html class="ie ie7" <?php language_attributes(); ?>>
    <![endif]-->
    <!--[if IE 8]>
        <html class="ie ie8" <?php language_attributes(); ?>>
    <![endif]-->
    <!--[if IE 9]>
        <html class="ie ie9" <?php language_attributes(); ?>>
    <![endif]-->
    <!--[if IE 10]>
        <html class="ie ie10" <?php language_attributes(); ?>>
    <![endif]-->
    <!--[if IE 11]>
        <html class="ie ie11" <?php language_attributes(); ?>>
    <![endif]-->
    <!--[if !(IE 7) | !(IE 8) | !(IE 9) | !(IE 10) | !(IE 11) ]>
        <html <?php language_attributes(); ?>>
    <![endif]-->
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="google-site-verification" content="8ydAiBCsKn6kAQ4gPW8i7GSQOi8tVpaPDXFvkvDiEJk" />
        <title><?php global $page, $paged; wp_title( '|', true, 'right' ); bloginfo( 'name' ); $site_description = get_bloginfo( 'description', 'display' );
		        if ( $site_description && ( is_home() || is_front_page() ) )
			        echo " | $site_description";
		        if ( $paged >= 2 || $page >= 2 )
			        echo ' | ' . sprintf( __( 'Page %s' ), max( $paged, $page ) );
           ?>
        </title>
        <meta name="description" content="<?php if ( is_single() ) {
            single_post_title('', true);
            } else {
            bloginfo('name'); echo " - "; bloginfo('description');
            }
        ?>" />

        <meta name="author" content="Pipilika Soft (PipilikaSoft.com)">
        <!-- The little things -->
   
        <link rel="favicon" href="<?php echo $favicon; ?>">
        <link rel="icon" href="<?php echo $favicon; ?>" type="image/x-icon">
        <link rel="shortcut icon" href="<?php echo $favicon; ?>" type="image/x-icon">
	    <link rel="apple-touch-icon" href="<?php echo $favicon; ?>" type="image/x-icon"/>
        <link rel="apple-touch-icon" href="<?php echo $favicon; ?>" type="72x72"/>
        <link rel="apple-touch-icon" href="<?php echo $favicon; ?>" type="114x114"/>

 <!-- Stlesheets -->
   <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> 
    <!-- <link rel="stylesheet" href="<?php echo bloginfo('template_directory'); ?>/assets/bootstrap/bootstrap.min.css" />-->
   <link rel="stylesheet" href="<?php echo bloginfo('template_directory'); ?>/assets/lib/magnific-popup/magnific-popup.css" />
    <!-- <link rel="stylesheet" href="<?php echo bloginfo('template_directory'); ?>/assets/lib/mujib-count/mujib.css" />-->

   <!-- wow js -->
   <!-- <link rel="stylesheet" href="<?php echo bloginfo('template_directory'); ?>/assets/css/animate.css"> -->

   <!-- Iconic Fonts -->
   <!-- <link rel="stylesheet" href="<?php echo bloginfo('template_directory'); ?>/assets/css/icofonts.css" /> -->

   <!-- Select 2 css -->
   <!-- <link rel="stylesheet" href="<?php echo bloginfo('template_directory'); ?>/assets/css/select2.min.css" /> -->

   <!-- Magnific Popup -->
   <!-- <link rel="stylesheet" href="<?php echo bloginfo('template_directory'); ?>/assets/css/magnific-popup.css"> -->

   <!-- Owl Carousel CSS -->
   <!-- <link rel="stylesheet" href="<?php echo bloginfo('template_directory'); ?>/assets/css/owl.carousel.min.css"> -->
   <!-- slick CSS  -->
   <!-- <link rel="stylesheet" type="text/css" href="css/slick/slick.css" /> -->
   <!-- <link rel="stylesheet" type="text/css" href="css/slick/slick-theme.css" /> -->
   <!-- <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/> -->

   <!-- icons  -->
   <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
   <!-- <link rel="stylesheet" href="<?php echo bloginfo('template_directory'); ?>/assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css"> -->
  
   <!-- font -->
   <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
   <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
   <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
   
   <?php wp_deregister_script('jquery');wp_head(); ?>
   <meta property="og:image" content="<?php echo bloginfo('template_directory'); ?>/assets/images/no-post-img.jpg?v=1" />
   <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>?v=3" />
   
   <link rel="stylesheet" href="<?php echo bloginfo('template_directory'); ?>/assets/menu/jsnav.css">


        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
<style>
body{
    background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/bg_pattern7-2x.png');
    background-size: auto;
}
#header-row {
    background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/bg_pattern6.png');
    background-size: contain;
    }
<?php if($is_child): ?>
    body{
        background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/bg_pattern1.png');
        background-size: auto;
    }
    #header-row {
        background-image: none; 
        background-color: white;
        /*url(https://bauet.ac.bd/wp-content/uploads/2020/12/mozaic2.png);*/
        background-size: contain;
    }
<?php  endif; ?>    
.header-top-bar
{
     background-color: #07294d; /*#43215f;*/
    background-color: #ebebeb;
}
.header-top-bar-line {
    padding-bottom: 2px;
    border-bottom: 2px solid #d9d9d9;
}
.header-top-bar-line {
     padding-bottom: 0px; 
    border-bottom: 0px solid #d9d9d9; 
    border-bottom: 1px solid #bcbcbc;
    box-shadow: 0 2px 2px rgba(0,0,0,0.176);
}

#header-row .header-top-bar .col-md-8>span {
    padding-left: 2px;
    padding-right: 10px;
}

#header-row .row .top-bar-icon>a i {
    border-radius: 50%;
    width: 19px;
    height: auto;
    text-align: center;
    font-size: 10px;
    padding: 4px;
    margin-left: 12px;
}


#header-row .col-md-5 .bt-indigo {
    color: white;
}

.header-top-bar .row .col-md-4 span {
    color: white;
}


#top-bar-notice a {
    color: #fff;
    padding: 0px 15px;
    font-size: 12px;
}

/*read more Button Style*/

.read-more-btn {
    height: auto;
    text-transform: uppercase;
    transition: all .3s ease;
}

.read-more-btn:hover {
    transform: translate(0, -4px);
    color: #fff;
    background-color: #fd1361;
    border-color: #fc0758;
    text-decoration: none;
    box-shadow: 0 6px 16px 0 rgba(253, 57, 122, .25) !important;
}

.dt-sc-button{
    padding: 8px 45px 9px 7px !important;
    font-size: 14px;
    font-weight: bold;
    text-transform: none;
     font-size: 12px;
    text-transform: uppercase;
    padding: 8px 15px;
    line-height: normal;
    display: inline-block;
    margin: 10px 0px 0px;
    cursor: pointer;
    outline: none;
    position: relative;
    z-index: 1;
    background: #051f30;
    color: white;
}

.dt-sc-button:hover{
    background: #1c3f55;
    color: #ffffff;
}
.dt-sc-button span {
    width: 36px;
    font-size: 14px;
     position: absolute;
    right: 0px;
    top: 0px;
    bottom: 0px;
    margin: auto;
    height: 100%;
    background: #fcdb34;
    color: #000000;
    text-align: center;
}
.dt-sc-button a:hover {
    background: #051f30;
}
/*read more Button Style end*/

.section-background {
    background-color: transparent;
    background-image: none;
    }
    
    
@media print {
    a[href]:after {
        content: none !important;
    }
}
.the-content img, .the-content img[class*='wp-image-']
{
    max-width: 100%;
    height: auto;
    vertical-align: middle;
    overflow:auto;
}
.back-to-top {
    display: none;
    cursor: pointer;
    position: fixed;
    bottom: 30px;
    right: 30px;
    z-index: 20;
    padding: 7px 10px;
    background: #ffffff;
    color: #313447;
    opacity: 0.5;
    box-shadow: 0px 0px 5px rgb(51, 51, 51);
    box-shadow: 0px 0px 5px rgba(51, 51, 51, 0.7);
}
.author-header .bot-name {
       height: 57px;
}


@media (max-width: 600px) {
    .top-bar-table .left-td, .top-bar-table .right-td
    {
        display: none;
    }
    /*.nav>li {*/
    /*position: relative;*/
    /*display: inline-block;*/
    /*width: 29%;*/
    /*}*/
  
    .header-logo {
            max-height: none !important;
    }
    .header-btn-style{
            margin-left: 5px !important;
    }
    .has-search .form-control {
     width: 160px !important;
    }
    
    .dropdown-plus{
        top: -5px !important;
        right: -38px !important;
    }
    .section-title-style h2 {
   
    font-size: 28px;
    }
    
}
#mega-menu-wrap-Top #mega-menu-Top > li.mega-menu-item > a.mega-menu-link {
    padding: 0px 5px 0px 5px;
}
#mega-menu-wrap-Top #mega-menu-Top > li.mega-menu-flyout ul.mega-sub-menu li.mega-menu-item a.mega-menu-link {
    padding: 5px;
    line-height: 1.4;
}


</style>

<style>
/*Menu CSS*/

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
        
        .has-search .form-control{
            width: 180px;
        }
        
    .jsnav-header .jsnav-header-wrapper .jsnav-menu ul ul ul li > a {
        padding: 5px 15px 5px 10px;
    }
    
    @media (min-width: 1200px){
        .sticky {
        	position: -webkit-sticky;
        	position: sticky;
        	top: 0;
        	z-index: 5000;
        }
    
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
        .mobile-menu{
            display: none;
        }
          
        
        
    }

</style>









</head>

<body>
 <!-- Start Header Menu -->
    <!-- Header-top row start -->

    <section id="header-row">
        <div class="header-top-bar header-top-bar-line">
            <div class="container media-webkit-center">
                <div class="row">
                    <div class=" text-left media-text-center font12 media-font15" style="  margin: 0 15px;">
                     
                      <table  class="top-bar-table" style="width:100%">
                      
                          <tbody>
                              <tr>
                                  <td class="left-td" style="width: 344px;">
                                  <div style="display: inline;"> <i class="fa fa-envelope black"></i>
                                        <span class="black" style="padding-right: 10px;"> info@bauet.ac.bd</span>
                                        
                                         <i class="fa fa-phone black"></i>
                                        <span class="black"> +8801708503504, +8801708503510</span>
                                    </div>
                                  </td>
                                  <td class="middle-td1">
                                  <div style="">
                                    
                                    </div>
                                  </td>
                                  <td class="right-td" style="">
                                  <div class="top-bar-icon media-text-center float-right" style="">
                                    <a href="https://www.facebook.com/bauetqadirabad/">
                                        <i class="fa fa-facebook" style="color: blue; background-color: #f9f9f9;"></i> </a>
                                    <!--<a href="https://twitter.com/bauetqadirabad/">-->
                                    <!--    <i class="fa fa-twitter" style="color: white; background-color: #00aced;"></i> </a>-->
                                    <!--<a href="https://plus.google.com/bauetqadirabad">-->
                                    <!--    <i class="fa fa-google-plus" style="color: white; background-color: #ff3b00f0;"></i> </a>-->
                                    <a href="https://www.youtube.com/bauetqadirabad/">
                                        <i class="fa fa-youtube-play" style="color: white; background-color: #ff0000;"></i> </a>
                                         | <a href="<?php echo get_site_url(); ?>/category/upcoming-events/">Upcoming Events</a> 
                                         | <a href="<?php echo get_site_url(); ?>/category/news-events/">News Events</a> 
                                         | <a href="<?php echo get_site_url(); ?>/category/notice/">Notice</a>  
                                         | <a href="<?php echo get_site_url(); ?>/ieee-student-branch/">IEEE Student Branch</a>
                                         | <a href="<?php echo get_site_url(); ?>/alumni/">Alumni</a> 
                                         | <a href="https://webmail.bauet.ac.bd/">Webmail</a>
                                </div>

                                  </td>
                              </tr>
                          </tbody>
                      </table>
                    </div>


                </div>
            </div>
        </div>


        <div class="container" style="margin-top: 5px; margin-bottom: 0px; margin-top: 15px;padding-bottom: 15px;">
        <?php 
            // $is_dept = $uni_pro['opt-switch-dept'];
            // if($is_dept==true): get_template_part( "components/header-child-site" );
            // else: get_template_part( "components/header-main-site" );
            // endif;

            get_template_part( "components/header-main-site" );
        ?>
           
        </div>
    </section>
    <!-- Header-top row start -->

    <!-- === top menu start=== -->
    <section class="sticky" style="background:<?php echo $menu_color;?>">
        <div class="container">
             <div class="row">
                <div class="col-md-12">
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
        </div>
    </section>
    
    

    
<!-- === top menu end=== -->
     <!-- End Header Menu -->
 
<section class="marque-notice-section">  
      <div class="container media-webkit-center" >
                <div class="row">
                    <div class="marque-bg text-left media-text-center font12 media-font15 " style=" ">
                      <table  class="top-bar-table" style="width:100%">
                          <tbody>
                              <tr>
                                  <td class="left-td" style="width: 130px;">
                                  <div style="display: inline;"> 
                                      <span><i class="fa fa-bullhorn"></i>&nbsp; <span class="" style="font-weight: bold;font-size: 13px;color: #650a0a;">Important Notice:</span></span>
                                    </div>
                                  </td>
                                  <td class="middle-td">
                                  <div style="">
                                    <?php get_template_part( "components/home-list/top-notice", $name = "list"  );?>
                                    </div>
                                  </td>
                                  <td class="right-td" style="width: 5px;">
                                  </td>
                              </tr>
                          </tbody>
                      </table>
                    </div>
                </div>
            </div>
    </section>
<style>
.marque-bg 
 {
    margin: 0 15px; 
    background-color: #868ced69;
    border-bottom: 1px solid #5967ef;
    padding-left: 10px;   
    border-radius: 13px;
    overflow: hidden;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
 }

</style>
<?php if($is_child): ?>
    <style>
    .marque-notice-section .marque-bg 
    {
      background: -webkit-linear-gradient(left,rgb(149 147 231),rgb(144 43 43));
    }
    #top-bar-notice .color 
    {
      color:  white;
    }
    </style>
<?php else:?>
<?php  endif; ?>

