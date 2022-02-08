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

    $nome_pt = $_POST["nome_pt"];
    $nome_pt = trim($nome_pt);
    
    $descricao_pt = $_POST["descricao_pt"];
    $descricao_pt = trim($descricao_pt);

    $nome_es = $_POST["nome_es"];
    $nome_es = trim($nome_es);

    $descricao_es = $_POST["descricao_es"];
    $descricao_es = trim($descricao_es);

    $ativo = "Sim";

    $data = $_POST["data"];
    $data = trim($data);

    $hora = $_POST["hora"];
    $hora = trim($hora);

    $user = $_POST["user"];
    $user = trim($user);
    
    $video = $_POST['video'];
    $video = trim($video);


    $dir = "arquivos/";
    $dir = strtolower($dir);
    


    $nomevar = 'arquivo';

    if (isset($_FILES[$nomevar])) {
        $arquivo_teste = $_FILES[$nomevar]; 
        $arquivo_teste = $arquivo_teste['name'];
        
        $$nomevar = $arquivo_teste;
    }

    require "adicionar-imagens.php";


//Insert inglês
$insertSQL = "INSERT INTO linha (nome, descricao, ididioma_li, arquivo, video, ativo, data, user) VALUES ('$nome_en', '$descricao_en', '1', '$novo', '$video', '$ativo', '$data', '$user' )";      
$Result = mysqli_query($soller, $insertSQL ) or die(mysqli_error($soller)); 

//Insert português
$insertSQL = "INSERT INTO linha (nome, descricao, ididioma_li, arquivo, video, ativo, data, user) VALUES ('$nome_pt', '$descricao_pt', '2', '$novo', '$video', '$ativo', '$data', '$user' )";       
$Result = mysqli_query($soller, $insertSQL ) or die(mysqli_error($soller));     

//Insert espanhol
$insertSQL = "INSERT INTO linha (nome, descricao, ididioma_li, arquivo, video, ativo, data, user) VALUES ('$nome_es', '$descricao_es', '3', '$novo', '$video', '$ativo', '$data', '$user' )";           
$Result = mysqli_query($soller, $insertSQL ) or die(mysqli_error($soller));  
header("Location: home.php?inserido=true");
