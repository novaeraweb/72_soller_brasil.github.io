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

    $colecao = $_POST["colecao"];
    $colecao = trim($colecao);

    $linha = $_POST["linha"];
    $linha = trim($linha);

    $peso_unico = $_POST["peso_unico"];
    $peso_unico = trim($peso_unico);

    $peso_g_br = $_POST["peso_g_br"];
    $peso_g_br = trim($peso_g_br);

    $peso_g_en = $_POST["peso_g_en"];
    $peso_g_en = trim($peso_g_en);

    $peso_m_br = $_POST["peso_m_br"];
    $peso_m_br = trim($peso_m_br);

    $peso_m_en = $_POST["peso_m_en"];
    $peso_m_en = trim($peso_m_en);

    $peso_p_br = $_POST["peso_p_br"];
    $peso_p_br = trim($peso_p_br);

    $peso_p_en = $_POST["peso_p_en"];
    $peso_p_en = trim($peso_p_en);

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

    require "adicionar-imagens-red.php";

    if ($linha == ''){
        $linha = '0';
    } else {
        $linha_en = $linha - 1;
        $linha_es = $linha + 1;
    }

    if ($colecao == ''){
        $colecao = '0';
    } else {
        $colecao_en = $colecao - 1;
        $colecao_es = $colecao + 1;
    }
    
//Insert inglês
$insertSQL = "INSERT INTO produto (nome, descricao, peso_unico, peso_g_br, peso_m_br, peso_p_br, peso_g_en, peso_m_en, peso_p_en, ididioma_prod, arquivo, video, idlinha_prod, idcolecao_prod, ativo, data, hora, user) VALUES ('$nome_en', '$descricao_en', '$peso_unico', '$peso_g_br',  '$peso_m_br', '$peso_p_br','$peso_g_en', '$peso_m_en', '$peso_p_en', '1', '$novo', '$video', '$linha_en', '$colecao_en', '$ativo', '$data', '$hora', '$user' )";      
$Result = mysqli_query($soller, $insertSQL ) or die(mysqli_error($soller)); 

//Insert português
$insertSQL = "INSERT INTO produto (nome, descricao, peso_unico, peso_g_br, peso_m_br, peso_p_br, peso_g_en, peso_m_en, peso_p_en, ididioma_prod, arquivo, video, idlinha_prod, idcolecao_prod, ativo, data, hora, user) VALUES ('$nome_pt', '$descricao_pt', '$peso_unico', '$peso_g_br',  '$peso_m_br', '$peso_p_br','$peso_g_en', '$peso_m_en', '$peso_p_en', '2', '$novo', '$video', '$linha', '$colecao', '$ativo', '$data', '$hora', '$user' )";       
$Result = mysqli_query($soller, $insertSQL ) or die(mysqli_error($soller));     

//Insert espanhol
$insertSQL = "INSERT INTO produto (nome, descricao, peso_unico, peso_g_br, peso_m_br, peso_p_br, peso_g_en, peso_m_en, peso_p_en, ididioma_prod, arquivo, video, idlinha_prod, idcolecao_prod, ativo, data, hora, user) VALUES ('$nome_es', '$descricao_es', '$peso_unico', '$peso_g_br', '$peso_m_br', '$peso_p_br', '$peso_g_en', '$peso_m_en', '$peso_p_en', '3', '$novo', '$video', '$linha_es', '$colecao_es', '$ativo', '$data', '$hora', '$user')";           
$Result = mysqli_query($soller, $insertSQL ) or die(mysqli_error($soller));  
header("Location: home.php?inserido=true");