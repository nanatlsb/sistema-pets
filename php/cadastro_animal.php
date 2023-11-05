<?php
if (!empty($_POST)) {
    include_once 'conexao.php';

    $img = $_POST['img'];
    $especie = $_POST['especie'];
    $raca = $_POST['raca'];
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $porte = $_POST['porte'];
    $local = $_POST['local'];
    $sobre = $_POST['sobre'];
    $sexo = $_POST['sexo'];
    $status = $_POST['status'];

    $stmt = $conexao->prepare("INSERT INTO tb_animal(img_caminho, 
                                                    nm_especie,
                                                    nm_raca,
                                                    nm_animal,
                                                    ds_porte,
                                                    ds_local,
                                                    ds_sobre,
                                                    ds_status,
                                                    ds_sexo,
                                                    cd_idade)
                              VALUES(?,?,?,?,?,?,?,?,?,?)");

    $stmt->execute([$img, $especie, $raca, $nome, $porte, $local, $sobre, $status, $sexo, $idade]);

    echo "<script>
            alert('Animal cadastrado com sucesso!');
          </script>";
} else {
    var_dump($status);
    echo "Não foi possível cadastrar";
}
?>
