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
   <!-- animatat css  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
   <!-- font -->
  <!--  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
   <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
   <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    -->
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

 <?php if($is_child): ?>

<?php  endif; ?>    

/************************ start header style ***************************************/
 #header-row  {
  position:absolute;
 }
 .header-top {
       overflow: hidden;

    }
    .header-top-area {
      display: flex;
      position: relative;
    }
    .top-socail-marquee-text {
     width: calc(100% - 410px);
    }
    .top-social-icon {
      width: 414px;
    }
    .customWidthtd .marquee {
      height: 32px;
    } 
    .marqueecontent span i {
      color:#ffffff;
    }
    .marqueetext-container {
      border: 0px solid #e4e7ea4f;
    }
    /*marquee text are */
    .top-bar-table {
      border-collapse: none;
    }
    .marqueecontent {
      position: relative;
    height: 32px;
  }
.top-bar-table tbody tr,  .top-bar-table tbody td {
  border :none;
}
#top-bar-notice .color {
color: #e50505;
color: #EB5767;
}
#top-bar-notice a 
{
font-size: 12px;
margin-top: 8px;
display: inline-block;
}
#top-bar-notice a:hover {
    color:#ffffff;
}
.colWhite{
    color: white !important;
}
.marqueecontent {
  position: relative;
  margin-left: 18px;
}
.marq-notice-area {
  width:100px;
}
#triangle-bottomleft {
       width: 14px;
    height: 32px;
    background: #544ea1;
    position: absolute;
    right: -7px;
    top: 0;
    z-index: 1;
    transform: skewX(20deg);
    border-right: 4px solid #fff;
}
.titleBackForScroll  a{
text-decoration:none;
}

/*    blink effect   */
.blink {
    display: inline-block;
    width: 25px;
    height: 25px;
    background-color: #ffbd05;
    border-radius: 50%;
    opacity: 0;
    margin-right: 10px;
    -webkit-animation: spinner .75s linear infinite;
    animation: spinner 1s linear infinite;
    transform: scale(50px, 7px);
    left: 5px;
}
    @keyframes  spinner {
        0% {
            -webkit-transform: scale(0);
            transform: scale(0);
        }
        50% {
            opacity: 1;
        }
    }
/*  end blink effect */
    .header-top-area ul {
     list-style: none;
     display: flex;
     margin: 0;
      z-index: 20
    }
    .header-top-area ul li {
      padding: 0px 10px;

      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 12px;
    }
    .header-top-area ul li span {
       color:rgba(255, 255, 255, .9);
    }
      .header-top-area ul li span:hover {
          color:rgba(255, 255, 255, .7) !important;
    }
    .header-top-area .social-icons {
      display: flex;
      justify-content: flex-end;
      color: #fff;
      height: 32px;
      position: absolute;
      right: 0;
     
    }
     .header-top-area .social-icons::after {
      content: '';
      display: block;
      width: 100%;
      height: 32px;
      background: #6c757d;
      position: absolute;
      top: 0;
      right: 0;
      z-index: 10;
      transform: skewX(20deg);
      border-left: 4px solid #fff;
    }
     .header-top-area ul li a span {
      font-weight: 700;
      font-size: 12px;
     } 
    .header-top-area ul li a span:hover {
       color:rgba(255, 255, 255, 0.9);
    }
    .header-top-area .social-icons  .icons {
      display: flex;
      justify-content: center;
      align-items: center;
    }
     .header-top-area .social-icons .top-header-link li {
      font-size: 12px;
      font-weight: 700;
      border-right: 1px solid #bbbbbb;
     }
     .header-top-area .social-icons .top-header-link li a {
      text-transform: uppercase;
      color:rgba(255, 255, 255, .8);
     }
     .header-top-area .social-icons .top-header-link li a:hover {
      color:rgba(255, 255, 255, .8);
     }
     .header-top-area .social-icons .top-header-link li a i,
      .header-top-area .social-icons .top-header-link li i {
      margin-right: 10px;
      color: #ffffff;
      font-weight: 700;
      font-size: 12px;
     }
     .header-top-area .social-icons .top-header-link li:last-child {
      margin-right: 0px;
      padding-right: 18px;
      padding-left: 18px;
      background-color: #dc3545;
    border-color: #dc3545;
    border-right: 0px soid transform;
     }
    .header-top-area .social-icons .top-header-link li:last-child:hover {
      background-color: #cb2939;
     }
    /* header */

    header {
      padding: 15px 0px;
      background: #032159;
    }
    header .header-area {
      display:flex;
      justify-content: center;
      align-items: center;
    }
    .logo {
      width: 90px;
      height: auto;
      border-radius: 50%;
      border:1px solid rgba(16, 17, 21, 0.1);
    }
    .header-title {

    }
    .header-title h3 {
      font-family: 'Monotype Corsiva';
      font-size: 25px;
      margin: 0px;
      color:#D6F104;
    }
    .header-title h2 {
      font-family: "Georgia";
      font-size: 27px;
      margin:0px;
      font-weight: 600;
      color: #ffffff;
      line-height: 1.4;
    }
    .header-title p {
      color: #ffba57;
      font-size: 18px;
      font-weight: 600;
      margin-bottom: 0px;
    }
    /*white header*/
    .header-top.white {
      background-color: #150101;
    }
   .white .font-14 {
    font-size: 14px;
    color: white;
    }
    .white .header-top-area .contact-mail li i {
    color: #ffffff;
    }
     header.white {
      padding: 15px 0px;
      background:white;
    }
    .white .header-title
    {
      margin-top: -16px;
    }
   .white .header-title h3 {
    color: #c60606;
    }
   .white .header-title h2
   {

    color: #115474;
    text-align: left;
   }
   .main-menu
   {
    height: 40px;
    background-color: #004ea2;
        text-align: center;
    }
   .main-menu .menu-item
   {
    font-family:"Open Sans", sans-serif !important;
    color: white;
    padding: 17px;
    line-height: 39px;
    font-size: 17px;
    color: white;
   }

   .HeadingTitleAll {
    margin: 1em 0 0.5em 0;
    color: #343434;
    font-weight: normal;
    font-family: 'Ultra', sans-serif;
    font-size: 36px;
    line-height: 42px;
    text-transform: capitalize !important;
    text-shadow: 0 2px white, 0 3px #777 !important;
}
  
     @media only screen and (max-width:1024px)  {
       .md-flex {
      display: flex;
      }
      .header-top-area ul li {
      margin-right: 12px;
      }
     }
     /* header top area */
@media (max-width: 768px){
    .top-social-icon {
    width: auto;
  }
  .header-top-area ul li {
    margin-right: 0px !important;
 }


}
@media only screen and (max-width:576px) {
   .header-top-area  { 
    display: block;
  }
  .top-socail-marquee-text {
    width:100%;
 }
 .header-top-area ul li a span {
  font-size:10px !important;
 }
 .header-top-area .social-icons .top-header-link li i {
  font-size: 10px !important;
 }
  .header-top-area .social-icons {
    position: relative !important;
    height: 26px;
  }
  #top-bar-notice a  {
    font-size: 10px;
  }
  .mparquee-icon i {
    font-size: 10px;
    color:#ffffff;
  }
  .marquee-notice-text { font-size: 10px; }
  .header-top-area .social-icons .top-header-link li:first-child {
    padding-right: 15px;
  }
  #top-bar-notice a {
    margin-top: 0px;
  }
  .header-top-area .social-icons .top-header-link li:nth-child(2) {
    border-right: none;
  }
  .header-top-area ul {
    width: 100% !important;
    justify-content:space-between;
  }
   .header-top-area .social-icons::after {
    content: '';
    display: block;
    width: 100%;
    height: 22px;
    background: #6c757d;
    position: absolute;
    top: 0;
    right: 0;
    z-index: 10;
    transform: none !important;
    border-left: none !important;
}
  .header-top-area .social-icons {
    height: 22px;
  }
  .marquee-row {
    height: 23px;
  }
  .marqueecontent {
    margin-top: -6px;
  }
  .blink {
    display: inline-block;
    width: 20px;
    height: 20px;
}
  .header-top-area ul li {
    margin-right: 0px !important;
    line-height: 22px;
}
  .header-top-area .social-icons .top-header-link li:last-child {
    margin-right: 0px;
    padding-right: 10px !important;
    padding-left: 8px !important;
    border-left: 1px solid #bbbbbb;
    }

}
    @media only screen and (max-width:768px) {
       /* header logo and title area  */
       .logo {
        width:75px;
      }
      .header-title h2 {
        font-size: 20px;
      }
      .header-title p {
        font-size:14px;
      }


    }
     @media only screen and (max-width:576px)  {
      .header-top  {
        height: 100%;
      }
      .sm-flex-dir-col {
        flex-direction: column;
      }
      /* header logo and title area  */
      .logo {
        width: 50px;
      }
      .header-title h2 {
        font-size: 12px;
      }
      .header-title p {
        font-size: 10px;
      }
    }


/*********************************** end header style ***************************************/

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
            <div class="header-top ">    
        <div class="header-top-area">
            <div class="top-socail-marquee-text">
                <!-- start marquee text here  -->
                <div class="marque-notice-section">
                    <div class="media-webkit-center titleBackForScroll" style="
                border: 0px;">
                        <div class="row">
                            <div class="marquee-row text-left media-text-center font12 media-font15 " style="">
                                <table class="top-bar-table" style="width:100%">
                                    <tbody>
                                        <tr>
                                            <td style=" background-color: #544ea1;" class="marq-notice-area">
                                                <div class="marqueecontent"
                                                    style="display: flex;justify-content: center; align-items: center; background-color: #544ea1">
                                                    &nbsp;
                                                    <span class="mparquee-icon"
                                                        style="display: inline-block;font-size:12px;"><i
                                                           class="fa fa-bullhorn colo"></i></span>&nbsp;
                                                    <span class="marquee-notice-text"
                                                        style="font-size: 12px;color: white;display: inline-block;font-weight: 700;">Notice
                                                        :</span>
                                                    <div id="triangle-bottomleft">&nbsp;</div>
                                                </div>
                                            </td>

                                            <td class="middle-td customWidthtd">
                                                <div style=" background-color:#6861BC;height: 32px;">
                                                    <?php get_template_part( "components/home-list/top-notice", $name = "list"  );?>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end marquer text here  -->
            </div>
            <div class="social-icons top-social-icon">
                <ul class="top-header-link">
                    <li class="font-14 top-tell-link"><i class="fa fa-phone" aria-hidden="true"><a
                                href="tel:+88-01817600093" class="header-link font-14 top-login-button-link"></i>
                        <span>+88-01817600093</span>
                        </a></li>
                    <li><a href="#" class="header-link font-14 top-login-button-link"><i class="fa fa-sign-in"
                                aria-hidden="true"></i><span>i-EMS Login</span></a></li>
                    <li> <span class="blink"></span><a href="#" class="header-link font-14 top-aplay-button-link">
                            <!--  <i class="fa fa-sign-in" aria-hidden="true"></i> -->
                            <span>Apply Online</span></a></li>
                </ul>
            </div>
        </div>
    </div>

    <header class=" hidden1">
        <div class="container">
        <?php 
            get_template_part( "components/header-main-site" );
        ?>
           
        </div>
    </header>
    <!-- Header-top row start -->

    <!-- === top menu start=== -->
    <section class="sticky" style="background:<?php echo $menu_color;?>">
        <div class="container">
             <div class="row">
                <div class="col-md-12">
                   <div class="jsnav-header bg-light sticky-top">
                      <div class="jsnav-header-wrapper container">
                  
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
<?php if($is_child): ?>
   <!-- child style here  -->
<?php else:?>
<?php  endif; ?>

