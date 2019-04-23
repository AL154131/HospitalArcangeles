$(document).ready(function() {

	dia = $('#dia').val();
	mes = $('#mes').val();
	año = $('#año').val();
	hora = $('#hora').val();
	medico = $('#listaMedicos').val();
	fecha = año + "-" + mes + "-" + dia + " " + hora + ":00";

	$('#dia').on('change', function() {
		dia = $('#dia').val();
		fecha = año + "-" + mes + "-" + dia + " " + hora + ":00";
		medico = $('#listaMedicos').val();
		$.ajax({
			type: 'POST',
			url: '../Librerias/ComprobarFecha.php',
			data: {'fecha' : fecha , 'medico' : medico}
		})
		.done(function(codigoHtml) {
			$('#errorFecha').html(codigoHtml)
		})
		.fail(function() {
			alert('Error')
		})			
	})

	$('#mes').on('change', function() {
		mes = $('#mes').val();
		fecha = año + "-" + mes + "-" + dia + " " + hora + ":00";
		medico = $('#listaMedicos').val();
		$.ajax({
			type: 'POST',
			url: '../Librerias/ComprobarFecha.php',
			data: {'fecha' : fecha , 'medico' : medico}
		})
		.done(function(codigoHtml) {
			$('#errorFecha').html(codigoHtml)
		})
		.fail(function() {
			alert('Error')
		})			
	})

	$('#año').on('change', function() {
		año = $('#año').val();
		fecha = año + "-" + mes + "-" + dia + " " + hora + ":00";
		medico = $('#listaMedicos').val();
		$.ajax({
			type: 'POST',
			url: '../Librerias/ComprobarFecha.php',
			data: {'fecha' : fecha , 'medico' : medico}
		})
		.done(function(codigoHtml) {
			$('#errorFecha').html(codigoHtml)
		})
		.fail(function() {
			alert('Error')
		})			
	})

	$('#hora').on('change', function() {
		hora = $('#hora').val();
		fecha = año + "-" + mes + "-" + dia + " " + hora + ":00";
		medico = $('#listaMedicos').val();
		$.ajax({
			type: 'POST',
			url: '../Librerias/ComprobarFecha.php',
			data: {'fecha' : fecha, 'medico' : medico}
		})
		.done(function(codigoHtml) {
			$('#errorFecha').html(codigoHtml)
		})
		.fail(function() {
			alert('Error')
		})			
	})

	$('#listaMedicos').on('change', function() {
		medico = $('#listaMedicos').val();
		$.ajax({
			type: 'POST',
			url: '../Librerias/ComprobarFecha.php',
			data: {'fecha' : fecha, 'medico' : medico}
		})
		.done(function(codigoHtml) {
			$('#errorFecha').html(codigoHtml)
		})
		.fail(function() {
			alert('Error')
		})			
	})

})
