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

    $indicacao_en = $_POST["indicacao_en"];
    $indicacao_en = trim($indicacao_en);

    $acao_en = $_POST["acao_en"];
    $acao_en = trim($acao_en);

    // Dados português
    
    $nome_pt = $_POST["nome_pt"];
    $nome_pt = trim($nome_pt);
   
    $descricao_pt = $_POST["descricao_pt"];
    $descricao_pt = trim($descricao_pt);

    $indicacao_pt = $_POST["indicacao_pt"];
    $indicacao_pt = trim($indicacao_pt);

    $acao_pt = $_POST["acao_pt"];
    $acao_pt = trim($acao_pt);

    // Dados espanhol

    $nome_es = $_POST["nome_es"];
    $nome_es = trim($nome_es);

    $descricao_es = $_POST["descricao_es"];
    $descricao_es = trim($descricao_es);

    $indicacao_es = $_POST["indicacao_es"];
    $indicacao_es = trim($indicacao_es);
    
    $acao_es = $_POST["acao_es"];
    $acao_es = trim($acao_es);


    // Gerais
    $video = $_POST["video"];
    $video = trim($video);

    $ativo = $_POST["ativo"];
    $ativo = trim($ativo);
    

    $id_en = $id - 1;
    $id_es = $id + 1;

// Insert EN
$updateSQL = "UPDATE colecao SET nome = '$nome_en', descricao = '$descricao_en', indicacao = '$indicacao_en', acao = '$acao_en', video = '$video' , ativo = '$ativo' WHERE idcolecao ='$id_en' AND ididioma_col = '1'"; 

$Result = mysqli_query($soller, $updateSQL) or die(mysqli_error($soller));  

// Insert PT
$updateSQL = "UPDATE colecao SET nome = '$nome_pt', descricao = '$descricao_pt', indicacao = '$indicacao_pt', acao = '$acao_pt', video = '$video' , ativo = '$ativo' WHERE idcolecao ='$id' AND ididioma_col = '2'"; 

$Result = mysqli_query($soller, $updateSQL) or die(mysqli_error($soller));  

// Insert ES
$updateSQL = "UPDATE colecao SET nome = '$nome_es', descricao = '$descricao_es', indicacao = '$indicacao_es', acao = '$acao_es', video = '$video' , ativo = '$ativo' WHERE idcolecao ='$id_es' AND ididioma_col = '3'"; 

$Result = mysqli_query($soller, $updateSQL) or die(mysqli_error($soller));  
header("Location: listar-colecao.php?editado=true");