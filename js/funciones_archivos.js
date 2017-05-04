function seleccion(id){
	$(id).addClass("Seleccionada");
	$($("#seleccion").val()).removeClass("Seleccionada");
	$("#seleccion").val(id);
}


function abrirCarpeta(id){
	window.location = "../my-drive/abrirCarpeta.php?carpeta="+id;	
}

function subirArchivo(){
$("#subir").click();
}

$("input[name='subir']").on("change", function(){
	  var formData = new FormData($("#subirArchivo")[0]);
	  var ruta = "../ajax/SubirArchivo.php";
	  $.ajax({
                url: ruta,
                type: "POST",
                dataType: 'html',
                data: formData,
                contentType: false,
                processData: false,
                success: function(datos)
                {
                	alert(datos);
                	$('#explorador').attr('src', $('#explorador').attr('src'));
                },
			    error: function(xhr, textStatus, error){
			      console.log(xhr.statusText);
			      console.log(textStatus);
			      console.log(error);
  }
            });

});

function archivo(src){
	$.ajax({
		url: "../ajax/SubirArchivo.php",
		type: "POST",
		data: "src="+src,
        dataType: 'html',
        success: function(datos)
        {
        	$("#aside").html(datos);
        	if (data.ingreso)
        	  alert("Se agrego con exito.");
			else
			 alert("Ha habido un error.");      
        },
         error: function(xhr, textStatus, error){
      console.log(xhr.statusText);
      console.log(textStatus);
      console.log(error);
  }


	});
}