<?php
try{
$conexao = new PDO(
    'mysql:host=localhost;
    dbname=db_sistema',
    'root',
    '');
} catch (PDOException $e){
    echo $e->getMessage();
}

?>