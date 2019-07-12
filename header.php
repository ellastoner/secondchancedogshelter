<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Ella's First Website</title>
    <?php wp_head(); ?>
</head>


<?php 

    if( is_front_page() ):
        $friyay_classes = array('friyay-class', 'my-class');
    else:
        $friyay_classes = array('no-friyay-class');
    endif;

?>

    <body <?php body_class( $awesome_classes ); ?>>
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
    
  <a class="navbar-brand" href="#"><?php the_custom_logo(); ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <?php wp_nav_menu(array(
                    'theme_location'    =>  'primary',
                    'container'         =>  false,
                    'menu_class'        =>  'navbar-nav ml-auto pr-5',
                        )
                    ); 
        ?>
  </div>
</nav>
                


        <div class="container">  
          <div class="row">
             <div class="col-lg-12">

         </div><!-- .col end -->
        </div><!-- .row end --> 

    