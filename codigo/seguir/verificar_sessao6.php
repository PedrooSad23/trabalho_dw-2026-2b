<?php

session_start();

if (!isset($_SESSION['email'], $_SESSION['nome'], $_SESSION['idusuario'])) {
    header('Location: ../index.php');
    exit;
}

$email = $_SESSION ['email'];
$nome = $_SESSION ['nome'];
$idusuario = $_SESSION ['idusuario'];

?>