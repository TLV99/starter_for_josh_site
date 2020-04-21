<?php
    /*
    Template Name: Home page
    */
    ?>
<?php get_header(); /* Tells WordPress to include header.php */ ?>
<section class="container-fluid aboutbg text-center">    
      <div class="container">      
            <h2><?php the_field('titleforaboutme'); ?></h2><!--  custom field for the aboutme content-->
          <p class="particle"><?php the_field('subtitleforaboutme'); ?></p>
<p class="about-text"><?php the_field('paragraphforaboutme'); ?></p>
   <div class="blocker"></div>
</div>
</section>
      <section class="container-fluid articlebg">
          <div class="conatiner">
          <div class="row">
              <div>
              <h3 class="text-center article-title "><?php the_field('titleforarticles'); ?></h3>
              </div>
              
              <div class="col-md-4 article-cent"> 
<img class="img-responsive" alt="portait" src="<?php the_field('articleimage'); ?>">
<h4><?php the_field('articletitle'); ?></h4>
<p><?php the_field('articleexcerpt'); ?> </p>
<a href="<?php the_field('readmore'); ?>" class="readmore">CONTINUE READING</a>
             </div>
                            <div class="col-md-4 article-cent"> 
<img class="img-responsive" alt="portait" src="<?php the_field('articleimagetwo'); ?>">
<h4><?php the_field('articletitletwo'); ?></h4>
<p><?php the_field('articleexcerpttwo'); ?> </p>
<a href="<?php the_field('readmoretwo'); ?>" class="readmore">CONTINUE READING</a>
             </div>              <div class="col-md-4 article-cent"> 
<img class="img-responsive" alt="portait" src="<?php the_field('articleimagethree'); ?>">
<h4><?php the_field('articletitlethree'); ?></h4>
<p><?php the_field('articleexcerptthree'); ?> </p>
<a href="<?php the_field('readmorethree'); ?>" class="readmore">CONTINUE READING</a>
             </div>

  
              </div> 
          </div>
      </section>
<?php get_footer(); /* Tells WordPress to include footer.php */ ?>