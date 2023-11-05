<?php


function teste($id) {
    include_once('conexao.php');
    try {
        $stmt = $conexao->prepare('UPDATE tb_adm SET  
            ds_email = :email,
            ds_senha = :senha
            WHERE id_adm =', $id);
    
        $stmt->bindParam(':usuario', $usuario);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':senha', $senha);
    
    
        $stmt->execute();
        echo "<h1>USUARIO ALTERADO COM SUCESSO</h1>";
    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }
}

$usuario = $_GET['usuario'];
$email = $_GET['email'];
$senha = $_GET['senha'];


?>
