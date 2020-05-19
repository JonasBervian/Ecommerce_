<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style_cadastro.css">
    <title>Loja</title>
</head>

<body>
    <header>

        <nav id="navbar">
            <div id="logo">
                <a href="../index.html">
                    <img src="../images/logo_provisorio.png" alt="">
                </a>
            </div>

    </header>

    <?php
        include_once "../php/conexao.php";
        session_start();
    ?>
    <main>
        <div class="formulario_login">

            <form action="../php/cadastro.php" method="POST">
                <?php
                    if(isset($_SESSION['usuario_existente'])):
                ?>
                    <div id="erroEmail">
                        <p>Email já cadastrado!</p>
                    </div>
                <?php 
                    endif;
                    unset($_SESSION['usuario_existente']);
                ?>
                <?php
                    $conn = mysqli_connect($localhost, $user, $password, $banco);

                  
                ?>

                <?php
                    foreach($images as $foto){
                ?>
                    <div class="teste">
                        <img src="<?php echo "../images/".$foto["PES_IMG"]?>">                        
                    </div>
                <?php
                }
                ?>
                
                <h2>FAÇA SEU CADASTRO</h2>
                <div class="input_block">
                    <label>Nome</label>
                    <input type="text" id="cad_nome" name="cad_nome" maxlength=" 70" autocomplete="off" placeholder="EX: Fulano de Tal" required/>
                </div>
                <div class="input_block">
                    <label>Email</label>
                    <input type="email" id="cad_email" name="cad_email" maxlength="70" autocomplete="off" placeholder="EX: fulano@.com" required/>
                </div>
                <div class="input_block">
                    <label>Edereço</label>
                    <input type="text" id="cad_endereco" name="cad_endereco" autocomplete="off" placeholder="EX: Rua Érico Verissimo" required />
                </div>
                <div class="input_block">
                    <label>Número</label>
                    <input type="number" id="cad_numero" name="cad_numero" maxlength="5" autocomplete="off" placeholder="EX: 341" required/>
                </div>
                <div class="input_block">
                    <label>Complemento</label>
                    <input type="text" id="cad_complemento" name="cad_complemento" maxlength="20" autocomplete="off" placeholder="EX: Casa" required/>
                </div>
                <div class="input_block">
                    <label>Bairro</label>
                    <input type="text" id="cad_bairro" name="cad_bairro" maxlength="20" autocomplete="off" placeholder="EX: Centro" required />
                </div>
                <div class="input_block">
                    <label>CEP</label>
                    <input type="number" id="cad_cep" name="cad_cep" maxlength="8" autocomplete="off" placeholder="EX: 00000-000" required/>
                </div>
                <div class="input_block">
                    <label>Cidade</label>
                    <input type="text" id="cad_cidade" name="cad_cidade" maxlength="40" autocomplete="off" placeholder="EX: Presidente Lucena" required/>
                </div>
                <div class="input_block">
                    <label>Estado</label>
                    <input type="text" id="cad_estado" name="cad_estado" maxlength="40" autocomplete="off" placeholder="EX: Rio Grande do Sul" required/>
                </div>
                <div class="input_block">
                    <label>Telefone</label>
                    <input type="tel" id="cad_telefone" name="cad_telefone" autocomplete="off" maxlength="11" placeholder="EX: DDD + numero" required/>
                </div>
                <div class="input_block">
                    <label>Celular</label>
                    <input type="tel" id="cad_celular" name="cad_celular" autocomplete="off" maxlength="11" placeholder="EX: DDD + numero" required />
                </div>
                <div class="input_block">
                    <label>CPF</label>
                    <input type="text" id="cad_cpf" name="cad_cpf" maxlength="11" autocomplete="off" maxlength="11" placeholder="EX: 00000000000" required/>
                </div>
                <div class="input_block">
                    <label>RG</label>
                    <input type="text" id="cad_rg" name="cad_rg" autocomplete="off" maxlength="10" placeholder="EX: 0000000000" required/>
                </div>
                <div class="input_block">
                    <label>Data de Expedição</label>
                    <input type="date" id="cad_dtrg" name="cad_dtrg" autocomplete="off" maxlength="8" placeholder="EX: 00/00/0000" required/>
                </div>
                <div class="input_block">
                    <label>UF do RG</label>
                    <input type="text" id="cad_ufrg" name="cad_ufrg" autocomplete="off" maxlength="2" placeholder="EX: RS" required/>
                </div>
                <div class="input_block">
                    <label>Senha</label>
                    <input type="password" id="cad_senha" name="cad_senha" value="" autocomplete="off" maxlength="20" required/>
                </div>
                <div class="input_block">
                    <label>Confirme a senha</label>
                    <input type="password" id="cad_senhaConf" name="cad_senhaConf" value="" autocomplete="off" maxlength="20" required />
                </div>
                <button type="submit" class="button_login ">Cadastrar</button>
            </form>
        </div>


        </div>



    </main>
    <footer>

    </footer>
    <script src="../javascritp/script_validacao.js"></script>

</body>


</html>