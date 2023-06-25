<?php
    include('conexao.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM /*tabela*/ WHERE /*tabela*/  = '$email'
                                        AND /*tabela*/  = '$senha'";

    $result = mysqli_query($con,$sql);
    $rowcount = mysqli_num_rows($result);
    if ($rowcount > 0){
        include('cria_sessao.php');
        //array com os dados do usuario que estão no banco 
        $_SESSION ['login'] = mysqli_fetch_array($result);
        // voltar para a pagina inicial
        header("location: index.php");
    }else{
        echo "<h1>Usuário não encontrado</h1>";
    }

?>