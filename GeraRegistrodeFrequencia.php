<?php 

date_default_timezone_set('America/Porto_Velho');
require_once 'vendor/autoload.php';
require_once 'Conexao.php';

$faker = Faker\Factory::create('pt_br');

$pdo = Conexao::getIntance();

$consulta = $pdo->prepare("SELECT * FROM colaboradores");
$consulta->execute();
$colaboradores = $consulta->fetchAll(PDO::FETCH_OBJ);

for ($date = strtotime("2015-01-01"); $date <= strtotime("2020-12-31"); $date = strtotime("+1 day", $date)) {
   
    foreach ($colaboradores as $colaborador){
       //registra entrada
        $frequencia = New DateTime();
        $frequencia->setTimestamp($date);
        $frequencia->setTime(07,rand(20,40), 0); 
        $sql = $pdo->prepare("INSERT INTO frequencias (data, colaborador_id) VALUES (?, ?)");
        $sql->execute(array($frequencia->format('Y-m-d H:i:s'), $colaborador->id));

        //registra saida
        $frequencia = New DateTime();
        $frequencia->setTimestamp($date);
        $frequencia->setTime(13,rand(25,59), 0); 
        $sql = $pdo->prepare("INSERT INTO frequencias (data, colaborador_id) VALUES (?, ?)");
        $sql->execute(array($frequencia->format('Y-m-d H:i:s'), $colaborador->id));
    }
}
