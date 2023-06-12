<?php
require('requisicoes.php');

$corpo = [];
for ($i=1; $i < $argc; $i+=2) { 
    $corpo[$argv[$i]] = $argv[$i + 1];
}
$corpo = json_encode($corpo);

$resp = enviar_requisicao("$url_api/q12", "POST", $corpo, array("Content-Type:application/json"));

$codigo = $resp['codigo'];
$corpo = $resp['corpo'];

var_dump($codigo, $corpo);
