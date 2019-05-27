<?php

// CONEXÃO COM O DATABASE

include('conexao.php');


$email = isset($_POST['email']) ? $_POST['email'] : '';

$senha = isset($_POST['senha']) ? $_POST['senha'] : '';



if (isset($_POST['submit']) && $email != '' && $senha != '')

{

    $verificacao = mysqli_query($conn, ("SELECT * FROM CLIENTE WHERE (email = '$email' or cpf = '$email') and senha = '$senha'")) or die ("Erro na conexão");

    $catch_id = mysqli_query($conn, ("SELECT id from CLIENTE WHERE email = '$email' or cpf='$email'"));

    $registros = $catch_id->fetch_assoc();

    $id = $registros['id'];



    // VERIFICAÇÃO DA EXISTÊNCIA DE REGISTROS DAQUELE USUÁRIO

    if (mysqli_num_rows($verificacao) > 0){

        echo "<script> 

                alert ('Bem vindo(a)!');

                window.location.href='pagina.php?id=$id';

            </script>";

    }

    else if (mysqli_num_rows($verificacao) == 0)

        echo "<script> 

                alert ('E-mail ou senha incorretos.');

                window.location.href='index.php';

            </script>";

            

}

?>



<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" media="screen" href="css2.css">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Login</title>

</head>

<body>

    <form action="" method="POST">



        <div id="div1">

        <img src="_img/oteca.png" id="img"><br>

            <input type="text" name="email" id="email" placeholder="  E-mail ou CPF (apenas números)" class="user"><p></p>

            <input type="password" name="senha" id="password" placeholder="  Senha" class="user"><p></p>



            <input type="submit" value="Login" name="submit" id="button"><p></p>

            <a href="cadastro.php" id="ainda">Ainda não possui cadastro?</a>

        </div>

    </form>

</body>

</html>