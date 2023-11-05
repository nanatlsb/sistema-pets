<?php
include_once('conexao.php');

try {
    $usuario = $_GET['usuario']; 

    $delete = $conexao->prepare("DELETE FROM tb_adm WHERE nm_usuario = :usuario");
    $delete->bindParam(':usuario', $usuario);
    $delete->execute();

    echo "<h1>Usuário excluído com sucesso!</h1>";
} catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
?>