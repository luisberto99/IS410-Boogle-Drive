<?php
	session_start();
	session_destroy();
	header("Location:http://localhost/IS410-Boogle-Drive/entrarUsuario.php");
?>