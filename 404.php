<?php get_header(); ?>
            
    <?php get_template_part('slider'); ?>
            
            <div class="row">
                <div class="col-md-12 search">
                    <input type="text" value="Seach ...">                    
                </div>
            </div>
            <div class="row content">
                <div class="col-md-8 left-content">
                   
                   
                    <div class="not_found">
                        <h1>404 not found!</h1>
                        <p>Sorry, but the page you are trying to reach is unavailable or does not exist.</p>
                    </div>

                   
                </div>
               
               <?php get_sidebar(); ?>
               
            </div>


<?php get_footer(); ?>