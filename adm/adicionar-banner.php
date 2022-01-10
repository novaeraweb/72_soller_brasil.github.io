<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
session_start();
require_once "checkLogin.php";
require_once "conecta.php";
mysqli_select_db($soller, 'sollerbrasil');

    $nome = $_POST["nome"];
    $nome = trim($nome);

    $descricao = $_POST["descricao"];
    $descricao = trim($descricao);

    $local = $_POST["local"];
    $local = trim($local);

    $data = $_POST["data"];
    $data = trim($data);

    $hora = $_POST["hora"];
    $hora = trim($hora);

    $user = $_POST["user"];
    $user = trim($user);

    $ativo = "Sim";

    $dir = "arquivos/";
    $dir = strtolower($dir);

    $nomevar = 'arquivo';

    if (isset($_FILES[$nomevar])) {
        $arquivo_teste = $_FILES[$nomevar]; 
        $arquivo_teste = $arquivo_teste['name'];
        
        $$nomevar = $arquivo_teste;
    }

    $nomevar_mobile = 'arquivo_mobile';

    if (isset($_FILES[$nomevar_mobile])) {
        $arquivo_mobile = $_FILES[$nomevar_mobile]; 
        $arquivo_mobile = $arquivo_mobile['name'];
        
        $$nomevar_mobile = $arquivo_mobile;
    }

    require "adicionar-imagens.php";

$insertSQL = "INSERT INTO banner (nome, descricao, local, arquivo, arquivo_mobile, ativo, hora, data, user) VALUES ('$nome', '$descricao', '$local', '$novo', '$novo_mobile', '$ativo', '$hora','$data', '$user' )";           
$Result = mysqli_query($soller, $insertSQL ) or die(mysqli_error($soller));  
header("Location: listar-banner.php?inserido=true");