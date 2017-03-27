<?php


	class Usuario{

		protected $nombre;
		protected $apellido;
		protected $nombreUsuario;
		protected $creaContraseña;
		protected $confirmacionContraseña;
		protected $fechaNacimiento;
		protected $genero;
		protected $celular;
		protected $correoElectronico;
		protected $ubicacion;
		
		

		public function __construct(
			 $nombre,
			 $apellido,
			 $nombreUsuario,
			 $creaContraseña,
			 $confirmacionContraseña,
			 $fechaNacimiento,
			 $genero,
			 $celular,
			 $correoElectronico,
			 $ubicacion){
		
					$this->nombre=$nombre;
					$this->apellido=$apellido;
					$this->nombreUsuario=$nombreUsuario;
					$this->creaContraseña=$creaContraseña;
					$this->confirmacionContraseña=$confirmacionContraseña;
					$this->fechaNacimiento=$fechaNacimiento;
					$this->genero=$genero;
					$this->celular=$celular;
					$this->correoElectronico=$correoElectronico;
					$this->ubicacion=$ubicacion;
		}			
		public function getNombre(){
			return $this->nombre;
		}
		public function setNombre($nombre){
			$this->nombre= $nombre;
		}

		public function getApellido(){
			return $this->apellido;
		}
		public function setApellido($apellido){
			$this->apellido= $apellido;
		}

		public function getNombreUsuario(){
			return $this->nombreUsuario;
		}
		public function setNombreUsuario($nombreUsuario){
			$this->nombre= $nombreUsuario;
		}

		public function getCreaContraseña(){
			return $this->creaContraseña;
		}
		public function setCreaContraseña($creaContraseña){
			$this->creaContraseña= $creaContraseña;
		}

		public function getConfirmaContraseña(){
			return $this->confirmacionContraseña;
		}
		public function setConfirmacionContraseña($confirmacionContraseña){
			$this->confirmacionContraseña= $confirmacionContraseña;
		}

		public function getFechaNacimiento(){
			return $this->fechaNacimiento;
		}
		public function setFechaNacimiento($fechaNacimiento){
			$this->fechaNacimiento= $fechaNacimiento;
		}

		public function getGenero(){
			return $this->genero;
		}
		public function setGenero($genero){
			$this->genero= $genero;
		}

		public function getCelular(){
			return $this->celular;
		}
		public function setCelular($celular){
			$this->celular= $celular;
		}


		public function getCorreo(){
			return $this->cantPaginas;
		}
		public function setCorreo($correoElectronico){
			$this->correoElectronico = $correoElectronico;
		}

		public function getUbicacion(){
			return $this->ubicacion;
		}
		public function setUbicacion($ubicacion){
			$this->ubicacion= $ubicacion;
		}


		public function __toString(){
			
			return $this->nombre . ",".
				 $this->apellido . ",".
				 $this->nombreUsuario.",".
				 $this->creaContraseña.",".
				 $this->confirmacionContraseña.",".
				 $this->fechaNacimiento . ",".
				 $this->genero . ",".
				 $this->celular.",".
				 $this->correoElectronico . ",".
				 $this->ubicacion;
				
		}


		public function guardarRegistro(){
			$archivo = fopen("data/usuariosRegistrados.csv","a+");
			fwrite($archivo, $this->__toString() .PHP_EOL);
			fclose($archivo);
		}
	}
?>