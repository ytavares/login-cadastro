<?php
session_start();
require_once ("classes/DAO/usuarioDAO.php");

$usuarioDAO = new usuarioDAO(); 

?>
            
            
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="_css/estilo.css">
</head>
<body>
<div id="principal">
    <div id="login">
        <form method="post" name="Login">

            <div id="titulo">
                <label for="cEmail"><h1>Login</h1></label>
            </div>

            <div id="usuario">
                <p><label for="cEmail"><p><h2>Email:</h2></p></label>
                <input type="email" name="tEmail" id="cEmail" size="40"/></p>
                <p><label for="cSenha"><p><h2>Senha:</h2></p></label>
                <input type="password" name="tSenha" id="cSenha" size="40"/></p>
            </div>

            <div id="botao">
                <input type="submit" name="tLogin" id="cLogin" value="Entrar"/>
            </div>

            <div id="cadastro">
                <li><a href="cadastro.php">Cadastro</a></li>
                </label></div>
        </form>
    </div>
</div>
</body>
</html>

<?php
if (isset($_POST['tLogin'])) {
    if ($usuarioDAO->login($_POST['tEmail'], $_POST['tSenha'])) {

        $_SESSION['logado'] = '1';
	  
	  header ("Location: painelUsuario.php");
    } else {
        ?>
        <script type="text/javascript">
            alert("Usuário ou senha inválido.");
        </script>
        <?php
    }
}

if (isset($_GET['erro'])) {
    switch ($_GET['erro']) {
        case "1":
            ?>
            <script type="text/javascript">
                alert("Você não tem permissão para acessar o painel.");
            </script>
            <?php
            break;
        case "2":
            ?>
            <script type="text/javascript">
                alert("Você saiu do painel.");
            </script>
            <?php
            break;
    }
}

if ($_SESSION['logado'] == '1') {
   header ("Location: painelUsuario.php");
}
?>