<?php 

$nome = "SEAMAR";
$ip = "192.168.10.1";
$usuario = "admin";
$senha = "11032020";
$porta = "8728";
require "require/routeros_api.class.php";

$API = new RouterosAPI();

$API->debug = false;
$API->port = $porta;
?>