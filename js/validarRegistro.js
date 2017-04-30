	
	$('[data-toggle="popover"]').popover('hide');


$("#btn-registrar").click(function(){


	var a=$("#txt-nombre").val();
	var b=$("#txt-apellido").val();
	var c=$("#txt-usuario").val();
	var d=$("#txt-correo").val();
	var e=$("#txt-contrasena").val();
	var f=$("#txt-confirContrasena").val();
	var g=$("#data-fechaNacimento").val();
	var h=$("#txt-telefono").val();
	var i=$("#slc-ubicacion").val();
	var j=$("#slc-preguntas").val();
	var k=$("#slc-2").val();
	var l=$("#txt-respuesta1").val();
	var m=$("#txt-respuesta2").val();
	var n=$('input[id=rbt-genero]:checked').attr('value');
		alert(a+" "+b+" "+c+" "+d+" "+e+" "+f+" "+g+" "+h+" "+i+" "+j+" "+k+" "+l+" "+m+" "+n);
});


	

function contraseña(elemento, dv){
	/*
	if($("#txt-contraseña").val() === ""){
		document.getElementById("td-contraseña").innerHTML = "No puedes dejar este campo en blanco.";
	}else{
		document.getElementById(dv).innerHTML = "";
		if ($("#txt-confirContraseña").val() === "") {
			document.getElementById("td-confirContraseña").innerHTML = "No puedes dejar este campo en blanco."
		}else{
			if ($("#txt-contraseña").val() != $("#txt-confirmacionContraseña").val()) {
				document.getElementById("td-confirContraseña").innerHTML = "Las contraseñas no coinciden. ¿Quieres volver a intentarlo?";
			}else{
			alert("kksdjfñl");
				document.getElementById("td-confirContraseña").innerHTML = "";
			}
		}
	}
	*/
}

function registrar(){
	if($("#txt-nombre").val() === "" || 
		$("#txt-apellido").val() === "" ||
		$("#txt-usuario").val() === "" ||
		$("#txt-contraseña").val() === "" ||
		$("#txt-confirContraseña").val() === "" ||
		$("#data-fechaNacimento").val() === "" ||
		$("#txt-telefono").val() === "" ||
		$("#txt-correo").val() === "") {
		document.getElementById("td-campos").innerHTML = "Llenar todos los campos.";
		return false;

	}
}