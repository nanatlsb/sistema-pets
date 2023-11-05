<?php
if (!empty($_POST)) {
    include_once 'conexao.php';

   
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $senha = $_POST['senha']; 
    $confirma_senha = $_POST['confirma_senha'];

    if ($senha == "") {
        $mensagem = "<span class='aviso'><b>Aviso</b>: Senha não foi alterada!</span>";
    } else if ($senha == $confirma_senha) {
        $mensagem = "<span class='sucesso'><b>Sucesso</b>: As senhas são iguais: ".$senha."</span>";
    } else {
        $mensagem = "<span class='erro'><b>Erro</b>: As senhas não conferem!</span>";
    }
    echo "<p id='mensagem'>".$mensagem."</p>";
   
    $stmt = $conexao->prepare("INSERT INTO tb_adm(ds_email, 
                                                    ds_senha,
                                                    nm_usuario)
                              VALUES(?,?,?)");

    $stmt->bindParam(1, $email);
    $stmt->bindParam(2, $senha);
    $stmt->bindParam(3, $usuario);

    $stmt->execute();

    echo "<script>
            alert('Usuário cadastrado sucesso!');
          </script>";
} else {
    var_dump($_POST);
    echo "Não foi possível cadastrar";
}
?>