<?php
session_start();
require_once "conecta.php";
mysqli_select_db($soller, $database_soller);

$senhaAtual = $_POST['senhaatual'];
$senhaAtual = md5($senhaAtual);
$novasenha = $_POST['novasenha'];
$senhaMd5 = md5($novasenha);

$user_id = $_SESSION["user_id"];
$senha = $_SESSION['user_senha'];

if ($senhaAtual === $senha){
    $query = "UPDATE usuario SET senha = '$senhaMd5' WHERE idusuario='$user_id'";
    $resultado = mysqli_query($soller, $query) or die(mysqli_error($soller));  
    // $usuario = mysqli_fetch_assoc($resultado);
    $_SESSION["user_senha"] = $senhaMd5;
    header("Location: home.php?alterado=true");
}  else if ($senhaAtual !== $senha) {
    header("Location: alterar-senha.php?alterado=false");
}

	
