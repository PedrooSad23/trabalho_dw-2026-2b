<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<a href="form_postagem.php">Fazer nova postagem</a>

<?php

require_once "conexao.php";
require_once "verificar_login.php";
$id_logado = $_SESSION['idusuario'];

?>
</body>


</html>