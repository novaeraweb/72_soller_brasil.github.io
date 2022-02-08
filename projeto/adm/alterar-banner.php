<?php
require_once "conecta.php";
mysqli_select_db($soller, 'sollerbrasil');

    $id = $_POST["id"];
    $id = trim($id);

    $nome = $_POST["nome"];
    $nome = trim($nome);

    $local = $_POST["local"];
    $local = trim($local);

    $descricao = $_POST["descricao"];
    $descricao = trim($descricao);

    $ativo = $_POST["ativo"];
    $ativo = trim($ativo);
    

// Insert EN
$updateSQL = "UPDATE banner SET nome = '$nome', descricao = '$descricao', local = '$local',
ativo = '$ativo' WHERE idbanner ='$id' "; 
$Result = mysqli_query($soller, $updateSQL) or die(mysqli_error($soller));  
header("Location: listar-banner.php?editado=true");