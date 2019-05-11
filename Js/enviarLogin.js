//Preparamos una peticion AJAX con JQuery, el primer paramaetro indica que se ejecutara cuando se haga un submit, el 2do parametro indica el id del formulario, el 3ero 
//es una funcion que se ejecutara cuando el evento ocurra
jQuery(document).on('submit', '#form-login', function(event){
	event.preventDefault(); // evitamos que los datos se manden por defecto 

	jQuery.ajax({
		url: 'http://localhost/HospitalArcangeles/Librerias/login.php', //la url de nuestro archivo
		type: 'POST', //el tipo de envio de datos
		dataType: 'json', //los datos que deseamos recibir de php
		data: $(this).serialize(), //los datos que deseamos enviar a php, con serialize obtenemos una cadena de envio
		beforesend: function(){
			
		}
	})

	//cuando nuestra peticion se completa
	.done(function(respuesta){
		if(!respuesta.error){
			location.href = 'http://localhost/HospitalArcangeles/';
		}else{
			alert("Mail o password incorrectos");
		}
	})
	//si nuestra peticion falla
	.fail(function(resp){
		console.log('error10');
	})
	//siempre se ejecuta
	.always(function(){
		console.log("completo");
	})
})

