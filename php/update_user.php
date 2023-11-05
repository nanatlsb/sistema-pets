<?php
include_once('conexao.php');

$usuario = $_GET['usuario'];
$email = $_GET['email'];
$senha = $_GET['senha'];

try {
    $stmt = $conexao->prepare('UPDATE tb_adm SET  
        ds_email = :email,
        ds_senha = :senha
        WHERE nm_usuario = :usuario');

    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':senha', $senha);
    $stmt->bindParam(':usuario', $usuario);

    $stmt->execute();
    echo "<h1>USUÁRIO ALTERADO COM SUCESSO</h1>";
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}
?>
