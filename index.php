<?php
/*
Template Name: Inicio
*/

get_header();

$colecta = get_page_by_title("Colecta");
?>

<section id="colecta" class="columns p5 pt0 pb0 mb0 text-center h_a acento_bg white">

   <div class="columns small-12 h-a p2 pb0 pt0 text-center">

      <h1 class="">
         <?php echo bloginfo('name'); ?>
      </h1>

   </div>

   <div class="columns medium-6 h_40vh p5 pt0">

      <section id="video" class="row h_100 p0">

         <iframe src="https://player.vimeo.com/video/180463305" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

      </section>

   </div>

   <div class="columns medium-6 h_100 p5 pt0 text-left">

      <?php echo apply_filters('the_content', $colecta -> post_content) ?>

   </div>


</section>


<section id="obras" class="columns p5 pt0">

         <div class="small-12 columns">

            <?php for ($i=0; $i < 20; $i++) : ?>

                     <article class="obra columns small-12 medium-6 large-4">
                        <div class="imagen columns imgLiquid imgLiquidNoFill h_35vh">
                           <img src="http://fakeimg.pl/300x200" alt="" />
                        </div>
                        <div class="info columns">
                           <h6>Nombre del Artista</h6>
                           <h6>Nombre Completo de la Obra con Muchas palabras</h6>
                           <div class="fontS"><a href="">http://url.externo.ir</a></div>
                        </div>
                     </article>

            <?php endfor; ?>

         </div>

</section>


<?php

get_footer();
