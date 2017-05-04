function seleccion(id){
	$(id).addClass("Seleccionada");
	$($("#seleccion").val()).removeClass("Seleccionada");
	$("#seleccion").val(id);
}


function abrirCarpeta(id){
	window.location = "../my-drive/abrirCarpeta.php?carpeta="+id;	
}

function subirArchivo(){
	alert("llkajdfla");
}
