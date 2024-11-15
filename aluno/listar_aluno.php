<?php 
    include "conexaio.php";
    $slq = "select * from aluno order by nome";
    $seleciona = mysqli_query($conexaio,$slq);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kkkk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="container">
        <div class="text-end mt-5">
        <a href="aluno.php">
            <button class="btn btn-sucess">
                Cadastrar Novo
            </button>
        </a>
    </div>

        <h1 class="text-center mt-5">Lista de Alunos</h1>

        <!--*********Cabeçalho da Lista-->
        <div class="row mb-2 bg-dark text-light text-center">
            <div class="col-2">id</div>
            <div class="col-3">Nome</div>
            <div class="col-3">Telefone</div>
            <div class="col-1">E-mail</div>
            <div class="col-2">Controle</div>
        </div>
        <!--********* Lista direta do banco de dados-->
        <?php 
            while ($exibe = mysqli_fetch_array($seleciona)){
                $id = $exibe['id'];
        ?>
        <div class="row text-center">
            <div class="col-2" style="background-color:grey;"> <?php echo $exibe['id']?> </div>
            <div class="col-3" style="background-color:grey;"> <?php echo $exibe['nome']?> </div>
            <div class="col-3" style="background-color:grey;"> <?php echo $exibe['telefone']?> </div>
            <div class="col-2" style="background-color:grey;"> <?php echo $exibe['email']?> </div>
    

            <div class="col-2 icones">
                 <a href="ver_aluno.php?id=<?php echo $id?>"><img src="../img/ver.png" alt="" style="width: 20px;"></a>
                 <a href="editar_aluno.php?id=<?php echo $id?>"><img src="../img/ferramenta-lapis.png" alt="" style="width:20px;"></a>
                 <a href="excluir_aluno.php?id=<?php echo $id?>"onclick="return confirm('Confirma a Exclusão do Registro?'"><img src="../img/lixeira-de-reciclagem.png" alt="" style="width: 20px;"></a>
        </div>
        </div>
         <?php 
            }
         ?>           

    </div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>