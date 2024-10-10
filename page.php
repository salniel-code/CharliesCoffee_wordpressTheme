<?php
/*
Template Name: Enkel-sida
*/
?>
<?php get_header(); ?>


<div class="page-simple">
    <?php 
    // Loop som skriver ut en sidas innehåll
    if(have_posts()){?>

        <?php
        while(have_posts()){
            the_post();
           ?>
           <h3 class="center-text"><?php the_title();?></h3>
         
           <?php the_content();?>
    
           <?php
        }
    }
    ?>
    </div>

<?php get_footer(); ?>