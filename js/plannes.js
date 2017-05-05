$("#preciobtn1").click(function(){
	$("#oculto").val(1);
  $("#planees").modal('show');
  
});

$("#preciobtn2").click(function(){
$("#oculto").val(2);
  $("#planees").modal('show');
});

$("#preciobtn3").click(function(){
$("#oculto").val(3);
  $("#planees").modal('show');
});

$("#preciobtn4").click(function(){
$("#oculto").val(4);
  $("#planees").modal('show');
});

$("#preciobtn5").click(function(){
$("#oculto").val(5);
  $("#planees").modal('show');
});

$("#preciobtn6").click(function(){
$("#oculto").val(6);
  $("#planees").modal('show');
});

$("#preciobtn7").click(function(){
	$("#oculto").val(7);
  $("#planees").modal('show');
});

$("#btn-aceptar").click(function(){
	var p="codigo="+$("#oculto").val();

	$.ajax({

        url:"../ajax/planes.php?accion=1",
		data:p,
		method:"POST",
        dataType:'json',
        success:function(respuesta){
          if (respuesta.codigo==1) {
          	if (respuesta.plan_anterior==1) {
              $(".pad1").html('<button id="preciobtn1">0 $/mes</button>');  
          	}
          	if (respuesta.plan_anterior==2) {
              $(".pad2").html('<button id="preciobtn2">1.99 $/mes</button>'); 
          	}
          	if (respuesta.plan_anterior==3) {
              $(".pad3").html('<button id="preciobtn3">9.99 $/mes</button>');
          	}
          	if (respuesta.plan_anterior==4) {
             $(".pad4").html('<button id="preciobtn4">19.99 $/mes</button>'); 
          	}
          	if (respuesta.plan_anterior==5) {
             $(".pad5").html('<button id="preciobtn5">99.99 $/mes</button>'); 
          	}
          	if (respuesta.plan_anterior==6) {
             $(".pad6").html('<button id="preciobtn6">199.99 $/mes</button>'); 
          	}
          	if (respuesta.plan_anterior==7) {
             $(".pad7").html('<button id="preciobtn7">299.99 $/mes</button>'); 
          	}

          	$("."+respuesta.variable).html(respuesta.comando);
          	$("#respuesta2").html("<div class='bg-success'><center>"+respuesta.mensaje+"</center></div>");
          }

        }

		
	});
});