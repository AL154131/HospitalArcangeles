$(document).ready(function() {
	
	var especialidad = $('#ListaEspecialidades').val();

	$.ajax({
		type: 'POST',
		url: '../Librerias/ListaMedicos.php',
		data: {'especialidad' : especialidad}
	})
	.done(function(codigoHtml) {
		$('#listaMedicos').html(codigoHtml)
	})
	.fail(function() {
		alert('Error')
	})

	$('#ListaEspecialidades').on('change', function() {
		especialidad = $('#ListaEspecialidades').val()
		$.ajax({
			type: 'POST',
			url: '../Librerias/ListaMedicos.php',
			data: {'especialidad' : especialidad}
		})
		.done(function(resultado) {
			$('#listaMedicos').html(resultado)
		})
		.fail(function() {
			alert('Error')
		})				
	})
})