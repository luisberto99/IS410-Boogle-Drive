
	function validar(elemento, dv){
		var campo = $("#"+ elemento).val();
		if(campo === ""){
			document.getElementById(dv).innerHTML = "No puedes dejar este campo en blanco.";
		}else{
			document.getElementById(dv).innerHTML = "";
		}
		$('[data-toggle="popover"]').popover('hide');
	}

function contraseña(elemento, dv){
	if ($("#txt-contraseña").val() === "" || $("#txt-confirmacionContraseña").val() === "") {
		document.getElementById("td-confirContraseña").innerHTML = "";
		validar(elemento, dv);
	}else{
		if ($("#txt-contraseña").val() != $("#txt-confirmacionContraseña").val()) {
			document.getElementById("td-confirContraseña").innerHTML = "Las contraseñas no coinciden. ¿Quieres volver a intentarlo?";
		}
	}
}
