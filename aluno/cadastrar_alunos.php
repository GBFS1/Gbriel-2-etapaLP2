<?php
    include"conexaio.php";
    if(isset($_POST["nome"])){
        //entrada
        $nome = trim($_POST['nome']);
        $telefone = trim($_POST['telefone']);
        $email = trim($_POST['email']);
        //processamento - inserido dados no banco de dados 
        $sql = "insert into aluno(nome,telefone,email) values('$nome','$telefone','$email')"; 
        $cadastrar = mysqli_query($conexaio,$sql);
        //saida e feedback
        if($cadastrar){
            print"
                <script>
                    alert('cliente cadastrado com sucesso!');
                    window.location = 'listar_aluno.php';
                
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