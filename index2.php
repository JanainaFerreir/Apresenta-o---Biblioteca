<?php
include("conexao.php");
 /*$livro1 = "SELECT Qtd_disponivel FROM livros where id = 1";
 $con = $mysqli->query($consulta) or die($mysqli->error);*/
 $id = $_GET['id'];
?>
<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8" />
  <title>Biblioteca onLine</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" title="style" />
  <style>
  
  
  
  </style>
</head>
<form action="livros.php?id=1" method="get">
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

        <h1>Biblioteca On-line!</h1>
        <p>Aqui você entrará diversos livros e com variados temas!</p>

        <p>Possuímos livros de <b>terror</b>, <b>aventura</b>, <b>infantis</b>, <b>ação</b>, <b>teen</b>, etc.</p>

        <p> Basta escolhe-los na tabela ao lado. Apenas um click! </p>
        
       
      </div>
      <div id="content">

      <form action="livros.php?id=1" method="post">
      
      <table border="1" id="tbl"> 
          <tr>
              <caption id="aa"> Disponíveis </caption>
          <td id="aa"><center>Livro</td>
          <td id="aa"><center>Livro</td>
          <tr>
          <td>Nome: A esperança <br>
              Quantidade disponível: <?php $quantidadedisponivel = "SELECT Qtd_disponivel FROM LIVROS WHERE id = 1";
                                     $quantidade = $mysqli->query($quantidadedisponivel) or die($mysqli->error);

                                     while($quantidaded = $quantidade->fetch_array()){
                                     echo $quantidaded["Qtd_disponivel"];
                                     echo "<br>";
                                     }?> <br>
              Alugar:
              <input type="checkbox" name="chek1">
          </td>
          <td>Nome: Ana vestida de sangue <br>
              Quantidade disponível: <?php $quantidadedisponivel = "SELECT Qtd_disponivel FROM LIVROS WHERE id = 2";
                                     $quantidade = $mysqli->query($quantidadedisponivel) or die($mysqli->error);

                                     while($quantidaded = $quantidade->fetch_array()){
                                     echo $quantidaded["Qtd_disponivel"];
                                     }?> <br> <br>
              Alugar:
              <input type="checkbox" name="chek2">
          </td>
          <tr>
                  <td> Nome: Vovó vigarista <br>
                      Quantidade disponível: <?php $quantidadedisponivel = "SELECT Qtd_disponivel FROM LIVROS WHERE id = 3";
                                     $quantidade = $mysqli->query($quantidadedisponivel) or die($mysqli->error);

                                     while($quantidaded = $quantidade->fetch_array()){
                                     echo $quantidaded["Qtd_disponivel"];
                                     }?> <br>
                      Alugar:
                      <input type="checkbox" name="chek3">
                  </td>
                  <td>Nome: Os 13 porquês <br> 
                      Quantidade disponível: <?php $quantidadedisponivel = "SELECT Qtd_disponivel FROM LIVROS WHERE id = 4";
                                     $quantidade = $mysqli->query($quantidadedisponivel) or die($mysqli->error);

                                     while($quantidaded = $quantidade->fetch_array()){
                                     echo $quantidaded["Qtd_disponivel"];
                                     }?> <br>
                      Alugar:
                      <input type="checkbox" name="chek4">
                  </td>
          <tr></tr>
          <td>Nome: Os dois terríveis <br> 
              Quantidade disponível: <?php $quantidadedisponivel = "SELECT Qtd_disponivel FROM LIVROS WHERE id = 5";
                                     $quantidade = $mysqli->query($quantidadedisponivel) or die($mysqli->error);

                                     while($quantidaded = $quantidade->fetch_array()){
                                     echo $quantidaded["Qtd_disponivel"];
                                     }?> <br>
              Alugar:
              <input type="checkbox" name="chek5">
          </td>
          <td>Nome: Jogos vorazes<br> 
              Quantidade disponível: <?php $quantidadedisponivel = "SELECT Qtd_disponivel FROM LIVROS WHERE id = 6";
                                     $quantidade = $mysqli->query($quantidadedisponivel) or die($mysqli->error);

                                     while($quantidaded = $quantidade->fetch_array()){
                                     echo $quantidaded["Qtd_disponivel"];
                                     }?> <br>
              Alugar:
              <input type="checkbox" name="chek6">
          </td>
          <tr></tr>
          <td>Nome: Perdido em Marte <br> 
              Quantidade disponível: <?php $quantidadedisponivel = "SELECT Qtd_disponivel FROM LIVROS WHERE id = 7";
                                     $quantidade = $mysqli->query($quantidadedisponivel) or die($mysqli->error);

                                     while($quantidaded = $quantidade->fetch_array()){
                                     echo $quantidaded["Qtd_disponivel"];
                                     }?> <br>
              Alugar:
              <input type="checkbox" name="chek7">
          </td>
          <td>Nome: A relíquia <br> 
              Quantidade disponível: <?php $quantidadedisponivel = "SELECT Qtd_disponivel FROM LIVROS WHERE id = 8";
                                     $quantidade = $mysqli->query($quantidadedisponivel) or die($mysqli->error);

                                     while($quantidaded = $quantidade->fetch_array()){
                                     echo $quantidaded["Qtd_disponivel"];
                                     }?> <br>
              Alugar:
              <input type="checkbox" name="chek8">
          </td>
          <tr></tr>
          <td>Nome: O domador de ventos<br> 
              Quantidade disponível: <?php $quantidadedisponivel = "SELECT Qtd_disponivel FROM LIVROS WHERE id = 9";
                                     $quantidade = $mysqli->query($quantidadedisponivel) or die($mysqli->error);

                                     while($quantidaded = $quantidade->fetch_array()){
                                     echo $quantidaded["Qtd_disponivel"];
                                     }?> <br>
              Alugar:
              <input type="checkbox" name="chek9">
          </td>
          <td>Nome: Eu sou Malala<br> 
              Quantidade disponível: <?php $quantidadedisponivel = "SELECT Qtd_disponivel FROM LIVROS WHERE id = 10";
                                     $quantidade = $mysqli->query($quantidadedisponivel) or die($mysqli->error);

                                     while($quantidaded = $quantidade->fetch_array()){
                                     echo $quantidaded["Qtd_disponivel"];
                                     }?> <br>
              Alugar:
              <input type="checkbox" name="chek10">
          </td>
          
          </table>

          <?php 
          
          if(isset($_POST['chek1'])){
            $alugar = "insert into EMPRESTIMO(id_livro) values = 1 ";
          } else {
            echo "";
          }

          ?>
          <input type="submit" id="btn" value="Alugar">
        </form>
      </div>
<?PHP
//if isset()

?>
      <input type="submit" id="btn" value="Mostrar livros alugados">
    </form>
</body>
</html>
