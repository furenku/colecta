


// ready

var u = new FrontEndUtils();

$(document).ready(function(){

   setup_interaccion();

   setup_utils();

   $(window).trigger('resize');

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

   $('#boletos-compra input').val(1);

   $('#boletos-compra input').change(function(){
      $('#boletos-compra button').html("Compra "+$(this).val());
   });

   $('#boletos-compra a').click(function(e){
      var preventa_id = "56";
      var cantidad = $('#boletos-compra input').val();
      var link = $(this);
      // clear_cart();
      add_to_cart( preventa_id, function( key ){

         currentKey = key;
         set_cart_item_quantity( key, cantidad , function( result ) {

            setTimeout(function(){
               window.location = link.attr('href');
            },1000)
         } );
       })

       e.preventDefault();
       e.stopPropagation();
   })

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
