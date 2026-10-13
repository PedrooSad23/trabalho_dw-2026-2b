<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h2>Lista de usuario</h2>

    <table>
        <tr>
            <td>id</td>
            <td>username</td>
            <td>usuario</td>
            <td>name</td>
            <td>email</td>
            <td>senha</td>
            <td>foto</tr>
        </tr>

        <?php
        require_once "../conexao.php";
        
        $sql = "SELECT * FROM usuario";
        
        $resultados = mysqli_query($conexao, $sql);
        
        //quebra a variável $resultados em linhas (vetores/array)
        while ($linha = mysqli_fetch_array($resultados)) {
            $id = $_GET['id_usuario'];
            $username_cliente = $_GET['username'];
            $usuario = $_GET['usuario'];
            $name = $_GET['name'];
            $email = $_GET['email'];
            $senha = $_GET['senha'];
            $foto = $_GET[''];
            }
              
            ?>


</body>
</html>