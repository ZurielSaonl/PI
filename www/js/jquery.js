$(document).ready(function(){

	$('#precio').change(function(){
		var valor = $('#precio').val();
		$('#valorPrecio').text(valor);
		console.log(valor);
	});
});