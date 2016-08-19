<?php

function conectar() {
    return new PDO('mysql:host=localhost;dbname=curso_php_oop', 'root', '18201511');
}


function pesquisar($sql) {
    $conexao = conectar();
    $statement = $conexao->query($sql, PDO::FETCH_ASSOC);
    return $statement->fetchAll();
}
function inserir($sql) {
    $conexao = conectar();
    $statement = $conexao->exec($sql);
    return $conexao->lastInsertId();
}
function excluir($sql) {
    $conexao = conectar();
    $statement = $conexao->query($sql);
    return $statement->execute();
}
function editar($sql) {
    $conexao = conectar();
    $statement = $conexao->query($sql);
}