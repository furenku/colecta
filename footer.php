</div>


</main><!-- #main -->


<?php if( ! is_page("Checkout") && ! is_page("Pago") && ! is_page("Cart") ) : ?>

<div id="rifa-sidebar" class="columns medium-4 large-3 h_85vh h_sm_15vh p0" data-sticky-container>

   <div id="rifa-sticky" class="columns p0 h_85vh h_sm_15vh sticky complementario_neutral_bg" data-sticky data-margin-top="0" data-anchor="area_contenidos" data-sticky-on="small">

      <div id="" class="titulo responsive-move h-a p5 pr3 p_sm_2 pt2 pt_sm_0 pb0  mt2">
         <?php $rifa = get_page_by_title("Rifa"); ?>
         <h4 class="mb1">Rifa de arte</h4>

         <div class="contenido h_45vh scrollH">
            <?php echo apply_filters('the_content', $rifa->post_content); ?>
         </div>

      </div>

      <div id="boletos-compra" class="small-8 small-offset-2 mt1 pt0">
         <!-- <div id="boletos-compra" class="small-12 mt2" data-sticky-container> -->
         <!-- <div class="columns sticky" data-sticky data-sticky-on="[small]"> -->
         <?php
         global $woocommerce;
         // var_dump(count($woocommerce->cart->cart_contents));
         // var_dump($woocommerce->cart->get_checkout_url()); ?>
         <a href="<?php echo $woocommerce->cart->get_checkout_url(); ?>" class="w_100 h_5vh columns">
            <button class="button neutral_bd black white_hover columns  fontL font_sm_M white h_a">
               <!-- <a href="#" class="w_100 h_5vh columns"> -->
               Selecciona tus boletos
            </button>
         </a>
         <!-- </div> -->

      </div>

   </div>

</div>

<?php endif; ?>






<!-- footer + player -->

<footer class="w_100 expanded h_20vh h_sm_20vh absDownL fixed z1k1 acento2_bg white pl5 pr5 p_sm_1">

   <div class="columns small-12 medium-6 h_100 h_sm_50 text-left p0">

      <div class="columns small-4 medium-5 h_100 h_sm_10 p0">
         <div class="vcenter h_a p0">
            <h3 class="complementario_neutral m0 p0 pt_sm_1">
               Depósitos:
            </h3>
         </div>
      </div>

      <div class="columns small-8 medium-7 h_100 h_sm_50 fontS font_sm_S m0 p0">
         <div class="p5 p_sm_0">
            <div class="columns h_a small-12 p0 font_sm_XS text-right medium-text-left ">
               Banco Santander
            </div>
            <div class="columns h_a small-12 p0 font_sm_XS text-right medium-text-left ">
               Tarjeta: 5579070048443033
            </div>
            <div class="columns h_a small-12 p0 font_sm_XS text-right medium-text-left ">
               Nombre: Gerardo Ricardo Garcia Rodriguez
            </div>
         </div>
      </div>
   </div>

   <div class="columns medium-6 h_100 h_sm_50 rel text-small-left small-text-left medium-text-right bold">
      <div class="vcenter h_a">
         <h1 class="complementario_neutral font_sm_L pl0 pt1">¡Gracias!</h1>
      </div>
      <div class="absDownR p2 p_sm_1 text-right">
         <span class="p1 font_sm_S">Web:</span>
         <a href="mailto:furenku@gmail.com" target="_blank"><span class="fa fa-envelope fontL white p1"></span></a>
         <a href="http://github.com/furenku/colecta" target="_blank"><span class="fa fa-github fontL white p1"></span></a>
      </div>
   </div>

</footer>






<?php wp_footer()?>

</body>
</html>
