</div>


</main><!-- #main -->

<?php if( ! is_page("Checkout") && ! is_page("Cart") ) : ?>
<div id="avisos-destacados" class="columns medium-8 large-3 h_85vh h_sm_15vh p0" data-sticky-container>

   <div class="columns p0 h_85vh h_sm_15vh sticky complementario_neutral_bg" data-sticky data-margin-top="0" data-anchor="area_contenidos" data-sticky-on="small">

      <div id="" class="vcenter h-a p5 pt0 pb0 pr3">
         <?php $rifa = get_page_by_title("Rifa"); ?>
         <h4 class="mb1">Rifa de arte</h4>

         <div class="contenido">
            <?php echo apply_filters('the_content', $rifa->post_content); ?>
         </div>

         <div id="boletos-compra" class="small-12 mt2">
            <?php
            global $woocommerce;
            // var_dump(count($woocommerce->cart->cart_contents));
            // var_dump($woocommerce->cart->get_checkout_url()); ?>
            <a href="<?php echo $woocommerce->cart->get_checkout_url(); ?>" class="w_100 h_5vh columns">
               <button class="button neutral_bd black white_hover small-12 columns fontRL white h_a">
                  <!-- <a href="#" class="w_100 h_5vh columns"> -->
                  Selecciona tus boletos
               </button>
            </a>

         </div>

      </div><!-- Avisos sticky -->

   </div>

</div>

<?php endif; ?>


<!-- footer + player -->

<footer class="w_100 expanded h_20vh absDownL fixed z1k1 acento2_bg white pl5 pr5">

   <div class="columns medium-6 h_20vh text-left p0">

      <div class="columns medium-5 h_100 p0">
         <div class="vcenter h_a p0">
            <h3 class="complementario_neutral m0 p0">
               Depósitos:
            </h3>
         </div>
      </div>

      <div class="columns medium-7 h_20vh fontS m0 p0">
         <div class="p5">
            <div class="columns h_a small-12 p1">
               Banco Santander
            </div>
            <div class="columns h_a small-12 p1">
               Tarjeta: 5579070048443033
            </div>
            <div class="columns h_a small-12 p1">
               Nombre: Gerardo Ricardo Garcia Rodriguez
            </div>
         </div>
      </div>
   </div>

   <div class="columns medium-6 h_100 text-right pr4 bold">
      <div class="vcenter h_a">
         <h1 class="complementario_neutral">¡Gracias!</h1>
      </div>
   </div>

</footer>






<?php wp_footer()?>

</body>
</html>
