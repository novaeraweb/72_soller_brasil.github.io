<?php
session_start();
require_once "conecta.php";
mysqli_select_db($soller, $database_omics);

$senhaAtual = $_POST['senhaatual'];
$senhaAtual = md5($senhaAtual);
$novasenha = $_POST['novasenha'];
$senhaMd5 = md5($novasenha);

$user_id = $_POST["user_id"];
$senha = $_SESSION['user_senha'];

if ($senhaAtual === $senha){
    $query = "UPDATE usuario SET senha = '$senhaMd5' WHERE idusuario='$user_id'";
    $resultado = mysqli_query($soller, $query) or die(mysqli_error($soller));  
    // $usuario = mysqli_fetch_assoc($resultado);
    $_SESSION["user_senha"] = $senhaMd5;
}  else {
    echo "Senha atual incorreta";
}

	

header("Location: home.php?alterado=true");