<!DOCTYPE html>
<head>
    <title>TESTE</title>
</head>
<body>

<?php


$id = strip_tags($_GET['id']);
$deletando_dados = $pdo->prepare("DELETE FROM usuarios WHERE id = '$id'");
$deletando_dados->execute();

if ($deletando_dados):
    echo '<script>alert("Produto deletado com sucesso!")</script>';
    echo '<script>window.location="deletar.php"</script>';
endif;
?>
</body>


