<?php
require('requisicoes.php');

$nome = $argv[1];
$resp = enviar_requisicao("$url_api/q16/$nome", "DELETE");

$codigo = $resp['codigo'];
$corpo = $resp['corpo'];

var_dump($codigo, $corpo);
