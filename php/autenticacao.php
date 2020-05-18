<?php
    // conex�o
    include_once "conexao.php";
    include_once "sessao.php";

    $conn = mysqli_connect($localhost, $user, $password, $banco);

    if (!$conn)
    {
        echo  "<script>alert('Não foi possível conectar ao Banco de Dados. Usu�rio ou Senha inv�lidos!');</script>";
        header('Location: index.html');
    }

    $user = $_POST['email']; 
    $password = base64_encode($_POST['senha']);
   
    $sql = "SELECT * FROM USUARIOS WHERE (Email='$user') AND Senha= ('$password')";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_num_rows($result);
    if ($row > 0)
    {
        // cria sess�o
        session_start();
        $_SESSION['email'] = $user;
        $_SESSION['senha'] = $password;
        header('Location: logou.php');
    }
    else
    {
        // volta para a tela de login
        $_SESSION['nao_autenticado'] = true;
        header('Location: login.php');
        exit();
    }
?>