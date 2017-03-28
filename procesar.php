<!DOCTYPE html>
<html>
<head>
	<title>Procesar</title>
</head>
<body>
<?php


 $archivo = fopen("data/usuarios.csv","r") or die("No se pudo abrir el archivo :(");
    // Output one line until end-of-file
    $usuarios = array();
    $partes = array();
    while(!feof($archivo)) {
      $linea = fgets($archivo);
      $partes = explode(",",$linea);
      if (sizeof($partes)>1){
        $usuarios[] = new Usuario(
            $partes[0],
            $partes[1],
            $partes[2],
            $partes[3],
            $partes[4],
            $partes[5],
            $partes[6],
            $partes[7],
            $partes[8],
            $partes[9]
        );
      }
    }
    fclose($archivo);

?>
</body>
</html>