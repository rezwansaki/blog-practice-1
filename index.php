<?php get_header(); ?>
            
    <?php get_template_part('slider'); ?>
            
            <div class="row">
                <div class="col-md-12 search">
                    <form method="GET" action="<?php esc_url(bloginfo('home')); ?>">
                        <input name="s" type="text" class="form-control" placeholder="Search">
                    </form>
                </div>
            </div>
            <div class="row content">
                <div class="col-md-8 left-content">
                    <!-- Post -->
                    
                    <?php get_template_part('post-loop'); ?>
                    
                    <!-- /Post -->
                    
                    <!-- Pagination -->
                    <div class="row">
                        <div class="col-md-12 pagination">
                            <?php if(function_exists('wp_paginate')) {
                                wp_paginate();
                            }
                            else {
                                twentytwelve_content_nav( 'nav-below' );
                            }
                            ?> 
                        </div>
                    </div>
                    <!-- /Pagination -->
                </div>
               
               <?php get_sidebar(); ?>
               
            </div>


<?php get_footer(); ?>