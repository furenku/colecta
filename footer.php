</div>


</main><!-- #main -->


<div id="avisos-destacados" class="columns medium-8 large-3 h_85vh h_sm_15vh p0" data-sticky-container>

   <div class="columns p0 h_85vh h_sm_15vh sticky complementario_neutral_bg" data-sticky data-margin-top="0" data-anchor="area_contenidos" data-sticky-on="large">

      <div id="" class="vcenter h-a p5 pt0 pb0">

         <h4>Rifa de arte</h4>

         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel labore nostrum saepe.</p>
         <p>Aliquam eius libero ipsa quae animi non esse dignissimos a quidem officiis!</p>
         <p>Et voluptates eveniet, id eligendi accusantium itaque, atque in quae assumenda consequuntur.</p>

         <div id="boletos-compra" class="small-12">
            <input class="small-4 columns h_10vh small-center  text-center fontRXXL" type="number" min="1" max="10" name="numero-boletos" placeholder="1">
            <a href="<?php echo get_the_permalink( get_page_by_title('Pago') -> ID ); ?>">
            <button class="button success black white_hover small-8 columns fontRXL white h_10vh">
               Compra 1
            </button>
            </a>
         </div>

      </div><!-- Avisos sticky -->

   </div>

</div>


<!-- footer + player -->

<footer class="w_100 expanded h_20vh absDownL fixed z1k1 acento_claro_bg neutral_oscuro1 pl5 pr5">

   <div class="columns medium-6 h_20vh text-left p0">

      <div class="columns medium-4 h_100 p0">
         <div class="vcenter h_a p0">
            <h4 class="m0 p0">
               Depósitos:
            </h4>
         </div>
      </div>

      <div class="columns medium-8 h_20vh fontS m0 p0">
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
         <h4 class="acento">¡Gracias!</h4>
      </div>
   </div>

</footer>






<?php wp_footer()?>

</body>
</html>
