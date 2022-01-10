<?php require_once('conecta.php');
  $id = $_GET['id'];
  $id2 = $_GET['id'] +1;
  $id3 = $_GET['id'] -1;

  $query = "SELECT * FROM colecao WHERE idcolecao = $id";
  $resQuery = mysqli_query($soller, $query) or die (mysqli_error($soller));
  $resultQuery = mysqli_fetch_assoc($soller, $resQuery);
  unlink('arquivos/'.$resultQuery['arquivo']);


  $deleteSQL = "DELETE FROM colecao WHERE idcolecao='$id' AND idcolecao='$id2' AND idcolecao='$id3'";
  $Result = mysqli_query($soller, $deleteSQL) or die(mysqli_error());
  header("Location: listar-colecao.php?excluido=true");