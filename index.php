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

                     <article class="obra columns small-12 medium-6 large-4 p3">
                        <div class="imagen columns imgLiquid imgLiquidNoFill h_35vh mt2 mb2  ">
                           <img src="http://fakeimg.pl/<?php echo rand(250,550); ?>x<?php echo rand(250,550); ?>" alt="" />
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

<section id="rifa" class="columns p5 h_a">

   <h2>Rifa:</h2>

   <p class="fontL neutral mt1 mb2">
      Selecciona tus números. Puedes elegir tantos como quieras.
   </p>

   <div id="tickets" class="mt1 p0">

      <?php for ($h=0; $h < 100; $h++) { ?>

         <div class="columns">

            <?php for ($i=0; $i < 5; $i++) { ?>

            <div class="ticket-holder h_a p0 pl1 pr1 shareW fontS bold  white white_bd text-center">

               <div class="w_100 h_100 ticket button primary" style="padding:1px">
                  <div class="white_bd p4">
                     <?php echo str_pad(($h*5)+($i+1), 3, '0', STR_PAD_LEFT); ?>
                  </div>
               </div>

            </div>

            <?php } ?>

         </div>

      <?php } ?>

   </div>

</section>


<?php

get_footer();
