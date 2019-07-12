<?php

/*
    Template Name: Woo Commerce Theme
*/

get_header(); ?>

<div class="sleeve_main">
    <div id="main">
        <h2></h2>
        <ul id="postlist">
            <?php woocommerce_content(); ?>
        </ul>
    </div>
</div>


<?php get_footer(); ?>
