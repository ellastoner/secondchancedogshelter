<?php get_header(); ?>

<?php global $post; echo $post->post_name; ?>

<? if(have_posts() ):
    
    while( have_posts()): the_post(); ?>

        <p><?php the_content(); ?></p>

        <h3><?php the_title(); ?></h3>

    <?php endwhile;

 endif;
    
    ?>


<?php get_footer(); ?>
