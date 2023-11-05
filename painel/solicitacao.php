<!DOCTYPE html>
<html>
<head>
    <title>Lista de Usuários</title>
</head>
<style>
body{
    background-color: #e3dede;
    text-align: center;
}

h1{
    font-weight: bold;
}

.div{
    margin: 0 auto;
    width: 50%; 
}
.table{
    text-align: center;
    color: #fff;
    background: linear-gradient(112.1deg, rgb(32, 38, 57) 11.4%, rgb(63, 76, 119) 70.2%);
    border-radius: 10px;
}
</style>
<body>
    <div class="div">
    <table class="table">
    <h1>Lista de solicitações de adoção</h1>
            <th scope="col">Nome: </th>
            <th scope="col">Nome do animal:  </th>
            <th scope="col">CPF: </th>
            <th scope="col">Cel: </th>
            <th scope="col">Email: </th>
            <th scope="col">Nasc: </th>

        </tr>

        <?php
        include_once('../php/conexao.php');

        try {
            $stmt = $conexao->prepare('SELECT * FROM tb_usuario');
            $stmt->execute();
            $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

            foreach ($resultados as $row) {
                echo '<tr>';
                echo '<td>' . $row['nm_usuario'] . '</td>';
                echo '<td>' . $row['nm_animal'] . '</td>';
                echo '<td>' . $row['cd_cpf'] . '</td>';
                echo '<td>' . $row['num_cel'] . '</td>';
                echo '<td>' . $row['ds_email'] . '</td>';
                echo '<td>' . $row['dt_nasc'] . '</td>';
            
                echo '</tr>';
            }
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
        ?>
    </table>
    </div>
</body>
</html>
