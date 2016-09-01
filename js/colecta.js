


// ready

var u = new FrontEndUtils();

var selected_tickets = [];
var selected_ticket_ids = [];

$(document).ready(function(){

   setup_interaccion();

   setup_utils();

   tickets();
   console.log("Colecta JS: ready")

   $(window).trigger('resize');

   // clear_cart();

   if( $(window).width() < 768 ) {
      $('#colecta').detach().insertBefore('#area_contenidos');
      $('#rifa-sidebar').detach().insertBefore('#area_contenidos');
      newDiv = $('<div>');
      newDiv.addClass('columns h-70-v complementario_neutral_bg p_sm_2');
      $('#rifa-sidebar .responsive-move').removeClass('vcenter').addClass('m0').detach().appendTo( newDiv );
      newDiv.insertBefore('#rifa-sidebar');
   }
});


var resizing = false;
$(window).resize(function() {
   if( ! resizing ) {
      resizing = setTimeout(function(){
         do_resize();
         resizing = false;
      }, 150)
   }
})

function do_resize() {

   u.vcenter();
   u.shareW();
   u.sameMaxH( $('.sameMaxH') );

}


function setup_utils() {


   //vcenter
   u.vcenter();
   u.shareW();

   //imgLiquid
   $(".imgLiquidFill").imgLiquid();
   $('.imgLiquid.imgLiquidNoFill').imgLiquid({
      fill:false
   });



}



function setup_interaccion() {
   console.log( $('#boletos-compra input') );

   // $('#boletos-compra input').val(1);
   //
   // $('#boletos-compra input').change(function(){
   //    $('#boletos-compra button').html("Compra "+$(this).val());
   // });
   //
   // $('#boletos-compra a').click(function(e){
   //    var preventa_id = "56";
   //    var cantidad = $('#boletos-compra input').val();
   //    var link = $(this);
   //    // clear_cart();
   //    add_to_cart( preventa_id, function( key ){
   //
   //       currentKey = key;
   //       set_cart_item_quantity( key, cantidad , function( result ) {
   //
   //          setTimeout(function(){
   //             window.location = link.attr('href');
   //          },1000)
   //       } );
   //     })
   //
   //     e.preventDefault();
   //     e.stopPropagation();
   // })

}




function add_to_cart( id, callback ) {
	var ajaxData = {

		type: 'post',
		url: ol_ajax.ajaxurl,
		dataType: 'json',
		data: {
			action: 'add_to_cart',
			id: id
		},
		success: function(key){

         if( typeof(callback) != "undefined" ) {
				callback( key );
			}

		}


	};

   $.ajax(ajaxData);

}


function add_array_to_cart( ids, callback ) {
	var ajaxData = {

		type: 'post',
		url: ol_ajax.ajaxurl,
		dataType: 'json',
		data: {
			action: 'add_array_to_cart',
			ids: ids
		},
		success: function(keys){

         if( typeof(callback) != "undefined" ) {
				callback( keys );
			}

		}


	};


	$.ajax(ajaxData);

}






function set_cart_item_quantity( key, quantity, callback ) {

	var ajaxData = {

		type: 'post',
		url: ol_ajax.ajaxurl,
		dataType: 'json',
		data: {
			action: 'set_cart_item_quantity',
			key: key,
			quantity: parseInt( quantity )
		},
		success: function(result){

			if( typeof(callback) != "undefined" )
				callback( result )

		}


	};


	$.ajax( ajaxData );



}

function clear_cart() {

	var ajaxData = {

		type: 'post',
		url: ol_ajax.ajaxurl,
		dataType: 'json',
		data: {
			action: 'clear_cart'
		},
		success: function() {

		}

	};

	$.ajax(ajaxData);


}








function tickets() {


   $('.ticket.in-stock').click(function(){
      if( ! $(this).hasClass('selected') ) {

         var ticket = $(this);

         ticket.addClass('success').addClass('selected').removeClass('primary')


         var ticket_id  = ticket.attr('data-id');

         selected_tickets.push( ticket_id );
         selected_ticket_ids.push( ticket.attr('id') );



      }
      else {
         $(this).removeClass('selected success').addClass('primary');
      }

      var num_selected = $('.ticket.selected').length;
      if( num_selected > 0 ) {
         $('#boletos-compra button')
         .html( "Compra " + num_selected )
         .addClass( "listo-para-comprar" )
         .addClass("fontXL success")
         .removeClass("fontL");
      } else {
         $('#boletos-compra button')
         .html( "Selecciona tus boletos" )
         .removeClass( "listo-para-comprar" )
         .addClass("fontL neutral_bd")
         .removeClass("fontXL success");

         $('#boletos-compra button').removeClass( "listo-para-comprar" );

      }
   })

   var ticket_id = 0;
   $('#boletos-compra a').click(function(e){
      console.log("link")
      if( $(this).find('button').hasClass('listo-para-comprar') ) {

         add_array_to_cart( selected_tickets, function(keys) {

            for(i in keys){
               key = keys[i];
               id = selected_ticket_ids[i];
               $('#'+id).attr('data-key',key);
               console.log( "se añadió ticket a carrito: ", id, key );
            }
            selected_tickets = [];
            selected_ticket_ids = [];
         });

      } else {
         e.preventDefault();
         e.stopPropagation();
         $('body,html').animate({
            scrollTop: $('#rifa').offset().top
         }, 1500 );
         return false;
      }
   });


}
