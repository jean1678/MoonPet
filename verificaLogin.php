<?php
    
    session_start();
   
    
    // Verifica se existe os dados da sessão de login
    if(!isset($_SESSION['email']))
    {
    // Usuário não logado! Redireciona para a página de login
    header("Location: login.php");
    exit;
    }else{
        echo "<script>window.location.href='http://localhost/moonpetback/doacao.php';</script>";
    }
    

?>