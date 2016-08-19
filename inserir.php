<?php
/**
 * Created by PhpStorm.
 * User: italo
 * Date: 18/08/16
 * Time: 15:39
 */
include 'funcoes.php';

if ($_POST) {
    cadastrarUsuario($_POST);
}

?>

<form action="inserir.php" method="post">    <input type="text" name="nome" placeholder="Nome"><br>
    <input type="text" name="sobrenome" placeholder="Sobrenome"><br>
    <input type="email" name="email" placeholder="Email"><br>
    <input type="password" name="senha" placeholder="Senha"><br>    <input type="submit" name="Cadastrar">
</form>




