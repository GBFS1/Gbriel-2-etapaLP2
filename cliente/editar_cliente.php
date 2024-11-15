<?php
    include "conexaio.php";

    if(isset($_GET['id'])){
        //entrada
        $id = $_GET['id'];

        //processamento
        $sql ="select * from cliente where id = $id";
        $seleciona = mysqli_query($conexaio,$sql); //executa a sql
        $exibe = mysqli_fetch_array($seleciona); //carrega a variavel com o banco de dados

        //carrega as variaveis com dados do banco - opcional
        $nome = $exibe['nome'];
        $telefone =     $exibe['telefone'];
        $email=   $exibe['email'];
    
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
        <h1 class="m">Editar Cliente</h1>
        <hr>
        
        <form name="cadastrar" method="post" action="update_cliente.php">
            <input type="hidden" name="id" value="<?php echo $id?>">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $nome?>" required>
                
                <div id="descricaolHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            
            <div class="mb-3">
                <label for="telefone" class="form-label">Telefone</label>
                <input type="number" class="form-control" id="telefone"  name="telefone" step = "0.1" value="<?php echo $telefone?>" required>
            </div>
            
            <div class="mb-3">
                <label class="form-label" for="email"> Email</label>
                <input type="email" class="form-control" id="email" name="email" step = "0.10" value="<?php echo $email?>" required>
            </div>
            
            <div class="mb-3">
                <button type="reset" class="btn btn-outline-warning" onclick="history.go(-1)">Voltar</button>
                <button type="submit" class="btn btn-outline-primary">Editar</button>
            </div>
            
        </form>

        
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
        <?php
        }
        else{//tratamento de erro e redirecionamento
            echo"
                <p>Está é uma página de tratamento de dados.</p>
                <p>Clique <a href='listar_cliente.php'>aqui</a> para acessar a lista de clientes cadastrados. </p>
            ";
        }
        ?>