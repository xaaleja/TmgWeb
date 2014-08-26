/* Mis funciones JavaScript */

$(document).ready(function() {
	console.log('el documento está preparado');
	$('#factores').addClass('clase1');
	$('#pie').removeClass('mipie');
	
	var a = $('#img1').attr('alt');
	console.log(a);
	
	$('#galeria li').css('color', 'red');
	
	var b = $(window).width();
	console.log('-window.width: ' + b);

	var c = $(document).width();
	console.log('-document.width: ' + c);
	
	var d = $(window).height();
	console.log('-window.height: ' + d);
	
	var e = $(document).height();
	console.log('-document.height: ' + e);
	
	$('#intro').after('<p>Contenido mágico.</p>');
	
	$('#intro').append('<p>Contenido mágico.</p>');


		
	$('.conback').append('<p><a href="#" class="enl-back">Volver</a></p>');
	
	$('.enl-back').click(function(){
		parent.history.back();
		return false;
	 });
	 
	 $('#menu-aux a').on('click', function() {
		alert( $( this ).text() );
	 });
	 

	
});