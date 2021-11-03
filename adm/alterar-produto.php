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

    $peso_br_en = $_POST["peso_br_en"];
    $peso_br_en = trim($peso_br_en);

    $peso_en_en = $_POST["peso_en_en"];
    $peso_en_en = trim($peso_en_en);

    // Dados português
    
    $nome_pt = $_POST["nome_pt"];
    $nome_pt = trim($nome_pt);
   
    $descricao_pt = $_POST["descricao_pt"];
    $descricao_pt = trim($descricao_pt);

    $peso_br_pt = $_POST["peso_br_pt"];
    $peso_br_pt = trim($peso_br_pt);

    $peso_en_pt = $_POST["peso_en_pt"];
    $peso_en_pt = trim($peso_en_pt);

    // Dados espanhol

    $nome_es = $_POST["nome_es"];
    $nome_es = trim($nome_es);

    $descricao_es = $_POST["descricao_es"];
    $descricao_es = trim($descricao_es);

    $peso_br_es = $_POST["peso_br_es"];
    $peso_br_es = trim($peso_br_es);
    
    $peso_en_es = $_POST["peso_en_es"];
    $peso_en_es = trim($peso_en_es);


    // Gerais
    $video = $_POST["video"];
    $video = trim($video);

    $ativo = $_POST["ativo"];
    $ativo = trim($ativo);
    

    $id_en = $id - 1;
    $id_es = $id + 1;

// Insert EN
$updateSQL = "UPDATE produto SET nome = '$nome_en', descricao = '$descricao_en', peso_br = '$peso_br_en', peso_en = '$peso_en_en', video = '$video' , ativo = '$ativo' WHERE idproduto ='$id_en' AND ididioma_prod = '1'"; 

$Result = mysqli_query($soller, $updateSQL) or die(mysqli_error($soller));  

// Insert PT
$updateSQL = "UPDATE produto SET nome = '$nome_pt', descricao = '$descricao_pt', peso_br = '$peso_br_pt', peso_en = '$peso_en_pt', video = '$video' , ativo = '$ativo' WHERE idproduto ='$id' AND ididioma_prod = '2'"; 

$Result = mysqli_query($soller, $updateSQL) or die(mysqli_error($soller));  

// Insert ES
$updateSQL = "UPDATE produto SET nome = '$nome_es', descricao = '$descricao_es', peso_br = '$peso_br_es', peso_en = '$peso_en_es', video = '$video' , ativo = '$ativo' WHERE idproduto ='$id_es' AND ididioma_prod = '3'"; 

$Result = mysqli_query($soller, $updateSQL) or die(mysqli_error($soller));  
header("Location: home.php?editado=true");