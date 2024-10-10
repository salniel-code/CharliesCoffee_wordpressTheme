<?php get_header(); ?>
<!-- Index-sida -->
<!-- Skriver ut ny sidas paragraf och titel -->
    <?php 
    if(have_posts()){
        while(have_posts()){
            the_post();
           ?>
           <article>
           <h2><?php the_title();?></h2>
           <?php the_content();?>
        </article>
           <?php
        }
    }
    ?>
<?php get_footer(); ?>