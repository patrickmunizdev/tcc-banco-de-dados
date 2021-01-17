<?php

require_once 'vendor/autoload.php';
require_once 'Conexao.php';

$faker = Faker\Factory::create('pt_br');

$pdo = Conexao::getIntance();

$sql = $pdo->prepare("INSERT INTO colaboradores(nome, matricula, cpf, cargo) VALUES (?,?,?,?)");

$ARRAY_CARGOS = [
    'PROGRAMADOR', 'ANALISTA DE REDES', 'ANALISTA EM SUPORTE TÉCNICO', 'TÉCNICO ADMINISTRATIVO', 'ANALISTA ADMINISTRATIVO', 'MOTORISTA', 'AUXILIAR DE SERVIÇOS GERAIS'
];

for ($i = 0; $i < 200; $i++) {
   $sql->execute(
       array($faker->name, randomNumber(9), $faker->cpf(false),  $ARRAY_CARGOS[array_rand($ARRAY_CARGOS)])
   );
}

# https://stackoverflow.com/questions/13169025/generate-a-random-number-with-pre-defined-length-php
function randomNumber($length) {
    $result = '';

    for($i = 0; $i < $length; $i++) {
        $result .= mt_rand(0, 9);
    }
    return $result;
}