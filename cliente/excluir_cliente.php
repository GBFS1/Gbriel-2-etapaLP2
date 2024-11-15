<?php

include"conexaio.php";

if(isset($_GET['id'])){

    //entrada-recebe os dados
    $id = $_GET['id'];

    //processamento-escreve e executa o sql
    $sql ="delete from cliente where id='$id'";
    $excluir= mysqli_query($conexaio,$sql);

    //saída-feedback ao usuário
    if($excluir){
        echo"
            <script>
                alert('Registro Excluído com Sucesso!');
                window.location ='listar_cliente.php';
            </script>
        ";

        //redirecionamento de páginas pelo php
        //header('location :listar_produtos.php');
    }
    else{
        echo"
        <p>Banco de Dados Temporariamente fora do ar.tente novamente mais tarde. </p>
        <p>Entre em contato com o adm do site... </p>
        ";
    echo "mysql_error($conexaio)";

    }
}
else{ //tratamento de erro e redicionamento
    echo"
    <p>Esta é uma página de tratamento de dados </p>
    <p> Clique <a href='listar_cliente.php'> aqui </a> para acessar a lista de produtos cadastrados. </p>
    ";
}

?>