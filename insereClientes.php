<?php
require_once("class\Cliente.php");

$cliente1 = new Cliente(1,"Maria", 123456789, "rua Uberaba", "9999-9999", "email@damaria.com.br");
$cliente2 = new Cliente(2,"João", 987654321, "rua Uberaba", "9999-9999", "email@dojoao.com.br");
$cliente3 = new Cliente(3,"Ana", 456789123, "rua Uberaba", "9999-9999", "email@daana.com.br");
$cliente4 = new Cliente(4,"Claudio", 789123456, "rua Uberaba", "9999-9999", "email@doclaudio.com.br");
$cliente5 = new Cliente(5,"Joana", 654321987, "rua Uberaba", "9999-9999", "email@dajoana.com.br");
$cliente6 = new Cliente(6,"Jonas", 321987654, "rua Uberaba", "9999-9999", "email@dojonas.com.br");
$cliente7 = new Cliente(7,"Tales", 987321654, "rua Uberaba", "9999-9999", "email@dotales.com.br");
$cliente8 = new Cliente(8,"Ricardo", 654987321, "rua Uberaba", "9999-9999", "email@doricardo.com.br");
$cliente9 = new Cliente(9,"Marilia", 321654987, "rua Uberaba", "9999-9999", "email@damarilia.com.br");
$cliente10 = new Cliente(10,"Gabriel", 123789456, "rua Uberaba", "9999-9999", "email@dogabriel.com.br");

$arrayClientes = [$cliente1,$cliente2,$cliente3,$cliente4,$cliente5,$cliente6,$cliente7,$cliente8,$cliente9,$cliente10];

?>