<?php
require('requisicoes.php');

$nome = [];
for ($i = 1; $i < $argc; $i += 2) {
    $nome[$argv[$i]] = $argv[$i + 1];
}
$queryString = http_build_query($nome);

$resp = enviar_requisicao("$url_api/q4?".$queryString);

$codigo = $resp['codigo'];
$corpo = $resp['corpo'];

var_dump($codigo, $corpo);
