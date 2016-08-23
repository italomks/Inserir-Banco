<?php
/**
 * Created by PhpStorm.
 * User: italo
 * Date: 22/08/16
 * Time: 13:44
 */

include 'index.php';


?>

<form action="cadastrar_usuario.php" method="post">
    <input type="text" name="id" placeholder="ID"><br>
    <input type="text" name="nome" placeholder="Nome"><br>
    <input type="text" name="sobrenome" placeholder="Sobrenome"><br>
    <input type="email" name="email" placeholder="Email"><br>
    <input type="password" name="senha" placeholder="Senha"><br>
    <input type="submit" name="Cadastrar">
</form>

