<?php

get_header();

?>


<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>


   <div id="page-colecta" class="small-12 columns pl0 h_a">

      <article class="small-12 columns p0">


         <div id="page-colecta-titulo" class="small-12 columns p0 h_15vh">

            <div class="small-7 columns p2 text-left fontRXXL vcenter">
               <h1>
                  <?php echo apply_filters('the_title', get_the_title()); ?>
               </h1>
            </div>

            <?php
            $img = get_the_post_thumbnail();
            if( $img ) : ?>
            <div id="page-colecta-thumb" class="expanded row imgLiquidFill imgLiquid h_50vh w_100" >
               <?php echo $img; ?>
            </div>

            <?php endif; ?>

         </div>

         <div id="page-colecta-contenido" class="small-12 columns fontRL text-left p3 h_a">

            <?php echo apply_filters('the_content', get_the_content()); ?>

         </div>





      </article>



   </div>


   <?php
endwhile; endif;
get_footer();
?>
