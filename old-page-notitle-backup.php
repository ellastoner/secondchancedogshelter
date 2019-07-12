

<?php 

/*
    Template Name: Hero Landing Page 02
*/

 get_header(); ?>

<?php global $post; echo $post->post_name; ?>

<div class="container-fluid">
<div class="row">
<div class="col-lg-6 col-sm-12 col-md-6">

<? if(have_posts() ):
    
    while( have_posts()): the_post();?>

    <div>
        <h1 class=" display-1 text-danger text-left"><?php the_title(); ?></h1>
        <p class="text-left"><p><?php the_content(); ?></p>
    </div>
    </div>
    <div class="col-lg-6 col-sm-12 col-md-12">
    <div class="bubble">
    </div>
<div class="feature-img-wrapper"><?php the_post_thumbnail('medium_large'); ?></div>
</div>
  
    <?php endwhile;

 endif;
    
    ?>



</div>
</div>






<?php get_footer(); ?>
