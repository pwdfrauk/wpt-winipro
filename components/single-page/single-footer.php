<div class="share-section">
        <!-- <h3 class="share-title">Share this:</h3> -->
        <div class="share-icon-section">
            <div class="row">
                <div class="col-md-6 ">
                    <ul>
                        <li>
                            <a rel="" class="share-button"
                                href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>"
                                onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"
                                title="Click to share on Facebook">
                                <i class="fa fa-facebook"></i>
                                <span>Facebook</span>
                            </a>
                        </li>
        
                        <li>
                            <a rel="" class="share-button"
                                href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>&source=<?php bloginfo('name'); ?>"
                                onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"
                                title="Click to share on LinkedIn">
                                <i class="fa fa-linkedin"></i>
                                <span>LinkedIn</span>
                            </a>
                        </li>
        
                        <li>
                            <a rel="" class="share-button"
                                href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>/&text=<?php the_title(); ?> - <?php bloginfo('name'); ?>"
                                onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"
                                title="Click to share on Twitter">
                                <i class="fa fa-twitter"></i>
                                <span>Twitter</span>
                            </a>
                        </li>
        
                        <!-- <li>
                            <a rel="" class="share-button" href="#" target=""
                                title="Click to share on Pinterest">
                                <i class="fa fa-pinterest-p"></i>
                                <span>Pinterest</span>
                                <span class="share-count">1</span>
                            </a>
                        </li> -->
                    </ul>

                </div>
                <div class="col-md-6 " style="text-align: right;">
                    <div style="padding-top: 10px;">
                        <span style="color: #1c1f22; font-size: 12px;">
                            <i class="fa fa-calendar media-font12"></i>
                            Updated On:
                        <time class="entry-date ">
                            <?php the_modified_date('F d, Y'); ?>
                        </time>
                        </span>
                    </div>
                    
                </div>

            </div>


            
            
        </div>
    </div>
    <style>
        .share-icon-section ul {
            margin: 0px !important;
        }
    </style>