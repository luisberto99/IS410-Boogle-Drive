$("#btn-registrar").click(function(){
	var parametros=
				"txt-nombre="+$("#txt-nombre").val()+"&"+
				"txt-apellido="+$("#txt-apellido").val()+"&"+
				"txt-nombreUsuario="+$("#txt-nombreUsuario").val()+"&"+
				"txt-correo="+$("#txt-correo").val()+"&"+
				"txt-contrasena="+$("#txt-contrasena").val()+"&"+
				"txt-confirmacion-contrasena="+$("#txt-confirmacion-contrasena").val()+"&"+
				"txt-fecha-nacimiento="+$("#txt-fecha-nacimiento").val()+"&"+
				"txt-telefono="+$("#txt-telefono").val()+"&"+
				"slc-pais="+$("#slc-pais").val()+"&"+
				"rbt-genero="+$('input[id=rbt-genero]:checked').attr('value');

				
	$.ajax({
		url:"ajax/procesar-registro.php",
		data:parametros,
		method:"POST",
		dataType:"json",
		success:function(respuesta){
			if (respuesta.codigo_resultado==0){
			   $("#resultado").html('<div class="bg-danger"> '+'<center>'+respuesta.mensaje+'</center>'+"</div>");
			}
			if (respuesta.codigo_resultado==1){
			    $("#resultado").html('<div class="bg-success"> '+'<center>'+respuesta.mensaje+'</center>'+"</div>");
			     window.location.href = "condiciones.php";
			  }
			}
	});
});