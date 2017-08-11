<?php

class usuario{
    
    private $us_email;
    private $us_senha;
    private $us_nome;
    private $us_telefone;
    private $us_foto;
    private $us_estado;
    private $us_municipio;
    private $us_bairro;
    private $us_logradouro;
    private $us_complemento;
    private $us_numero;
    
    function getUs_foto() {
        return $this->us_foto;
    }

    function setUs_foto($us_foto) {
        $this->us_foto = $us_foto;
    }

    
    function getUs_email() {
        return $this->us_email;
    }

    function getUs_senha() {
        return $this->us_senha;
    }

    function getUs_nome() {
        return $this->us_nome;
    }

    function getUs_telefone() {
        return $this->us_telefone;
    }

    function getUs_estado() {
        return $this->us_estado;
    }

    function getUs_municipio() {
        return $this->us_municipio;
    }

    function getUs_bairro() {
        return $this->us_bairro;
    }

    function getUs_logradouro() {
        return $this->us_logradouro;
    }

    function getUs_complemento() {
        return $this->us_complemento;
    }

    function getUs_numero() {
        return $this->us_numero;
    }


    function setUs_email($us_email) {
        $this->us_email = $us_email;
    }

    function setUs_senha($us_senha) {
        $this->us_senha = $us_senha;
    }

    function setUs_nome($us_nome) {
        $this->us_nome = $us_nome;
    }

    function setUs_telefone($us_telefone) {
        $this->us_telefone = $us_telefone;
    }

    function setUs_estado($us_estado) {
        $this->us_estado = $us_estado;
    }

    function setUs_municipio($us_municipio) {
        $this->us_municipio = $us_municipio;
    }

    function setUs_bairro($us_bairro) {
        $this->us_bairro = $us_bairro;
    }

    function setUs_logradouro($us_logradouro) {
        $this->us_logradouro = $us_logradouro;
    }

    function setUs_complemento($us_complemento) {
        $this->us_complemento = $us_complemento;
    }

    function setUs_numero($us_numero) {
        $this->us_numero = $us_numero;
    }


}

?>