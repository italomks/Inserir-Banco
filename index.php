<?php
/**
 * Created by PhpStorm.
 * User: italo
 * Date: 18/08/16
 * Time: 15:51
 */
include 'conecao.php';

function cadastrarUsuario($dados) {

    $cadastrar = "
       INSERT INTO usuarios SET
           nome = '" . addslashes($dados['nome']) . "',
           sobrenome = '" . addslashes($dados['sobrenome']) . "',
           email = '" . addslashes($dados['email']) . "',
           senha = MD5('" . addslashes($dados['senha']) . "')";

    echo $cadastrar;

    return inserir($cadastrar);
}

function editarUsuario($dados) {

    $editar = "UPDATE curso_php_oop.usuarios SET 
            nome = '" . addslashes($dados['nome']) . "',
            sobrenome = '" . addslashes($dados['sobrenome']) . "',
            email = '" . addslashes($dados['email']) . "',
            senha= MD5('" . addslashes($dados['senha']) . "')
            where id = {$dados['id']}";

    return editar($editar);
}