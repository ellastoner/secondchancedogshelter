<?php 

/*
    Template Name: Card Display
*/

get_header(); ?>

<div class="col-lg-6 col-md-12 col-sm-12">

<h1 class="text-danger"><?php the_title(); ?></h1>
<p> If you are ready to adpot the dog of your dreams, then feel free to browse the list of dogs that we have available. 
    Some may be under application, but it's worth appying incase it fall through.
</p>

</div>



<div class="container-fluid">
    <div class="row">
    <div class="col-lg-12 col-sm-12 col-md-12 ">
        <div class="d-flex d-flex flex-wrap">
<?php

$args = array(
    'post_type' => 'available_dogs',
    'posts_per_page' => 10 );

    $loop = new WP_Query( $args );
?>

<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
<div class="card m-4" style="width: 18rem; min-height: 250px;">
<img src="<?php the_field('dog_image'); ?>" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title"><?php the_field('dog_name'); ?></h5>
        <div class="button-center">
        <a href="#" class="btn contact-button btn-primary02">Adpot Me</a>
        </div>
    </div>
    </div>
    <?php endwhile; ?>
    

</div>
<div class="jumbotron contact-form-adopt">
<div class="close-me"><img class="close" src="https://www.pngrepo.com/png/103170/170/close-cross-in-circular-outlined-interface-button.png" alt="close this window"></div>
  <h1 class="display-4">Apply to Adopt</h1>

  <p class="lead"> Fill out this form to show your interest in a dog, we will be in touch to talk futher about the adoption process.</p></p>
  <hr class="my-4">
  <div class="cart-here"><?php echo do_shortcode( '[contact-form-7 id="223" title="Contact form 1"]' ); ?></div>
</div>
</div>
</div>



<?php get_footer(); ?>