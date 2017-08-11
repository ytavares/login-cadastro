<?php
    
    require_once ("Conexao.php");

    class usuarioDAO{
        
        function __construct() {
            $this->con = new Conexao();
            $this->pdo = $this->con->Connect();
        }
        
        function cadastrar(usuario $entUsuario){
            try{
                $stmt = $this->pdo->prepare ('INSERT INTO usuario VALUES (:us_email, :us_senha, :us_nome, :us_telefone, :us_foto, :us_estado, :us_municipio, :us_bairro, :us_logradouro, :us_complemento, :us_numero)');
                
                $stmt->bindValue( ':us_email' , $entUsuario->getUs_email()); 
                $stmt->bindValue( ':us_senha' , $entUsuario->getUs_senha()); 
                $stmt->bindValue( ':us_nome' , $entUsuario->getUs_nome()); 
                $stmt->bindValue( ':us_telefone' , $entUsuario->getUs_telefone()); 
                $stmt->bindValue( ':us_foto' , $entUsuario->getUs_foto()); 
                $stmt->bindValue( ':us_estado' , $entUsuario->getUs_estado()); 
                $stmt->bindValue( ':us_municipio' , $entUsuario->getUs_municipio()); 
                $stmt->bindValue( ':us_bairro' , $entUsuario->getUs_bairro());
                $stmt->bindValue( ':us_logradouro' , $entUsuario->getUs_logradouro()); 
                $stmt->bindValue( ':us_complemento' , $entUsuario->getUs_complemento()); 
                $stmt->bindValue( ':us_numero' , $entUsuario->getUs_numero()); 
                
                return $stmt->execute();
        
            } catch (PDOException $ex){
                echo "ERRO 01: {$ex->getMessage()}";
            }
        }
            function consultarEmail($us_email) {
        try {
            $stmt = $this->pdo->prepare("SELECT * FROM usuario WHERE us_email = :us_email");
            $param = array(":us_email" => $us_email);


            $stmt->execute($param);

            if ($stmt->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $ex) {
            echo "ERRO 02: {$ex->getMessage()}";
        }
    }
    function login($us_email, $us_senha) {
        try {
            $stmt = $this->pdo->prepare("SELECT * FROM usuario WHERE us_email = :us_email AND us_senha = :us_senha");
            $param = array(
                ":us_email" => $us_email,
                ":us_senha" => $us_senha
            );

            $stmt->execute($param);

            if ($stmt->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $ex) {
            echo "ERRO 03: {$ex->getMessage()}";
        }
    }
    }
?>