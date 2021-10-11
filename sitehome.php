<?php 
    global $uni_pro;
    $is_child = $uni_pro['opt-switch-dept'];
 ?>
<!-- Start desktop home -->
<!-- ========= slider section start =========  background-image: url(<?php echo bloginfo('template_directory'); ?>/assets/images/bg.jpg); background-size: cover;-->
<div
    style="padding-top: 0px; ">

<?php  
            // if($is_child==true): get_template_part( "components/home-slider-child-site" );
            // else: get_template_part( "components/home-slider-main-site" );
            // endif;

            get_template_part( "components/home-slider-main-site" );
?>
    <!-- ========= slider section end ========= -->
    <!-- Start Html Section 1 -->
    <?php 
$pageIdHtmlSec_1 = $uni_pro['pageHtmlSec-1'];
$isShowHtmlSec_1 = $uni_pro['btnHtmlSec-1'];
//$Sec3Page = get_page($Sec3PageId); 
?>
    <?php if($isShowHtmlSec_1== 1): ?>
    <?php  echo getContentById($pageIdHtmlSec_1); ?>
    <?php endif; ?>
    <!-- End Html Section 1 -->
</div>

<!-- =========  message section start  ============== -->
<?php  get_template_part( "components/message-box" );?>
<!-- <?php if(!$is_child): ?>
        <?php else:?><br /><br />
        <?php  endif; ?> -->
<!-- =========  message section END  ============== -->


<!-- ---- news & event start---- -->
<?php get_template_part( "components/home-list/news-event", $name = "list" ) ?>
<!-- ---- news & event end---- -->


<!-- ====== People start =====  -->
<!--?php get_template_part( "components/home-list/raw" ) ?>
<!-- ====== People end =====  -->

<!-- ---- facility start---- -->
<?php get_template_part("components/home-list/facility-list") ?>
<!-- ---- facility end---- -->

<!-- Start Html Section 2 -->
<?php 
$pageIdHtmlSec_2 = $uni_pro['pageHtmlSec-2'];
$isShowHtmlSec_2 = $uni_pro['btnHtmlSec-2'];
//$Sec3Page = get_page($Sec3PageId); 
?>
<?php if($isShowHtmlSec_2== 1): ?>
<?php  echo getContentById($pageIdHtmlSec_2); ?>
<?php endif; ?>
<!-- End Html Section 2 -->

<!-- ====== People start =====  -->
<!--?php get_template_part( "components/home", $name = "employees" ) ?-->
<!-- ====== People end =====  -->

<!-- ====== research-list start =====  -->
<?php  
            if(!$is_child): get_template_part( "components/home-list/research-list" );
            // else: get_template_part( "components/home-list/research-list" );
            endif;
?>
<!-- ====== research-list end =====  -->

<!-- Start Html Section 3 -->
<?php 
$pageIdHtmlSec_3 = $uni_pro['pageHtmlSec-3'];
$isShowHtmlSec_3 = $uni_pro['btnHtmlSec-3'];
?>
<?php if($isShowHtmlSec_3== 1): ?>
<?php  echo getContentById($pageIdHtmlSec_3); ?>
<?php endif; ?>
<!-- End Html Section 3 -->


<!-- End desktop home -->
<!-- Page Content -->