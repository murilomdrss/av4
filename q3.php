<?php
require('requisicoes.php');

$nome = array('nome' => $argv[1]);
$queryString = http_build_query($nome);

$resp = enviar_requisicao( $url_api . "/q3?" . $queryString);

$codigo = $resp['codigo'];
$corpo = $resp['corpo'];

var_dump($codigo, $corpo);
