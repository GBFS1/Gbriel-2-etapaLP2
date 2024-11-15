
<?php
    $local = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "infolindos"; 

    // $conexaio = mysqli_connect("localhost", "root", "", "infolindos");
    $conexaio = mysqli_connect($local,$usuario,$senha,$banco);

    header("Content-Type:text/html; charset=utf-8");
    mysqli_query($conexaio, "SET NAMES 'utf8'");
    mysqli_query($conexaio, "SET character_set_connection = utf8");
    mysqli_query($conexaio, "SET character_set_client = utf8");
    mysqli_query($conexaio, "SET character_set_results = utf8");
?>
