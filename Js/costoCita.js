$(document).ready(function() {

	especialidad = $('#ListaEspecialidades').val();
	
	$.ajax({
		type: 'POST',
		url: '../Librerias/costoCita.php',
		data: {'especialidad' : especialidad}
	})
	.done(function(codigoHtml) {
		$('#costoCita').html(codigoHtml)
	})
	.fail(function() {
		alert('Error')
	})

	$('#ListaEspecialidades').on('change', function() {

		especialidad = $('#ListaEspecialidades').val();

		$.ajax({
			type: 'POST',
			url: '../Librerias/costoCita.php',
			data: {'especialidad' : especialidad}
		})
		.done(function(codigoHtml) {
			$('#costoCita').html(codigoHtml)
		})
		.fail(function() {
			alert('Error')
		})			
	})
})