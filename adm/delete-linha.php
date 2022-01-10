<?php require_once('conecta.php');
  $id = $_GET['id'];

  $query = "SELECT * FROM linha WHERE idlinha = $id";
  $resQuery = mysqli_query($soller, $query) or die (mysqli_error($soller));
  $resultQuery = mysqli_fetch_assoc($soller, $resQuery);
  unlink('arquivos/'.$resultQuery['arquivo']);

  $deleteSQL = "DELETE FROM linha WHERE idlinha='$id'";
  $Result = mysqli_query($soller, $deleteSQL) or die(mysqli_error());
  header("Location: listar-linha.php?excluido=true");