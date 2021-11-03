<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
session_start();
require_once "checkLogin.php";
require_once "conecta.php";
mysqli_select_db($soller, 'sollerbrasil');

    $nome_en = $_POST["nome_en"];
    $nome_en = trim($nome_en);

    $descricao_en = $_POST["descricao_en"];
    $descricao_en = trim($descricao_en);

    $indicacao_en = $_POST["indicacao_en"];
    $indicacao_en = trim($indicacao_en);

    $acao_en = $_POST["acao_en"];
    $acao_en = trim($acao_en);

    $nome_pt = $_POST["nome_pt"];
    $nome_pt = trim($nome_pt);

    $descricao_pt = $_POST["descricao_pt"];
    $descricao_pt = trim($descricao_pt);
    
    $indicacao_pt = $_POST["indicacao_pt"];
    $indicacao_pt = trim($indicacao_pt);

    $acao_pt = $_POST["acao_pt"];
    $acao_pt = trim($acao_pt);

    $nome_es = $_POST["nome_es"];
    $nome_es = trim($nome_es);

    $descricao_es = $_POST["descricao_es"];
    $descricao_es = trim($descricao_es);

    $indicacao_es = $_POST["indicacao_es"];
    $indicacao_es = trim($indicacao_es);

    $acao_es = $_POST["acao_es"];
    $acao_es = trim($acao_es);

    $data = $_POST["data"];
    $data = trim($data);

    $hora = $_POST["hora"];
    $hora = trim($hora);

    $user = $_POST["user"];
    $user = trim($user);

    $categoria = $_POST["categoria"];
    $categoria = trim($categoria);

    $cat_en = $categoria - 1;
    $cat_es = $categoria + 1;

    $ativo = "Sim";

    $video = $_POST['video'];
    $video = trim($video);


    $dir = "arquivos/";
    $dir = strtolower($dir);
    
    $i = 1;

    $nomevar = 'arquivo';

    if (isset($_FILES[$nomevar])) {
        $arquivo_teste = $_FILES[$nomevar]; 
        $arquivo_teste = $arquivo_teste['name'];
        
        $$nomevar = $arquivo_teste;
    }

    require "adicionar-imagens.php";


//Insert inglês
$insertSQL = "INSERT INTO colecao (nome, descricao, indicacao, acao, ididioma_col, arquivo, video, idcategoria, ativo, data, hora, user) VALUES ('$nome_en', '$descricao_en', '$indicacao_en', '$acao_en', '1', '$novo', '$video', '$cat_en', '$ativo', '$data', '$hora', '$user' )";      
$Result = mysqli_query($soller, $insertSQL ) or die(mysqli_error($soller)); 

//Insert português
$insertSQL = "INSERT INTO colecao (nome, descricao, indicacao, acao, ididioma_col, arquivo, video, idcategoria, ativo, data, hora, user) VALUES ('$nome_pt', '$descricao_pt', '$indicacao_pt', '$acao_pt', '2', '$novo', '$video', '$categoria', '$ativo', '$data', '$hora', '$user' )";       
$Result = mysqli_query($soller, $insertSQL ) or die(mysqli_error($soller));     

//Insert espanhol
$insertSQL = "INSERT INTO colecao (nome, descricao, indicacao, acao, ididioma_col, arquivo, video, idcategoria, ativo, data, hora, user) VALUES ('$nome_es', '$descricao_es', '$indicacao_es', '$acao_es', '3', '$novo', '$video', '$cat_es', '$ativo', '$data', '$hora', '$user' )";           
$Result = mysqli_query($soller, $insertSQL ) or die(mysqli_error($soller));  
header("Location: home.php?inserido=true");
