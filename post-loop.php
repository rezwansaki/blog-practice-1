

<?php if(have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<div class="row post">
    <div class="col-md-12">
        <div class="row post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>

        <div class="post_info">
            Posted In: <?php the_category(','); ?> | Posted on: <?php the_time('M d, Y') ?> <?php comments_popup_link('No Comment', '1 Comment', '% Comments'); ?>
        </div>


        <div class="row post-real">
            <!--<div class="col-md-2 post-image">Post Image</div>-->
            <div class="col-md-2"><a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail('post-image',array('class' => 'post-thumb')); ?></a></div>
            <div class="col-md-10 post-content"><?php echo excerpt('60'); ?></div>
        </div>
    </div>
</div>

<?php endwhile; ?>   
<?php endif; ?>       
