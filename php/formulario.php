<?php
if (!empty($_POST)) {
    include_once 'conexao.php';


    $nome = $_POST['nome'];
    $nome_animal = $_POST['nome_animal']; 
    $cpf = $_POST['cpf'];
    $cel = $_POST['cel'];
    $email = $_POST['email'];
    $nasc = $_POST['nasc'];

    $stmt = $conexao->prepare("INSERT INTO tb_usuario(nm_usuario, 
                                                      nm_animal,
                                                      cd_cpf,
                                                      num_cel,
                                                      ds_email, 
                                                      dt_nasc)
                              VALUES(?,?,?,?,?,?)");

    $stmt->bindParam(1, $nome);
    $stmt->bindParam(2, $nome_animal);
    $stmt->bindParam(3, $cpf);
    $stmt->bindParam(4, $cel);
    $stmt->bindParam(5, $email);
    $stmt->bindParam(6, $nasc);

    $stmt->execute();

    echo "<script>
            alert('Solicitado com sucesso!');
          </script>";
} else {
    echo "Não foi possível solicitar adoção";
}

?>
