<?php

ini_set("display_errors",0);

include("conexao.php");

$id = $_GET['id'];

?>



<!DOCTYPE HTML>

<html>



<head>

    <meta charset="utf-8" />

  <title>Oteca.com</title>

  <meta name="description" content="website description" />

  <meta name="keywords" content="website keywords, website keywords" />

  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />

  <link rel="stylesheet" type="text/css" href="style/style7.css" title="style7" />

  <script src="lalala2.js"></script>

  <style></style> 

</head>

<form action="" method="post">

<body>

<!-- livros.php?id=<?php echo $id?> -->

  <div id="main">

    <div id="header">

      <div id="logo">

        

      </div>

        <input type="text" name="input" id="input" class="inputs">

        <input type="text" name="input2" id="input2" class="inputs">

        <input type="text" name="input3" id="input3" class="inputs">

        <input type="text" name="input4" id="input4" class="inputs">

        <input type="text" name="input5" id="input5" class="inputs">

        <input type="text" name="input6" id="input6" class="inputs">

        <input type="text" name="input7" id="input7" class="inputs">

        <input type="text" name="input8" id="input8" class="inputs">

        <input type="text" name="input9" id="input9" class="inputs">

        <input type="text" name="input10" id="input10" class="inputs">



      <br>

      <br>

      <br>

      <br>

        </p>

      </p>

     

    <div id="site_content">

      <div class="sidebar">

          

      <img src="_img/oteca1.jpg">

        <p>Dentre os livros ao lado, escolha os livros que mais combinam com você e viva aventuras!</p>

        

       

      </div>

      <div id="content">



      <form action="" method="post">

      

      <table border="1" id="tbl"> 

          <tr>

              <caption id="aa"> Disponíveis </caption>

          <td class="aa"><center>Livro</td>

          <td class="aa"><center>Livro</td>

          <tr>

          <td class="vivi"> Nome: <label name="lib1" id="span">Crave a Marca</label> <br>

              Quantidade disponível: <?php $quantidadedisponivel = "SELECT Qtd_disponivel FROM LIVROS WHERE id = 1";?>


                                     <?php $quantidade = mysqli_query($conn, $quantidadedisponivel) or die($mysqli->error);?>



						                                    

                                     <?php while($quantidaded = $quantidade->fetch_array()){

                                        if($quantidaded['Qtd_disponivel'] >= 1)

                                        echo $quantidaded["Qtd_disponivel"];



                                       elseif($quantidaded['Qtd_disponivel'] < 1)

                                        echo 'Indisponível';

                                        //echo '<br>';<

                                     ?> <br>


              Alugar:

              <input type="checkbox" name="chek1" class="chek" onclick="check()" id="chek1">

              <?php if($quantidaded['Qtd_disponivel'] < 1)

                        echo "<script>var c = document.getElementById('chek1'); c.disabled = true;</script>";

                                     }

                        ?> 

                        

          </td>

          <td class="vivi">Nome: <span name="lib2">Convergente</span> <br>

              Quantidade disponível: <?php $quantidadedisponivel = "SELECT Qtd_disponivel FROM LIVROS WHERE id = 2";

                                     $quantidade = mysqli_query($conn, $quantidadedisponivel) or die($mysqli->error);



                                     while($quantidaded = $quantidade->fetch_array()){

                                        if($quantidaded['Qtd_disponivel'] >= 1)

                                        echo $quantidaded["Qtd_disponivel"];

                                    

                                        elseif($quantidaded['Qtd_disponivel'] < 1)

                                        echo 'Indisponível';

                                     

                                        //echo '<br>';<

                                     ?><br>

              Alugar:

              <input type="checkbox" name="chek2" class="chek" onclick="check()" id="chek2">

              <?php if($quantidaded['Qtd_disponivel'] < 1)

                       

                       echo "<script>var c = document.getElementById('chek2'); c.disabled = true;</script>";

                    }

                        

              ?> 

          </td>

          <tr>

                  <td class="vivi"> Nome: <span name="lib3">Jogos Vorazes</span> <br>

                      Quantidade disponível: <?php $quantidadedisponivel = "SELECT Qtd_disponivel FROM LIVROS WHERE id = 3";

                                     $quantidade = mysqli_query($conn, $quantidadedisponivel) or die($mysqli->error);



                                     while($quantidaded = $quantidade->fetch_array()){

                                        if($quantidaded['Qtd_disponivel'] >= 1)

                                        echo $quantidaded["Qtd_disponivel"];

                                    

                                        elseif($quantidaded['Qtd_disponivel'] < 1)

                                        echo 'Indisponível';

                                     

                                        //echo '<br>';<

                                        ?> <br>

                      Alugar:

                      <input type="checkbox" name="chek3" class="chek" onclick="check()" id="chek3">

                      <?php if($quantidaded['Qtd_disponivel'] < 1)

                       

                       echo "<script>var c = document.getElementById('chek3'); c.disabled = true;</script>";

                    }

                        

              ?> 

                  </td>

                  <td class="vivi">Nome: Perdido em Marte <br> 

                      Quantidade disponível: <?php $quantidadedisponivel = "SELECT Qtd_disponivel FROM LIVROS WHERE id = 4";

                                     $quantidade = mysqli_query($conn, $quantidadedisponivel) or die($mysqli->error);



                                     while($quantidaded = $quantidade->fetch_array()){

                                        if($quantidaded['Qtd_disponivel'] >= 1)

                                        echo $quantidaded["Qtd_disponivel"];

                                    

                                        elseif($quantidaded['Qtd_disponivel'] < 1)

                                        echo 'Indisponível';

                                     

                                        //echo '<br>';<

                                        ?> <br>

                      Alugar:

                      <input type="checkbox" name="chek4" class="chek" onclick="check()" id="chek4">

                      <?php if($quantidaded['Qtd_disponivel'] < 1)

                       

                       echo "<script>var c = document.getElementById('chek4'); c.disabled = true;</script>";

                    }

                        

              ?> 

                  </td>

          <tr></tr>

          <td class="vivi">Nome: A Rainha Vermelha <br> 

              Quantidade disponível: <?php $quantidadedisponivel = "SELECT Qtd_disponivel FROM LIVROS WHERE id = 5";

                                     $quantidade = mysqli_query($conn, $quantidadedisponivel) or die($mysqli->error);



                                     while($quantidaded = $quantidade->fetch_array()){

                                        if($quantidaded['Qtd_disponivel'] >= 1)

                                        echo $quantidaded["Qtd_disponivel"];

                                    

                                        elseif($quantidaded['Qtd_disponivel'] < 1)

                                        echo 'Indisponível';
                                     

                                        //echo '<br>';<

                                        ?> <br>

              Alugar:

              <input type="checkbox" name="chek5" class="chek" onclick="check()" id="chek5">

              <?php if($quantidaded['Qtd_disponivel'] < 1)

                       

                       echo "<script>var c = document.getElementById('chek5'); c.disabled = true;</script>";

                    }

                ?>

          </td>

          <td class="vivi">Nome: A Escolha<br> 

              Quantidade disponível: <?php $quantidadedisponivel = "SELECT Qtd_disponivel FROM LIVROS WHERE id = 6";

                                     $quantidade = mysqli_query($conn, $quantidadedisponivel) or die($mysqli->error);



                                     while($quantidaded = $quantidade->fetch_array()){

                                        if($quantidaded['Qtd_disponivel'] >= 1)

                                        echo $quantidaded["Qtd_disponivel"];

                                    

                                        elseif($quantidaded['Qtd_disponivel'] < 1)

                                        echo 'Indisponível';

                                     

                                        //echo '<br>';<

                                        ?> <br>

              Alugar:

              <input type="checkbox" name="chek6" class="chek" onclick="check()" id="chek6">

              <?php if($quantidaded['Qtd_disponivel'] < 1)

                       

                       echo "<script>var c = document.getElementById('chek6'); c.disabled = true;</script>";

                    }

                        

              ?> 

          </td>

          <tr></tr>

          <td class="vivi">Nome: Moby Dick <br> 

              Quantidade disponível: <?php $quantidadedisponivel = "SELECT Qtd_disponivel FROM LIVROS WHERE id = 7";

                                     $quantidade = mysqli_query($conn, $quantidadedisponivel) or die($mysqli->error);



                                     while($quantidaded = $quantidade->fetch_array()){

                                        if($quantidaded['Qtd_disponivel'] >= 1)

                                        echo $quantidaded["Qtd_disponivel"];

                                    

                                        elseif($quantidaded['Qtd_disponivel'] < 1)

                                        echo 'Indisponível';

                                     

                                        //echo '<br>';<

                                        ?> <br>

              Alugar:

              <input type="checkbox" name="chek7" class="chek" onclick="check()" id="chek7">

              <?php if($quantidaded['Qtd_disponivel'] < 1)

                       

                       echo "<script>var c = document.getElementById('chek7'); c.disabled = true;</script>";

                    }

                        

              ?> 

          </td>

          <td class="vivi">Nome: Eu sou Malala <br> 

              Quantidade disponível: <?php $quantidadedisponivel = "SELECT Qtd_disponivel FROM LIVROS WHERE id = 8";

                                     $quantidade = mysqli_query($conn, $quantidadedisponivel) or die($mysqli->error);



                                     while($quantidaded = $quantidade->fetch_array()){

                                        if($quantidaded['Qtd_disponivel'] >= 1)

                                        echo $quantidaded["Qtd_disponivel"];

                                    

                                        elseif($quantidaded['Qtd_disponivel'] < 1)

                                        echo 'Indisponível';

                                     

                                        //echo '<br>';<

                                        ?> <br>

              Alugar:

              <input type="checkbox" name="chek8" class="chek" onclick="check()" id="chek8">

              <?php if($quantidaded['Qtd_disponivel'] < 1)

                       

                       echo "<script>var c = document.getElementById('chek8'); c.disabled = true;</script>";

                    }

                        

              ?> 

          </td>

          <tr></tr>

          <td class="vivi">Nome: O Domador de Ventos<br> 

              Quantidade disponível: <?php $quantidadedisponivel = "SELECT Qtd_disponivel FROM LIVROS WHERE id = 9";

                                     $quantidade = mysqli_query($conn, $quantidadedisponivel) or die($mysqli->error);



                                     while($quantidaded = $quantidade->fetch_array()){

                                        if($quantidaded['Qtd_disponivel'] >= 1)

                                        echo $quantidaded["Qtd_disponivel"];

                                    

                                        elseif($quantidaded['Qtd_disponivel'] < 1)

                                        echo 'Indisponível';

                                     

                                        //echo '<br>';<

                                        ?> <br>

              Alugar:

              <input type="checkbox" name="chek9" class="chek" onclick="check()" id="chek9">

              <?php if($quantidaded['Qtd_disponivel'] < 1)

                       

                       echo "<script>var c = document.getElementById('chek9'); c.disabled = true;</script>";

                    }

                        

              ?> 

          </td>

          <td class="vivi">Nome: 1984<br> 

              Quantidade disponível: <?php $quantidadedisponivel = "SELECT Qtd_disponivel FROM LIVROS WHERE id = 10";

                                     $quantidade = mysqli_query($conn, $quantidadedisponivel) or die($mysqli->error);



                                     while($quantidaded = $quantidade->fetch_array()){

                                        if($quantidaded['Qtd_disponivel'] >= 1)

                                        echo $quantidaded["Qtd_disponivel"];

                                    

                                        elseif($quantidaded['Qtd_disponivel'] < 1)

                                        echo 'Indisponível';

                                     

                                        //echo '<br>';<

                                        ?> <br>

              Alugar:

              <input type="checkbox" name="chek10" class="chek" onclick="check()" id="chek10">

              <?php if($quantidaded['Qtd_disponivel'] < 1)

                       

                       echo "<script>var c = document.getElementById('chek10'); c.disabled = true;</script>";

                    }

                        

              ?> 

          </td>

          

          </table>

          

          <input type="submit" value="Alugar" name="alugar" class="btn" id="alugarr">

        </form>

      </div>

      <input type="submit" class="btn" name="alugados" value="Livros já alugados" id="livros">

      

    </form>

</body>

</html>



<?php





$oi = 'a'; 

$livro = 'livro';



if (isset($_POST['alugados']))echo "<script>window.location.href='livros.php?id=$id'</script>";



if (isset($_POST['alugar'])){

echo "<script>window.location.href='livros.php?id=$id'</script>";



$input = $_POST['input'];

$input2 = $_POST['input2'];

$input3 = $_POST['input3'];

$input4 = $_POST['input4'];

$input5 = $_POST['input5'];

$input6 = $_POST['input6'];

$input7 = $_POST['input7'];

$input8 = $_POST['input8'];

$input9 = $_POST['input9'];

$input10 = $_POST['input10'];







if ($input != "")

{

     $inserir = mysqli_query($conn, ("INSERT INTO EMPRESTIMO (id_cliente, id_livro, dt_retirada, dt_entrega, taxa) values ($id,(select id from LIVROS where nome = '$input'), curdate(), date_add(curdate(), interval 14 day),0)")); 

     $set = mysqli_query($conn,'SET SQL_SAFE_UPDATES = 0');

    $update = mysqli_query($conn, "update LIVROS set qtd_disponivel = qtd_disponivel-1 where nome = '$input'");

}

if ($input2 != "") 

{

    $inserir = mysqli_query($conn, ("INSERT INTO EMPRESTIMO (id_cliente, id_livro, dt_retirada, dt_entrega, taxa) values ($id,(select id from LIVROS where nome = '$input2'), curdate(), date_add(curdate(), interval 14 day),0)")); 

    $set = mysqli_query($conn,('SET SQL_SAFE_UPDATES = 0'));

    $update = mysqli_query($conn, ("update LIVROS set qtd_disponivel = qtd_disponivel-1 where nome = '$input2'"));

}

if ($input3 != "")

{ 

    $inserir = mysqli_query($conn, ("INSERT INTO EMPRESTIMO (id_cliente, id_livro, dt_retirada, dt_entrega, taxa) values ($id,(select id from LIVROS where nome = '$input3'), curdate(), date_add(curdate(), interval 14 day),0)")); 

    $set = mysqli_query($conn,('SET SQL_SAFE_UPDATES = 0'));

    $update = mysqli_query($conn, ("update LIVROS set qtd_disponivel = qtd_disponivel-1 where nome = '$inpu3'"));

}

if ($input4 != "") 

{

    $inserir = mysqli_query($conn, ("INSERT INTO EMPRESTIMO (id_cliente, id_livro, dt_retirada, dt_entrega, taxa) values ($id,(select id from LIVROS where nome = '$input4'), curdate(), date_add(curdate(), interval 14 day),0)")); 

    $set = mysqli_query($conn,('SET SQL_SAFE_UPDATES = 0'));

    $update = mysqli_query($conn, ("update LIVROS set qtd_disponivel = qtd_disponivel-1 where nome = '$input4'"));

}

if ($input5 != "") 

{

    $inserir = mysqli_query($conn, ("INSERT INTO EMPRESTIMO (id_cliente, id_livro, dt_retirada, dt_entrega, taxa) values ($id,(select id from LIVROS where nome = '$input5'), curdate(), date_add(curdate(), interval 14 day),0)")); 

    $set = mysqli_query($conn,('SET SQL_SAFE_UPDATES = 0'));

    $update = mysqli_query($conn, ("update LIVROS set qtd_disponivel = qtd_disponivel-1 where nome = '$input5'"));

}

if ($input6 != "") 

{

    $inserir = mysqli_query($conn, ("INSERT INTO EMPRESTIMO (id_cliente, id_livro, dt_retirada, dt_entrega, taxa) values ($id,(select id from LIVROS where nome = '$input6'), curdate(), date_add(curdate(), interval 14 day),0)")); 

    $set = mysqli_query($conn,('SET SQL_SAFE_UPDATES = 0'));

    $update = mysqli_query($conn, ("update LIVROS set qtd_disponivel = qtd_disponivel-1 where nome = '$input6'"));

}

if ($input7 != "") 

{

    $inserir = mysqli_query($conn, ("INSERT INTO EMPRESTIMO (id_cliente, id_livro, dt_retirada, dt_entrega, taxa) values ($id,(select id from LIVROS where nome = '$input7'), curdate(), date_add(curdate(), interval 14 day),0)")); 

    $set = mysqli_query($conn,('SET SQL_SAFE_UPDATES = 0'));

    $update = mysqli_query($conn, ("UPDATE LIVROS set qtd_disponivel = qtd_disponivel-1 where nome = '$input7'"));

}    

if ($input8 != "") 

{

    $inserir = mysqli_query($conn, ("INSERT INTO EMPRESTIMO (id_cliente, id_livro, dt_retirada, dt_entrega, taxa) values ($id,(select id from LIVROS where nome = '$input8'), curdate(), date_add(curdate(), interval 14 day),0)")); 

    $set = mysqli_query($conn,('SET SQL_SAFE_UPDATES = 0'));

    $update = mysqli_query($conn, ("update LIVROS set qtd_disponivel = qtd_disponivel-1 where nome = '$input8'"));

}

if ($input9 != "") 

{

    $inserir = mysqli_query($conn, ("INSERT INTO EMPRESTIMO (id_cliente, id_livro, dt_retirada, dt_entrega, taxa) values ($id,(select id from LIVROS where nome = '$input9'), curdate(), date_add(curdate(), interval 14 day),0)")); 

    $set = mysqli_query($conn,('SET SQL_SAFE_UPDATES = 0'));

    $update = mysqli_query($conn, ("update LIVROS set qtd_disponivel = qtd_disponivel-1 where nome = '$input9'"));

}

if ($input10 != "")

{ 

    $inserir = mysqli_query($conn, ("INSERT INTO EMPRESTIMO (id_cliente, id_livro, dt_retirada, dt_entrega, taxa) values ($id,(select id from LIVROS where nome = '$input10'), curdate(), date_add(curdate(), interval 14 day),0)")); 

    $set = mysqli_query($conn,('SET SQL_SAFE_UPDATES = 0'));

    $update = mysqli_query($conn, ("update LIVROS set qtd_disponivel = qtd_disponivel-1 where nome = '$input10'"));

}

}




?>