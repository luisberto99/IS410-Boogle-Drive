function seleccion(id){
	if ($("#seleccion").val() == 0) {
		$(id).toggleClass("Seleccionada");
		$("#seleccion").val(id);
	}else{
		$(id).toggleClass("Seleccionada");
		$($("#seleccion").val()).toggleClass("Seleccionada");
		$("#seleccion").val(id);
	}
}


function abrirCarpeta(id){
	window.location = "../my-drive/abrirCarpeta.php?carpeta="+id;
	
}
