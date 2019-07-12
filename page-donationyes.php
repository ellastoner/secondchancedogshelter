
<?php

/*
    Template Name: Basic Template
*/

get_header(); ?>


<div class="container-fluid">
<div class="row">
<div class="col-lg-6 col-sm-12 col-md-6">
    <div>
        <div class="donations-success"><?php echo do_shortcode( '[give_receipt]' ); ?></div>
    </div>
    </div>
</div>
  
</div>
</div>

    


<?php get_footer(); ?>
