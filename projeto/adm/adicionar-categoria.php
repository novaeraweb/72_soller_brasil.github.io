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

    $descricao_breve_en = $_POST["descricao_breve_en"];
    $descricao_breve_en = trim($descricao_breve_en);

    $descricao_longa_en = $_POST["descricao_longa_en"];
    $descricao_longa_en = trim($descricao_longa_en);

    $nome_pt = $_POST["nome_pt"];
    $nome_pt = trim($nome_pt);
    
    $descricao_breve_pt = $_POST["descricao_breve_pt"];
    $descricao_breve_pt = trim($descricao_breve_pt);

    $descricao_longa_pt = $_POST["descricao_longa_pt"];
    $descricao_longa_pt = trim($descricao_longa_pt);

    $nome_es = $_POST["nome_es"];
    $nome_es = trim($nome_es);

    $descricao_breve_es = $_POST["descricao_breve_es"];
    $descricao_breve_es = trim($descricao_breve_es);

    $descricao_longa_es = $_POST["descricao_longa_es"];
    $descricao_longa_es = trim($descricao_longa_es);

    $ativo = "Sim";

    // $video = $_POST['video'];
    // $video = trim($video);

    $data = $_POST["data"];
    $data = trim($data);
    
    $hora = $_POST["hora"];
    $hora = trim($hora);

    $user = $_POST["user"];
    $user = trim($user);


        // $dir = "arquivos/";
        // $dir = strtolower($dir);
    
    // $i = 1;

    // $nomevar = 'arquivo'.$i;

    // if (isset($_FILES[$nomevar])) {
    //     $arquivo_teste = $_FILES[$nomevar]; 
    //     $arquivo_teste = $arquivo_teste['name'];
        
    //     $$nomevar = $arquivo_teste;
    //     $j = $i;
    // }

    // require "adicionar-imagens.php";


//Insert inglês
$insertSQL = "INSERT INTO categoria (nome, descricao_breve, descricao_longa, ididioma_cat, ativo, data, hora, user) VALUES ('$nome_en', '$descricao_breve_en', '$descricao_longa_en', '1', '$ativo', '$data', '$hora','$user' )";      
$Result = mysqli_query($soller, $insertSQL ) or die(mysqli_error($soller)); 

//Insert português
$insertSQL = "INSERT INTO categoria (nome, descricao_breve, descricao_longa, ididioma_cat, ativo, data, hora, user) VALUES ('$nome_pt', '$descricao_breve_pt', '$descricao_longa_pt', '2', '$ativo', '$data', '$hora','$user' )";       
$Result = mysqli_query($soller, $insertSQL ) or die(mysqli_error($soller));     

//Insert espanhol
$insertSQL = "INSERT INTO categoria (nome, descricao_breve, descricao_longa, ididioma_cat, ativo, data, hora, user) VALUES ('$nome_es', '$descricao_breve_es', '$descricao_longa_es', '3', '$ativo', '$data','$hora', '$user' )";           
$Result = mysqli_query($soller, $insertSQL ) or die(mysqli_error($soller));  
header("Location: listar-categoria.php?inserido=true");
