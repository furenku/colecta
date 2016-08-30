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

   <div id="tickets" class="columns small-12 mt1 p0">


      <?php

      // $cat_id = get_term_by("name", "Rifa", "product_cat")->term_id;
      $args = array( 'post_type' => 'product', 'posts_per_page' => -1, 'orderby' => 'title', 'order' => 'ASC' );//, 'cat' => $cat_id );
      $q = new WP_Query( $args );
      $k = 0;
      if( $q->have_posts() ) :
         while ( $q->have_posts() ) :
            $q->the_post();
      ?>

      <?php echo $k%5 === 0 ? '<div class="columns small-12 m0 p0">' : ''; ?>


            <div class="ticket-holder columns end">

               <div id="ticket_<?php echo get_the_ID(); ?>" data-id="<?php echo get_the_ID(); ?>" class="w_100 h_100 ticket button <?php echo get_post_meta(get_the_ID(),'_stock',true) != "0" ? 'primary in-stock' : 'neutral_bg out-of-stock disabled'; ?>" style="padding:1px">
                  <div class="white_bd p4">
                     <?php echo get_the_title(); ?>
                  </div>
               </div>

            </div>


      <?php echo $k%5 === 4 ? '</div>' : ''; ?>

      <?php
         $k++;
      endwhile;
   endif;
?>

   </div>

</section>

<?php

get_footer();
