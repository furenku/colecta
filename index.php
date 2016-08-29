<?php
/*
Template Name: Inicio
*/

get_header();

$colecta = get_page_by_title("Colecta");
?>

<section id="colecta" class="columns p5 pb0 mb0 text-center h_a acento_bg white">

   <div class="row expanded columns h-a p5 mb3 text-center acento2_bg">

      <h3 class="">
         <?php echo bloginfo('name'); ?>
      </h3>

   </div>

   <div class="columns medium-5 h_35vh p5 pt0">

      <section id="video" class="row h_100 p0">

         <iframe src="https://player.vimeo.com/video/180463305" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

      </section>

   </div>

   <div class="columns medium-7 h_100 p5 pt0 text-left">

      <?php echo apply_filters('the_content', $colecta -> post_content) ?>

   </div>


</section>


<section id="obras" class="columns p5 pt0">

         <div class="small-12 columns">

            <?php for ($i=0; $i < 20; $i++) : ?>

                     <article class="obra columns small-12 medium-6 large-4 mb2">
                        <div class="imagen columns imgLiquid imgLiquidNoFill h_35vh">
                           <img src="http://fakeimg.pl/300x200" alt="" />
                        </div>
                        <div class="info columns">
                           <h6>Nombre del Artista</h6>

                           <span>
                              Nombre Completo de la Obra con Muchas palabras
                           </span>

                           <div class="fontS mt1"><a href="">http://url.externo.ir</a></div>
                        </div>
                     </article>

            <?php endfor; ?>

         </div>

</section>


<?php

get_footer();
