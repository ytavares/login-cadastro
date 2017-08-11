<?php
require_once ("classes/DAO/usuarioDAO.php");
require_once ("classes/Entidade/usuario.php");
$usuarioDAO = new usuarioDAO(); 
$usuario = new usuario();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <link rel="stylesheet" type="text/css" href="_css/cadastro.css"/>
</head>
<body>
<div id="cadastro">
    <h1>Cadastro</h1>
</div>
    <form method="post" id="tabela">
        <fieldset id="login"><legend><label for="cEmail">Dados do Login:</label></legend>
            <p><label for="cEmail">Email: </label><input type="email" name="tEmail" id="cEmail" size="40" maxlength="40" placeholder="ex: exemplo@gmail.com"/></p>
            <p><label for="cSenha">Senha: </label><input type="password" name="tSenha" id="cSenha" size="10" maxlength="10" placeholder="Max. 10 dígitos" minlength="6"/></p>
        </fieldset>

        <fieldset id="informacoes"><legend><label for="cNome">Informações do Usuário:</label></legend>
            <p><label for="cNome">Nome Completo: </label><input type="text" name="tNome" id="cNome" size="30" maxlength="45"/></p>
            <p><label for="cTel">Telefone: </label><input type="number" name="tTel" id="cTel" size="12" maxlength="14" placeholder="ex: 21 25874-236"/></p>
            <p>Foto de Perfil: <input type="file" name="tFoto" id="cFoto"/></p>
        </fieldset>

        <fieldset id="endereco"><legend><label for="cEstado">Endereço:</label></legend>
            <p><label for="cEstado">Estado: </label><input type="text" name="tEstado" id="cEstado" maxlength="20" placeholder="ex: Rio de Janeiro"/></p>
            <p><label for="cMuni">Municipio: </label><input type="" name="tMuni" id="cMuni" maxlength="20" placeholder="ex: Niterói"/></p>
            <p><label for="cBairro">Bairro: </label><input type="text" name="tBairro" id="cBairro" maxlength="20" placeholder="ex: Icaraí"/></p>
            <p><label for="cLogra">Logradouro: </label><input type="text" name="tLogra" id="cLogra" maxlength="50" placeholder="ex: Rua, Av, Trav"/></p>
            <p><label for="cCom">Complemento: </label><input type="number" name="tCom" id="cCom" min="0" max="99999"/></p>
            <p><label for="cNum">Numero: </label><input type="number" name="tNum" id="cNum" min="0" max="99999"/></p>
        </fieldset>
        <div id="enviar">
            <input type="submit" name="tEnviar" id="cEnviar" value="Cadastrar" class="tEnviar"/>
        </div>
    </form>
</body>
</html>

<?php

if(isset($_POST['tEnviar'])){
    
    $usuario->setUs_email($_POST['tEmail']);
    $usuario->setUs_senha($_POST['tSenha']);
    $usuario->setUs_nome($_POST['tNome']);
    $usuario->setUs_foto($_POST['tFoto']);
    $usuario->setUs_telefone($_POST['tTel']);
    $usuario->setUs_estado($_POST['tEstado']);
    $usuario->setUs_municipio($_POST['tMuni']);
    $usuario->setUs_bairro($_POST['tBairro']);
    $usuario->setUs_logradouro($_POST['tLogra']);
    $usuario->setUs_complemento($_POST['tCom']);
    $usuario->setUs_numero($_POST['tNum']);
   
    if (!$usuarioDAO->consultarEmail($_POST['tEmail'])) {
        if($usuarioDAO->cadastrar($usuario)){
        ?>
            <script type="text/javascript">
                alert ("Cadastrado com sucesso!");
            </script>

        <?php  
        } else {
        ?>
            <script type="text/javascript">
                alert ("Falha no Cadastro!");
            </script>

        <?php
    }
}
    } else {
        ?>
        <script type="text/javascript">
            document.getElementById("resultadoCadastro").innerHTML = "O E-mail informado já esta cadastrado.";
            document.getElementById("resultadoCadastro").style.color = "red";</script>
        <?php
    }
?>