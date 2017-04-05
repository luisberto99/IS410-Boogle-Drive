	
	$('[data-toggle="popover"]').popover('hide');

	function validar(elemento, dv){
		var campo = $("#"+ elemento).val();
		if(campo === ""){
			document.getElementById(dv).innerHTML = "No puedes dejar este campo en blanco.";
		}else{
			document.getElementById(dv).innerHTML = "";
		}
	}

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