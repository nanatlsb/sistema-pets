<?php

include_once('conexao.php');
	try 
	{
		$delete = $conexao->prepare("DELETE FROM tb_adm WHERE nm_usuario = $usuario");
		$delete->execute();
		echo "<h1>Usuario excluido com sucesso !</h1>";
	} 
	catch (PDOException $e) 
	{
		echo 'ERROR: ' . $e->getMessage();
	}
	
 ?>
