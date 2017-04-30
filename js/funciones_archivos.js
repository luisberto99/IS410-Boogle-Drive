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

$(document).ready(function(){

})
