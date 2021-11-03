<?php require_once('conecta.php');
  $id = $_GET['id'];
  $deleteSQL = "DELETE FROM produto WHERE idproduto='$id'";
  $Result = mysqli_query($soller, $deleteSQL) or die(mysqli_error());
  header("Location: home.php?excluido=true");