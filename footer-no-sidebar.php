<!-- footer start -->
   
<section id="footer-section">
            <?php get_template_part( "components/custom", $name = "footer" ) ?>
        </section>

        <!-- End Footer -->
        <a id="back-to-top" href="#" class="btn btn-info btn-lg back-to-top" role="button" title="Go to top" data-toggle="tooltip" data-placement="left"><i class="fa fa-chevron-up"></i></a>
        <?php wp_footer(); ?>
      <!-- jQuery library -->
     <script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <!-- <script>!window.jQuery && document.write(unescape('%3Cscript src="<?php echo bloginfo('template_directory'); ?>/assets/js/jquery-3.3.1.min.js"%3E%3C/script%3E'))</script> -->
       <!-- <script src="<?php echo bloginfo('template_directory'); ?>/assets/js/jquery-3.3.1.min.js"></script> -->

      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
       <!--<script src="<?php echo bloginfo('template_directory'); ?>/assets/bootstrap/bootstrap.min.js"></script> -->


        <!-- Latest compiled JavaScript -->
        <!-- <script src="<?php echo bloginfo('template_directory'); ?>/assets/js/slider/wowslider.js"></script>
        <script src="<?php echo bloginfo('template_directory'); ?>/assets/js/slider/script.js"></script>
        <script src="<?php echo bloginfo('template_directory'); ?>/assets/js/wow.min.js"></script>
        <script src="<?php echo bloginfo('template_directory'); ?>/assets/js/main.js"></script>
          <script src="<?php echo bloginfo('template_directory'); ?>/assets/lib/mujib-count/mujib.js" ></script>
         -->
         <script src="<?php echo bloginfo('template_directory'); ?>/assets/lib/magnific-popup/jquery.magnific-popup.js"></script>
       
         <script src="<?php echo bloginfo('template_directory'); ?>/assets/js/site.js"></script>
         <script src="<?php echo bloginfo('template_directory'); ?>/assets/Rtab/js/jquery.responsiveTabs.min.js"></script>
         
         <script src="<?php echo bloginfo('template_directory'); ?>/assets/menu/menu.js"></script>

        <?php if ( is_singular() ) wp_print_scripts( 'comment-reply' ); ?>
  <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-K8JFG42TBY"></script>
        <!-- footer amimation   -->
     <script>
        document.addEventListener('mousemove', parallax);

        function parallax(e) {
            this.querySelectorAll('.layer').forEach(layer => {
                const speed = layer.getAttribute('data-speed')

                const x = (window.innerWidth - e.pageX * speed) / 100;
                const y = (window.innerHeight - e.pageY * speed) / 100;
                layer.style.transform = `translateX(${x}px) translateY(${y}px)`
            })
        }
    </script>
    <!-- notice -->
     <script>       
            $(".NoticeTitles").hover(function(){
               $(".Noticedivider").css("background-color", "#b80924");
               $(".Noticedivider").css("width", "103PX");
               },function(){
                $(".Noticedivider").css("background-color", "#b1b1b1");
               $(".Noticedivider").css("width", "60PX");
            });
             $(".facultyTitle").hover(function () {
            $(".divider").css("background-color", "#b80924");
            $(".divider").css("width", "173PX");
        }, function () {
            $(".divider").css("background-color", "#b1b1b1");
            $(".divider").css("width", "60PX");
        });

            $(".seeMore").hover(function(){
               $(".semoreDivider").css("background-color", "#b80924");
               $(".semoreDivider").css("width", "59PX");
               $(".seeMore").css("curser", "pointer");

               },function(){
                $(".semoreDivider").css("background-color", "#b1b1b1");
               $(".semoreDivider").css("width", "10PX");
            });

            $(".profileTitleDiv").hover(function(){
               $(".Profiledivider").css("background-color", "#b80924");
               $(".Profiledivider").css("width", "259PX");
               },function(){
                $(".Profiledivider").css("background-color", "#b1b1b1");
               $(".Profiledivider").css("width", "60PX");
            });
    </script>

  <script>
    $(document).ready(function() {
        var slickopts = {
        slidesToShow: 2,
        slidesToScroll:2,
        autoplaySpeed: 2000,
        autoplay: true,
        dots: true,
        rows: 2, // Removes the linear order. Would expect card 5 to be on next row, not stacked in groups.
        
        responsive: [
          { breakpoint: 992,
            settings: {
              slidesToShow: 2
            }
          },
          { breakpoint: 768,
            settings: {
              slidesToShow: 2,
              rows: 1 // This doesn't appear to work in responsive (Mac/Chrome)
            }
          },
          { breakpoint: 576,
            settings: {
              slidesToShow: 1,
              rows: 2 // This doesn't appear to work in responsive (Mac/Chrome)
            }
          }]
      };
      $('.pipilika-carousel').slick(slickopts);
    });
   </script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-K8JFG42TBY');
    </script>
        


</body>

</html>

