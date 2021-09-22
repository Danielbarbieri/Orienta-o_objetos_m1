<?php

require_once "Pessoa.php";
require_once "PessoaFísica.php";
require_once "PessoaJurídica.php";
require_once "Animal.php";
require_once "Cachorro.php";



// $pessoa = new Pessoa();
// // $pessoa->setNome("Daniel");
// echo $pessoa->getNome();
// echo "<br>";


// $pf = new PessoaFisica('596.188.418.04');
// $pf->setNome("José");
// echo $pf ->getNome();
// echo "<br>";
// // $pf->setCpf('99999999');
// echo $pf->getCpf();
// echo "<br>";


// $pj = new PessoaJuridica('Loja Daniel');
// echo $pj ->getNome();
// echo "<br>";
// $pj->setCnpj('5410.1204 0001/000414');
// echo $pj->getCnpj();

// // echo "<br>";
// // echo $pf->exibeInformacoes();

// if($pf instanceof Detalhavel){
//     echo "é detalhável";
// }

$animal = new Cachorro();

$animal->setNome("Bob");
echo $animal->getNome();
echo "<br>";

echo $animal->emiteSom();