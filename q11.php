<?php
require('requisicoes.php');

$corpo = array("nome"=>$argv[1],"idade"=>$argv[2],"Content-Type"=>"multipart/form-data");

$resp = enviar_requisicao("$url_api/q11","POST",$corpo);

$codigo = $resp['codigo'];
$corpo = $resp['corpo'];

var_dump($codigo, $corpo);