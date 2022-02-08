<?php require_once('conecta.php');
  $id = $_GET['id'];

  $query = "SELECT * FROM banner WHERE idbanner = $id";
  $resQuery = mysqli_query($soller, $query) or die (mysqli_error($soller));
  $resultQuery = mysqli_fetch_assoc($soller, $resQuery);
  unlink('arquivos/'.$resultQuery['arquivo']);
  unlink('arquivos/'.$resultQuery['arquivo_mobile']);

  $deleteSQL = "DELETE FROM banner WHERE idbanner='$id'";
  $Result = mysqli_query($soller, $deleteSQL) or die(mysqli_error());
  header("Location: listar-banner.php?excluido=true");