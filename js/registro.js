$("#btn-registrar").click(function(){
    

	var parametros=
				"txt-nombre="+$("#txt-nombre").val()+"&"+
				"txt-apellido="+$("#txt-apellido").val()+"&"+
				"txt-usuario="+$("#txt-usuario").val()+"&"+
				"txt-correo="+$("#txt-correo").val()+"&"+
				"txt-contraseña="+$("#txt-contraseña").val()+"&"+
				"txt-confirContraseña="+$("#txt-confirContraseña").val()+"&"+
				"data-fechaNacimento="+$("#data-fechaNacimento").val()+"&"+
				"txt-telefono="+$("#txt-telefono").val()+"&"+
				"cmb-ubicacion="+$("#cmb-ubicacion").val()+"&"+
				"rbt-genero="+$('input[id=rbt-genero]:checked').attr('value');

	$.ajax({
		url:"ajax/procesar-registro.php",
		data:parametros,
		method:"POST",
		dataType:"json",
		success:function(respuesta){
			if (respuesta.codigo_resultado==1){
			    $("#resultado").html('<div class="bg-success"> '+'<center>'+respuesta.mensaje+'</center>'+"</div>")+
			    $(document).ready(function()
				   {
				      $("#modal-condiciones").modal("show");
				   });
							     
			  }
			if (respuesta.codigo_resultado==0){
			    $("#resultado").html('<div class="bg-danger"> '+'<center>'+respuesta.mensaje+'</center>'+"</div>");
			  }
			  if (respuesta.codigo_resultado==2){
			    $("#resultado").html('<div class="bg-danger"> '+'<center>'+respuesta.mensaje+'</center>'+"</div>");
			  }
			}
	});
});