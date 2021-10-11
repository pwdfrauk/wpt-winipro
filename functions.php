<?php
    /**
    * UniPro functions and definitions
    *
    * @package UniPro
    */
    
    /******************************************************************************
     * Enable Require TGM-Plugin-Activation
     *****************************************************************************/
    //To Do::login not working. pls check this plugin
    //require_once ('inc/protection.php');
    /******************************************************************************
     * Remove Meta Information
     *****************************************************************************/
     remove_action('wp_head', 'feed_links', 2);
     remove_action('wp_head', 'feed_links_extra', 3);
     remove_action('wp_head', 'rsd_link');
     remove_action('wp_head', 'wlwmanifest_link');
     remove_action('wp_head', 'index_rel_link');
     remove_action('wp_head', 'start_post_rel_link', 10, 0);
     remove_action('wp_head', 'parent_post_rel_link', 10, 0);
     remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);
     /* Remove content generator meta tag from page source */
     remove_action('wp_head', 'wp_generator');
     remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
    function remove_wp_version_tag() {
        return "2.0.1";
    }
    add_filter( 'the_generator', 'remove_wp_version_tag' );    function remove_wp_version_strings( $src ) {
        global $wp_version;
            parse_str(parse_url($src, PHP_URL_QUERY), $query);
        if ( !empty($query['ver']) && $query['ver'] === $wp_version ) {
            $src = remove_query_arg('ver', $src);
        }
        return $src;
    }
    add_filter( 'script_loader_src', 'remove_wp_version_strings' );
    add_filter( 'style_loader_src', 'remove_wp_version_strings' );

        /* Remove WordPress logo and menu from admin bar */
    function wp_debranding_remove_wp_logo() {
        global $wp_admin_bar;
        $wp_admin_bar->remove_menu('wp-logo');
    }
    add_action( 'wp_before_admin_bar_render', 'wp_debranding_remove_wp_logo');
    
    /* Remove WordPress name from adming interface footer */
    function change_admin_footer_text() {
        return 'Powered by <a href="https://pipilikasoft.com/" target="_blank" title="Pipilika Soft">Pipilika Soft</a>';
    }
    add_filter('admin_footer_text', 'change_admin_footer_text');
    
    /* Change WordPress login page logo image */
    function wp_debranding_change_login_page_logo() {
?>
        <style type="text/css">
            #login { padding: 0; }
            .login h1 a{
                /*background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/logo.png');*/
                background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/BAUET-Logo-250x244.png'); 
                background-size: 90px;
                margin: 0 auto;
                   height: 87px;
                    width: 90px;
                    margin-top: 29px;
            }
            .login form { margin-top: 10px; padding: 10px 18px 15px; }
            #loginform div.g-recaptcha {  margin: 0 0 15px -8px !important; }
            .login #nav { margin: 10px 0 0; }
            .login #nav a { color: #F00; }
            #backtoblog { margin: 10px 0 0; text-align: center; }
        </style>
<?php
    }
    add_action('login_head', 'wp_debranding_change_login_page_logo');
    /******************************************************************************
     * Enable Require TGM-Plugin-Activation
     *****************************************************************************/
    require_once ('inc/class-tgm-plugin-activation.php');
    require_once ('inc/plugin-config.php');
    
    /******************************************************************************
     * Enable Redux Core Theme Option Framework
     *****************************************************************************/
    require_once ('inc/ReduxCore/framework.php');
    require_once ('inc/theme-config.php');
    /******************************************************************************
     * Hide Anonymous Login Try
     *****************************************************************************/
    /*function themepacific_login_errors(){
        return 'Nice Try!! Go Away!!';
    }
    add_filter( 'login_errors', 'themepacific_login_errors' );*/
    /******************************************************************************
     * Remove blank/useless br and p tags
     *****************************************************************************/
    function my_formatter($content) {
        // echo "<h1>Pavel</h1>";
         $new_content = '';
         $pattern_full = '{(\[raw\].*?\[/raw\])}is';
         $pattern_contents = '{\[raw\](.*?)\[/raw\]}is';
         $pieces = preg_split($pattern_full, $content, -1, PREG_SPLIT_DELIM_CAPTURE);
  
         foreach ($pieces as $piece) {
             if (preg_match($pattern_contents, $piece, $matches)) {
                 $new_content .= $matches[1];
             } else {
                 $new_content .= wptexturize(wpautop($piece));
             }
         }
  
         return $new_content;
     }
     remove_filter('the_content', 'wpautop');
     remove_filter( 'the_excerpt', 'wpautop' );
     remove_filter('the_content', 'wptexturize');
     add_filter('the_content', 'my_formatter', 99);
     function remove_empty_p( $content ) {
         $content = force_balance_tags( $content );
         $content = preg_replace( '#<p>\s*+(<br\s*/*>)?\s*</p>#i', '', $content );
         $content = preg_replace( '~\s?<p>(\s|&nbsp;)+</p>\s?~', '', $content );
         //$content = preg_replace( '<br>', ' ', $content );
         //$content = preg_replace( '\\r\\n', ' ', $content );
         //$content = preg_replace( '\\n', ' ', $content );
         //$content = preg_replace( '\\r', ' ', $content );
         return $content;
     }
     add_filter('the_content', 'remove_empty_p', 20, 1);
     //for tinymac not working
     function tinymce_remove_root_block_tag( $init ) {
              //echo "<h1>Pavel</h1>";
     $init['forced_root_block'] = false;
 
     return $init;
     }
     add_filter( 'tiny_mce_before_init', 'tinymce_remove_root_block_tag' );
    /****************************************************************************/
    /******************************************************************************
     * Adding Custom Short Codes Start
     *****************************************************************************/    
    // function homeURL() {
    //     return "localhost/wp";//'mist.ac.bd';
    // }
    // add_shortcode('home', 'homeURL');
     function template_url( $atts ){
        echo bloginfo('template_url');
    }
    add_shortcode( 'template_url', 'template_url' );

    //Custom Shortcode start
    //adding edit url on top of page content
    //making short code https://developer.wordpress.org/reference/functions/add_shortcode/
    //get edit link for post
    function getEditUrl($postId)
    {
              $IsLoggedIn=is_user_logged_in();
              if($IsLoggedIn)
              { return '<div class="edit-link text-center"><a href="'.get_edit_post_link($postId) .'" target="_blank" title="Click to Edit (Page ID: '.$postId.')"><span class="fa fa-1x fa-edit"></span> Edit('.$postId.')</a></div>'; }
    }
    //useges [editUrl id="12"]
    function editUrl_ShortCode( $atts ) {
        return getEditUrl($atts['id']);
    }
    add_shortcode( 'editUrl', 'editUrl_ShortCode' );
   
    //https://wordpress.stackexchange.com/questions/9667/get-wordpress-post-content-by-post-id
    //return post content after applying all filters
    function getContentById($my_postid) {
        //$content_post = get_post($my_postid);//get_page($my_postid)
        //$content = $content_post->post_content;
        $content=get_post_field('post_content', $my_postid);
        $content=do_shortcode(remove_empty_p($content), $ignore_html = false );
        //$content=apply_filters('the_content', get_post_field('post_content', $my_postid));
        
        //adding edit url on top of page content
         $content=getEditUrl($my_postid).remove_empty_p($content);
        return  $content;
    }
    //useges [editUrl id="12"]
    function postContent_ShortCode( $atts ) {
        return  getContentById($atts['id']);
    }
    add_shortcode( 'page-content', 'postContent_ShortCode' );
    //Custom Shortcode end    
/******************************************************************************
     * Adding Custom Short Codes Ends
*****************************************************************************/  
/******************************************************************************
     * Filter Start
*****************************************************************************/ 
    /**
     * Disable responsive image support (test!)
     */
    // Clean the up the image from wp_get_attachment_image()
    add_filter( 'wp_get_attachment_image_attributes', function( $attr )
    {
        if( isset( $attr['sizes'] ) )
            unset( $attr['sizes'] );
        if( isset( $attr['srcset'] ) )
            unset( $attr['srcset'] );
        return $attr;
     }, PHP_INT_MAX );

    // Override the calculated image sizes
    add_filter( 'wp_calculate_image_sizes', '__return_false',  PHP_INT_MAX );

    // Override the calculated image sources
    add_filter( 'wp_calculate_image_srcset', '__return_false', PHP_INT_MAX );

    // Remove the reponsive stuff from the content
    remove_filter( 'the_content', 'wp_make_content_images_responsive' );

    // Tidy up the <head> a little. Full reference of things you can show/remove is here: http://rjpargeter.com/2009/09/removing-wordpress-wp_head-elements/
    remove_action('wp_head', 'wp_generator');// Removes the WordPress version as a layer of simple security 
            
    add_theme_support('post-thumbnails');
    // add_image_size( 'post-thumbnails-128', 128, 128, true );
    // add_image_size( 'post-thumbnails-200', 200, 200, true );

/******************************************************************************
     * Filter Ends
*****************************************************************************/ 
//////////Filter



        /*** Register our sidebars and widgetized areas.***/
        function arphabet_widgets_init() {

            register_sidebar( array(
                'name'          => 'Footer sidebar',
                'id'            => 'footer_1',
                'before_widget' => '<div id="blog_subscription-2">',
                'after_widget'  => '</div>',
                'before_title'  => '<h3>',
                'after_title'   => '</h3>',
            ) );

        }
        add_action( 'widgets_init', 'arphabet_widgets_init' );
    
        add_post_type_support('page', 'excerpt');
    
//***** Function People(Employee), Message Custom post start *****
        add_action('init', 'create_posttype');
        function create_posttype() 
        {
            /*register_post_type( 'mist_faculty',
                array(
                    'labels' => array(
                        'name' => __( 'All Faculty' ),
                        'singular_name' => __( 'Faculty' )
                        ),
        
                    'public' => true,
                    'has_archive' => true,
                    'rewrite' => array('slug' => 'faculties'),
                    'supports' => array('title','editor','thumbnail','excerpt'),
                    'menu_icon' => 'dashicons-businessman'
                    )
                );*/
            register_post_type( 'mist_employee',
            
            //https://wordpress.org/support/topic/how-to-show-custom-taxonomy-categories-and-tags-in-custom-post-type/
                array(
                    'labels' => array(
                        'name' => __( 'Peoples' ),
                        'singular_name' => __( 'Peoples' )
                        ),
        
                    'public' => true,
                    'has_archive' => true,
                    'rewrite' => array('slug' => 'employees'),
                    'supports' => array('title','editor','thumbnail','excerpt', 'page-attributes'),
                    'hierarchical'        => true,
                    'menu_icon' => 'dashicons-businessman'
                    )
                );
                
            register_post_type( 'mist_message',
                array(
                    'labels' => array(
                        'name' => __( 'Person Messages' ),
                        'singular_name' => __( 'Message' ),
                        ),
        
                    'public' => true,
                    'has_archive' => true,
                    'rewrite' => array('slug' => 'message'),
                    'supports' => array('title','editor','thumbnail','excerpt','page-attributes'),
                    'hierarchical'        => true,
                    'menu_icon' => 'dashicons-testimonial',
                   

                    )
                );
            add_post_type_support('mist_message', 'excerpt');
    
        }
/* Filter Category for People (mist_employee) start*/
/* ----------------------------------------------------- */
add_action('init', 'register_People_filters');
function register_People_filters()
{
    $labels = array(
        'name' => __('Filters', 'webdgallery'),
        'singular_name' => __('Filter', 'webdgallery'),
        'search_items' => __('Search Filters', 'webdgallery'),
        'popular_items' => __('Popular Filters', 'webdgallery'),
        'all_items' => __('All Filters', 'webdgallery'),
        'parent_item' => __('Parent Filter', 'webdgallery'),
        'parent_item_colon' => __('Parent Filter:', 'webdgallery'),
        'edit_item' => __('Edit Filter', 'webdgallery'),
        'update_item' => __('Update Filter', 'webdgallery'),
        'add_new_item' => __('Add New Filter', 'webdgallery'),
        'new_item_name' => __('New Filter', 'webdgallery'),
        'separate_items_with_commas' => __('Separate Filters with commas', 'webdgallery'),
        'add_or_remove_items' => __('Add or remove Filters', 'webdgallery'),
        'choose_from_most_used' => __('Choose from the most used Filters', 'webdgallery'),
        'menu_name' => __('Filters', 'webdgallery')
    );
    $args   = array(
        'labels' => $labels,
        'public' => true,
        'show_in_nav_menus' => false,
        'show_ui' => true,
        'show_tagcloud' => false,
        'hierarchical' => true,
        
        'rewrite' => true,
        'query_var' => true
    );
    register_taxonomy('filters', array(
        'mist_employee'
    ), $args);
}
add_action( 'init', 'register_People_Research_Area_Tags', 0 );
function register_People_Research_Area_Tags()
{
    register_taxonomy(
       'research_area',
       //'mist_faculty',
       'mist_employee',
            array(
            'hierarchical' => false,
            'label' => 'Research Areas',
            'query_var' => true,
            'rewrite' => true,
            'labels' => array(
                'name' => __( 'Research Area' ),
                'singular_name' => __( 'Research Area' ),
                'add_new_item' => 'Add New Research Area',
                'new_item_name' =>'New Research Area'
            ),
        )
    );
}
/* Filter Category for People (mist_employee) end*/
//***** Function People(Employee), Message Custom post end *****
 // Register Slider Custom Post Type
function add_custome_post_home_slider() {

    $labels = array(
        'name'                => 'Slides',
        'singular_name'       => 'Slide',
        'menu_name'           => 'Home Slider',
        'name_admin_bar'      => 'Home Slider',
        'parent_item_colon'   => 'Parent Slide',
        'all_items'           => 'All Slides',
        'add_new_item'        => 'Add New Slide',
        'add_new'             => 'Add New',
        'new_item'            => 'New Slide',
        'edit_item'           => 'Edit Slide',
        'update_item'         => 'Update Slide',
        'view_item'           => 'View Slide',
        'search_items'        => 'Search Slide',
        'not_found'           => 'Slide Not found',
        'not_found_in_trash'  => 'Slide Not found in Trash',
    );
    $rewrite = array(
        'slug'                => 'sliders',
        'with_front'          => true,
        'pages'               => true,
        'feeds'               => false,
    );
    $capabilities = array(
        'edit_post'           => 'edit_slide',
        'read_post'           => 'read_slide',
        'delete_post'         => 'delete_slide',
        'edit_posts'          => 'edit_slides',
        'edit_others_posts'   => 'edit_others_slides',
        'publish_posts'       => 'publish_slides',
        'read_private_posts'  => 'read_private_slides',
    );
    $args = array(
        'label'               => 'home_slider',
        'description'         => 'Home Page Slider',
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'thumbnail', 'comments', 'revisions', 'page-attributes', ),
        'hierarchical'        => true,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_admin_bar'   => true,
        'show_in_nav_menus'   => true,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'rewrite'             => $rewrite,
        // 'capabilities'        => $capabilities,
        'menu_icon' => 'dashicons-images-alt2',
    );
    register_post_type( 'home_slider', $args );

}

// Hook into the 'init' action
add_action( 'init', 'add_custome_post_home_slider', 0 );

        function post_comments( $comment, $args, $depth ) {
            $GLOBALS['comment'] = $comment;
            switch ( $comment->comment_type ) :
            case '' :
                    ?>
                    <li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
                        <div id="comment-<?php comment_ID(); ?>">
                            <div class="comment-author vcard">
                                <?php echo get_avatar( $comment, 40 ); ?>

                                <p class="comment-meta">
                                    <?php printf( __( '%s' ), sprintf( '%s', get_comment_author_link() ) ); ?>

                                    <a class="comment-date" href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>">
                                        <?php printf( __( '%1$s' ), get_comment_date() ); ?>
                                    </a>

                                    <?php if ( $comment->comment_approved == '0' ) : ?>
                                    <em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.' ); ?></em>
                                    <?php endif; ?>
                                </p>
                            </div>

                            <div class="comment-body"><?php comment_text(); ?></div>

                            <div class="reply">
                                <?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
                            </div>
                        </div>

                        <?php
                            break;
                            case 'pingback'  :
                            case 'trackback' :
                        ?>

                    <li class="post pingback">
                        <p><?php _e( 'Pingback:' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __( '(Edit)' ), ' ' ); ?></p>
                        <?php
        
                            break;
                            endswitch;
        }
        
                // Custom functions 
          




 
                //==========================================================
                //generate breadcrumb
     function the_breadcrumb() {
                        echo '<ul id="crumbs">';
                if (!is_home()) {
                        echo '<li><a href="';
                        echo get_option('home');
                        echo '">';
                        echo 'Home';
                        echo "</a></li>";
                        if (is_category() || is_single()) {
                                echo '<li>';
                                the_category(' </li><li> ');
                                if (is_single()) {
                                        echo "</li><li>";
                                        the_title();
                                        echo '</li>';
                                }
                        } elseif (is_page()) {
                                echo '<li>';
                                echo the_title();
                                echo '</li>';
                        }
                }
                elseif (is_tag()) {single_tag_title();}
                elseif (is_day()) {echo"<li>Archive for "; the_time('F jS, Y'); echo'</li>';}
                elseif (is_month()) {echo"<li>Archive for "; the_time('F, Y'); echo'</li>';}
                elseif (is_year()) {echo"<li>Archive for "; the_time('Y'); echo'</li>';}
                elseif (is_author()) {echo"<li>Author Archive"; echo'</li>';}
                elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {echo "<li>Blog Archives"; echo'</li>';}
                elseif (is_search()) {echo"<li>Search Results"; echo'</li>';}
                echo '</ul>';
        }

    /******************************************************************************
     * Get post function Template
     *****************************************************************************/
       function string_limit_words($string, $word_limit)
        {
            $words = explode(' ', $string, ($word_limit + 1));
            if(count($words) > $word_limit)
                array_pop($words);
            $LimitedWords =implode(' ', $words);
            if (strlen($string) > strlen($LimitedWords)) {
                $LimitedWords = $LimitedWords."...";
            }
            return $LimitedWords;
        }
        function limitWordsByChar($string, $max_char_limit)
        {
        
            $substring = substr($string,0,$max_char_limit);
            $substring  = substr($string,0,strrpos($substring," "));
            if (strlen($string)>$max_char_limit) 
            {
                $substring = $substring . " ...";
            }else{
                $substring = $string;
            }
            return $substring ;
            //$last_space_position = ;
        } 
        function getWords1($text, $limit)
        {
            $array = explode(" ", $text, $limit+1);
    
            if (count($array) > $limit)
            {
                unset($array[$limit]);
            }
            return implode(" ", $array);
        }
        function getWords($text, $limit)
        {
            $words = explode(" ",strip_tags($text));
            return implode(" ",array_splice($words,0,$limit));
        }
        function getTrimHtml($text, $startIndex, $endIndex)
        {
            $start="";
            $end="";
            if(strlen($text)>($endIndex-$startIndex))
            {
                $end=" ...";
            }
            if($startIndex!=0)
            {
                $start=" ...";
            }
            $subTrimContent=substr(strip_tags($text),$startIndex,$endIndex);
            $trimContent=$start.$subTrimContent.$end;
            return $trimContent;
        }
    /******************************************************************************
     * Buid-in page navigation
     *****************************************************************************/
    function page_navi() {
	    global $wpdb, $wp_query;
	    $posts_per_page = intval(get_query_var('posts_per_page'));
	    $paged = intval(get_query_var('paged'));
	    $numposts = $wp_query->found_posts;
	    $max_page = intval($wp_query->max_num_pages);

	    if (empty($paged) || $paged == 0)
		    $paged = 1;

	    $pages_to_show = 5;
	    $pages_to_show_minus_1 = $pages_to_show - 1;
	    $half_page_start = floor($pages_to_show_minus_1/2);
	    $half_page_end = ceil($pages_to_show_minus_1/2);
	    $start_page = $paged - $half_page_start;

	    if ($start_page <= 0)
		    $start_page = 1;

	    $end_page = $paged + $half_page_end;
	    if (($end_page - $start_page) != $pages_to_show_minus_1) {
		    $end_page = $start_page + $pages_to_show_minus_1;
	    }

	    if ($end_page > $max_page) {
		    $start_page = $max_page - $pages_to_show_minus_1;
		    $end_page = $max_page;
	    }

	    if ($start_page <= 0)
		    $start_page = 1;

    if($max_page > 1) :
    echo '<div class="page-navigation">';
    //one step back
    if($paged>1) { 
    echo '<a class="first" href="'.get_pagenum_link($paged-1).'" title="link to '.get_pagenum_link($paged-1).'"><small>&lt;</small> back</a> '; }

    //jump to first page
    if($start_page!=1) :
    if($paged==1) { //echo '<span class="first">1 &laquo;</span>'; 
    } else { 
    echo '<a class="first" href="'.get_pagenum_link(1).'" title="link to '.get_pagenum_link(1).'">1 &laquo;</a> '; }
    endif;

    //centimal steps 100 steps back
    if($paged>110)  :
    echo '<a '; echo 'href="'.get_pagenum_link($paged-100).'" title="link to '.get_pagenum_link($paged-100).'">-100</a> '; 
    endif;

    //decimal steps 10 steps back
    if($paged>11)  :
    echo '<a '; echo 'href="'.get_pagenum_link($paged-10).'" title="link to '.get_pagenum_link($paged-10).'">-10</a> '; 
    endif;

    //from-to
    for($i=$start_page;$i<=$end_page;$i++) :
    if($i==$paged) { echo '<span class="current">'.$i.'</span>'; 
    } else { 
    echo '<a '; echo 'href="'.get_pagenum_link($i).'" title="link to '.get_pagenum_link($i).'">'.$i.'</a>'; }
    endfor;

    //decimal steps 10 steps forward
    if($paged<=$max_page-11) :
    echo ' <a '; echo 'href="'.get_pagenum_link($paged+10).'" title="link to '.get_pagenum_link($paged+10).'">+10</a>'; 
    endif;

    //centimal steps 100 steps forward
    if($paged<=$max_page-110) :
    echo ' <a '; echo 'href="'.get_pagenum_link($paged+100).'" title="link to '.get_pagenum_link($paged+100).'">+100</a>'; 
    endif;

    //jump to last page
    if($max_page>$end_page) :
    if($paged==$max_page) { //echo '<span class="last">&raquo; '.$max_page.'</span>'; 
    } else { 
    echo ' <a class="last" href="'.get_pagenum_link($max_page).'" title="link to '.get_pagenum_link($max_page).'">&raquo; '.$max_page.'</a>'; }
    endif;

    //one step forward
    if($paged<$max_page) {
    echo ' <a class="first" href="'.get_pagenum_link($paged+1).'" title="link to '.get_pagenum_link($paged+1).'">next <small>&gt;</small></a> '; }

    echo '</div>';
    endif;
    }
    // end of page_navi() function

//   ================= Start Pagination =====================

function wpbeginner_numeric_posts_nav() {
 
    if( is_singular() )
        return;
 
    global $wp_query;
 
    /** Stop execution if there's only 1 page */
    if( $wp_query->max_num_pages <= 1 )
        return;
 
    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
    $max   = intval( $wp_query->max_num_pages );
 
    /** Add current page to the array */
    if ( $paged >= 1 )
        $links[] = $paged;
 
    /** Add the pages around the current page to the array */
    if ( $paged >= 3 ) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }
 
    if ( ( $paged + 2 ) <= $max ) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }
 
    echo '<div class="pagination-box"><ul class="pagination">' . "\n";
 
    /** Previous Post Link */
    if ( get_previous_posts_link() )
        printf( '<li>%s</li>' . "\n", get_previous_posts_link() );
 
    /** Link to first page, plus ellipses if necessary */
    if ( ! in_array( 1, $links ) ) {
        $class = 1 == $paged ? ' class="active"' : '';
 
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );
 
        if ( ! in_array( 2, $links ) )
            echo '<li></li>';
    }
 
    /** Link to current page, plus 2 pages in either direction if necessary */
    sort( $links );
    foreach ( (array) $links as $link ) {
        $class = $paged == $link ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
    }
 
    /** Link to last page, plus ellipses if necessary */
    if ( ! in_array( $max, $links ) ) {
        if ( ! in_array( $max - 1, $links ) )
            echo '<li></li>' . "\n";
 
        $class = $paged == $max ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
    }
 
    /** Next Post Link */
    if ( get_next_posts_link() )
        printf( '<li>%s</li>' . "\n", get_next_posts_link() );
 
    echo '</ul></div>' . "\n";
 
}
//   ================= End Pagination =====================

// ======Start Search page show result at par page======
function change_wp_search_size($query) {
    if ( $query->is_search ) // Make sure it is a search page
        $query->query_vars['posts_per_page'] = 25; // Change 10 to the number of posts you would like to show

    return $query; // Return our modified query variables
}
add_filter('pre_get_posts', 'change_wp_search_size'); // Hook our custom function onto the request filter
// ======End Search page show result at par page======


    //================= Start responsive multi level menu======
  
       require_once('inc/wp-navwalker.php');
            function register_my_menu1() {
            register_nav_menu('my-menu',__( 'My Menu' ));
        }
        add_action( 'init', 'register_my_menu1' );
    //================= End responsive multi level menu======


    ?>