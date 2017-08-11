<?php
session_start();

if($_SESSION['logado'] != 1){
        ?>
            <script type="text/javascript">
                document.location.href = "index.php?erro=1";
            </script>
        <?php
}else {
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Painel do Usuário</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="_css/painel.css">
    </head>
    
<body>
    <div id="principal">
        <div id="titulo">
                <label><h1>Bem Vindo!</h1></label>
        </div>
        <div id="logout">
        <a href="?acao=sair"><button type="submit" name="tSair" id="cLogout" alt="Sair">Sair</button></a>
        </div>
    </div>
</body>
</html>

<?php
}
if (isset($_GET["acao"])) {

    if ($_GET["acao"] == "sair") {
        $_SESSION['logado'] = 0;
        ?>
        <script type="text/javascript">
            document.location.href = "index.php?erro=2";
        </script>
        <?php
    }
}
?>