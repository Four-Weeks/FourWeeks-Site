<?php
header('Access-Control-Allow-Origin: *');
ini_set('default_charset','UTF-8');

$Eu = $_GET['eu'];
$Para = $_GET['para'];
$Assunto = $_GET['assunto'];
$Texto = $_GET['html'];

require_once("API-email.php");

$R_E_E = enviar_email($Eu,$Para,$Assunto,$Texto);
if ($R_E_E == 'OK') {
echo "OK";
}else{
echo "ERRO: ".$R_E_E;
}



?>