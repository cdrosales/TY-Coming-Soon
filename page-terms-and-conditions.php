<?php get_header(); ?> 

<div class="post-wrapper">
    
    <?php if( have_posts() ): 
        while ( have_posts() ): 
            the_post();?> 
            <div class="ty-logo">
                <?php the_post_thumbnail(); ?>
            </div>
            <h1><?php the_title(); ?></h1> 
        <?php endwhile; ?> 

</div>



<?php else : ?>
        <p>No posts found</p>
<?php endif; ?>



<?php get_footer(); ?>