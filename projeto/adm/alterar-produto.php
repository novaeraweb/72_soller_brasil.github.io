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

    
    if (isset($_POST['peso_p_en'])){
        $peso_p_en = $_POST['peso_p_en'];
        $peso_p_en = trim($peso_p_en);
    } else {
        $peso_p_en = NULL;
    }
    

    if (isset($_POST['peso_m_en'])){
        $peso_m_en = $_POST['peso_m_en'];
        $peso_m_en = trim($peso_m_en);
    } else {
        $peso_m_en = NULL;
    }
    
    if (isset($_POST['peso_g_en'])){
        $peso_g_en = $_POST['peso_g_en'];
        $peso_g_en = trim($peso_g_en);
    } else {
        $peso_g_en = NULL;
    }
    

    
    if (isset($_POST['peso_unico'])){
        $peso_unico = $_POST['peso_unico'];
        $peso_unico = trim($peso_unico);
    } else {
        $peso_unico = NULL;
    }
    


    // Dados português
    
    $nome_pt = $_POST["nome_pt"];
    $nome_pt = trim($nome_pt);
   
    $descricao_pt = $_POST["descricao_pt"];
    $descricao_pt = trim($descricao_pt);

   
    if (isset($_POST['peso_p_br'])){
        $peso_p_br = $_POST['peso_p_br'];
        $peso_p_br = trim($peso_p_br);
    } else {
        $peso_p_br = NULL;
    }
    

    if (isset($_POST['peso_m_br'])){
        $peso_m_br = $_POST['peso_m_br'];
        $peso_m_br = trim($peso_m_br);
    } else {
        $peso_m_br = NULL;
    }
    
    if (isset($_POST['peso_g_br'])){
        $peso_g_br = $_POST['peso_g_br'];
        $peso_g_br = trim($peso_g_br);
    } else {
        $peso_g_br = NULL;
    }
    


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
$updateSQL = "UPDATE produto SET nome = '$nome_en', descricao = '$descricao_en', peso_p_en = '$peso_p_en', peso_m_en = '$peso_m_en', peso_g_en = '$peso_g_en', peso_p_br = '$peso_p_br', peso_m_br = '$peso_m_br', peso_g_br = '$peso_g_br' , peso_unico = '$peso_unico', video = '$video' , ativo = '$ativo' WHERE idproduto ='$id_en' AND ididioma_prod = '1'"; 

$Result = mysqli_query($soller, $updateSQL) or die(mysqli_error($soller));  

// Insert PT
$updateSQL = "UPDATE produto SET nome = '$nome_pt', descricao = '$descricao_pt', peso_p_en = '$peso_p_en', peso_m_en = '$peso_m_en', peso_g_en = '$peso_g_en' , peso_p_br = '$peso_p_br', peso_m_br = '$peso_m_br', peso_g_br = '$peso_g_br', peso_unico = '$peso_unico', video = '$video' , ativo = '$ativo' WHERE idproduto ='$id' AND ididioma_prod = '2'"; 

$Result = mysqli_query($soller, $updateSQL) or die(mysqli_error($soller));  

// Insert ES
$updateSQL = "UPDATE produto SET nome = '$nome_es', descricao = '$descricao_es', peso_p_en = '$peso_p_en', peso_m_en = '$peso_m_en', peso_g_en = '$peso_g_en' , peso_p_br = '$peso_p_br', peso_m_br = '$peso_m_br', peso_g_br = '$peso_g_br', peso_unico = '$peso_unico', video = '$video' , ativo = '$ativo' WHERE idproduto ='$id_es' AND ididioma_prod = '3'"; 

$Result = mysqli_query($soller, $updateSQL) or die(mysqli_error($soller));  
header("Location: listar-produto.php?editado=true");