<?php
header('Content-Type: application/json');
$pdo=new PDO("mysql:dbname=thrmarco_medic;host=localhost","thrmarco_medic","Medics@2018");

//Seleccionar los eventos del calendario
$sentenciaSQL= $pdo->prepare("SELECT * FROM calendarios");
$sentenciaSQL->execute();

$resultado= $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($resultado);
?>