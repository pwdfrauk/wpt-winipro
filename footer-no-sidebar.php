<!-- footer start -->

<section id="footer-section">
            <div class="section-distance">
            <?php get_template_part( "components/custom", $name = "footer" ) ?>
               

            </div>
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
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-K8JFG42TBY');
    </script>
        


</body>

</html>

