

<?php 

/*
    Template Name: Donation yes Page
*/

 get_header(); ?>


<div class="container-fluid">
<div class="row">
<div class="col-lg-6 col-sm-12 col-md-6">
<div class="heading-container">
        <h1 class="text-left text-danger"><?php the_field('donator_heading'); ?></h1>
        <p class="text-left"><p><?php the_field('donate_description'); ?></p>
        <?php echo do_shortcode( '[sdonations]1[/sdonations]' ); ?>
    </div>
    </div>
    <div class="col-lg-6 col-sm-12 col-md-12">
<div class="feature-img-wrapper"><img src="<?php the_field('donate_image'); ?>" class="feature-image02" alt="The image is cool" width="600">
</div>
</div>
  
</div>
</div>


<?php get_footer(); ?>