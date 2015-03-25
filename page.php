<?php get_header(); ?>
            
    <?php get_template_part('slider'); ?>
            
            <div class="row">
                <div class="col-md-12 search">
                    <input type="text" value="Seach ...">                    
                </div>
            </div>
            <div class="row content">
                <div class="col-md-8 left-content">
                    <!-- Post -->
                
                    
                    
                    <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
                    <div class="row post-title"><?php the_title(); ?></div>
                    <div class="col-md-10 post-content"><?php the_content(); ?>
                        <?php comments_template('', true); ?></div>
                        
                        
                    <?php endwhile; ?>

                    <?php else : ?>
                    <h3><?php _e('404 Error&58; Not Found'); ?></h3>
                    <?php endif; ?>


                    
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