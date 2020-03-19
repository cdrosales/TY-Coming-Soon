<?php get_header(); ?> 


<div class="post-wrapper">

<h1><?php the_title(); ?></h1> 
    
    <?php if( have_posts() ): 
        while ( have_posts() ): 
            the_post();?> 

<form ... onsubmit="return checkForm(this);">
<p><input type="checkbox" required name="terms"> I accept the <u>Terms and Conditions</u></p>
<p>
</form>

            <?php the_content(); ?>
        <?php endwhile; ?> 

</div>



<?php else : ?>
        <p>No posts found</p>
<?php endif; ?>



<?php get_footer(); ?>