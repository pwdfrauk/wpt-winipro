<?php
    global $uni_pro;
    $theme_color = $uni_pro['opt-color-theme'];
    $is_child = $uni_pro['opt-switch-dept'];

?>


<style>


.child-site-top .logo-bar .container {
    padding: 0px;
}

#top-nav .navbar-inverse {
    background-color: <?php echo $theme_color; ?>;
   
}
    
.header-logo {
    border-right: none;
    max-height: 100px; 
    padding-right: 5px;
}
.header-logo img {
    min-height:70px;
    max-height: 80px;
    padding-right:5px;
    margin-right:0px
}
.header-logo-child img {
    min-height:70px;
    max-height: 80px;
    border-right: 3px solid #803f9a;
    padding-right:5px;
    margin-right:8px
}
.header-logo a{
    float: left;
    }

.header-logo .ius-name-header span{
    font-family: fantasy;
    color: #217246;
    font-size: 34px;
    font-size: 25px;
    font-weight: bold;
    
    font-family: 'Roboto Slab';
    color: #246b07;
    font-weight: bold;
    font-size: 34px;
    font-size: 26px;
    font-weight: bold;
}

.header-btn-style {
    height: auto;
    text-transform: uppercase;
    font-size: 12px;
    letter-spacing: 1px;
    transition: all .3s ease;
    color: #fff;
    margin-left: 10px;
    margin-top: 5px;
    margin-bottom: 8px;
}

.header-btn-style:focus,
.header-btn-style:hover {
    transform: translate(0, -4px);
    color: #fff;
    background-color: #fd1361;
    border-color: #fc0758;
    text-decoration: none;
    box-shadow: 0 6px 16px 0 rgba(253, 57, 122, .25) !important;
}

.btn-applyOnline    {
  background-color: #d7654a;
border-color: #d7654a;
}

.main {
    /*width: 50%;*/
    /*margin: 50px auto;*/
}

/* Bootstrap 3 text input with search icon */

.has-search .form-control-feedback {
    right: initial;
    left: 0;
    color: #ccc;
}

.has-search .form-control {
    padding-right: 12px;
    padding-left: 34px;
}

/*search end*/

 .header-institute-name{
        color: #991414;
        font-size: 18px;
        font-weight: bold;
        font-style: italic;
    }
                        
.header-program-name{
    font-family: arial;
    color: #217246;
    font-size: 23px;
    font-weight: bold;
    font-style: normal;
}



@media (max-width: 600px){
    .header-logo {
        width: 100% ;   
    }
    .header-logo img{
        vertical-align: top;
        display: inline-block;
        min-height: 60px;
        max-height: 70px;
    }
    .header-logo{
        margin-bottom: 5px;
        padding-right: 15px;
    }
    .header-logo a{
        float: none;
    }
    .header-logo .ius-name-header span{
        font-size: 20px !important;
    }
    .header-btn-style{
        font-size: 10px;
    }
    .search-input-group input {
        font-size: 11px;
    }
     .header-logo-child img{
         max-height: 70px;
     }
     
     .ius-name-header{
        display: inline-block;
    }
     .header-institute-name{
        font-size: 10px;
    }
    .header-program-name{
        font-size: 17px;
    }

}

@media (max-width: 390px){
    
    .header-logo .ius-name-header span {
        font-size: 17px !important;
    }
}

<?php if($is_child): ?>
 @media (max-width: 600px){
.ius-name-header {
    display: grid;
    }
    .nav:before
    {
        display: inline;
    }
    }
 <?php  endif; ?>

</style>
       <?php
                global $uni_pro;
                $logo = $uni_pro['media-logo']['url'];
                

                $siteTitle=     get_bloginfo();          
                $array = preg_split('/[\s,]+/', $siteTitle, 3);
                $part1="";
                if(count($array)>=2)
                {
                    $part1= $array[0].' '.$array[1];
                    $siteTitle= str_replace($array[0]," ", $siteTitle);
                    $siteTitle= str_replace($array[1]," ", $siteTitle);
                }
  

                //$part2 = preg_split('/[\s,]+/', $siteTitle, 3)

       ?>

<div class="row ">
     <!-- 
         -->
        <?php if($is_child): ?>
                <div class="col-md-7 header-logo-child media-text-center" title="<?php bloginfo( 'name' ); ?>">
                <a style="float:left" href="https://bauet.ac.bd/" title="<?php bloginfo( 'description' ); ?>"> 
                    <img class="img-responsive" src="<?php echo $logo; ?>" alt="<?php bloginfo( 'name' ); ?>" > 
                    </a>
                    <div class="ius-name-header">
                        <span class="header-institute-name"><?php bloginfo( 'description' ); ?>
                            <!--?php echo $part1;?-->
                        <br>
                        <span class="header-program-name">
                            <?php bloginfo( 'name' ); ?>
                        <!--?php echo $siteTitle;?--></span>
                        </span>
                    </div> 
                   
                </div>
                <?php else:?>
                                <div class="row header-area">
                                    <div class="col-md-1 p-r-0">
                                         <a  href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo( 'name' ); ?>"> 
                                         <img class="img-responsive logo" src="<?php echo $logo; ?>" alt="<?php bloginfo( 'name' ); ?>" >
                                          </a>
                                    </div>
                                    <div class="col-md-11 p-l-0 header-title">
                                        <div class="col-md-12">
                                            <h2><?php echo get_bloginfo( 'name' ); ?></h2>
                                            <p>UGC and Goverment Approved</p>
                                        </div>

                                    </div>
                                </div>
                    
        <?php  endif; ?>
            
                </div>


