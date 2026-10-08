<?php
require_once "../conexao.php";
require_once "../verificar_login.php";

$idseguidor = $_SESSION['idusuario'];
$idseguindo = $_GET['id'];

$res = mysqli_query($conexao, "SELECT * FROM seguir WHERE idseguidor = $idseguidor AND idseguindo = $idseguindo");

if (mysqli_num_rows($res) > 0) {
    mysqli_query($conexao, "DELETE FROM seguir WHERE idseguidor = $idseguidor AND idseguindo = $idseguindo");
} else {
    mysqli_query($conexao, "INSERT INTO seguir VALUES ($idseguidor, $idseguindo)");
}

header("Location: perfil.php?id=" . $idseguindo);