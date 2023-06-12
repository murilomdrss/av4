<?php
require('requisicoes.php');

$resp = enviar_requisicao("$url_api/q15","DELETE");

$codigo = $resp['codigo'];
$corpo = $resp['corpo'];

var_dump($codigo, $corpo);