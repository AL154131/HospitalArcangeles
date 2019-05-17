//Preparamos una peticion AJAX con JQuery, el primer paramaetro indica que se ejecutara cuando se haga un submit, el 2do parametro indica el id del formulario, el 3ero 
//es una funcion que se ejecutara cuando el evento ocurra
jQuery(document).on('submit', '#form-regMed', function(event){
	event.preventDefault(); // evitamos que los datos se manden por defecto 

	jQuery.ajax({
		url: 'registrar_medico.php', //la url de nuestro archivo
		type: 'POST', //el tipo de envio de datos
		dataType: 'json', //los datos que deseamos recibir de php
		data: $(this).serialize(), //los datos que deseamos enviar a php, con serialize obtenemos una cadena de envio
		beforesend: function(){
			
		}
	})

	//cuando nuestra peticion se completa
	.done(function(respuesta){
		if(!respuesta.error){
			location.href = 'cms_medicos.php';
			alert("Se registro correctamente");
		}else{
			alert("Algo fallo...");
		}
	})
	//si nuestra peticion falla
	.fail(function(resp){
		console.log(resp);
	})
	//siempre se ejecuta
	.always(function(){
		console.log("completo");
	})
})
