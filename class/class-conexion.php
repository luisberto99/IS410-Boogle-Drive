<?php

	class Conexion{

		private $host = "127.0.0.1";
		private $puerto = 3306;
		private $usuario = "root";
		private $contrasena = "";
		private $baseDatos = "boogledrive";
		private $enlace;

		public function __construct(){}

		public function establecerConexion(){
			$this->enlace = mysqli_connect($this->host, $this->usuario,$this->contrasena, $this->baseDatos, $this->puerto);
			if (!$this->enlace) {
			    echo "Error: No se pudo conectar a MySQL.<br>";
			    echo "Codigo Error: " . mysqli_connect_errno() . "<br>";
			    echo "Mensaje Error: " . mysqli_connect_error() . "<br>";
			    exit;
			}
			//echo "Conexion Satisfactoria";
		}

		public function cerrarConexion(){
			mysqli_close($this->enlace);
		}

		public function ejecutarInstruccion($sql){
			return $this->enlace->query($sql);
		}

		public function obtenerRegistro($resultado){
			return mysqli_fetch_array($resultado);
		}

        public function cantidadRegistros($resultado){
			return mysqli_num_rows($resultado);
		}
		
		public function getHost(){
			return $this->host;
		}
		public function setHost($host){
			$this->host = $host;
		}
		public function getPuerto(){
			return $this->puerto;
		}
		public function setPuerto($puerto){
			$this->puerto = $puerto;
		}
		public function getUsuario(){
			return $this->usuario;
		}
		public function setUsuario($usuario){
			$this->usuario = $usuario;
		}
		public function getContrasena(){
			return $this->contrasena;
		}
		public function setContrasena($contrasena){
			$this->contrasena = $contrasena;
		}
		public function getBaseDatos(){
			return $this->baseDatos;
		}
		public function setBaseDatos($baseDatos){
			$this->baseDatos = $baseDatos;
		}
		public function getEnlace(){
			return $this->enlace;
		}
		public function setEnlace($enlace){
			$this->enlace = $enlace;
		}
		public function __toString(){
			return "Host: " . $this->host . 
				" Puerto: " . $this->puerto . 
				" Usuario: " . $this->usuario . 
				" Contrasena: " . $this->contrasena . 
				" BaseDatos: " . $this->baseDatos;
		}
	}
?>