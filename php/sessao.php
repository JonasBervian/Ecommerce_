<?php
    include_once "conexao.php";

    $conn = mysqli_connect($localhost, $user, $password, $banco);
    if (!$conn)
    {
        echo  "<script>alert('Não foi possível conectar ao Banco de Dados!');</script>";
        header('Location: logout.php');
    }           

    // abre sess�o
    session_start();
    if ((!isset($_SESSION["login_email"])) || (!isset($_SESSION["login_senha"])))
    {
        header("Location: ../index.html");
    }

     
?> 