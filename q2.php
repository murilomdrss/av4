<?php
require('requisicoes.php');

$nome = $argv[1];

$resp = enviar_requisicao($url_api . "/q2/$nome");

$codigo = $resp['codigo'];
$corpo = $resp['corpo'];

var_dump($codigo, $corpo);
