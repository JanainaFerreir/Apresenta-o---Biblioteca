<?php

include('conexao.php');


//$cpf = isset($_POST['cpf']) ? $_POST['cpf'] : '';

if (isset($_POST['submit']) )

{

    $nome = $_POST['nome'];

    $email = $_POST['email'];

    $cpf = $_POST['cpf'];

    $senha = $_POST['senha'];

    $sexo = isset($_POST['sexo']) ? $_POST['sexo'] : '';

    $idade = $_POST['idade'];

    $cpfUser = $_POST['cpf'];

    function validaCPF($cpf) {

    

        // Verifica se um número foi informado

        if(empty($cpf)) {

            return false;

        }

    

        // Elimina possivel mascara

        $cpf = preg_replace("/[^0-9]/", "", $cpf);

        $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);

        

        // Verifica se o numero de digitos informados é igual a 11 

        if (strlen($cpf) != 11) {

            return false;

        }

    

        // Verifica se nenhuma das sequências invalidas abaixo 

        // foi digitada. Caso afirmativo, retorna falso

        else if ($cpf == '00000000000' || 

            $cpf == '11111111111' || 

            $cpf == '22222222222' || 

            $cpf == '33333333333' || 

            $cpf == '44444444444' || 

            $cpf == '55555555555' || 

            $cpf == '66666666666' || 

            $cpf == '77777777777' || 

            $cpf == '88888888888' || 

            $cpf == '99999999999') {

            return false;

    

         // Calcula os digitos verificadores para verificar se o

         // CPF é válido

         } else {   

            

            for ($t = 9; $t < 11; $t++) {

                

                for ($d = 0, $c = 0; $c < $t; $c++) {

                    $d += $cpf{$c} * (($t + 1) - $c);

                }

                $d = ((10 * $d) % 11) % 10;

                if ($cpf{$c} != $d) {

                    return false;

                }

            }

    

            return true;

        }

    }



    if (validaCPF($cpfUser) == true)

    {

        $inserir = mysqli_query($conn, ("INSERT INTO CLIENTE (nome,email,sexo,dt_nascimento,cpf, senha) VALUES ('$nome','$email','$sexo','$idade','$cpf','$senha')")) or die ("Erro na conexão");

        $catch_id = mysqli_query($conn, ("SELECT id FROM CLIENTE WHERE email = '$email'"));

    	$registros = $catch_id->fetch_assoc();

    	$id = $registros['id'];

	echo $id;
        echo "<script>window.location.href='pagina.php?id=$id'</script>";

    }else{

        echo "<script>alert('O CPF não é valido. Digite novamente.');</script>";

    }

} 



?>



<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Cadastro</title>

    <link rel="stylesheet" type="text/css" media="screen" href="css2.css">

    <script src="valida.js"></script>

</head>

<body>

    <form action="" method="post">

    <font color="#7800ba">

        <div id="div2">

            <center>

            <img src="_img/oteca.png" id="img"><br>

                

        <input type="text" name="nome" class="user" placeholder="  Nome" onblur="vnome()" id="nome"><p> 

        

        <input type="email" name="email" class="user" id="email" placeholder="  E-mail" onblur="vemail()"><p>

        <input type="number" class="user" name="cpf" placeholder="  CPF (apenas números)" onblur="vcpf()" id="cpf" ><p>

        

        <input type="password" name="senha" class="user" placeholder="  Senha" id="senha" onblur="vsenha()"><p>

        <input type="password" name="senha" class="user" placeholder="  Confirme sua senha" onblur="vsenha2()" id="senha2"><p>



        <label for="idade" class="label">Idade: </label>

        <input type="date" name="idade" class="user" id="idade" onblur="vidade()"><p>        



        <input type="radio" name="sexo" id="sexo" value="M" class="sexo"><span class="label">Masculino</span>

        <input type="radio" name="sexo" id="sexo" value="F" class="sexo"><span class="label">Feminino</span><p>

        

        <input type="submit" name="submit" value="Sign up" id="button" onclick="valida()">

            </center>

        </div>

    </font>  

   </form>

</body>

</html>