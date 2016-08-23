<!doctype html>
    <head>
        <title>PDO</title>
    </head>
    <body>

        <?php

            include 'index.php';

            if ($_POST){
                excluirUsuario($_POST['id_usuario']);
            }

            $buscar_dados = buscarDados();
        ?>

            <form method="post" action="deletar.php">
                  <table border="1px solid black">

                    <tr style="background-color: #333;color: #fff; font-family: Montserrat; text-align: center;">
                       <td>ID:</td>
                       <td>Nome:</td>
                       <td>Sobrenome:</td>
                       <td>Email:</td>
                       <td>Senha:</td>
                       <td>Excluir:</td>
                    </tr>
                <?php
                    foreach ($buscar_dados as $mostrar_dados) {
                ?>
                <tr style="font-family: Montserrat; text-align:center;">
                    <td><?= $mostrar_dados['id'] ?></td>
                    <td><?= $mostrar_dados['nome'] ?></td>
                    <td><?= $mostrar_dados['sobrenome'] ?></td>
                    <td><?= $mostrar_dados['email'] ?></td>
                    <td><?= $mostrar_dados['senha'] ?></td>
                    <td><button name="id_usuario" type="submit"  value="<?php echo $mostrar_dados['id']; ?>">Excluir</button></td>
                    </td>
                </tr>
                <?php
            }
        ?>
                      </table>
            </form>
    </body>
