<?php require_once('conecta.php');
  $id = $_GET['id'];
  $deleteSQL = "DELETE FROM categoria WHERE idcategoria='$id'";
  $Result = mysqli_query($soller, $deleteSQL) or die(mysqli_error());
  header("Location: home.php?excluido=true");