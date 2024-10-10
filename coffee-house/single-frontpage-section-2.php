<?php get_header(); ?>
<!-- Sida för de tre blocken på startsidans andra sektion -->

<div class="category-section-2">

    <?php 
    if(have_posts()){?>
        <h3><?php the_title();?></h3>
        <?php
        while(have_posts()){
            the_post();
           ?>
           
           <article>
          <div> <?php the_content();?><div>
        </article>
           <?php
        }
    }
    ?>
</div>
<?php get_footer(); ?>