<?php
require_once "../conexao.php";
require_once "../verificar_login.php";

session_start();

$idseguidor = $_SESSION['idusuario'];
$idseguindo = $_GET['id'];

$resultado = mysqli_query($conexao, "SELECT * FROM seguir WHERE idseguidor = $idseguidor AND idseguindo = $idseguindo");

if (mysqli_num_rows($resultado) > 0) {
    mysqli_query($conexao, "DELETE FROM seguir WHERE idseguidor = $idseguidor AND idseguindo = $idseguindo");

} else {
    mysqli_query($conexao, "INSERT INTO seguir VALUES ($idseguidor, $idseguindo)");
}

if (mysqli_num_rows($resultado) > 0) {
    mysqli_query($conexao, "INSERT INTO seguiur idseguidor != $idseguindo");
}

header("Location: ../perfil.php?id=$idseguindo");