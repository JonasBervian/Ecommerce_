<?php
    include_once "conexao.php";
    include_once "sessao.php";
    $conn = mysqli_connect($localhost, $user, $password, $banco);   
    
	if (!$conn)
    {
        echo "<script>alert('Não foi possível conectar ao Banco de Dados!');</script>";
    }
    else
    {
        // recebe parametro
        $nome = $_POST['cad_nome'];
        $email = $_POST['cad_email'];
        $endereco = $_POST['cad_endereco'];
        $numero = $_POST['cad_numero'];
        $complemento = $_POST['cad_complemento'];
        $bairro = $_POST['cad_bairro'];
        $CEP = $_POST['cad_cep'];
        $cidade = $_POST['cad_cidade'];
        $estado = $_POST['cad_estado'];
        $telefone = $_POST['cad_telefone'];
        $celular = $_POST['cad_celular'];
        $CPF = $_POST['cad_cpf'];
        $RG = $_POST['cad_rg'];
        $dataRG = $_POST['cad_dtrg'];
        $ufRG = $_POST['cad_ufrg'];
        $senha = base64_encode($_POST['cad_senha']);
        
       
        
        $sql = "select count(*) as total from clientes where dsEmail = '$email'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        
        if($row['total'] == 1){
            $_SESSION['usuario_existente'] = true;
            header("Location: ../view/tela_cadastro.php");
            exit;
        }else{
            $sql = "INSERT INTO clientes (Nome,dsEndereco,nrEndereco,dsComplemento,dsBairro,nrCEP,dsCidade,dsUF,nrTelefone,nrCelular,dsEmail,nrCPF,nrRG,dtRG,dsUFRG,dsSenha) VALUES ('$nome','$endereco','$numero','$complemento','$bairro','$CEP','$cidade','$estado','$telefone','$celular','$email','$CPF','$RG','$dataRG','$ufRG','$senha')";
            $result = mysqli_query($conn, $sql);
        }     

    }
   
    mysqli_close($conn);
    header("Location: ../index.html");


?>