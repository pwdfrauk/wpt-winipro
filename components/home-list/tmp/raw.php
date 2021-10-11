

  <style type="text/css">
    /* Dropdown Button */
    .dropbtn {
      background-color: white;
      color: black;
      padding: 8px;
      font-size: 16px;
      border: 1px;
    }

    /* The container <div> - needed to position the dropdown content */
    .dropdown {
      position: relative;
      display: inline-block;
    }

    /* Dropdown Content (Hidden by Default) */
    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f1f1f1;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }

    /* Links inside the dropdown */
    .dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }

    /* Change color of dropdown links on hover */
    .dropdown-content a:hover {background-color: #ddd;}

    /* Show the dropdown menu on hover */
    .dropdown:hover .dropdown-content {display: block;}

    /* Change the background color of the dropdown button when the dropdown content is shown */
    .dropdown:hover .dropbtn {}
  </style>



  <style type="text/css">
    .messages-box, .single .post-navigation {
      box-shadow: 0px 0px 60px -20px rgba(10,10,10,.2);
    }
    .messages-box {
      background-color: #fff;
      padding: 30px 15px;
      transition: .3s;
      border-radius: 3px;
      height: 365px;
    }
    .text-center {
      text-align: center;
    }
    .messages-box .member-thumb {
      margin: 0 auto 15px;
      width: 216px;
      height: 145px;
      position: relative;
      border-radius: 50%;
    }
    *{
      box-sizing: border-box;
      color: #1c1f22;
    }
    .text-center {
      text-align: center;
    }
    .messages-box .member-thumb img {
      border-radius: 50%;
      border: 5px solid #fff;
      box-shadow: 0 4px 6px rgba(0,0,0,.1);
    }
    .bg-img-responsive {
      width: 100%;
      height: 100%;
      opacity: 1;
      visibility: inherit;
      z-index: 20;
      background-position: center center;
      background-repeat: no-repeat;
      background-size: cover;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-color: #d3dee3;
    }
    .carousel-inner>.item>a>img, .carousel-inner>.item>img, .img-responsive, .thumbnail a>img, .thumbnail>img {
      display: block;
      max-width: 100%;
      height: auto;
    }
    img {
      vertical-align: middle;
    }
    * {
      box-sizing: border-box;
      color: #1c1f22;
    }
    .text-center {
      text-align: center;
    }
    .messages-box .member-desc {
      padding-top: 20px;
    }
    * {
      box-sizing: border-box;
      color: #1c1f22;
    }
    * {
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      box-sizing: border-box;
    }
    .text-center {
      text-align: center;
    }
    .messages-box .member-desc h3 {
      font-weight: 600;
      font-size: 20px;
      margin-top: 0;
    }
    h3 {
      font-size: 24px;
      font-family: "Open Sans",sans-serif !important;
      font-weight: 700;
      line-height: 24px;
      color: #656565;
    }
    .h3, h3 {
      font-size: 24px;
    }
    .h1, .h2, .h3, h1, h2, h3 {
      margin-top: 20px;
      margin-bottom: 10px;
    }
    .h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
      font-family: inherit;
      font-weight: 500;
      line-height: 1.1;
      color: inherit;
    }
    * {
      box-sizing: border-box;
      color: #1c1f22;
    }
    element.style {
      color: #0062cc;
    }
    .messages-box .member-desc span {
      color: #777;
      font-size: 15px;
      letter-spacing: 1px;
      line-height: normal;
      padding-bottom: 10px;
      display: block;
    }
    * {
      box-sizing: border-box;
      color: #1c1f22;
    }
    * {
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      box-sizing: border-box;
    }
  </style>


<!--Button Style-->
<style type="text/css">
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
</style>

<!--fecilitice section-->
<!--
<style type="text/css">
    * {
    box-sizing: border-box;
   
}
body{font-family: "Roboto",sans-serif;}
.itemBox
{
  background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/chicago-river-cruise-554x674.jpg');
  background-repeat: no-repeat; 
  height: 378px;
  width: 300px;position: relative;
}
.dateDiv{
    text-align: center;
    background: rgba(0,0,0,.5);
    color: rgba(255,255,255,.75);
    position: absolute;
    top: 15px;
    right: 15px;
    padding: 15px 10px;
    font-size: 14px;
    line-height: 18px;
    min-width: 66px;
  }
.contentBox
{
  position: absolute;
  bottom: -1px;
  left: 0;
  right: 0;
  background: rgba(0,0,0,.5);
}


.footerTitleDiv{
  display: block;
    padding: 15px 28px 13px 20px;
    border-bottom: solid 1px rgba(255,255,255,.2);
    position: relative;
  }

.footerBodyDiv{
  font-size: 13px;
    line-height: 1;
  height: 0px;
  padding: 0 20px;
    color: rgba(255,255,255,.75);
    transition: all .25s ease-out .2s;
  }

.footerBodyDiv p{
  padding: 1px;margin: 1px;color: rgba(255,255,255,.75); font-size: 14px;
  opacity: 0;
    transform: translateY(25px);
    -webkit-transform: translateY(25px);
    transition: all .25s ease-out .2s;
}

.itemBox:hover .footerBodyDiv {
    height: 66px;
    padding: 10px 20px 19px;
    transition: all .25s ease-out;
}
.itemBox:hover .footerBodyDiv *{
    opacity: 1;
    transform: translateY(0px);
    -webkit-transform: translateY(0px);
}


.dark-div .btn-default, .dark-div button, .dark-div input[type=button], .dark-div input[type=submit] {
    color: #fff;
    border-color: #fff;
}
.dark-div, .dark-div a {
    color: rgba(255,255,255,.75);
}
.facilities button, input[type=button], .facilities input[type=submit], .facilities .btn,.facilities .un-button-1,.facilities .un-button-2,.facilities .un-button-1-lg,.facilities .un-button-2-lg {
    padding: 9px 20px;
    transition: all .2s;
    border-radius: 3px;
    border: solid 2px #666;
}
.facilities .btn-default {
    color: #666;
    background-color: rgba(255,255,255,0);
    border-color: rgba(52,52,52,0.1);
}
.facilities .btn {
    display: inline-block;
    margin-bottom: 0;
    font-weight: normal;
    text-align: center;
    vertical-align: middle;
    cursor: pointer;
    background-image: none;
    border: 1px solid transparent;
    white-space: nowrap;
    padding: 6px 12px;
    font-size: 13px;
    line-height: 1.42857143;
    border-radius: 0;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}
.facilities a {
    color: #343434;
    transition: color .2s;
}
</style>
-->
  <!-- Message VC Start -->
        <div class="" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/about-parallax.jpg'); background-repeat: no-repeat;padding-top: 110px !important;padding-bottom: 110px !important">
          <div class="container" style="padding-bottom: 25px;">
           

<div class="row">
            <div class="col-md-4">
               <h2 style="color: #463839;font-family: Roboto Slab, sans-serif;font-size: 28px; font-weight: 600;">Message From VC</h2>
            <div style="border:1px solid #463839;width: 80px"></div>
              <div class="media-margin-top25">
                <div class="messages-box text-center media-mrgn-btm-15" style="margin-top: 140px;">
                  <div class="member-thumb" style="">
                   <img style="margin-top: -140px;max-width: 216px;
                   height: 216px;" class="img-responsive bg-img-responsive" src="http://bauet.ac.bd/img/vc1.jpg" onerror="this.onerror=null;this.src='#/wp-content/themes/wpt-unipro-ius//assets/images/no-profile-pic.jpg';" alt="">
                 </div>
                 <div class="member-desc" style="border-radius: 0;margin-top: 70px;">
                  <h3 style="font-family: inherit">Brig Gen Prof M. Mustafa Kamal</h3>
                  <span style="color: #292929;font-family: sans-serif !important">Vice Chancellor</span>
                  <div style="text-align: center;
                  margin: 0 auto;
                  left: 0;
                  right: 0;
                  position: relative;
                  width: 60px;
                  max-width: 60px;
                  height: 4px !important;
                  background-color: #463839;margin-bottom: 15px;"></div>
                  <span style="color: #959595;font-size: 13px;font-family: sans-serif !important">
                     I take the privilege to express my deepest feeling of gratitude to Almighty for providing me the opportunity to serve as 2nd Vice Chancellor of this prestigious university
                  </span>
                  <div class="section-bar-small" style="color: white">
                  
                 </div> 
                 <a href="#" target="_self" title="" class="dt-sc-button"> Read More <span style="padding-top: 10px;" class="fa fa-arrow-right"> </span></a>
               </div>
             </div>
           </div>
         </div>

         <div class="col-md-8" style="padding-left: 40px;">
             <h2 style="color: #463839;font-family: Roboto Slab, sans-serif;font-size: 28px; font-weight: 600;">BAUET Video Gallery</h2>
            <div style="border:1px solid #463839;width: 80px"></div>
      <div style="text-align: center;padding-top: 40px;"> 
        <iframe class="img-thumbnail" style="width: 90%;min-height: 462px;box-shadow: 0 4px 6px rgba(0,0,0,.1);" src="https://www.youtube.com/embed/vbgHvaHF4mQ?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
      </div>
        </div>
 </div>
      </div>
    </div>
     <!-- Message VC end -->

      


<!--  </br></br></br></br></br></br>-->

<!--<div class="container">-->
<!--  <a href="#" target="_self" title="" class="dt-sc-button"> Read More <span style="    padding-top: 10px;" class="fa fa-arrow-right"> </span></a>-->
<!--</div>-->





<!-- </br></br></br></br></br></br>-->


<!--<div class="container">-->
<!--  <div class="row facilities">-->
<!--    <div class="col-md-3">-->
<!--        <div style="height: 378px;width: 300px;background-color: #179BD7">-->
<!--  <div style="padding: 10px">-->
<!--        <h1 style="color: white;padding-top: 50px;padding: 10px;font-size: 48px;-->
<!--    line-height: 1.1;-->
<!--    margin-bottom: 13px;font-family: Bitter, Times, serif;">BAUET Facilities</h1>-->

<!--<p style="color: rgba(255,255,255,.75);margin-bottom: 26px; font-family: Open Sans ,sans-serif;    font-size: 12px;-->
<!--    line-height: 1.5;-->
<!--    text-align: left;">Cras site amet nibh libero, in gravida nulla dignissimos</p>-->


<!--    <a class="btn btn-default" href="#" style="color: white; border: 1px solid white;">ALL EVENTS <i class="fa fa-angle-right"></i></a>-->
<!--  </div>-->
<!--        </div>-->



<!--    </div>-->
<!--    <div class="col-md-3">-->
<!--      <div class="itemBox" style="">-->
<!--          <div class="dateDiv">-->
<!--            <div style="">MAR </div> -->
<!--            <div> 30</div>-->
<!--          </div>-->
<!--          <div class="contentBox">-->
<!--          <a herf="#" class="footerTitleDiv">-->
<!--            <h4 style="color: white;margin-bottom: 0px;margin-top: 0px;">Chicago Architecture Foundation River Cruise </h4>-->
<!--            <span style="margin-top: 14px; font-size: 18px;color: #fcff00;">Free</span>-->
<!--          </a>-->
<!--          <div class="footerBodyDiv">-->
<!--            <p style="">At 8:00 am</p>-->
<!--            <p style="">Bentley Campus, Perth, WA</p>-->
<!--          </div>-->
<!--          </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="col-md-3">-->
<!--      <div class="itemBox" style="">-->
<!--          <div class="dateDiv">-->
<!--            <div style="">MAR </div> -->
<!--            <div> 30</div>-->
<!--          </div>-->
<!--          <div class="contentBox">-->
<!--          <a herf="#" class="footerTitleDiv">-->
<!--            <h4 style="color: white;margin-bottom: 0px;margin-top: 0px;">Chicago Architecture Foundation River Cruise </h4>-->
<!--            <span style="margin-top: 14px; font-size: 18px;color: #fcff00;">Free</span>-->
<!--          </a>-->
<!--          <div class="footerBodyDiv">-->
<!--            <p style="">At 8:00 am</p>-->
<!--            <p style="">Bentley Campus, Perth, WA</p>-->
<!--          </div>-->
<!--          </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="col-md-3">-->
<!--      <div class="itemBox" style="">-->
<!--          <div class="dateDiv">-->
<!--            <div style="">MAR </div> -->
<!--            <div> 30</div>-->
<!--          </div>-->
<!--          <div class="contentBox">-->
<!--          <a herf="#" class="footerTitleDiv">-->
<!--            <h4 style="color: white;margin-bottom: 0px;margin-top: 0px;">Chicago Architecture Foundation River Cruise </h4>-->
<!--            <span style="margin-top: 14px; font-size: 18px;color: #fcff00;">Free</span>-->
<!--          </a>-->
<!--          <div class="footerBodyDiv">-->
<!--            <p style="">At 8:00 am</p>-->
<!--            <p style="">Bentley Campus, Perth, WA</p>-->
<!--          </div>-->
<!--          </div>-->
<!--        </div>-->
<!--    </div>-->
<!--  </div>-->
<!--</div>-->



<!--</br></br></br></br></br></br>-->


<!--<div class="container">-->
<!--  <div class="row">-->
<!--    <div class="col-md-4" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/chicago-river-cruise-554x674.jpg'); min-height: 260px;border-radius: 10px">-->
<!--        <div style="position: absolute;bottom: 0;left: 0;right: 0; color: white;padding: 12px;background-color: #1d10106b;">-->
<!--          <h4 style="font-size: 2rem;line-height: 1.8rem;font-weight: 700;border-left: 4px solid #ffae29;font-weight: 400;font-family:Roboto">Upcoming Events</h4>-->
<!--             <a href="#" style="color: white;font-family: Roboto;font-weight: bold;font-size: 13px;">INFORMATION TECH / MACHINE LEARNING / TECHNOLOGY</a>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="col-md-4"></div>-->
<!--    <div class="col-md-4"></div>-->
<!--  </div>-->
<!--</div>-->


<!--Research start-->
<!--</br></br>-->

<!--<div class="container">-->
<!--     <div class="section-title-style"> -->
<!--    <h2 class=""> Latest Research </h2> -->
<!--    <p class="section-title-small">“Research is to see what everybody else has seen, and to think what nobody else has thought.”</p>-->
<!-- </div>-->
<!--  <div class="row">-->
<!--    <div class="col-md-4">-->
<!--        <div>-->
<!--            <div style="padding-bottom: 8px;">-->
<!--              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog8.jpg" style="" class="img-thumbnail img-responsive">-->
<!--            </div>-->

<!--      <div style="padding-left: 5px;padding-right: 5px;font-family: Roboto Slab, sans-serif;">-->
<!--            <div style="font-size: 13px;color: #E3CFB8">-->
<!--              Posted on 18 Jun 2015-->
<!--            </div>-->
<!--             <div style="color: #000000;font-size: 22px;">-->
<!--              <a href="#" style="text-decoration: none;">Posted on 18 Jun 2015</a>-->
<!--            </div>-->
<!--             <div style="color: #000000;">-->
<!--              <p style="font-size: 13px!important;line-height: 19px">Primality Agile mind set it increasing individual and interaction over process and tools. So, write from the beginning your agile team have a very.</p>-->
<!--            </div>-->
<!--            <div>-->
<!--            <a href="#" target="_self" title="" class="dt-sc-button"> View All <span style="padding-top: 10px;" class="fa fa-arrow-right"> </span></a>-->
<!--            </div>-->
<!--      </div>-->

<!--        </div>-->
  
<!--    </div>-->



<!--    <div class="col-md-8">-->
<!--         <div class="row" style="padding-bottom: 22px;">-->
<!--            <div class="col-md-4">-->
<!--               <div style="padding-bottom: 8px;">-->
<!--                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog8.jpg" style="" class="img-thumbnail img-responsive">-->
<!--              </div>-->
<!--              <div style="padding-left: 5px">-->
<!--                  <div style="font-size: 13px;color: #E3CFB8">-->
<!--                  Posted on 18 Jun 2015-->
<!--                </div>-->
<!--                 <div style="color: #000000;font-size: 16px;padding-top: 5px;">-->
<!--               <a href="#">Posted on 18 Jun 2015 Posted on 18 Jun 2015 Posted on 18 Jun 2015 Posted on 18 Jun 2015</a>-->
<!--                </div>-->
<!--              </div>-->
<!--          </div>-->

<!--          <div class="col-md-4">-->
<!--                <div style="padding-bottom: 8px;">-->
<!--                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog8.jpg" style="" class="img-thumbnail img-responsive">-->
<!--              </div>-->
<!--              <div style="padding-left: 5px">-->
<!--                  <div style="font-size: 13px;color: #E3CFB8">-->
<!--                  Posted on 18 Jun 2015-->
<!--                </div>-->
<!--                 <div style="color: #000000;font-size: 16px;padding-top: 5px;">-->
<!--                  <a href="#">Posted on 18 Jun 2015</a>-->
<!--                </div>-->
<!--              </div>-->
<!--          </div>-->
<!--          <div class="col-md-4">-->
<!--             <div style="padding-bottom: 8px;">-->
<!--                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog8.jpg" style="" class="img-thumbnail img-responsive">-->
<!--              </div>-->
<!--              <div style="padding-left: 5px">-->
<!--                  <div style="font-size: 13px;color: #E3CFB8">-->
<!--                  Posted on 18 Jun 2015-->
<!--                </div>-->
<!--                 <div style="color: #000000;font-size: 16px;padding-top: 5px;">-->
<!--                <a href="#">Posted on 18 Jun 2015</a>-->
<!--                </div>-->
<!--              </div>-->
<!--          </div>-->
<!--          </div>-->
<!--  <div class="row">-->
<!--            <div class="col-md-4">-->
<!--            <div style="padding-bottom: 8px;">-->
<!--                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog8.jpg" style="" class="img-thumbnail img-responsive">-->
<!--              </div>-->
<!--              <div style="padding-left: 5px">-->
<!--                  <div style="font-size: 13px;color: #E3CFB8">-->
<!--                  Posted on 18 Jun 2015-->
<!--                </div>-->
<!--                 <div style="color: #000000;font-size: 16px;padding-top: 5px;">-->
<!--                <a href="#">Posted on 18 Jun 2015</a>-->
<!--                </div>-->
<!--              </div>-->
<!--          </div>-->

<!--          <div class="col-md-4">-->
<!--                <div style="padding-bottom: 8px;">-->
<!--                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog8.jpg" style="" class="img-thumbnail img-responsive">-->
<!--              </div>-->
<!--              <div style="padding-left: 5px">-->
<!--                  <div style="font-size: 13px;color: #E3CFB8">-->
<!--                  Posted on 18 Jun 2015-->
<!--                </div>-->
<!--                 <div style="color: #000000;font-size: 16px;padding-top: 5px;">-->
<!--                 <a href="#">Posted on 18 Jun 2015</a>-->
<!--                </div>-->
<!--              </div>-->
<!--          </div>-->
<!--          <div class="col-md-4">-->
<!--                   <div style="padding-bottom: 8px;">-->
<!--                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog8.jpg" style="" class="img-thumbnail img-responsive">-->
<!--              </div>-->
<!--              <div style="padding-left: 5px">-->
<!--                  <div style="font-size: 13px;color: #E3CFB8">-->
<!--                  Posted on 18 Jun 2015-->
<!--                </div>-->
<!--                 <div style="color: #000000;font-size: 16px;padding-top: 5px;">-->
<!--                 <a href="#">Posted on 18 Jun 2015</a>-->
<!--                </div>-->
<!--              </div>-->
<!--          </div>-->
<!--          </div>-->

<!--     </div>-->

<!--    </div>-->



<!--  </div>-->


<!--</br></br>-->

<!--Research end-->

<!--<div class="container-fluid">-->
<!--          <div class="row">-->
<!--            <div class="col-md-6 col-sm-12 " style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/paralax-bg.jpg');">-->
<!--              <img class="img-thumbnail" src="<?php echo get_template_directory_uri(); ?>/assets/img/lady.png" style="width: 100%px;max-height: 548px;border:0px;  margin-top:-48px;background: center;">-->
<!--            </div>-->

<!--            <div class="col-md-6 col-sm-12" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/pattern.jpg');">-->
<!--              <div style="min-height: 500px;padding: 60px;padding-left: 40px;">-->
<!--                <h2 style="font-size: 50px; color: #fcdb34; line-height: 50px;font-weight: 600; font-family: Roboto Slab, sans-serif;">Best Engineering Discipline!</h2>-->

<!--                <div style="padding-right: 1px">-->
<!--                  <h3 style="font-size: 30px; font-weight: 300;color: #DBDEE4;padding-bottom: 50px;">An investment in knowledge pays the best interest.</h3>-->
<!--                </div>-->

<!--                <div style="height: 50px">-->
<!--                 <a href="#" target="_self" title="" class="dt-sc-button"> Read More <span style="padding-top: 10px;" class="fa fa-arrow-right"> </span></a>-->
<!--                </div>-->
<!--              </div>-->
<!--            </div>-->
<!--          </div>-->
<!--</div>-->



<!--<style type="text/css">-->

<!--.parentDid img{-->
<!--  height: 160px;-->
<!--  width: 100%;-->
<!--  -webkit-transition: all 0.3s linear;-->
<!--  -moz-transition: all 0.3s linear;-->
<!--  -o-transition: all 0.3s linear;-->
<!--  -ms-transition: all 0.3s linear;-->
<!--  transition: all 0.3s linear;-->
<!--}-->
<!--.parentDid{-->
<!--  overflow: hidden;-->
<!--}-->
<!--  .parentDid:hover img{-->
<!--    top: -23px;-->
<!--    -webkit-transform: scale(1.15);-->
<!--    -moz-transform: scale(1.15);-->
<!--    -ms-transform: scale(1.15);-->
<!--    transform: scale(1.15);-->
<!--    opacity: 1;-->
<!--    z-index: 1;-->
<!--}-->

<!--.parentContainer{-->
<!--  position: absolute;-->
<!--  background-color: #521d6da1;-->
<!--  padding: 0;margin: 0;-->
<!--  height: 150px;-->
<!--  width: 100%!important;-->
<!--   -webkit-transition: all 0.3s linear;-->
<!--  -moz-transition: all 0.3s linear;-->
<!--  -o-transition: all 0.3s linear;-->
<!--  -ms-transition: all 0.3s linear;-->
<!--  transition: all 0.3s linear;-->
<!--}-->
<!--.parentContainer:hover{-->
<!--  position: absolute;-->
<!--  background-color: transparent;-->
<!--  padding: 0;margin: 0;-->
<!--  height: 150px;-->
<!--  width: 345px;-->

<!--}-->

<!--.parentContainerOne{-->
<!--  position: absolute;-->
<!--  background-color: #25b9f3ad;-->
<!--  padding: 0;margin: 0;-->
<!--  height: 150px;-->
<!--  width: 100%!important;-->
<!--   -webkit-transition: all 0.3s linear;-->
<!--  -moz-transition: all 0.3s linear;-->
<!--  -o-transition: all 0.3s linear;-->
<!--  -ms-transition: all 0.3s linear;-->
<!--  transition: all 0.3s linear;-->
<!--}-->
<!--.parentContainerOne:hover{-->
<!--  position: absolute;-->
<!--  background-color: transparent;-->
<!--  padding: 0;margin: 0;-->
<!--  height: 150px;-->
<!--  width: 345px;-->

<!--}-->
<!--.parentContainerTwo{-->
<!--  position: absolute;-->
<!--  background-color: #5f9027c4;-->
<!--  padding: 0;margin: 0;-->
<!--  height: 150px;-->
<!--  width: 100%!important;-->
<!--   -webkit-transition: all 0.3s linear;-->
<!--  -moz-transition: all 0.3s linear;-->
<!--  -o-transition: all 0.3s linear;-->
<!--  -ms-transition: all 0.3s linear;-->
<!--  transition: all 0.3s linear;-->
<!--}-->
<!--.parentContainerTwo:hover{-->
<!--  position: absolute;-->
<!--  background-color: transparent;-->
<!--  padding: 0;margin: 0;-->
<!--  height: 150px;-->
<!--  width: 345px;-->

<!--}-->
<!--.parentContainerThree{-->
<!--  position: absolute;-->
<!--  background-color: #fcdb34c9;-->
<!--  padding: 0;margin: 0;-->
<!--  height: 150px;-->
<!--  width: 100%!important;-->
<!--   -webkit-transition: all 0.3s linear;-->
<!--  -moz-transition: all 0.3s linear;-->
<!--  -o-transition: all 0.3s linear;-->
<!--  -ms-transition: all 0.3s linear;-->
<!--  transition: all 0.3s linear;-->
<!--}-->
<!--.parentContainerThree:hover{-->
<!--  position: absolute;-->
<!--  background-color: transparent;-->
<!--  padding: 0;margin: 0;-->
<!--  height: 150px;-->
<!--  width: 345px;-->

<!--}-->


<!--</style>-->


<!--</br></br></br></br></br></br>-->

<!--<div class="row">-->
<!--  <div class="col-md-3 parentDid" style="min-height: 150px;padding: 0">-->
<!--    <div style="position: absolute;background-color: #521d6d">-->
<!--        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/caption-image1.jpg" style="" class="img-responsive">    -->
<!--    </div>-->
<!--<div class="parentContainer" style="">-->
<!--      <div class="iconDiv" style="text-align: center;">-->
<!--          <i class="fa fa-rocket" style="color: #ffffff;position: relative;font-size: 35px;margin-bottom: 5px;margin-top: 25px;"></i>-->
<!--      </div>-->
<!--      <div class="iconDiv" style="text-align: center;">-->
<!--         <h3 style="font-family: Roboto Slab, sans-serif;font-size: 16px;color: #ffffff;font-weight: bold;position: relative;font-weight: 600;text-transform: uppercase;margin-bottom: 5px;">EXPLORE OUR FACILITIES</h3>-->
<!--      </div>-->
<!--      <div class="iconDiv" style="text-align: center;">-->
<!--         <h3 style="font-family: Roboto Slab, sans-serif;font-size: 16px;color: #ffffff;font-weight: bold;position: relative;font-weight: 600;text-transform: uppercase;margin-bottom: 5px;">-->
<!--           <div style="border:1px solid white;margin-right: 138px;margin-left: 138px;"></div>-->
<!--         </h3>-->
<!--      </div>-->
<!-- </div>-->
<!--</div>-->

<!--<div class="col-md-3 parentDid" style="min-height: 150px;padding: 0">-->
<!--    <div style="position: absolute;background-color: #521d6d">-->
<!--        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/caption-image2.jpg" style="" class="img-responsive">    -->
<!--    </div>-->
<!--<div class="parentContainerOne" style="">-->
<!--      <div class="iconDiv" style="text-align: center;">-->
<!--          <i class="fa fa-camera" style="color: #ffffff;position: relative;font-size: 35px;margin-bottom: 5px;margin-top: 25px;"></i>-->
<!--      </div>-->
<!--      <div class="iconDiv" style="text-align: center;">-->
<!--         <h3 style="font-family: Roboto Slab, sans-serif;font-size: 16px;color: #ffffff;font-weight: bold;position: relative;font-weight: 600;text-transform: uppercase;margin-bottom: 5px;">EXPLORE OUR FACILITIES</h3>-->
<!--      </div>-->
<!--      <div class="iconDiv" style="text-align: center;">-->
<!--         <h3 style="font-family: Roboto Slab, sans-serif;font-size: 16px;color: #ffffff;font-weight: bold;position: relative;font-weight: 600;text-transform: uppercase;margin-bottom: 5px;">-->
<!--           <div style="border:1px solid white;margin-right: 138px;margin-left: 138px;"></div>-->
<!--         </h3>-->
<!--      </div>-->
<!-- </div>-->
<!--</div>-->
<!--<div class="col-md-3 parentDid" style="min-height: 150px;padding: 0">-->
<!--    <div style="position: absolute;background-color: #521d6d">-->
<!--        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/caption-image3.jpg" style="" class="img-responsive">    -->
<!--    </div>-->
<!--<div class="parentContainerTwo" style="">-->
<!--      <div class="iconDiv" style="text-align: center;">-->
<!--          <i class="fa fa-map-marker-alt" style="color: #ffffff;position: relative;font-size: 35px;margin-bottom: 5px;margin-top: 25px;"></i>-->
<!--      </div>-->
<!--      <div class="iconDiv" style="text-align: center;">-->
<!--         <h3 style="font-family: Roboto Slab, sans-serif;font-size: 16px;color: #ffffff;font-weight: bold;position: relative;font-weight: 600;text-transform: uppercase;margin-bottom: 5px;">EXPLORE OUR FACILITIES</h3>-->
<!--      </div>-->
<!--      <div class="iconDiv" style="text-align: center;">-->
<!--         <h3 style="font-family: Roboto Slab, sans-serif;font-size: 16px;color: #ffffff;font-weight: bold;position: relative;font-weight: 600;text-transform: uppercase;margin-bottom: 5px;">-->
<!--           <div style="border:1px solid white;margin-right: 138px;margin-left: 138px;"></div>-->
<!--         </h3>-->
<!--      </div>-->
<!-- </div>-->
<!--</div>-->
<!--<div class="col-md-3 parentDid" style="min-height: 150px;padding: 0">-->
<!--    <div style="position: absolute;background-color: #521d6d">-->
<!--        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/caption-image1.jpg" style="" class="img-responsive">    -->
<!--    </div>-->
<!--<div class="parentContainerThree" style="">-->
<!--      <div class="iconDiv" style="text-align: center;">-->
<!--          <i class="fa fa-user" style="color: #ffffff;position: relative;font-size: 35px;margin-bottom: 5px;margin-top: 25px;"></i>-->
<!--      </div>-->
<!--      <div class="iconDiv" style="text-align: center;">-->
<!--         <h3 style="font-family: Roboto Slab, sans-serif;font-size: 16px;color: #ffffff;font-weight: bold;position: relative;font-weight: 600;text-transform: uppercase;margin-bottom: 5px;">EXPLORE OUR FACILITIES</h3>-->
<!--      </div>-->
<!--      <div class="iconDiv" style="text-align: center;">-->
<!--         <h3 style="font-family: Roboto Slab, sans-serif;font-size: 16px;color: #ffffff;font-weight: bold;position: relative;font-weight: 600;text-transform: uppercase;margin-bottom: 5px;">-->
<!--           <div style="border:1px solid white;margin-right: 138px;margin-left: 138px;"></div>-->
<!--         </h3>-->
<!--      </div>-->
<!-- </div>-->
<!--</div>-->
 
  
<!--</div>-->





