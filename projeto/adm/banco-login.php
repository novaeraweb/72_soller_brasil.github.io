<?php
	 function validaUsuario($soller, $user, $senha) {
		$senhaMd5 = md5($senha);
		$user = mysqli_real_escape_string($soller, $user);
	 	$query = "SELECT * FROM usuario WHERE user='$user' AND senha='$senhaMd5' AND tipo='admin' AND ativo='Sim'";
	 	$resultado = mysqli_query($soller, $query);
	 	$usuario = mysqli_fetch_assoc($resultado);	
	 	return $usuario;
	}



