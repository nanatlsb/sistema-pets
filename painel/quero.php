<?php
// Inclua o arquivo de configuração da conexão com o banco de dados
include "conexao.php";

// Calcula o deslocamento para a consulta SQL
$offset = ($pagina_atual - 1) * $registros_por_pagina;

// Consulta SQL para listar animais ativos, dos mais recentes aos mais antigos
$query = "SELECT * FROM tb_animal WHERE status = 'Ativo' ORDER BY data_cadastro DESC LIMIT $registros_por_pagina OFFSET $offset";
$result = $mysqli->query($query);

// Consulta para contar o número total de animais ativos
$total_animais = $mysqli->query("SELECT COUNT(*) as total FROM tb_animal WHERE status = 'Ativo'")->fetch_assoc();
$total_registros = $total_animais['total'];

// Calcular o número total de páginas
$total_paginas = ceil($total_registros / $registros_por_pagina);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Listagem de Animais para Adoção</title>
</head>
<body>
    <h1>Lista de Animais para Adoção</h1>

    <!-- Adicione filtros de pesquisa aqui -->

    <table>
        <tr>
            <th>Nome</th>
            <th>Espécie</th>
            <th>Raça</th>
            <th>Idade</th>
        </tr>
        <?php while ($animal = $result->fetch_assoc()) : ?>
            <tr>
                <td><?php echo $animal['nome']; ?></td>
                <td><?php echo $animal['especie']; ?></td>
                <td><?php echo $animal['raca']; ?></td>
                <td><?php echo $animal['idade']; ?></td>
            </tr>
        <?php endwhile; ?>
    </table>

    <!-- Adicione a navegação da paginação aqui -->
</body>
</html>
