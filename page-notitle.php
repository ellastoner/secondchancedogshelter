

<?php 

/*
    Template Name: Hero Landing Page
*/

 get_header(); ?>


<div class="container-fluid">
<div class="row">
<div class="col-lg-6 col-sm-12 col-md-6">
    <div class="heading-container">
        <h1 class="text-left text-danger"><?php the_field('home_page_header_text'); ?></h1>
        <p class="text-left"><p><?php the_field('home_page_header_description'); ?></p>
        <a href="<?php echo get_permalink(105); ?>" class="btn btn-primary btn-lg main-but">Adopt</a>
    </div>
    </div>
    <div class="col-lg-6 col-sm-12 col-md-12">
<div class="feature-img-wrapper"><img class="feature-image" src="<?php the_field('home_page_hear_image'); ?>" alt="The image" width="760">
</div>
</div>
  
</div>
</div>

    


<?php get_footer(); ?>