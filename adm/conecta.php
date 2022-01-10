<?php 
$URL_ATUAL= "$_SERVER[SERVER_NAME]";
if (strpos($URL_ATUAL, 'soller') !== false OR strpos($URL_ATUAL, 'novaeraweb') !== false) {
  $soller = mysqli_connect('sollerbrasil.mysql.dbaas.com.br', 'sollerbrasil', 'Sb*010203', 'sollerbrasil');
} else {
	$soller = mysqli_connect('localhost', 'root', 'root', 'sollerbrasil');
}
mysqli_query($soller, "SET NAMES 'utf8'");
mysqli_query($soller,'SET character_set_connection=utf8');
mysqli_query($soller,'SET character_set_client=utf8');
mysqli_query($soller,'SET character_set_results=utf8');
$database_soller = "sollerbrasil";
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');
