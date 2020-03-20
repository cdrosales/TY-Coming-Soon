<?php get_header(); ?> 


<div class="post-wrapper">

<h1><?php the_title(); ?></h1> 
    
    <?php if( have_posts() ): 
        while ( have_posts() ): 
            the_post();?> 

<form ... onsubmit="return checkForm(this);">
<p><input type="checkbox" required name="terms" class="terms-conditions-CB"> I accept the <a href="http://localhost:3000/ty-coming-soon/terms-and-conditions/" class="terms-conditions" target="_blank">Terms and Conditions</a></p>
</form>

            <?php the_content(); ?>
        <?php endwhile; ?> 

</div>





<?php else : ?>
        <p>No posts found</p>
<?php endif; ?>



<?php get_footer(); ?>