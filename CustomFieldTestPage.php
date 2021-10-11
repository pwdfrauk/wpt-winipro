<?php 
/*
Template Name: Coustom Field Template
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
    

    <div class="container">
    <h2><?php the_field('my_custom_filed'); ?></h2>
    <div><?php the_field('test_custom_filed_two'); ?></div>
    <div><?php the_field('test_custom_filed_three'); ?></div>
    <div><?php the_field('test_custom_filed_four'); ?></div>    
    </div>
    
    
    
    <?php $test= get_field('faculty_designation'); 
      print_r($test);
    ?>
    
     <?php
            $designation_args = array(
                      'posts_per_page'   => -1,
                      'offset'           => 0,
                    //   'cat'    => $faculty_designation,
                      'meta_query' => array(
                          array(
                              'key' => 'my_custom_filed',
                              'value' => 'One',
                            //   'type' => 'Text',
                           //   'compare' => '=='
                          )
                      ),
                    //   'orderby'          => 'date',//'meta_value_num',
                      //'meta_key'         => 'notice_priority',
                      //'order'            => 'DSC',
                      // 'post_type'        => '',
                    //   'post_status'      => 'publish',
                      'suppress_filters' => true
                );
            ?>
            
    
    <?php 
    $notice_posts = get_posts( $designation_args );
    print_r($notice_posts);
    ?>
  
  
  

  <?php 

$posts = get_posts(array(
	'posts_per_page'	=> -1,
	'post_type'			=> 'post'
));

if( $posts ): ?>
	
	<ul>
		
	<?php foreach( $posts as $post ): 
		
		setup_postdata( $post );
		
		?>
		<li>
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</li>
	
	<?php endforeach; ?>
	
	</ul>
	
	<?php wp_reset_postdata(); ?>

<?php endif; ?>
  
  
  
</section>
<?php get_footer("no-sidebar"); ?>