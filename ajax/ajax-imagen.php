<?php
session_start(); 

  if(!isset($_SESSION['codigo_usuario']))
    header('Location:http://localhost/IS410-Boogle-Drive/entrarUsuario.php');

 include_once("../class/class-conexion.php");
  $conexion = new Conexion();
  $conexion->establecerConexion();

if (isset($_FILES["file"]))
{
    $resultado=array();
    $file = $_FILES["file"];
    $nombre = $file["name"];
    $tipo = $file["type"];
    $ruta_provisional = $file["tmp_name"];
    $size = $file["size"];
    $dimensiones = getimagesize($ruta_provisional);
    $width = $dimensiones[0];
    $height = $dimensiones[1];
    $carpeta = "../imgprofile/";
    
    if ($tipo != 'image/jpg' && $tipo != 'image/jpeg' && $tipo != 'image/png' && $tipo != 'image/gif')
    {
    $resultado["codigo"]=0;
    $resultado["mensaje"]="<div class='bg-danger'><center>Error, el archivo no es una imagen</center></div>"; 
    echo json_encode($resultado);
    }
    else if ($size > 1024*1024)
    {
        $resultado["codigo"]=0;
      $resultado["mensaje"]="<div class='bg-danger'><center>Error, el tamaño máximo permitido es un 1MB</center></div>";
      echo json_encode($resultado);
    }
    else if ($width > 500 || $height > 500)
    {
        $resultado["codigo"]=0;
        $resultado["mensaje"]="<div class='bg-danger'><center>Error la anchura y la altura maxima permitida es 500px</center></div>";
        echo json_encode($resultado);
    }
    else if($width < 60 || $height < 60)
    {
        $resultado["codigo"]=0;
        $resultado["mensaje"]="<div class='bg-danger'><center>Error la anchura y la altura mínima permitida es 60px</center></div>";
        echo json_encode($resultado);
    }
    else
    {
        $src = $carpeta.$nombre;

     $sql = sprintf(
          "UPDATE tbl_usuarios SET fotografia='%s' WHERE codigo_usuario='%s'",
          $conexion->getEnlace()->real_escape_string(stripslashes($src)),
          $conexion->getEnlace()->real_escape_string(stripslashes($_SESSION['codigo_usuario']))
      );
      $resultadoInsert = $conexion->ejecutarInstruccion($sql);

       
 

      
      if ($resultadoInsert  === TRUE) {
        $resultado["codigo"]=1;
        $resultadoUsuario2=$conexion->ejecutarInstruccion("SELECT * FROM tbl_usuarios WHERE codigo_usuario=".$_SESSION["codigo_usuario"]."");
        $resultado['mensaje']='<div class="bg-success"><center>Exito, Fotografia Actualizada</center></div>';

     if($conexion->cantidadRegistros($resultadoUsuario2) >0) {
        $fila = $conexion->obtenerRegistro($resultadoUsuario2);
         $resultado["actualizar"]='<img src='.$fila["fotografia"].' class="configuracionNotificaciones" width="100" height="100" style="border-radius: 50%">';
         
     }
        
      } else {
        
        echo "Error: " . $sql ."<br>" . $conexion->getEnlace()->error;
      }

        move_uploaded_file($ruta_provisional, $src);

       echo json_encode($resultado);//  "<img src='$src'>";
    }
}else{
      $resultado["codigo"]=0;
       $resultado["mensaje"]="No hay archivo";
     echo json_encode($resultado);
}