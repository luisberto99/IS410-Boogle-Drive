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

/*$("#subir").on("change", function(){
	  var formData = new FormData($("#subirArchivo")[0]);
	  var ruta = "../ajax/SubirArchivo.php";
	  $.ajax({
                url: ruta,
                type: "POST",
                dataType:'',
                data: formData,
                contentType: false,
                processData: false,
                success: function(datos)
                {

                	$("#aside").html(datos); 
                	alert("hola");                 
                }
            });

});*/
function archivo(src){
	$.ajax({
		url: "../ajax/SubirArchivo.php",
		type: "POST",
		data: "src="+src,
        dataType: 'html',
        success: function(datos)
        {
        	  alert(datos);      
        },
         error: function(xhr, textStatus, error){
      console.log(xhr.statusText);
      console.log(textStatus);
      console.log(error);
  }


	});
}