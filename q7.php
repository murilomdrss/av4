<?php
require('requisicoes.php');

$nome = array('nome'=>$argv[1]);
$nome = http_build_query($nome);


$resp = enviar_requisicao("$url_api/q3?$nome");

$codigo = $resp['codigo'];
$corpo = '';

var_dump($codigo, $corpo);
