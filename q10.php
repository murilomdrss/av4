<?php
require('requisicoes.php');

$corpo = array("nome"=>$argv[1],"Content-Type"=>"multipart/form-data");

$resp = enviar_requisicao("$url_api/q10","POST",$corpo);

$codigo = $resp['codigo'];
$corpo = $resp['corpo'];

var_dump($codigo, $corpo);