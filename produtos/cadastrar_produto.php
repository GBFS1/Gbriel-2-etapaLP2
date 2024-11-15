<?php
    include"conexaio.php";
    if(isset($_POST["descricao"])){
        //entrada
        $descricao = trim($_POST['descricao']);
        $preco = trim($_POST['preco']);
        $estoque = trim($_POST['estoque']);
        //processamento - inserido dados no banco de dados 
        $sql = "insert into produto(descricao,preco,estoque) values('$descricao','$preco','$estoque')"; 
        $cadastrar = mysqli_query($conexaio,$sql);
        //saida e feedback
        if($cadastrar){
            print"
                <script>
                    alert('produto cadastrado com sucesso!');
                    window.location = 'listar_produtos.php';
                
                </script>
            ";
        }else{
            print "<p>TENTE NOVAMENTE SEU BOBOCA</p>";
        }
    }else{
        //tratamento de erro e redicionamento
        print"
            <p>Volta </p>
            <p>volta boboca</p>
        ";
    }
?>