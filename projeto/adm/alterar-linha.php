<?php
require_once "conecta.php";
mysqli_select_db($soller, 'sollerbrasil');

    $id = $_POST["id"];
    $id = trim($id);

    // Dados inglês

    $nome_en = $_POST["nome_en"];
    $nome_en = trim($nome_en);
    
    $descricao_en = $_POST["descricao_en"];
    $descricao_en = trim($descricao_en);

    // Dados português
    
    $nome_pt = $_POST["nome_pt"];
    $nome_pt = trim($nome_pt);
   
    $descricao_pt = $_POST["descricao_pt"];
    $descricao_pt = trim($descricao_pt);


    // Dados espanhol

    $nome_es = $_POST["nome_es"];
    $nome_es = trim($nome_es);

    $descricao_es = $_POST["descricao_es"];
    $descricao_es = trim($descricao_es);


    // Gerais
    $video = $_POST["video"];
    $video = trim($video);

    $ativo = $_POST["ativo"];
    $ativo = trim($ativo);
    

    $id_en = $id - 1;
    $id_es = $id + 1;

// Insert EN
$updateSQL = "UPDATE linha SET nome = '$nome_en', descricao = '$descricao_en', video = '$video' , ativo = '$ativo' WHERE idlinha ='$id_en' AND ididioma_li = '1'"; 

$Result = mysqli_query($soller, $updateSQL) or die(mysqli_error($soller));  

// Insert PT
$updateSQL = "UPDATE linha SET nome = '$nome_pt', descricao = '$descricao_pt', video = '$video' , ativo = '$ativo' WHERE idlinha ='$id' AND ididioma_li = '2'"; 

$Result = mysqli_query($soller, $updateSQL) or die(mysqli_error($soller));  

// Insert ES
$updateSQL = "UPDATE linha SET nome = '$nome_es', descricao = '$descricao_es', video = '$video' , ativo = '$ativo' WHERE idlinha ='$id_es' AND ididioma_li = '3'"; 

$Result = mysqli_query($soller, $updateSQL) or die(mysqli_error($soller));  
header("Location: listar-linha.php?editado=true");