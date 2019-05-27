<?php

include("conexao.php");

//é preciso pegar uma varíavel da tela de login para usar no where

//$login = $_pos['email'];dataLeitura, '%d-%m-%Y')

$id =$_GET['id'];

$consulta = "SELECT CLIENTE.nome  , LIVROS.nome  , date_format(dt_retirada,'%d-%m-%Y')   ,

date_format(dt_entrega,'%d-%m-%Y')  , taxa  FROM CLIENTE INNER JOIN EMPRESTIMO ON CLIENTE.id = 

EMPRESTIMO.id_cliente INNER JOIN LIVROS ON LIVROS.id = EMPRESTIMO.id_livro WHERE CLIENTE.ID = $id";

$con = mysqli_query($conn ,$consulta) or die($mysqli->error);

?>

<!DOCTYPE HTML>

<html>



<head>

    <meta charset="utf-8" />

  <title>Com você!</title>

  <meta name="description" content="website description" />

  <meta name="keywords" content="website keywords, website keywords" />

  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />

  <link rel="stylesheet" type="text/css" href="style/style7.css" title="style7" />

	<script src="lalala2.js"></script>
</head>

<body>

  <div id="main">

    <div id="header">

      <div id="logo">

        

      </div>



      <br>

      <br>

      <br>

      <br>

        </p>

      </p>

     

    <div id="site_content">

      <div class="sidebar">



      <img src="_img/oteca1.jpg">

        <h1>Com você!</h1>

        <p>Acompanhe na tabela ao lado os livros que estão com você.</p>

        

        

        

       

       

      </div>

      <div id="content">

      

            <center> <table border="1" id="tbl"> </center>

            

                <tr>

                    <caption id="aa"> Informações </caption>

                <td class="aa"><center>Livro</center></td>

                <td class="aa"><center>Data de entrega</center></td>

                </tr>

                <?php while($dado = $con->fetch_array()){ ?>

                <tr>

                <td class="vivi"><?php echo $dado['nome']?></td>

                <td class="vivi"><?php echo $dado["date_format(dt_entrega,'%d-%m-%Y')"]?></td>

                </tr>

            <?php }?>

                </table>

        

      </div>



</body>

</html> 