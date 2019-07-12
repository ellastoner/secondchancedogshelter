

<?php 

/*
    Template Name: Foster Page Template
*/

 get_header(); ?>


<div class="container-fluid">
<div class="row">
<div class="col-lg-6 col-sm-12 col-md-6">
<div class="heading-container">
    <div>
        <h1 class="text-left text-danger"><?php the_field('foster_heading'); ?></h1>
        <p class="text-left"><p><?php the_field('foster_description'); ?></p>
        <a href="#" class="btn contact02-button btn-primary">Apply</a>
    </div>
    </div>
</div>
    <div class="col-lg-6 col-sm-12 col-md-12">
<div class="feature-img-wrapper"><img class="feature-img02" src="<?php the_field('foster_image'); ?>" alt="The image is cool" width="670">
</div>
</div>
<div class="jumbotron contact-form-foster">
<div class="close-me"><img class="close" src="https://www.pngrepo.com/png/103170/170/close-cross-in-circular-outlined-interface-button.png" alt="close this window"></div>
  <h1 class="display-4">Apply to Foster</h1>
 
  <p class="lead"> Fill out this form to show your interest in a dog, we will be in touch to talk futher about the adoption process.</p></p>
  <hr class="my-4">
  <div class="cart-here"><?php echo do_shortcode( '[contact-form-7 id="230" title="Become a Foster"]' ); ?></div>
</div>
</div>
</div>

    


<?php get_footer(); ?>