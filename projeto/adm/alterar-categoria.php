<?php
require_once "conecta.php";
mysqli_select_db($soller, 'sollerbrasil');

    $id = $_POST["id"];
    $id = trim($id);

    // Dados inglês

    $nome_en = $_POST["nome_en"];
    $nome_en = trim($nome_en);
    
    $descricao_breve_en = $_POST["descricao_breve_en"];
    $descricao_breve_en = trim($descricao_breve_en);

    $descricao_longa_en = $_POST["descricao_longa_en"];
    $descricao_longa_en = trim($descricao_longa_en);

    // Dados português
    
    $nome_pt = $_POST["nome_pt"];
    $nome_pt = trim($nome_pt);
   
    $descricao_breve_pt = $_POST["descricao_breve_pt"];
    $descricao_breve_pt = trim($descricao_breve_pt);

    $descricao_longa_pt = $_POST["descricao_longa_pt"];
    $descricao_longa_pt = trim($descricao_longa_pt);

    // Dados espanhol

    $nome_es = $_POST["nome_es"];
    $nome_es = trim($nome_es);

    $descricao_breve_es = $_POST["descricao_breve_es"];
    $descricao_breve_es = trim($descricao_breve_es);

    $descricao_longa_es = $_POST["descricao_longa_es"];
    $descricao_longa_es = trim($descricao_longa_es);


    $ativo = $_POST["ativo"];
    $ativo = trim($ativo);
    

    $id_en = $id - 1;
    $id_es = $id + 1;

// Insert EN
$updateSQL = "UPDATE categoria SET nome = '$nome_en', descricao_breve = '$descricao_breve_en', descricao_longa = '$descricao_longa_en', ativo = '$ativo' WHERE idcategoria ='$id_en' AND ididioma_cat = '1'"; 

$Result = mysqli_query($soller, $updateSQL) or die(mysqli_error($soller));  

// Insert PT
$updateSQL = "UPDATE categoria SET nome = '$nome_pt', descricao_breve = '$descricao_breve_pt', descricao_longa = '$descricao_longa_pt', ativo = '$ativo' WHERE idcategoria ='$id' AND ididioma_cat = '2'"; 

$Result = mysqli_query($soller, $updateSQL) or die(mysqli_error($soller));  

// Insert ES
$updateSQL = "UPDATE categoria SET nome = '$nome_es', descricao_breve = '$descricao_breve_es', descricao_longa = '$descricao_longa_es', ativo = '$ativo' WHERE idcategoria ='$id_es' AND ididioma_cat = '3'"; 

$Result = mysqli_query($soller, $updateSQL) or die(mysqli_error($soller));  
header("Location: listar-categoria.php?editado=true");