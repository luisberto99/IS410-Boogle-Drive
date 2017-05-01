function pop(){
	$('[data-toggle="popover"]').popover('hide');
}


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
	var n=$("#slc-genero").val();
	 var dato=new Array();
	dato[0]=a;
	dato[1]=b;
	dato[2]=c;
	dato[3]=d;
	dato[4]=e;
	dato[5]=f;
    dato[6]=g;
    dato[7]=h;
    dato[8]=i;
    dato[9]=j;
    dato[10]=k;
    dato[11]=l;
    dato[12]=m;
    dato[13]=n;
    for (var z = 0; z < dato.length; z++) {
           if (dato[z]==null || dato[z].length == 0 || /^\s+$/.test(dato[z])) {
           	if (dato[z]==a) 
           		$("#nombre").addClass('has-error');
           	
           	if (dato[z]==b) 
                $("#apellido").addClass('has-error');

           	if (dato[z]==c) 
           		$("#usuario").addClass('has-error');

            if (dato[z]==d ) 
           	    $("#correo").addClass('has-error');

           	if (dato[z]==h)
           		$("#telefono").addClass('has-error');

           	if (dato[z]==g) 
           	    $("#fechaNacimento").addClass('has-error');

           	if (dato[z]==l) 
           	    $("#respuesta1").addClass('has-error');

           	if (dato[z]==m) 
           	    $("#respuesta2").addClass('has-error');

           	if (dato[z]==e) 
           	    $("#contrasena").addClass('has-error');

           	if (dato[z]==f) 
           	    $("#confirContrasena").addClass('has-error');

           }else{

           	if (dato[z]==a){ 
           		if (dato[z].match(/^[a-zA-Z]+$/)) {
           			if ((dato[z].length>=2 && dato[z].length<=12)) {
           		      $("#nombre").removeClass('has-error');
           		   }else{
           		   	    
           		   	  $("#nombre").addClass('has-error');
           		   }
           	    }else{
           	    	$("#nombre").addClass('has-error');
           	    }
           	}

           	if (dato[z]==b) {
                if (dato[z].match(/^[a-zA-Z]+$/)) {
           		  if ((dato[z].length>=2 && dato[z].length<=12)) {
           		      $("#apellido").removeClass('has-error');
           		   }else{
           		   	    
           		   	  $("#apellido").addClass('has-error');
           		   }
           	    }else{
           	    	$("#apellido").addClass('has-error');
           	    }
           	}

           	if (dato[z]==c) {
           		if (/^[A-Za-z\d.]{4,15}$/.test(dato[z])) {
           		  $("#usuario").removeClass('has-error');
           	    }else{
           	      $("#usuario").addClass('has-error');
           	    }
           	}

            if (dato[z]==d){ 

            	if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{3})+$/.test(dato[z]))) {
            		$("#correo").addClass('has-error');
            	}else{
            		$("#correo").removeClass('has-error');
            	}
           	 }

           	if (dato[z]==h){ 
           		if (!/^\+\d{2,3}\s\d{9}$/.test(dato[z])) {
           			$("#telefono").addClass('has-error');
           		}else{
           			$("#telefono").removeClass('has-error');
           		}
           }

           	if (dato[z]==g) 
           	    $("#fechaNacimento").removeClass('has-error');
           	

           	if (dato[z]==l) {
           		if (/^[a-zA-Z\s]{1,12}$/.test(dato[z])) {
           			$("#respuesta1").removeClass('has-error');
           		}else{
                    $("#respuesta1").addClass('has-error');
           		}  
           	}

           	if (dato[z]==m){

           		if (/^[a-zA-Z\s]{1,12}$/.test(dato[z])) {
           			$("#respuesta2").removeClass('has-error');
           		}else{
                    $("#respuesta2").addClass('has-error');
           		}  
           	} 
           	    

           	if (dato[z]==e) {
           		if (!/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{4,12}$/.test(dato[z])) {
                     $("#contrasena").addClass('has-error');
           		}else{
           			 $("#contrasena").removeClass('has-error');
           		}
           	  } 

           	if (dato[z]==f) {
           		if(f==e){
                  if (!/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{4,12}$/.test(dato[z])) {
           	         $("#confirContrasena").addClass('has-error');
                  }else{
                     $("#confirContrasena").removeClass('has-error');
                  }
           	    }else{
                     $("#confirContrasena").addClass('has-error');
           	    }
            }

            if (dato[z]==i) {
            	if(dato[z]==0){
           	      $("#ubicacion").addClass('has-error');
           	    }else{
                   $("#ubicacion").removeClass('has-error');
           	    }
            }

           	if (dato[z]==j) {
           		if(dato[z]==0){
           	      $("#preguntass").addClass('has-error');
           	    }else{
                  $("#preguntass").removeClass('has-error');
           	    }
           	}

           	if (dato[z]==k) {
           		if(dato[z]==0){
           	      $("#22").addClass('has-error');
           	    }else{
                  $("#22").removeClass('has-error');
           	    }
           	}

           	if (dato[z]==n) {
               if (dato[z]==0) {
               	 $("#genero").addClass('has-error');
               }else{
               	 $("#genero").removeClass('has-error');
               }
           	}

           
        }
    }
		//alert(a+" "+b+" "+c+" "+d+" "+e+" "+f+" "+g+" "+h+" "+i+" "+j+" "+k+" "+l+" "+m+" "+n);
});



