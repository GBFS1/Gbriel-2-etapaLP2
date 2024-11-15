<?php
  include "conexaio.php";

if(isset($_POST['id'])){

    //entrada
    $id = $_POST['id'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];
    $estoque= $_POST['estoque'];

    //processamento
    $sql="update produto set descricao = '$descricao' , preco = '$preco', estoque = '$estoque' where id = '$id'";
    $alterar=mysqli_query($conexaio,$sql);

    //saida
    if($alterar){
        echo"
        <script>
            alert('Registro editado com Sucesso!');
            window.location ='listar_produtos.php';
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
    <p> Clique <a href='listar_produtos.php'> aqui </a> para acessar a lista de produtos cadastrados. </p>
    ";
}


?>