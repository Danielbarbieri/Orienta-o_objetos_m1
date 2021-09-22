<?php

class PessoaJuridica extends Pessoa implements Detalhavel{

    private string $cnpj;

    // public function __construct(string $cpf){
    //     $this->cpf = $cpf;
    //     parent::__construct();
    // }

    public function setCnpj(string $cnpj){
        $this->cnpj = $cnpj;
    }

    public function getCnpj(){
        return $this->cnpj;
    }

    public function exibeInformacoes()
    {
        return "o cnpj é" . $this->cnpj;
    }

}