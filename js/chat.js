

$(document).ready(function(){
	setInterval("cargarMensajes()",400);
});

function cargarMensajes(){
	$.ajax({
		url: "../ajax/mensajes.php",
		success:function(response){
			$("#conversacion").html(response);
		}
	});
}

function verificar(e){
	if (e.which == 13) {
		enviarMensaje();
	}
}

function enviarMensaje(){
	var texto = $("#mensajeEnviar").val();
	var parametros = {
		"texto" : texto
	};
	$.ajax({
		data : parametros,
		url : "../ajax/enviar.php",
		method : "post",
		success:function(response){
			cargarMensajes();
			$("#mensajeEnviar").val("");
		}
	});
}
