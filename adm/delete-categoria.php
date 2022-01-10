<?php require_once('conecta.php');
  $id = $_GET['id'];
  $id2 = $_GET['id'] +1;
  $id3 = $_GET['id'] -1;

  $deleteSQL = "DELETE FROM categoria WHERE idcategoria='$id' OR idcategoria='$id2' OR idcategoria='$id3'";
  $Result = mysqli_query($soller, $deleteSQL) or die(mysqli_error());
  header("Location: listar-categoria.php?excluido=true");