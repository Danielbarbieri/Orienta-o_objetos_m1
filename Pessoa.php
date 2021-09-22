<?php

class Pessoa{
    private string $nome;

    public function __construct(string $nome = "Sem Nome"){
        $this->nome = $nome;
    }

    public function setNome(string $nome){
        $this->nome = $nome;

    }

    public function getNome(){
        return $this->nome;
    }
}