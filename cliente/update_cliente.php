<?php
  include "conexaio.php";

if(isset($_POST['id'])){

    //entrada
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email= $_POST['email'];

    //processamento
    $sql="update cliente set nome = '$nome' , telefone = '$telefone', email = '$email' where id = '$id'";
    $alterar=mysqli_query($conexaio,$sql);

    //saida
    if($alterar){
        echo"
        <script>
            alert('Registro editado com Sucesso!');
            window.location ='listar_cliente.php';
        </script>
    ";
    }
    else{
        echo"
        <p>Banco de Dados Temporariamente fora do ar.tente novamente mais tarde. </p>
        <p>Entre em contato com o adm do site... </p>
        ";
        echo "mysql_error($conexaio)";

    }

}else{ //tratamento de erro e redicionamento
    echo"
    <p>Esta é uma página de tratamento de dados </p>
    <p> Clique <a href='listar_cliente.php'> aqui </a> para acessar a lista de produtos cadastrados. </p>
    ";
}


?>