<?php 

/*
    Template Name: Checkout Page
*/

 get_header(); ?>


        <h1 class="text-left"><?php the_title(); ?></h1>
    
        <div class="cart-here"><?php echo do_shortcode( '[woocommerce_checkout]' ); ?></div>

<?php get_footer(); ?>