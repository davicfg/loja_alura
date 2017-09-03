<?php
	function buscaUsuario($conexao,$email,$senha){
		$s_md5 = md5($senha);
		$query = "select * from usuarios where email='{$email}' and senha ='{$s_md5}'";
		//echo $query; exit;
		$rs= mysqli_query($conexao, $query);
		$usuario = mysqli_fetch_assoc($rs);
		return $usuario;
	}
	
?>
