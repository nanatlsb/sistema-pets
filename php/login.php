<?php
session_start();

if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))  {
    include_once('conexao.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $stmt = $conexao->prepare("SELECT * FROM tb_adm WHERE ds_email = :email and ds_senha = :senha");
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':senha', $senha);
    $stmt->execute();

    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($stmt->rowCount() > 0) {
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header('Location: ../painel/painel.php');
        exit();
    } 
    else {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: ../painel/login.html');
        echo "Usuario não cadastrado no banco";
}
        exit();
       
    }

?>
