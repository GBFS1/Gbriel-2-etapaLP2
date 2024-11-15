<?php

include "conexaio.php";

if(isset($_GET['id'])){
    //entrada
    $id =$_GET['id']; 
    
    //processamento
    $sql ="select * from aluno where id = '$id'";
    $seleciona = mysqli_query($conexaio,$sql);
    $exibe = mysqli_fetch_array($seleciona);
    
    //carregar as variaveis
    $nome = $exibe['nome'];
    $telefone = $exibe['telefone'];
    $email = $exibe['email'];


?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>

  <body>
      <div class="container">
        <h1 class="mt-3 text-center">Aluno:<?php echo $nome ?></h1>
        <hr>
        <p>Telefone: <?php echo $telefone ?></p>
        <p>E-mail: <?php echo $email ?></p>
       
    </div>
    <div class="mb-3 text_start">
      <button type="button" class="btn btn-warning" onclick="history.go(-1)">voltar</button></a>
    </div>
    <div class="mb-3 text-end">
      <button type="button" class="btn btn-primary" onclick="location.href='editar_aluno.php?id=<?php echo $id ?>'";>Editar</button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
        <?php
}
    //tratamento de erro e redirecionamento
        else{
            echo"
                <p>Está é uma página de tratamento de dados.</p>
                <p>Clique <a href='listar_aluno.php'>aqui</a> para acessar a lista de produtos cadastrados. </p>
            ";
        }
        ?>








