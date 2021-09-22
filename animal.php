<?php

abstract class Animal
{

    private string $nome;

    public function setNome(string $nome)
    {

        $this->nome = $nome;
    }
    public function getNome()
    {
        return $this->nome;
    }

    public abstract function emiteSom();
}