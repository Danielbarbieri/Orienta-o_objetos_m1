<?php

require_once "Detalhavel.php";

class PessoaFisica extends Pessoa implements Detalhavel{

    private string $cpf;

    public function __construct(string $cpf){
        $this->cpf = $cpf;
        parent::__construct();
    }

    public function setCpf(string $cpf){
        $this->cpf = $cpf;
    }

    public function getCpf(){
        return $this->cpf;
    }

    public function exibeInformacoes(){
        return $this->nome . "possui o cpf" . $this->cpf;
    }

}